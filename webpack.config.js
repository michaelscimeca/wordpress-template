const path = require('path');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TerserPlugin = require("terser-webpack-plugin");

const cssDev = [
  MiniCssExtractPlugin.loader,
  {
    loader: 'css-loader',
    options: {
      importLoaders: 1
    }
  },
  {
    loader: 'postcss-loader',
    options: {
      postcssOptions: {
        plugins: [
          require('tailwindcss'),
          require('autoprefixer')
        ]
      }
    }
  },
  {
    loader: "sass-loader",
  }
]

const cssProd = [
  MiniCssExtractPlugin.loader,
  {
    loader: 'css-loader',
    options: {
      importLoaders: 1
    }
  },
  {
    loader: 'postcss-loader',
    options: {
      postcssOptions: {
        plugins: [
          require('tailwindcss'),
          require('autoprefixer')
        ]
      }
    }
  },
  {
    loader: "sass-loader",
  }
]

const devMode = process.env.NODE_ENV !== "production";
const cssConfig = devMode ? cssDev : cssProd;
const modeEnvironment = devMode ? 'development' : 'production';
const devToolsEnvironment = devMode ? 'source-map' : 'inline-source-map';
const watchEnvironment = devMode ? true : false;
const folderDir = devMode ? 'dev/js' : 'dist/js';

module.exports = {
  mode: modeEnvironment,
  devtool: devToolsEnvironment, //This option controls if and how source maps are generated.
  watch: watchEnvironment, // Webpack can watch files and recompile whenever they change
  entry: {
    bundle: path.resolve(__dirname, 'library/js/app.js'),
  },
  output: {
    path: path.resolve(__dirname, folderDir),
    filename: 'app.js',
    clean: true, /// Deletes old files that were generator
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "app.css",
      chunkFilename: "[id].css",
      ignoreOrder: false, // Enable to remove warnings about conflicting order
    }),
    new BrowserSyncPlugin({
      host: 'localhost',
      port: 3000,
      proxy: 'http://updatewordpress.local',
      files: [
        './../',
        './../api/**/*.php',
        './../api/*.php',
        './',
        '!./node_modules',
        '!./yarn-error.log',
        '!./package.json',
        '!./app.js.map'
      ],
    }, { reload: true, }),
  ],
  module: {
    rules: [
      {
        test: /\.(png|jpg|gif)$/i,
        use: [
          {
            loader: "url-loader",
            options: {
              limit: 8192,
            },
          },
        ],
      },
      {
        test: /\.(sa|sc|c)ss$/,
        use: cssConfig,
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env'],
          },
        },
      },
    ],
  },
  optimization: {
    minimize: true,
    minimizer: [
      // For webpack@5 you can use the `...` syntax to extend existing minimizers (i.e. `terser-webpack-plugin`), uncomment the next line
      `...`,
      new TerserPlugin({
        terserOptions: {
          format: {
            comments: false,
          },
        },
        extractComments: true,
        parallel: 4,
      }),
    ],
  },
}

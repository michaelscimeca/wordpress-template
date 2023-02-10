<footer class="js-ae" data-scroll-section>
  <div id="footer-top" data-scroll="" data-scroll-speed="-3" data-scroll-position="bottom" data-scroll-offset="-250%, 0%">
    <div class="row">
      <div class="start:w-full sm:w-4/12 column">
        <div id="footer-logo">
          <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
          viewBox="0 0 140 140.1" style="enable-background:new 0 0 140 140.1;" xml:space="preserve">
          <g transform="translate(0.000000,200.000000) scale(0.100000,-0.100000)">
            <path d="M522.3,1980.5c-184-48-354-183-440-347c-212-409,3-901,444-1013c373-96,759,133,854,506c15,57,20,111,20,206v128h-350h-350
            v-60v-60l273-2l272-3l-2-69c-8-221-170-424-395-493c-74-23-227-22-298,1c-188,63-313,188-376,376c-25,75-25,225,0,300
            c62,187,196,321,378,377c70,22,226,22,294,1s129-53,190-98l51-39l54,56l54,55l-45,39c-62,54-184,116-276,139
            C772.3,2006.5,622.3,2006.5,522.3,1980.5z"/>
            <path d="M585.3,1766.5c-233-57-397-303-357-538c55-317,391-495,677-358c144,69,235,192,270,368l7,32h-241h-241v-65v-64l141-3l141-3
            l-41-47c-24-27-66-59-99-75c-49-24-69-28-142-28s-93,4-142,28c-71,35-130,101-159,176c-28,73-23,185,10,249c32,62,92,124,148,152
            c41,21,62,25,143,25c99,0,153-17,205-66c21-19,22-18,75,36l54,55l-23,24c-32,34-127,83-196,101S655.3,1783.5,585.3,1766.5z"/>
          </g>
        </svg>

      </div>
    </div>
    <div class="start:w-full sm:w-8/12 column">
      <?php $args = array(
        'menu' => 'Footer Nav',
        'theme_location' => 'Footer Nav',
        'menu_class' => 'menu'
      );
      wp_nav_menu($args); ?>
    </div>
  </div>
</div>
<div id="footer-bottom" data-scroll="" data-scroll-speed="-5.5" data-scroll-position="bottom" data-scroll-offset="-100%, 0%">
  <div class="row">

    <div class="start:w-full md:w-6/12 column">
      <div id="bottom-footer-content">
        &copy;<?php echo date('Y'); ?> GoodGiant. All Rights reserved
        <div id="footer-icons">
          <a href="">
            <div class="icon">
              <i class="fab fa-facebook-f"></i>
            </div>
          </a>
          <a href="">
            <div class="icon">
              <i class="fab fa-instagram"></i>
            </div>
          </a>
          <a href="">
            <div class="icon">
              <i class="fab fa-twitter"></i>
            </div>
          </a>
          <a href="">
            <div class="icon">
              <i class="fab fa-linkedin"></i>
            </div>
          </a>
          <a href="">
            <div class="icon">
              <i class="fab fa-youtube"></i>
            </div>
          </a>
        </div>
      </div>
    </div>

    <div class="start:w-full md:w-6/12 column link-container">
      <a href="/privacy-policy">Privacy policy</a>
      <a href="/cookie-settings">Cookie settings</a>
      <a href="https://www.goodgiant.com/" target="_blank">Website by GoodGiant</a>
    </div>
  </div>
</div>
</footer>

</main> <!-- #app container -->

<?php get_template_part( 'template-parts/component/util/content', 'module-component'); ?>
</body>
<?php wp_footer(); ?>

<!-- <script
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDHwfZIFcW_UU6FtQIJHpnmGj7AD61Onw0"
defer
></script> -->
</html>

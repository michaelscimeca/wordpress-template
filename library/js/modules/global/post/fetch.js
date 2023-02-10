const Moment = require('moment');
module.exports = (elm) => {
  if(document.querySelector(elm)) {
    const mainContainer = document.querySelector('#js-fetch-post-api');
    const categoryButtonChoices = document.querySelectorAll('#js-button-category-choice li');
    const upComingButton = document.querySelectorAll('#js-upcoming-button li');
    const postContainer = document.querySelector('#js-post-container');
    let categoryFromPostType = [];
    let convert = []
    let categoryHasBeenChoosen = false;
    function convertCategory(ids,covert) {
      return ids.reduce((acc, val) => {
        for (key in convert) {
          if (convert.hasOwnProperty(key) && convert[key] == val) {
            acc.push(key);
          }
        }
        return acc
      }, []).sort((a, b) => (a.value < b.value) ? 1 : -1);
    }


    fetch('/wp-json/wp/v2/categories')
    .then((response) => response.text())
    .then((data) => {
      let categoryrestApiData = JSON.parse(data)
      categoryrestApiData.forEach((item, i) => categoryFromPostType.push({  id: item.id ,key: item.name  }));
      convert = categoryFromPostType.reduce((acc, cur) => ({ ...acc, [cur.key]: cur.id }), {});
    }).then(()=>{
      fetch('/wp-json/wp/v2/entertainment-post')
      .then((response) => response.text())
      .then((data) => {
        let restApiData = JSON.parse(data)
        let originalData = [];
        let dataChoosenResults = [];
        let postToBeShown = [];
        let sortedByDateArray = [];

        const template = function(data) {
          return `
          <a href="${data.link}">
          <article>
          <div class="category">${convertCategory(data.acf.categorys).join(' ')}</div>
          <h4>${data.title.rendered}</h4>
          </article>
          </a>
          `;
        }

        restApiData.forEach((data) => {
          originalData.push({
            status: data.status,
            id: data.id,
            slug: data.slug,
            link: data.link,
            title: data.title,
            acf: data.acf,
            start: data.acf.event_date.replace(' ', 'T')
          });
        });
        // how many post you want
        // originalData = originalData.slice(0,8);

        mainContainer.classList.add('loaded');

        originalData.forEach((item) => postContainer.innerHTML += template(item));

        upComingButton.forEach((item, i) => {
          item.addEventListener('click',(e)=>{
            postContainer.innerHTML = '';
            if(!e.target.classList.contains('active')) {
              e.target.classList.add('active')
              if(!categoryHasBeenChoosen) {
                sortedByDateArray = [...originalData];
              } else {
                sortedByDateArray = postToBeShown;
              }
              sortedByDateArray.sort((a, b) => {
                let date1 = new Moment(a.start);
                let date2 = new Moment(b.start)
                return date1.diff(date2, "minutes");
              })
              sortedByDateArray.forEach((item) => {
                postContainer.innerHTML += template(item)
              });
            } else {
              postContainer.innerHTML = '';
              e.target.classList.remove('active')
              if(!categoryHasBeenChoosen) {
                originalData.forEach((item) => postContainer.innerHTML += template(item));
              } else {
                sortedByDateArray.forEach((item) => postContainer.innerHTML += template(item));
              }
            }
          });
        });

        categoryButtonChoices.forEach((button) => {
          button.addEventListener('click',(e)=>{
            categoryButtonChoices.forEach((item, i) => item.classList.remove('active'));
            postContainer.innerHTML = '';
            dataChoosenResults = originalData;
            if(e.target.dataset.choice !== 'All') {
              postToBeShown = dataChoosenResults.filter((obj) => obj.acf.categorys.includes(parseInt(e.target.dataset.choice)));
              categoryHasBeenChoosen = true;
            }
            else {
              postToBeShown = originalData;
            }
            e.target.classList.add('active');
            postToBeShown.forEach((item) => postContainer.innerHTML += template(item));
          });
        });
      });
    });
  }
}

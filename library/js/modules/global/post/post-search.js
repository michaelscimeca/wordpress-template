module.exports = (elm) => {
  if (document.querySelector(elm)) {
    const body = document.querySelector('body');
    const getPathFromUrl = (url) => url.split("?")[0];
    const filterRecentListContainer = document.querySelector('#js-drop-down');
    const filterRecentBtn = document.querySelector('#js-drop-down');
    const filterRecentList = document.querySelectorAll('#js-recent-post li');
    const filterList = document.querySelectorAll('#js-filter-container li input[type="checkbox"]');
    const clearFilterBtn = document.querySelector('#js-clear-btn');
    const submitFilterList = document.querySelector('#js-submit-filter');

    filterRecentBtn.addEventListener('click',(e) => {
      filterRecentListContainer.classList.toggle('active')
      body.classList.toggle('overflow-hidden');
    });

    filterRecentList.forEach(filter => filter.addEventListener('click',(e) => {
      filterRecentListContainer.innerHTML = e.target.innerHTML;
      let searchParams = new URLSearchParams(window.location.search);
      let url = e.target.innerHTML.replace(' days', '');
      searchParams.set("recent", url);
      let newRelativePathQuery = window.location.pathname + '?' + searchParams.toString();
      history.pushState(null, '', newRelativePathQuery);
      window.location = newRelativePathQuery;
    }));


    clearFilterBtn.addEventListener('click', (e) => {
      e.preventDefault();
      window.history.pushState({}, '', getPathFromUrl(window.location.href));
      filterList.forEach(filter => filter.checked = false);
      window.location.reload()
    });

    // Check to see what what the url categoryies are if any and apply check marks to those checkboxes
    let qs = (function(a) {
      if (a == "") return {};
      let b = {};
      for (let i = 0; i < a.length; ++i)
      {
        let p=a[i].split('=', 2);
        if (p.length == 1)
        b[p[0]] = "";
        else
        b[p[0]] = decodeURIComponent(p[1].replace(/\+/g, " "));
      }
      return b;
    })(window.location.search.substr(1).split('&'));


    filterList.forEach(filter => {
      if (qs['category']) {
        const cats = qs['category'].split(',');
        for (let i = 0; i < cats.length; i++) {
          if (cats[i] === filter.defaultValue) {
            filter.checked = true
          }
        }
      }
    })


    submitFilterList.addEventListener('click', (e) => {
      e.preventDefault();
      const checkedItems = [];
      filterList.forEach(filter => {
        if (filter.checked) checkedItems.push(filter.value);
      });
      const query = checkedItems.length > 0 ? `?category=${checkedItems.toString()}` : '';
      const newRelativePathQuery = window.location.pathname + query;
      window.location = newRelativePathQuery;
    });
  }
};

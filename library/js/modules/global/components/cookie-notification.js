export default function cookieNotification(elm) {
  if (document.querySelector(elm)) {
    const moduleContainer = document.querySelector('#js-cookie-notification');
    const moduleCloseBtn = moduleContainer.querySelectorAll('#js-cookie-notification .js-btn');
    const storageKey = 'gg-cookie-notification';

    const expiredValueString = localStorage.getItem(storageKey);
    const expiredValue = JSON.parse(expiredValueString);

    // Check if the value exists
    if(expiredValue === null) {
      moduleContainer.classList.add('active');
    } else {
      if (expiredValue.expiration < Date.now()) {
        moduleContainer.classList.add('active');
      }
    }

    moduleCloseBtn.forEach((item) => {
      item.addEventListener('click', (e) => {
        const now = Date.now();
        const days = 1;
        // Set the new expiration time to be 24 hours from now
        const newExpiration = now + ( days *  (24 * 60 * 60 * 1000));
        // Update the object with the new value and expiration time
        const updatedExpiredValue = {
          value: 'Hide Cookie Notifcation',
          expiration: newExpiration
        };

        // Store the updated object in local storage
        localStorage.setItem(storageKey, JSON.stringify(updatedExpiredValue));
        moduleContainer.classList.remove('active');
      });
    });
  }
}

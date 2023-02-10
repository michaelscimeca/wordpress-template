export default function noteNotification(elm) {
  if (document.querySelector(elm)) {
    const moduleContainer = document.querySelector('#js-notification');
    const moduleCloseBtn = moduleContainer.querySelector('#js-close-btn');
    const storageKey = 'gg-note-notification';

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

    moduleCloseBtn.addEventListener('click', (e) => {
      const now = Date.now();
      const days = 1;
      // Set the new expiration time to be 24 hours from now
      const newExpiration = now + ( days *  (24 * 60 * 60 * 1000));
      // Update the object with the new value and expiration time
      const updatedExpiredValue = {
        value: 'Hide Note Notifcation',
        expiration: newExpiration
      };

      // Store the updated object in local storage
      localStorage.setItem(storageKey, JSON.stringify(updatedExpiredValue));
      moduleContainer.classList.remove('active');
    });
  }
}

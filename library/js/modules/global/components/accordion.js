export default (elm) => {
  if (document.querySelector(elm)) {
    const accordionElements = [...document.querySelectorAll('#js-accordion-list-container li')];
    const answerContainers = [...document.querySelectorAll('#js-accordion-list-container .js-answer-container')];

    accordionElements.forEach((accordion) => {
      accordion.addEventListener('click', (e) => {
        accordionElements.forEach((item) => item.classList.remove('active'));
        answerContainers.forEach((answer) => answer.style.maxHeight = 0);

        e.currentTarget.classList.toggle('active');
        const container = e.currentTarget.querySelector('.js-answer-container');
        container.style.maxHeight = container.scrollHeight + 'px';
      });
    });
  }
}

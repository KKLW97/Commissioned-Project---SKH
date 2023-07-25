class FrontPage {
    constructor () {
        const slider = document.querySelector('.slider');

        const leftArrow = document.querySelector('.left');
        const rightArrow = document.querySelector('.right');

        rightArrow.addEventListener('click', () => {
            slider.style.transform = 'translate(-25)'
        })




    }
}

export default FrontPage;
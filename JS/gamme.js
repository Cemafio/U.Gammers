const goTo = document.querySelector('.goTo ');
const back = document.querySelector('.back i')
const containGame = document.querySelector('.containGame');
let count = 0;


// Animation goTo
goTo.addEventListener('click',function () {
    
    // alert('Click');

    count = count - 247
    containGame.style.transform = `translateX(${count}px)`;
    containGame.style.transition = '0.5s';
    if(count != 0){
        back.style.color = 'white';
    }

})
back.addEventListener('click',function () {
    // alert('Click');
    count = count + 247
    containGame.style.transform = `translateX(${count}px)`;
    containGame.style.transition = '0.5s';
    // if(count != 0){

    //     back.style.color = 'white';
    // }

})

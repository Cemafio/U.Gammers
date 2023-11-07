const filtre = document.querySelector('.btn-choix');
const deroul = document.querySelector('.deroul');
const back = document.querySelector('.back2');

deroul.style.transition = '0.5s';

filtre.addEventListener('click',function(){
    // alert('Il y a click !')
    filtre.classList.toggle('couleur')
    deroul.classList.toggle('aparition')
})

back.addEventListener('click',function(){
    window.history.back();
})
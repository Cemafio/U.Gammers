const filtre = document.querySelector('.btn-choix');
const deroul = document.querySelector('.deroul');

deroul.style.transition = '0.5s';

filtre.addEventListener('click',function(){
    // alert('Il y a click !')
    filtre.classList.toggle('couleur')
    deroul.classList.toggle('aparition')
})
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

// filtrge d'enregistreent
const cvideo = document.querySelector('.cVideo');
const cphoto = document.querySelector('.cPhoto');
const cadreEnreg = document.querySelectorAll('.cadreEnreg');
const type = document.querySelectorAll('.type');

cvideo.addEventListener('click', ()=>{
    // alert('FILTRER LES VIDEO');
    for(let i=0 ; i<cadreEnreg.length; i++){
        let type = cadreEnreg[i].childNodes[3].children[1].textContent;
        // console.log(type);

        if(type=='photo/text'){
            cadreEnreg[i].style.display='none';
        }else{
            cadreEnreg[i].style.display='flex';
        }
    }
})
cphoto.addEventListener('click', ()=>{
    // alert('FILTRER LES photo');
    for(let i=0 ; i<cadreEnreg.length; i++){
        let type = cadreEnreg[i].childNodes[3].children[1].textContent;
        // console.log(type);

        if(type=='video'){
            cadreEnreg[i].style.display='none';
        }else{
            cadreEnreg[i].style.display='flex';
        }
    }
})
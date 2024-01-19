const  btnX = document.querySelector('.btnX');
const formulaireP = document.querySelector('.formulaireP');
const btn0 = document.querySelectorAll('.btn0');

// Action enregister
const enreg= document.querySelectorAll('.enreg');
const form = document.querySelectorAll('.confirm');

for(let i=0; i<enreg.length; i++){
    enreg[i].addEventListener('click', ()=>{
        // alert('Click');
        form[i].classList.toggle('apparition');
    });
}


btnX.addEventListener('click',function () {
    // console.log('Click detecter :)');
    formulaireP.style.visibility = "hidden";
})

for(let i=0; i<btn0.length ;i++){

    btn0[i].addEventListener('click',function () {
        // alert('click detecter')
        formulaireP.style.visibility = "visible";
    })
    
}
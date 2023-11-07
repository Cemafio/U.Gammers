let btn_ret = document.querySelector('.retour');
let li = document.querySelectorAll('.nav-list');
let a = document.querySelectorAll('.nav-link');
let indication = document.querySelector('.indication');
let textIndic = document.querySelector('.textIndic');
let tabExtract = textIndic.textContent.split(' ');
let btnAjout = document.querySelector('.btnAjout');
let tabAmie = document.querySelectorAll('.amie');


btn_ret.addEventListener('click',()=>{
    history.back();
})

for(let i=0;i<li.length;i++){
    li[i].addEventListener('click',()=>{
        let fusion;
        switch(i){
            case 0:
                li[0].classList.add('nav-list0');
                a[0].classList.add('nav-link0');

                //Ajout de changement d'ecrant
                tabExtract[6] = "ami(e)s,";
                fusion = tabExtract.join(' ');
                textIndic.style.display="block";

                textIndic.textContent = fusion;
                btnAjout.style.display = "inline";
                
                // suppression des élements de suggestion
                for(let i=0; i<tabAmie.length ;i++){
                    tabAmie[i].style.visibility = "hidden";
                }
               
                li[1].classList.remove('nav-list0');
                a[1].classList.remove('nav-link0');

                li[2].classList.remove('nav-list0');
                a[2].classList.remove('nav-link0');
            break;
            case 1:
                li[1].classList.add('nav-list0');
                a[1].classList.add('nav-link0');

                //Ajout de changement d'ecrant
                tabExtract[6] = "invitations,";
                textIndic.style.display = "block";
                fusion = tabExtract.join(' ');

                textIndic.textContent = fusion;
                btnAjout.style.display = "none";
                // suppression des élements de suggestion
                for(let i=0; i<tabAmie.length ;i++){
                    tabAmie[i].style.visibility = "hidden";
                }


                li[0].classList.remove('nav-list0');
                a[0].classList.remove('nav-link0');

                li[2].classList.remove('nav-list0');
                a[2].classList.remove('nav-link0');
            break;
            case 2:
                li[2].classList.add('nav-list0');
                a[2].classList.add('nav-link0');
                
                textIndic.style.display = "none";
                btnAjout.style.display = "none";
                // alert(tabAmie.length)
                for(let i=0; i<tabAmie.length ;i++){
                    tabAmie[i].style.visibility = "visible";
                    
                }

                li[0].classList.remove('nav-list0');
                a[0].classList.remove('nav-link0');

                li[1].classList.remove('nav-list0');
                a[1].classList.remove('nav-link0');
            break;

            default :
            break;
        }
    });
}

// ENvoy de notre message
const inptChat= document.querySelector('#Ichat');
const boitMess = document.querySelector('.boitMess')


console.log(inptChat.placeholder)
inptChat.addEventListener('focus',()=>{
    // alert("Ecriture de message en cours");

    inptChat.style.width = '30em';
    inptChat.style.height = '3em';
    inptChat.style.marginRight = '-20em';
    // inptChat.style.paddingTop = '9px';
    inptChat.placeholder = 'Ecrivez un message'
    // inptChat.style.borderColor = '#5bb0d8';
    inptChat.style.transition = '0.5s';
})

inptChat.addEventListener('blur',()=>{
    // alert("Ecriture de message en cours");

    inptChat.style.width = '25em';
    inptChat.style.height = '2.5em';
    inptChat.style.marginRight = '-25em';
    // inptChat.style.paddingTop = '6px';
    inptChat.placeholder = 'Message'

    // inptChat.style.borderColor = 'black';

    inptChat.style.transition = '0.5s';
})
window.addEventListener('keypress',(e)=>{
    if(e.key === "Enter"){
        if(inptChat.value != ""){
            let divListMess = document.createElement('div');
            let divMess = document.createElement('div');
            let p = document.createElement('p'); 

            divListMess.classList.add('listMess');
            divMess.classList.add('mess');
            p.classList.add('messEnv');
            p.textContent = inptChat.value;

            boitMess.appendChild(divListMess);
            divListMess.appendChild(divMess);
            divMess.appendChild(p)
            
            boitMess.scrollTop += 100;

            inptChat.value = '';
        }
        // alert('Vous avez tapez Enter')
            
           
    }  

})

console.log(window.scroll);


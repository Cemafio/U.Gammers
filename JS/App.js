// Animation storie
const storie = document.querySelectorAll('.storie')
const str2 = document.querySelector('.storiRot2');
const goTo = document.querySelector('.goTo');
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

for(let i=0;;i++){

    storie[i].addEventListener('click',()=>{

        switch (i){
            case 0:

                storie[0].classList.remove('storiRot0');
                storie[0].classList.add('centrage')
                
                storie[0].style.zIndex = '3';
                storie[0].style.left = '5.8em';

                storie[1].classList.remove('centrage');
                storie[1].classList.add('Ideplacement')
                storie[1].style.width='19em';
                storie[1].style.height='86%';
                storie[1].style.zIndex = '';

                storie[2].style.left = '16.6em';
                storie[2].style.width='19em';
                storie[2].style.height='80%';

                storie[3].classList.add('invisible');
                
                break;

            case 1:
                storie[0].classList.toggle('Ideplacement3')

                storie[4].classList.add('invisible'); 

                    
                storie[1].classList.remove('storiRot1');
                storie[1].classList.add('centrage')
                storie[1].style.width='20em';
                storie[1].style.height='94%';
                storie[1].style.zIndex = '';

                storie[2].classList.add('Ideplacement');
                storie[2].style.height ='86%';
                storie[2].style.width = '19em';
                storie[2].style.zIndex='1';

    
                storie[3].classList.add('Ideplacement2');
                storie[3].style.zIndex = '0'
                storie[3].style.height ='80%';
                storie[3].style.width = '19em';
                
                break;
            
            case 3:
                // storie[4].classList.toggle('deplacement')
                storie[4].style.transition = "100ms"
                storie[4].style.right='5em';
                storie[4].style.height ='86%';
                storie[4].style.width = '19em';
                    
                storie[3].classList.remove('storiRot2');
                storie[3].classList.toggle('centrage')
        
                storie[2].classList.toggle('deplacement');
                storie[2].style.height ='86%';
                storie[2].style.width = '19em';
    
                storie[1].style.left='1em';
                storie[1].style.height='80%';
    
                storie[0].classList.toggle('invisible'); 
    
                storie[3].style.width='20em';
                storie[3].style.height='94%';
                storie[3].style.transform='rotate(0deg)';
                storie[3].style.zIndex = '2';
                break;

            case 4:
                storie[1].classList.toggle('invisible'); 

                // storie[2].style.left = '10em';
                
                storie[2].classList.add('deplacement2');
                storie[2].style.height = '80%';
                storie[2].style.width = '19em';        
                

                storie[3].classList.remove('centrage');
                storie[3].classList.add('deplacement3');
                storie[3].style.height = '86%'
                storie[3].style.width = '19em';    
                
                storie[4].classList.remove('storiRot3');
                storie[4].classList.add('storiM');
                storie[4].style.width = '';
                storie[4].style.height=''
                storie[4].style.right=''
                break;
        }
    })
    
}


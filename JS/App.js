// Animation storie
const storie = document.querySelectorAll('.storie')
const str2 = document.querySelector('.storiRot2');
// const goTo = document.querySelector('.goTo ');
// const back = document.querySelector('.back i')
// const containGame = document.querySelector('.containGame');
// let count = 0;

const Ifile = document.querySelector('#IPhoto');
const Ilegend = document.querySelector('.Ilegend');
const sousForm = document.querySelector('.sousForme');
const textarea = document.querySelector('#Ilegend');

const backG = document.querySelectorAll('.back');
const fusFont = document.querySelectorAll('.fusFont');

const cfont = document.querySelector('.font').firstChild.nextSibling;
let position = 0;

const btn2 = document.querySelector('.btn2');
const cadrePub = document.querySelector('.cadrePub');
const liker = document.querySelectorAll('.liker');
const likerI = document.querySelector('.liker i');

// progress barre pour notre video
// const bar = document.querySelector('.bar');
// const progressBar = document.querySelector('.progressBar');
// const source = document.querySelector('.source');

// let i=2;
// let x = 2;

// setInterval(()=>{
//     i++;
//     progressBar.style.width = `${i}%`;

//     if(i=== 100){    
//         // source.src= "video/video"+ x+".mp4";
//         source.src = `../video/video${x}.mp4`;
//         source.play();  

//         x++;

//         if(x == 4){
//             x = 1;
//         }
//         i-=100;
//     }
    
// }, 100);

// console.log(liker.length);

for(let i = 0; i<liker.length ; i++){
    liker[i].addEventListener('click', function () {
        // alert('Click detecter');
        likerI.classList.toggle('pouceBleu');
    
    
    })
}


btn2.addEventListener('click',function () {
        

    let div = document.createElement('div');
    let containProfil = document.createElement('div');
    let profilPropri = document.createElement('div');
    let image = document.createElement('img');
    let name = document.createElement('p');
    let div2 = document.createElement('div');
    let P2 = document.createElement('p')
    let reaction = document.createElement('div')
    let like = document.createElement('div')
    let i1 = document.createElement('i')
    let favorie = document.createElement('div')
    let i2 = document.createElement('i')
    

    div.className = "firstPub";

    if(Ilegend.classList.length > 1){
        div.classList.add(Ilegend.classList[1]);
    }
    

    containProfil.className = "containProfil";
    profilPropri.className = "profilPropri";
    name.className = "textPersone"
    name.textContent = "User Name"
    div2.className = "containImgOrTxt"
    P2.className = "textPub"
    P2.textContent = textarea.value
    P2.classList.add('centrage2')
    reaction.className = "reaction2"
    like.className = 'liker'
    i1.className = 'fas fa-thumbs-up'
    favorie.className = 'favori'
    i2.className = 'fas fa-plus'

    
    cadrePub.appendChild(div);
    div.appendChild(containProfil);
    containProfil.appendChild(profilPropri);
    profilPropri.appendChild(image);
    containProfil.appendChild(name)
    div.appendChild(div2)
    div2.appendChild(P2)
    div.appendChild(reaction)
    reaction.appendChild(like)
    reaction.appendChild(favorie)
    like.appendChild(i1)
    favorie.appendChild(i2)
        
    like.addEventListener('click', function () {
        // alert('Click detecter');
        i1.classList.toggle('pouceBleu');
    })

    formulaireP.style.visibility = "hidden";   
})

for(let i=0;i<backG.length;i++){
    backG[i].addEventListener('click',function () {
        if(i=== 1){
            // cFontB[i-1].classList.remove('cFontB');
            // cFontB[i-1].classList.add('cFont');

            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${position}`);

                    position = c;
                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font1')
            textarea.style.color = 'white'
            // alert(position);

        }else if(i === 2){

            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font2')
            textarea.style.color = 'white'
            
        }else if(i === 3){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s';

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font3')
            textarea.style.color = 'white'

        }else if(i === 4){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font4')
            textarea.style.color = 'white'

        }else if(i === 5){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');
            
            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font5')
            textarea.style.color = 'white'

        }else if(i === 6){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font6')
            textarea.style.color = 'white'
            
        }else if(i === 7){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font7')
            textarea.style.color = 'white'

        }else if(i === 8){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font8');
            textarea.style.color = 'white'

        }else if(i === 9){
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[i].classList.remove('cFontB');
            fusFont[i].classList.add('cFont');
            fusFont[i].style.transition='0.2s'

            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font9')
            textarea.style.color = 'white'

        }else{
            for(let c = 0; c<fusFont.length ;c++){
                if(fusFont[c].classList[0]=== 'cFont' || fusFont[c].classList[1] === 'cFont'){
                    // alert(`le class cFont est sur index : ${c}`);

                    position = c;

                }
            }

            fusFont[position].classList.remove('cFont');
            fusFont[position].classList.add('cFontB');

            fusFont[0].classList.remove('cFontB');
            fusFont[0].classList.add('cFont');
            fusFont[0].style.transition='0.2s'

            // Ilegend.style.backgroundColor = '#f0f0f0'
            Ilegend.classList.remove(Ilegend.classList[1])
            Ilegend.classList.add('font0')
            textarea.style.color = 'black'


        }
    })
    
}


// console.log(Ifile);

for(let i=0; i<btn0.length; i++){

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

            default:
                alert('Il y a quelque cose qui cloce');
            break;
        }
    })
    
}

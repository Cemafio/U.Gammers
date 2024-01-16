const thumb = document.querySelectorAll('.iLike');
const nbrLike = document.querySelectorAll('.nbrLike');
var tmp= false;

for(let i=0; i<thumb.length; i++){
    let nbrClass;

    setInterval(()=>{
        nbrClass = thumb[i].classList.length;
    }, 200);

    thumb[i].addEventListener('click', (e)=>{
        thumb[i].classList.toggle('pouceBleu');

        if(nbrClass==3){
            let count = parseInt(nbrLike[i].textContent)-1;

            nbrLike[i].textContent = count;
        }else{
            let count = parseInt(nbrLike[i].textContent)+1;

            nbrLike[i].textContent = count;
        }  
        
        

        e.preventDefault();
    })

    
    

    
    
    // setInterval((e)=>{
    //     let clas = thumb[i].classList;
        
    //     for(let c=0; c<clas.length; c++){
    //         if(clas[c] == 'pouceBleu'){

    //             // alert(tmp);
                

    //         }else{

    //         }
        // }
        
    // },);

    
}
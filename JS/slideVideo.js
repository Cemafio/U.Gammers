// progress barre pour notre video
const bar = document.querySelector('.bar');
const progressBar = document.querySelector('.progressBar');
const source = document.querySelector('.source');

let i=2;
let x = 2;

setInterval(()=>{
    i++;
    progressBar.style.width = `${i}%`;

    if(i=== 100){    
        // source.src= "video/video"+ x+".mp4";
        source.src = `../video/video${x}.mp4`;
        source.play();  

        x++;

        if(x == 4){
            x = 1;
        }
        i-=100;
    }
    
}, 860);
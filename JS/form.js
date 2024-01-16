const close  = document.querySelector('.close');
const form = document.querySelector('.pubVideo');
const btn0= document.querySelector('.btnVid');
const poster= document.querySelector('#Ifile1');
const cadrePoster= document.querySelector('.poster');
const chose= document.querySelector('.chose');
const img = document.querySelector('.img1')

const poster2= document.querySelector('#Ifile2');
const linkVideo = document.querySelector('.linkVideo');
const icon = document.querySelector('.verrif i');




close.addEventListener('click', ()=>{
    form.style.visibility = 'hidden';
})

btn0.addEventListener('click', ()=>{
    alert('click')
    form.style.visibility = 'visible';
    img.src = `../img/`;
})
chose.addEventListener('click', ()=>{
    setInterval(()=>{
        let photo = poster.value.split('fakepath')

        if(photo[1]!=''){
        img.src = `../img/${photo[1].slice(1)}`;
        }
    }, 100);
})
linkVideo.addEventListener('click', ()=>{
    setInterval(()=>{
        let link = poster2.value.split('fakepath')

        if(link[1]!=''){
            icon.style.display = 'block';
        }
    }, 100);
})
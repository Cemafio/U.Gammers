const sub = document.querySelector(".btn-sub");
const input = document.querySelectorAll("input");
const btnPlus = document.querySelector(".btn-plus");
const box1_2 = document.querySelector(".box1-2");
const btnQuit = document.querySelector('.btn-quit');
const back2 = document.querySelector('.back2');

sub.addEventListener("click",action);
function action(e){
    if(input[0].value ==="" || input[1].value==="" || input[2].value===""){
        alert("Vous n'avez pas repli le formulaire correctement");
        

        
    }else if(input[0].value !="" || input[1].value!="" || input[2].value!=""){
        // alert('Vous allez etre rediriger vers lecrant acceuil')
        window.open('Acceuil.html',"_Grap");
        
    }
    
    
      
    
        
   
   
}

btnPlus.addEventListener("click",ajoutnvl);
function ajoutnvl(){
    let div = document.createElement("div");
    let divPhoto = document.createElement("div");
    let pseudo = document.createElement("p")
    let img = document.createElement("img");
    let btnX = document.createElement("button");
   
    div.className = "carte";
    divPhoto.className = "photo";
    pseudo.className = "titre-bas"
    pseudo.style.color = "black"
    pseudo.textContent = input[0].value;
    img.src = "img/Cesar.jpg"
    img.className = "photo";
    btnX.className = "btnX" 
    btnX.innerHTML = "X"

    box1_2.appendChild(div);
    div.appendChild(divPhoto);
    div.appendChild(pseudo);
    divPhoto.appendChild(img);
    divPhoto.appendChild(btnX);

    btnX.addEventListener("click",(e)=>{
        div.style.display = "none";
        e.stopPropagation();
    });

    div.addEventListener('click',()=>{
        back2.style.display = "block"
    });
}

btnQuit.addEventListener('click',()=>{
    back2.style.display = 'none';
})

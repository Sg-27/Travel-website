let menu= document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

window.onload = function(){
    menu.onclick = () =>{
        menu.classList.toggle('fa-times');
        navbar.classList.toggle('active');
    }
};


    menu.onclick = () =>{
        menu.classList.remove('fa-times');
        navbar.classList.remove('active');
    };




let loadMoreBtn = document.querySelector('.packages .load-more .bn');
let currentItem=3;

loadMoreBtn.onclick = () =>{
    let boxes = [...document.querySelectorAll('.packages .box-container .box')];
    for( var i=currentItem;i< currentItem+3;i++)
    {
        boxes[i].style.display ='inline-block';
    }
    currentItem+=3;
    if(currentItem>=boxes.length){
        loadMoreBtn.style.display ='none';
    }
} 


function calculate(){
    var f2=4;
    var f1=6;
    var f1 = document.getElementById("guests_no").value;
    if(document.getElementById("places").value==="intl")
    f2= 80000;
     else
     f2=25000;
    
    var rest=f1*f2;
    
    document.getElementById("result").innerHTML="Total Cost (Approximate) of Travel will be Rs."+rest;

}
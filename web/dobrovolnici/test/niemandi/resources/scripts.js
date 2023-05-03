/*var splashScreen = document.querySelector('.splash');
function hideSplash(){
    setTimeout(()=>{
        splashScreen.style.transform = "translateY(-100%)";
    },1500)
    setTimeout(()=>{
        splashScreen.remove()
    },2100)
}
splashScreen.addEventListener('click',()=>{
    splashScreen.style.transform = "translateY(-100%)";
    setTimeout(()=>{
        splashScreen.remove();
    },610)
});*/

function setActiveSection(){
    document.querySelector("a[href=" + CSS.escape(window.location.href) + "]").parentElement.classList.add('active-link');
}



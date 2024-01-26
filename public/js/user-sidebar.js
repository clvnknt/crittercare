let userBtn = document.querySelector('#userBtn'); 
let userSidebar = document.querySelector('.userSidebar'); 

userBtn.onclick = function () {
    userSidebar.classList.toggle('active'); 
}
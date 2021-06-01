$(document).ready(function () {
    console.log("Hello from account.js");

    btnTheme = document.getElementById('themeBtn');
    //console.log(theme);
   
    btnTheme.addEventListener('click', () => {
        console.log("Clicked");
        btnTheme.classList.toggle("themeBox");
    });
});
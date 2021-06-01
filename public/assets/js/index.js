/*
    index.js - Animations for the index page.
    Maxence Buisson for Philentropy (https://philentropy.org)
    weltrusten@philentropy.org
*/

$(document).ready(() => {
    console.log("Hello my friend !!!");
    // **** NAVBAR ANIMATIONS ****
    navItem1 = document.getElementById("navli-1");
    navItem2 = document.getElementById("navli-2");
    navItem3 = document.getElementById("navli-3");
    navItem4 = document.getElementById("navli-4");
    navItem5 = document.getElementById("navli-5");

    //console.log(navItem);
    setTimeout(() => {
        console.log("step 1");
        navItem1.style.opacity = 1;
        setTimeout(() => {
            console.log("step 2");
            if (navItem2) {
                navItem2.style.opacity = 1;
            } else {
                console.log("continue...");
            }
            setTimeout(() => {
                console.log("step 3");
                if (navItem3) {
                    navItem3.style.opacity = 1;
                } else  {
                    console.log("continue...");
                }
                setTimeout(() => {
                    console.log("step 4");
                    if(navItem4) {
                        navItem4.style.opacity = 1;
                    } else {
                        console.log("continue...");
                    }
                    setTimeout(() => {
                        console.log("step 5");
                        if(navItem5) {
                            navItem5.style.opacity = 1;
                        } else {
                            console.log("continue...");
                        }
                    }, 100);
                }, 100);
            }, 100);
        }, 100);
    }, 100);

    // **** CHEATSHEET BUTTON **** 
    btn = document.getElementById('espBtn');
    //console.log(btn);
    // Show button by increasing opacity
    //btn.style.opacity = 0;
    setTimeout(() => {
        console.log("inside timeout");
       
        if(btn) {
            btn.style.opacity = 1;
        } else {
            console.log("continue");
        }
    }, 1000);   
});
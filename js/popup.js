// Contact popup
let icon_contact = document.querySelector("#send_message");
let popup_contact = document.querySelector(".contact-popup");
let exit_contact = document.querySelector("#contact_x");

let opened_contact = false;

icon_contact.addEventListener("click",function(){
    if(opened_contact == false)
    {
        popup_contact.style.display = "block";
        opened_contact = true;
    }
    else
    {
        popup_contact.style.display = "none";
        opened_contact = false;
    }
});

exit_contact.addEventListener("click", function(){
    popup_contact.style.display = "none";
    opened_contact = false;
});


//Project1 popup
let button_project1 = document.querySelector("#project1");
let popup_project1 = document.querySelector("#project1-popup");
let exit_project1 = document.querySelector("#project1_x");

let opened_project1 = false;

button_project1.addEventListener("click",function(){
    if(opened_project1 == false)
    {
        popup_project1.style.display="block";
        opened_project1 = true;
    }
    else
    {
        popup_project1.style.display="none";
        opened_project1 = false;
    }
});

exit_project1.addEventListener("click", function(){
    popup_project1.style.display = "none";
    opened_project1 = false;
});

//Project2 popup
let button_project2 = document.querySelector("#project2");
let popup_project2 = document.querySelector("#project2-popup");
let exit_project2 = document.querySelector("#project2_x");

let opened_project2 = false;

button_project2.addEventListener("click",function(){
    if(opened_project2 == false)
    {
        popup_project2.style.display="block";
        opened_project2 = true;
    }
    else
    {
        popup_project2.style.display="none";
        opened_project2 = false;
    }
});

exit_project2.addEventListener("click", function(){
    popup_project2.style.display = "none";
    opened_project2 = false;
});

// Project3 popup
let button_project3 = document.querySelector("#project3");
let popup_project3 = document.querySelector("#project3-popup");
let exit_project3 = document.querySelector("#project3_x");

let opened_project3 = false;

button_project3.addEventListener("click",function(){
    if(opened_project3 == false)
    {
        popup_project3.style.display="block";
        opened_project3 = true;
    }
    else
    {
        popup_project3.style.display="none";
        opened_project3 = false;
    }
});

exit_project3.addEventListener("click", function(){
    popup_project3.style.display = "none";
    opened_project3 = false;
});


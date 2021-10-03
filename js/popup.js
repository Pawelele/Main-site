let icon = document.querySelector("#send_message");
let popup = document.querySelector(".contact-popup");
let exit = document.querySelector("#x");

let opened = false;

icon.addEventListener("click",function(){
    if(opened == false)
    {
        popup.style.display = "block";
        opened = true;
    }
    else
    {
        popup.style.display = "none";
        opened = false;
    }
});

exit.addEventListener("click", function(){
    popup.style.display = "none";
    opened = false;
});
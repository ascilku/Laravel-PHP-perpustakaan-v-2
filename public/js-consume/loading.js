let fadeTerget = document.querySelector(".loading");

function show_loading(){
    fadeTerget.style.display = "block";
    fadeTerget.style.opacity = 1;
}

function hide_loading(){
    fadeTerget.style.display = "none"
}

function submite(){
    show_loading()
}
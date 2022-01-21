// require('./bootstrap');

window.onscroll = function() {
    fixContent();
}

let div = document.getElementById("fixable");

let fixed = div.offsetTop;

function fixContent() {
    if (window.pageYOffset > fixed) {
        div.classList.add("fixed");
    } else {
        div.classList.remove("fixed");
    }
}





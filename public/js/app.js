require('./bootstrap');

function toggle(id) {
    let state = document.getElementById(id).style.display;

    if (state == 'block') {
        document.getElementById(id).style.display = 'none';
    } else {
        document.getElementById(id).style.display = 'block'
    }
}

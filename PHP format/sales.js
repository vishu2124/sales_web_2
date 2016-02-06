function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

function bigimg(x) {
    x.style.width = "50%";
    x.style.height = "35%";
}

function normalimg(x) {
    x.style.width = "45%";
    x.style.height = "35%";
}
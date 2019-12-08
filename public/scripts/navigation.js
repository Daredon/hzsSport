const vh = v =>
    (v / 100) *
    Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
const vw = v =>
    (v / 100) *
    Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
const rem = num =>
    num * parseFloat(getComputedStyle(document.documentElement).fontSize);

let nav;
let burger;
let topButton;
let active = 0;

function load() {
    topButton = document.getElementById("top");
    burger = document.getElementById("burger");
    nav = document.getElementById("nav");
    nav.style.setProperty("--nav-opacity", "0");
    console.log("da");
    nav.style.width = rem(4) + "px";
    burger.style.opacity = "1";
}

function burgerToggle() {
    if (!burger.classList.contains("active")) {
        burger.classList.add("active");
        nav.style.transition = "all .2s ease-in";
        nav.style.width = rem(20) + "px";
        nav.style.setProperty("--nav-opacity", "1");
        burger.style.opacity = "1";
    } else if (burger.classList.contains("active")) {
        burger.classList.remove("active");
        nav.style.transition = "all .2s ease-in";
        nav.style.width = rem(4) + "px";
        nav.style.setProperty("--nav-opacity", 0);
        burger.style.opacity = "0";
        burger.style.opacity = "1";
    }
}

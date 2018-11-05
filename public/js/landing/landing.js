let doc = document;
let right = doc.querySelector(".right");
let left = doc.querySelector(".left");
let container = doc.querySelector(".landingPage");

left.addEventListener("mouseenter", () => {
    container.classList.add("hover-left");
});
left.addEventListener("mouseleave", () => {
    container.classList.remove("hover-left");
});
right.addEventListener("mouseenter", () => {
    container.classList.add("hover-right");
});
right.addEventListener("mouseleave", () => {
    container.classList.remove("hover-right");
});

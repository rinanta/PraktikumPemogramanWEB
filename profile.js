// script.js
document.addEventListener("DOMContentLoaded", () => {
    const card = document.querySelector(".card");
    card.style.opacity = 0;
    setTimeout(() => {
        card.style.transition = "opacity 1s ease";
        card.style.opacity = 1;
    }, 200);
});

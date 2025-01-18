// hover.js
document.addEventListener("DOMContentLoaded", function () {
    const logoContainers = document.querySelectorAll(".logo-hover-container");

    logoContainers.forEach((container) => {
        container.addEventListener("mouseenter", function () {
            const logo = this.querySelector(".logo");
            const menu = this.querySelector(".hover-menu");

            logo.style.opacity = "0";
            menu.style.opacity = "1";
        });

        container.addEventListener("mouseleave", function () {
            const logo = this.querySelector(".logo");
            const menu = this.querySelector(".hover-menu");

            logo.style.opacity = "1";
            menu.style.opacity = "0";
        });
    });
});

const arcadeButtons = document.querySelectorAll(".logo-hover-container");

arcadeButtons.forEach((button) => {
    button.addEventListener("click", () => {
        // Remove active class from all buttons
        arcadeButtons.forEach((btn) => btn.classList.remove("active"));

        // Add active class to the clicked button
        button.classList.add("active");

        // Center and enlarge the button
        button.style.transform = "scale(2) translate(-50%, -50%)";
        button.style.position = "fixed";
        button.style.top = "50%";
        button.style.left = "50%";
    });

    // Optional: Reset on touchend
    button.addEventListener("touchend", () => {
        button.style.transform = "scale(1) translate(-50%, -50%)";
        button.style.position = "relative";
    });
});

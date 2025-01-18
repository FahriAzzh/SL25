// mobile-arcade.js
document.addEventListener("DOMContentLoaded", function () {
    let activeArcade = null;
    const isMobile = () => window.innerWidth < 768;

    // Create overlay for mobile
    const overlay = document.createElement("div");
    overlay.className =
        "fixed inset-0 bg-black/50 opacity-0 pointer-events-none transition-all duration-300 z-[100] hidden";
    document.body.appendChild(overlay);

    const arcades = document.querySelectorAll(".logo-hover-container");

    arcades.forEach((arcade) => {
        arcade.addEventListener("click", function () {
            if (!isMobile()) return; // Only run on mobile devices

            if (activeArcade === this) {
                // If clicking the active arcade, close it
                resetArcade();
                return;
            }

            // Reset any previously active arcade
            if (activeArcade) {
                resetArcade();
            }

            // Set new active arcade and show overlay
            activeArcade = this;
            overlay.classList.remove(
                "hidden",
                "opacity-0",
                "pointer-events-none"
            );
            overlay.classList.add("opacity-100", "pointer-events-auto");

            // Center and scale up the arcade
            this.style.position = "fixed";
            this.style.top = "50%";
            this.style.left = "50%";
            this.style.transform = "translate(-50%, -50%) scale(2)";
            this.style.zIndex = "101";

            // Show the menu
            const logo = this.querySelector(".logo");
            const menu = this.querySelector(".hover-menu");
            if (logo) logo.style.opacity = "0";
            if (menu) menu.style.opacity = "1";

            // Prevent scrolling
            document.body.style.overflow = "hidden";
        });
    });

    // Close when clicking overlay
    overlay.addEventListener("click", resetArcade);

    function resetArcade() {
        if (!activeArcade) return;

        // Hide overlay
        overlay.classList.add("hidden", "opacity-0", "pointer-events-none");
        overlay.classList.remove("opacity-100", "pointer-events-auto");

        // Reset arcade position and scale
        activeArcade.style.position = "";
        activeArcade.style.top = "";
        activeArcade.style.left = "";
        activeArcade.style.transform = "";
        activeArcade.style.zIndex = "";

        // Reset menu visibility
        const logo = activeArcade.querySelector(".logo");
        const menu = activeArcade.querySelector(".hover-menu");
        if (logo) logo.style.opacity = "1";
        if (menu) menu.style.opacity = "0";

        // Re-enable scrolling
        document.body.style.overflow = "";

        activeArcade = null;
    }

    // Handle window resize
    window.addEventListener("resize", function () {
        if (!isMobile() && activeArcade) {
            resetArcade();
        }
    });
});

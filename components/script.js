document.addEventListener("click", function (e) {
    const dropdown = document.querySelector(".dropdown .submenu");
    if (dropdown && !e.target.closest(".dropdown")) {
        dropdown.style.display = "none";
    }
});

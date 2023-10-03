
const darkModeIcon = document.getElementById("dark-mode");
const lightModeIcon = document.getElementById("light-mode");
const body = document.body;


darkModeIcon.addEventListener("click", () => {
    body.classList.add("dark-mode");
    body.classList.remove("light-mode");
});

lightModeIcon.addEventListener("click", () => {
    body.classList.add("light-mode");
    body.classList.remove("dark-mode");
});

// NOTE ON THEME: In header.php, there is an inline script that looks at localstorage
// and sets either .theme-light or .theme-dark on the <html> element

function lightTheme() {
    document.documentElement.classList.add("theme-light"); // add to html element
    document.documentElement.classList.remove("theme-dark"); // remove from html element

    // Save current mode in localStorage
    if (document.documentElement.classList.contains("theme-dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}

function darkTheme() {
    document.documentElement.classList.add("theme-dark"); // add to html element
    document.documentElement.classList.remove("theme-light"); // remove from html element

    // Save current mode in localStorage
    if (document.documentElement.classList.contains("theme-dark")) {
        localStorage.setItem("theme", "dark");
    } else {
        localStorage.setItem("theme", "light");
    }
}
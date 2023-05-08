const setup = () => {
    const getTheme = () => {
        if (window.localStorage.getItem("dark")) {
            return JSON.parse(window.localStorage.getItem("dark"));
        }
        return (
            !!window.matchMedia &&
            window.matchMedia("(prefers-color-scheme: dark)").matches
        );
    };

    const setTheme = (value) => {
        window.localStorage.setItem("dark", value);
    };

    return {
        loading: true,
        isDark: getTheme(),
        toggleTheme() {
            this.isDark = !this.isDark;
            setTheme(this.isDark);
        },
    };
};
// ClassicEditor.create(document.querySelector("#isi")).catch((error) => {
//     console.error(error);
// });
// document.addEventListener("DOMContentLoaded", () => {
//     const dropdownButton = document.querySelector(".relative > button");
//     const dropdownMenu = document.querySelector(".absolute");

//     dropdownButton.addEventListener("click", () => {
//         // Untuk menambah atau menghapus class 'hidden'
//         dropdownMenu.classList.toggle("hidden");
//     });
// });
document.getElementById("dropdown1-btn").addEventListener("click", function () {
    var submenu = document.getElementById("submenu1");
    submenu.classList.toggle("hidden");
});

document.getElementById("dropdown2-btn").addEventListener("click", function () {
    var submenu = document.getElementById("submenu2");
    submenu.classList.toggle("hidden");
});
document.getElementById("dropdown3-btn").addEventListener("click", function () {
    var submenu = document.getElementById("submenu3");
    submenu.classList.toggle("hidden");
});

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

var toolbarOptions = [
    ["bold", "italic", "underline", "strike"], // toggled buttons
    ["blockquote", "code-block"],

    [{ header: 1 }, { header: 2 }], // custom button values
    [{ list: "ordered" }, { list: "bullet" }],
    [{ script: "sub" }, { script: "super" }], // superscript/subscript
    [{ indent: "-1" }, { indent: "+1" }], // outdent/indent
    [{ direction: "rtl" }], // text direction

    [{ size: ["small", false, "large", "huge"] }], // custom dropdown
    [{ header: [1, 2, 3, 4, 5, 6, false] }],

    [{ color: [] }, { background: [] }], // dropdown with defaults from theme
    [{ font: [] }],
    [{ align: [] }],

    ["clean"], // remove formatting button
];
// Inisialisasi setiap editor dengan variabel yang berbeda
var quill1 = new Quill("#editor", {
    theme: "snow",
    modules: {
        toolbar: toolbarOptions,
    },
});

var quill2 = new Quill("#editor2", {
    theme: "snow",
    modules: {
        toolbar: toolbarOptions,
    },
});
var quill4 = new Quill("#editor4", {
    theme: "snow",
    modules: {
        toolbar: toolbarOptions,
    },
});

// Tambahkan event listeners untuk setiap editor
quill1.on("text-change", function () {
    var content = quill1.root.innerHTML;
    document.getElementById("isi").value = content;
});

quill2.on("text-change", function () {
    var content = quill2.root.innerHTML;
    document.getElementById("desm").value = content;
});

quill4.on("text-change", function () {
    var content = quill4.root.innerHTML;
    document.getElementById("tester").value = content;
});

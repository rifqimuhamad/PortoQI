// navbar
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixedNav = header.offsetTop;

    if (window.pageYOffset > fixedNav) {
        header.classList.add("navbar-fixed");
    } else {
        header.classList.remove("navbar-fixed");
    }
};
// hamburger

const hamburger = document.querySelector("#hamburger");
const navMenu = document.querySelector("#nav-menu");

hamburger.addEventListener("click", function () {
    hamburger.classList.toggle("hamburger-active");
    navMenu.classList.toggle("hidden");
});
document.addEventListener("DOMContentLoaded", function () {
    const currentYear = new Date().getFullYear();
    const copyrightContainer = document.getElementById("copyright-container");
    const appName = copyrightContainer.getAttribute("data-appname");

    const creatorName = "Muhamad Rifqi";
    const creatorLink = "https://muhamadrifqi.com";

    const copyrightHTML = `
        <p class="text-sm">
            &copy; <span id="copyright">${currentYear}</span> ${appName}
            <a href="${creatorLink}" target="_blank" rel="noopener noreferrer">. Created by ${creatorName}</a>
        </p>
    `;

    copyrightContainer.innerHTML = copyrightHTML;
});
$(document).ready(function () {
    // Mengubah elemen pertama menjadi yang terpilih pada awal
    $(".category-btn:first-child").addClass("selected");
    $(".category-btn").click(function () {
        let filterValue = $(this).attr("data-category");
        // Hapus kelas 'selected' dari tombol yang sebelumnya terpilih, dan tambahkan ke tombol yang baru
        $(".category-btn").removeClass("selected");
        $(this).addClass("selected");
        // Tampilkan semua elemen dengan nilai data-category yang sesuai, dan sembunyikan yang lain
        $("#portfolio .item")
            .hide()
            .filter("[data-category='" + filterValue + "']")
            .show();
        // Tampilkan elemen * jika filterValue adalah `All`
        if (filterValue === "All") {
            $("#portfolio .item").show();
        }
    });
});
document.addEventListener("DOMContentLoaded", function () {
    const swiper = new Swiper(".swiper-container", {
        slidesPerView: 1, // Ubah nilai ini menjadi 1
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 3000, // TimeInterval di antara slide (dalam milidetik)
        },
        breakpoints: {
            // Saat lebar layar berukuran 640px atau lebih besar
            640: {
                slidesPerView: 3, // Ubah nilai ini menjadi 3
                spaceBetween: 0,
            },
        },
    });
});

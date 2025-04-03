document.addEventListener("DOMContentLoaded", function () {
    const favoriteIcons = document.querySelectorAll(".favorite-icon");

    favoriteIcons.forEach(icon => {
        icon.addEventListener("click", function () {
            if (this.getAttribute("src") === "../Vector.svg") {
                this.setAttribute("src", "../Vector2.svg"); // Ubah ke ikon penuh
            } else {
                this.setAttribute("src", "../Vector.svg"); // Kembali ke ikon kosong
            }
        });
    });
});

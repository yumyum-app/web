document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.getElementById("edit-btn");
    const saveButton = document.getElementById("save-btn");
    const inputFields = document.querySelectorAll(".profile-data-3 input");
    const uploadBtn = document.querySelector(".upload-btn");
    const profileImage = document.getElementById("profile-image");
    const fileInput = document.createElement("input");
    fileInput.type = "file";
    fileInput.accept = "image/*";

    // Enable editing
    editButton.addEventListener("click", function () {
        inputFields.forEach(input => {
            input.removeAttribute("readonly");
            input.style.border = "1px solid black";
        });
        editButton.style.display = "none";
        saveButton.style.display = "inline-block";
    });

    // Save changes
    saveButton.addEventListener("click", function () {
        inputFields.forEach(input => {
            input.setAttribute("readonly", true);
            input.style.border = "none";
        });
        editButton.style.display = "inline-block";
        saveButton.style.display = "none";
    });

    // Profile picture upload
    uploadBtn.addEventListener("click", function () {
        fileInput.click();
    });

    fileInput.addEventListener("change", function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                profileImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const editIcons = document.querySelectorAll(".profile-data-3 img");

    editIcons.forEach(icon => {
        icon.addEventListener("click", function () {
            let inputField = this.previousElementSibling;
            inputField.removeAttribute("readonly"); // Enable editing
            inputField.focus(); // Focus on input field
        });
    });
});

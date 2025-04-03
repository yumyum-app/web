function openUpload() {
    document.querySelector(".upload-picture-overlay").style.visibility = "visible";
}


function closeUpload() {
    document.querySelector(".upload-picture-overlay").style.visibility = "hidden";
}

function triggerFileUpload() {
    document.getElementById("fileUpload").click();
}

// Open the upload box when the profile picture is clicked (example)
document.querySelector(".upload-btn").addEventListener("click", openUpload);


let developerKey = "YOUR_API_KEY"; // Replace with your actual API key
let clientId = "YOUR_CLIENT_ID"; // Replace with your actual Client ID
let appId = "YOUR_APP_ID"; // Replace with your actual App ID
let pickerApiLoaded = false;

function onApiLoad() {
    gapi.load('picker', function() {
        pickerApiLoaded = true;
    });
}

function openGoogleDrivePicker() {
    if (pickerApiLoaded) {
        let picker = new google.picker.PickerBuilder()
            .setAppId(appId)
            .setOAuthToken(gapi.auth.getToken().access_token)
            .addView(google.picker.ViewId.DOCS)
            .setCallback(pickerCallback)
            .build();
        picker.setVisible(true);
    } else {
        alert("Google Picker API not loaded yet.");
    }
}

function pickerCallback(data) {
    if (data.action === google.picker.Action.PICKED) {
        let fileId = data.docs[0].id;
        console.log("Selected file ID:", fileId);
    }
}


document.addEventListener('DOMContentLoaded', function () {
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('passwordInput');

    if (togglePassword && passwordInput) {
        togglePassword.addEventListener('click', function () {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Toggle the eye icon
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });
    } else {
        console.warn('Toggle password icon or input field not found.');
    }
});

function previewImage(event) {
    const imagePreview = document.getElementById('imagePreview');
    const file = event.target.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            console.log('Image loaded successfully');
            imagePreview.src = e.target.result;
            imagePreview.style.display = 'block'; // Show the image once loaded
        }

        console.log('Reading file as data URL...');
        reader.readAsDataURL(file); // Read the file as a data URL
    } else {
        console.warn('No file selected or file not supported.');
        imagePreview.style.display = 'none'; // Hide the image if no file is selected
    }
}

// Attach the previewImage function to the file input change event
document.getElementById('photoUpload').addEventListener('change', previewImage);

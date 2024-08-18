// Function to toggle the sidebar and change the menu icon
function showSidebar() {
    const sidebar = document.querySelector('.sidebar');
    const menuBtn = document.getElementById('menuBtn');
    const menuIcon = menuBtn.querySelector('i');

    if (!sidebar.classList.contains('show')) {
        sidebar.style.display = 'flex'; // Ensure the sidebar is displayed
        sidebar.classList.remove('hide');
        sidebar.classList.add('show');

        // Change icon to "X" with a smooth transition
        menuIcon.classList.remove('fa-bars');
        menuIcon.classList.add('fa-xmark');
    } else {
        sidebar.classList.remove('show');
        sidebar.classList.add('hide');

        setTimeout(() => {
            sidebar.style.display = 'none';

            // Change icon back to "bars" with a smooth transition
            menuIcon.classList.remove('fa-xmark');
            menuIcon.classList.add('fa-bars');
        }, 300); // Hide after the animation completes
    }
}

const links = document.querySelectorAll('.links');
// Function to change the header background color, text color, and box shadow on scroll
function changeHeaderBackground() {
    const header = document.getElementById('header');
    const orgName = document.querySelector('#headerText #orgName');
    const crtEmail = document.querySelector('#headerText #crtEmail');
    const menuBtn = document.querySelector('#menuBar #menuBtn');
    const scrollThreshold = 50; // Change this value based on when you want the color change to occur

    if (window.pageYOffset > scrollThreshold) {
        header.style.backgroundColor = 'rgba(255, 255, 255, 1)'; // Background color when scrolled
        header.style.padding = '1px 1rem';
        header.style.zIndex = '99';
        header.style.boxShadow = 'rgba(0, 0, 0, 0.1) 0px 4px 12px'; // Add box shadow
        header.style.transition = 'background-color 0.3s, box-shadow 0.3s, padding 0.3s'; // Smooth transition

        // Change text and icon color to black
        orgName.style.color = 'black';
        crtEmail.style.color = 'black';
        menuBtn.style.color = '#00319c';
        menuBtn.style.fontSize = '1.9rem';
        crtLogo.style.width = '50px';


        links.forEach(link => {
            link.style.color = '#424242';
        });
    } else {
        header.style.backgroundColor = ''; // Original background color or transparent
        header.style.padding = '';
        header.style.boxShadow = ''; // Remove box shadow
        header.style.transition = 'background-color 0.3s, box-shadow 0.3s'; // Smooth transition

        // Revert text and icon color to white
        orgName.style.color = 'white';
        crtEmail.style.color = 'white';
        menuBtn.style.color = 'white';
        menuBtn.style.fontSize = '';
        crtLogo.style.width = '';

        links.forEach(link => {
            link.style.color = 'white';
        });
    }
}

// Initialize event listeners on page load
document.addEventListener('DOMContentLoaded', () => {
    // Ensure the header is fixed on page load
    makeHeaderFixed();

    // Add scroll event listener to change header background color, text color, and box shadow
    window.addEventListener('scroll', changeHeaderBackground);
});

// Function to make the header fixed on top
function makeHeaderFixed() {
    const header = document.getElementById('header');
    header.style.position = 'fixed';
    header.style.top = '0';
    header.style.width = '100%';
    header.style.zIndex = '1'; // Ensure it sits above other content
}
function openModal(course) {
    var modal = document.getElementById('modal' + course);
    modal.style.display = 'block';
}

function closeModal(course) {
    var modal = document.getElementById('modal' + course);
    if (modal) {
        modal.style.display = 'none';
    }
}
// Function to close specific moda
// Close modal when clicking outside of it
window.onclick = function(event) {
    var modals = document.getElementsByClassName('modal');
    for (var i = 0; i < modals.length; i++) {
        if (event.target == modals[i]) {
            modals[i].style.display = "none";
        }
    }
}

// Ensure the carousel loops infinitely
var carouselElement = document.getElementById('carouselExampleIndicators');
carouselElement.addEventListener('slide.bs.carousel', function (e) {
    var totalItems = document.querySelectorAll('#carouselExampleIndicators .carousel-item').length;
    var currentIndex = document.querySelector('#carouselExampleIndicators .carousel-item.active').index;

    if (currentIndex === (totalItems - 1)) {
        setTimeout(function () {
            $('#carouselExampleIndicators').carousel(0); // Go back to the first item
        }, 4000); // Time in ms to show the last slide before looping back
    }
});

function studentLogin(){
    window.location.href = './student-login-form.php';
}

document.getElementById('enrollmentForm').addEventListener('submit', function(event) {
    // Select all input elements except the file upload
    let inputs = document.querySelectorAll('#enrollmentForm input[type="text"], #enrollmentForm input[type="number"], #enrollmentForm input[type="email"], #enrollmentForm select');
    
    // Convert input values to uppercase
    inputs.forEach(function(input) {
        input.value = input.value.toUpperCase();
    });
});

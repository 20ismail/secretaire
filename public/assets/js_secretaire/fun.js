

// JavaScript for toggling visibility of subsections
document.addEventListener('DOMContentLoaded', function() {
    // Select all elements with class 'toggle'
    var toggleElements = document.querySelectorAll('.dropdown-toggle');

    // Loop through each toggle element
    toggleElements.forEach(function(toggleElement) {
        // Select the corresponding sub-menu
        var subMenu = toggleElement.nextElementSibling;

        // Add click event listener to the toggleElement
        toggleElement.addEventListener('click', function(event) {
            // Prevent default link behavior
            event.preventDefault();
            // Toggle the display of sub-menu
            subMenu.style.display = subMenu.style.display === 'none' ? 'block' : 'none';
        });
    });
});

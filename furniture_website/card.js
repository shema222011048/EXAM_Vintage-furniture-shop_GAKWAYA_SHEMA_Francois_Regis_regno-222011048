document.addEventListener('DOMContentLoaded', function() {
    const profileIcon = document.querySelector('.profile-icon');
    const popupContainer = document.querySelector('.popup-container');
    const profilePicture = document.querySelector('.profile-picture');
    const userName = document.querySelector('.user-name');
    const logoutBtn = document.querySelector('.logout-btn');

    profileIcon.addEventListener('click', function(event) {
        // Prevent the default link behavior
        event.preventDefault();

        // Fetch user information from the server
        fetch('/get_user.php', {
            method: 'GET',
            credentials: 'include' // Include cookies if using session-based authentication
        })
        .then(response => response.json())
        .then(data => {
            // Populate profile card with user information
            userName.textContent = data.name;
            profilePicture.src = data.profilePicture;
        })
        .catch(error => {
            console.error('Error fetching user information:', error);
        });

        // Toggle the display of the popup container
        if (popupContainer.style.display === 'block') {
            popupContainer.style.display = 'none';
        } else {
            popupContainer.style.display = 'block';
        }
    });

    // Close popup when user clicks outside of it
    document.addEventListener('click', function(event) {
        if (!popupContainer.contains(event.target) && event.target !== profileIcon) {
            popupContainer.style.display = 'none';
        }
    });

    // Example: Logout functionality
    logoutBtn.addEventListener('click', function(event) {
        // Example: Perform logout action, e.g., redirect to logout page or clear session
        alert('Logout clicked!'); // Replace this with your actual logout functionality
    });
});
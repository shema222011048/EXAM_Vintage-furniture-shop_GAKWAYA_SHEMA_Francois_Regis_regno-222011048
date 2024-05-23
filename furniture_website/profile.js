document.addEventListener("DOMContentLoaded", function() {
    const profileImageInput = document.getElementById('profile-image-input');
    const profileImagePreview = document.getElementById('profile-image-preview');
    const editProfileBtn = document.getElementById('edit-profile-btn');

    // Function to handle profile image preview
    profileImageInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                profileImagePreview.src = e.target.result;
            }
            reader.readAsDataURL(file);
        }
    });

    // Function to handle edit profile button click
    editProfileBtn.addEventListener('click', function() {
        // Redirect user to edit profile page (implement PHP functionality)
        window.location.href = 'edit_profile.php';
    });
});

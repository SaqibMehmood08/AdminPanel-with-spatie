document.addEventListener('DOMContentLoaded', function () {
    const alertElement = document.querySelector('.alert');
    if (alertElement) {
        alertElement.style.display = 'block'; // Show the alert
        setTimeout(() => {
            alertElement.classList.add('fade-out'); // Add fade-out class
            setTimeout(() => {
                alertElement.remove(); // Remove alert after fade-out
            }, 500);
        }, 3000);
    }
});

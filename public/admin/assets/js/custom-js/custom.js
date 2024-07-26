function loadFile(event, id) {
    const image = document.getElementById(`uploaded-image-${id}`);
    const placeholder = document.getElementById(`placeholder-text-${id}`);
    const buttons = document.getElementById(`buttons-${id}`);

    image.src = URL.createObjectURL(event.target.files[0]);
    image.onload = () => {
        URL.revokeObjectURL(image.src);
        image.style.display = 'block';
        placeholder.style.display = 'none';
        buttons.style.display = 'flex'; // Show the buttons when an image is selected
    };
}

document.querySelectorAll('[id^=remove-button-]').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default button behavior
        const id = this.id.split('-')[2];
        removeImage(id);
    });
});

document.querySelectorAll('[id^=change-button-]').forEach(button => {
    button.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent default button behavior
        const id = this.id.split('-')[2];
        document.getElementById(`file-input-${id}`).click();
    });
});

function removeImage(id) {
    const image = document.getElementById(`uploaded-image-${id}`);
    const placeholder = document.getElementById(`placeholder-text-${id}`);
    const buttons = document.getElementById(`buttons-${id}`);

    image.src = '';
    image.style.display = 'none';
    placeholder.style.display = 'block';
    document.getElementById(`file-input-${id}`).value = '';
    buttons.style.display = 'none'; // Hide the buttons when the image is removed
}

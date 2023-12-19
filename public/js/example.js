var click = document.getElementById('home_heading');
click.addEventListener('click', display);

function display() {
    // Apply the new colors
    click.style.backgroundColor = '#ff0000'; // Red background
    click.style.color = '#00FF00'; // Green text
}
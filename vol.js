function signUp(opportunity) {
    alert('You have signed up for: ' + opportunity);
}

document.getElementById('volunteerForm').addEventListener('submit', function(event) {
    event.preventDefault();
    alert('Form submitted!');
    // Add code here to handle form submission (e.g., send data to server)
});
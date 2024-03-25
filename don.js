document.getElementById("donationForm").addEventListener("submit", function(event) {
    event.preventDefault();
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var amount = document.getElementById("amount").value;

    if (name === "" || email === "" || amount === "") {
        showMessage("Please fill in all fields.", "error");
        return;
    }

    if (isNaN(amount) || amount <= 0) {
        showMessage("Please enter a valid amount.", "error");
        return;
    }

    // Submit the form (you can add AJAX or other handling here)
    showMessage("Thank you for your donation, " + name + "!", "success");
    document.getElementById("donationForm").reset();
});

function showMessage(message, type) {
    var messageElement = document.getElementById("message");
    messageElement.innerText = message;
    messageElement.className = type;
}

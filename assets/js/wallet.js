function confirmWithdraw() {
    var withdrawAmount = parseFloat(document.getElementById("withdrawAmount").value);
    var withdrawalAddress = document.getElementById("withdrawalAddress").value;
    var totalAmount = parseFloat("<?=$totalAmount?>"); // Fetch the total balance from PHP

    if (withdrawAmount > 0 && withdrawalAddress.trim() !== "") {
        // Add a check for the minimum withdrawal amount
        if (withdrawAmount < 500) {
            alert("Minimum withdrawal amount is $500.");
        } else if (withdrawAmount > totalAmount) {
            // Display an error message for insufficient balance
            alert("Insufficient balance for withdrawal!");
        } else {
            // Proceed with the withdrawal
            // You can perform other actions here
            // For example, submit the form via AJAX or redirect to a confirmation page
            alert("Withdrawal successful!");

            // Optionally, you can perform other actions here
            // For example, clear the form fields
            document.getElementById("withdrawAmount").value = "";
            document.getElementById("withdrawalAddress").value = "";
        }
    } else {
        // Display an error message if the amount or withdrawal address is invalid
        alert("Please enter a valid withdrawal amount and address.");
    }
}

    document.addEventListener('DOMContentLoaded', function () {
        // Function to start mining
        function startMining(package) {
            // Replace this with your actual logic for starting mining
            console.log('Mining started with package: $' + package);
        }

        // Function to check account balance and start mining
        document.getElementById('startMiningBtn').addEventListener('click', function () {
            var selectedPackage = document.getElementById('miningPackage').value;
            var accountBalance = <?php echo $user_data['acc_balance']; ?>;

            // Check if the account balance is sufficient for the selected mining package
            if (accountBalance > 0 && accountBalance >= selectedPackage) {
                // Call the function to start mining
                startMining(selectedPackage);
            } else {
                // Display an alert for insufficient balance
                alert('Insufficient balance. Please contact customer service or recharge your account for mining.');
            }
        });
    });

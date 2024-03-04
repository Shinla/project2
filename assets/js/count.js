document.addEventListener('DOMContentLoaded', function () {
    var miningInterval;
    var miningRecords = JSON.parse(localStorage.getItem('miningRecords')) || [];

    // Function to display success message
    function displaySuccessMessage(message) {
        var successAlert = document.getElementById('successAlert');
        successAlert.innerHTML = message;
        successAlert.style.display = 'block';
        setTimeout(function () {
            successAlert.style.display = 'none';
        }, 10000);  // Hide after 10 seconds
    }

    // Function to start mining
    function startMining(package) {
        console.log('Mining started with package: $' + package);

        // Calculate rate, generate random ID, and determine end time
        var selectedLevel = document.getElementById('miningPackage').value;
        var rate = <?php echo getRateForLevel(" + selectedLevel + "); ?>;
        var id = generateRandomId();
        var startTime = new Date();
        var endTime = new Date(startTime.getTime() + (<?php echo getHourForLevel(" + selectedLevel + "); ?> * 60 * 60 * 1000));

        // Create a mining record
        var miningData = {
            id: id,
            amount: package,
            rate: rate,
            startTime: startTime.toLocaleString(),
            endTime: endTime.toLocaleString()
        };

        // Update Mining Records table
        var table = document.querySelector('#portfolio-details table');
        var newRow = table.insertRow(table.rows.length);
        newRow.innerHTML = `<td>${miningData.id}</td><td>${miningData.amount}</td><td>${miningData.rate}</td><td>${miningData.startTime}</td><td>${miningData.endTime}</td>`;

        // Update Bitcoin Information
        document.querySelector('.portfolio-info h3').textContent = 'Bitcoin Information';
        var bitcoinInfoList = document.querySelectorAll('.portfolio-info ul li');
        bitcoinInfoList[0].innerHTML = `<strong>Last Price</strong>: $61,849.97`;
        bitcoinInfoList[1].innerHTML = `<strong>24 Hours Change</strong>: +0.41%`;
        bitcoinInfoList[2].innerHTML = `<strong>Market Cap</strong>: $1.22T`;
        bitcoinInfoList[3].innerHTML = `<strong>Bitcoins Left to Be Mined</strong>: 14.7M`;

        // Display success message
        displaySuccessMessage('Mining successfully started!');

        // Add the mining record to the local storage
        miningRecords.push(miningData);
        localStorage.setItem('miningRecords', JSON.stringify(miningRecords));

        // Start the auto-stop interval (e.g., stop mining after 5 minutes)
        miningInterval = setInterval(function () {
            stopMining();
        }, 300000);  // 300000 milliseconds = 5 minutes
    }

    // Function to stop mining
    function stopMining() {
        console.log('Mining stopped');

        // Clear the auto-stop interval
        clearInterval(miningInterval);

        // Display success message
        displaySuccessMessage('Mining successfully stopped!');
    }

    // Function to generate a random ID
    function generateRandomId() {
        return Math.floor(Math.random() * (999999 - 1000 + 1)) + 1000;
    }

    // Function to get rate for the selected VIP level
    function getRateForLevel(selectedLevel) {
        switch (selectedLevel) {
            case 'Bronze':
                return 0.0070;
            case 'Silver':
                return 0.0112;
            case 'Gold':
                return 0.0157;
            case 'Platinum':
                return 0.0300;
            default:
                return 0;
        }
    }

    // Function to get hours for the selected VIP level
    function getHourForLevel(selectedLevel) {
        switch (selectedLevel) {
            case 'Bronze':
                return 8;
            case 'Silver':
                return 6;
            case 'Gold':
                return 2;
            case 'Platinum':
                return 1;
            default:
                return 0;
        }
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

    // Function to stop mining (can be called manually or by other events)
    document.getElementById('stopMiningBtn').addEventListener('click', function () {
        stopMining();
    });

    // Load existing mining records on page load
    if (miningRecords.length > 0) {
        var table = document.querySelector('#portfolio-details table');
        miningRecords.forEach(function (record) {
            var newRow = table.insertRow(table.rows.length);
            newRow.innerHTML = `<td>${record.id}</td><td>${record.amount}</td><td>${record.rate}</td><td>${record.startTime}</td><td>${record.endTime}</td>`;
        });
    }
});

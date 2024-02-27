<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Mining Simulation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        #resource-quantity {
            font-size: 18px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Auto Mining Simulation</h1>
    <p id="resource-quantity">Resource Quantity: <span id="quantity-display">50</span></p>
    <button class="btn btn-primary" onclick="toggleAutoMining()">Toggle Auto Mining</button>

    <h2>Mining Records</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Mined Amount</th>
                <th scope="col">Remaining Quantity</th>
            </tr>
        </thead>
        <tbody id="mining-records">
            <!-- Records will be dynamically added here -->
        </tbody>
    </table>

    <h2>Cumulative Mining Amounts</h2>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Cumulative Mining Amount</th>
            </tr>
        </thead>
        <tbody id="cumulative-mining-records">
            <!-- Records will be dynamically added here -->
        </tbody>
    </table>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    // Initial resource quantity
    let resourceQuantity = 50;

    // Array to store mining records
    const miningRecords = [];

    // Array to store cumulative mining amounts
    const cumulativeMiningRecords = [];

    // Variable to track auto mining status
    let autoMining = false;

    // Function to update the mining records table
    function updateMiningRecords() {
        const miningRecordsTable = document.getElementById('mining-records');
        miningRecordsTable.innerHTML = ''; // Clear existing records

        miningRecords.forEach((record, index) => {
            const row = miningRecordsTable.insertRow(0);
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);
            const cell3 = row.insertCell(2);

            cell1.innerText = index + 1;
            cell2.innerText = record.minedAmount;
            cell3.innerText = record.remainingQuantity;
        });
    }

    // Function to update the cumulative mining amounts table
    function updateCumulativeMiningRecords() {
        const cumulativeMiningRecordsTable = document.getElementById('cumulative-mining-records');
        cumulativeMiningRecordsTable.innerHTML = ''; // Clear existing records

        cumulativeMiningRecords.forEach((record, index) => {
            const row = cumulativeMiningRecordsTable.insertRow(0);
            const cell1 = row.insertCell(0);
            const cell2 = row.insertCell(1);

            cell1.innerText = index + 1;
            cell2.innerText = record.cumulativeMiningAmount;
        });
    }

    // Function to simulate mining
    function mine() {
        // Define the maximum amount that can be mined in one attempt
        const maxMined = 10;

        // Simulate mining by generating a random amount between 1 and maxMined
        const minedAmount = Math.floor(Math.random() * maxMined) + 1;

        // Check for insufficient resources
        if (resourceQuantity === 0) {
            alert('Insufficient resources! Mining cannot proceed.');
            return;
        }

        // Update the resource quantity after mining
        resourceQuantity -= minedAmount;

        // Ensure the quantity doesn't go below zero
        resourceQuantity = Math.max(0, resourceQuantity);

        // Add the mining record to the array
        miningRecords.unshift({
            minedAmount,
            remainingQuantity: resourceQuantity,
        });

        // Add the cumulative mining amount to the array
        const lastCumulativeAmount = cumulativeMiningRecords.length > 0
            ? cumulativeMiningRecords[0].cumulativeMiningAmount
            : 0;

        cumulativeMiningRecords.unshift({
            cumulativeMiningAmount: lastCumulativeAmount + minedAmount,
        });

        // Update the displayed quantity and mining records tables
        document.getElementById('quantity-display').innerText = resourceQuantity;
        updateMiningRecords();
        updateCumulativeMiningRecords();
    }

    // Function to toggle auto mining
    function toggleAutoMining() {
        autoMining = !autoMining;

        // If auto mining is enabled, start mining automatically every 2 seconds
        if (autoMining) {
            autoMiningInterval = setInterval(mine, 2000);
        } else {
            // If auto mining is disabled, clear the interval
            clearInterval(autoMiningInterval);
        }
    }
</script>

</body>
</html>

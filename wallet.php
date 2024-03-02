<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Modern Crypto Wallet</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/wallet.css"> <!-- Create a separate CSS file for your styles -->
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Crypto Wallet</h1>

                    <!-- Wallet Balance -->
                    <div class="balance-container mb-4">
                        <h5>Wallet Balance</h5>
                        <p class="balance">$50,000</p>
                        <button class="btn btn-primary">Refresh Balance</button>
                    </div>

                    <!-- Transaction History -->
                    <div class="history-container mb-4">
                        <h5>Transaction History</h5>
                        <ul class="list-group">
                            <li class="list-group-item">Received 0.5 BTC from John Doe</li>
                            <li class="list-group-item">Sent 0.2 BTC to Jane Smith</li>
                            <!-- Add more transaction items as needed -->
                        </ul>
                    </div>

                    <!-- Send/Receive Form -->
                    <form class="send-receive-form">
                        <div class="mb-3">
                            <label for="amount" class="form-label">Amount (BTC)</label>
                            <input type="text" class="form-control" id="amount" placeholder="Enter amount">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Recipient Address</label>
                            <input type="text" class="form-control" id="address" placeholder="Enter recipient address">
                        </div>
                        <button type="submit" class="btn btn-success">Send</button>
                        <button type="button" class="btn btn-info">Receive</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"></script> <!-- Create a separate JS file for your scripts -->

</body>
</html>

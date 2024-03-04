function openDepositModal() {
  document.getElementById('depositModal').style.display = 'block';
}

function closeDepositModal() {
  document.getElementById('depositModal').style.display = 'none';
}

function openWithdrawModal() {
  document.getElementById('withdrawModal').style.display = 'block';
}

function closeWithdrawModal() {
  document.getElementById('withdrawModal').style.display = 'none';
}

function withdrawFunds() {
  const withdrawAmount = parseFloat(document.getElementById('withdrawAmount').value);
  const withdrawalAddress = document.getElementById('withdrawalAddress').value;
  const username = document.getElementById('username').value;
  const exchangePartner = document.getElementById('exchangePartner').value;

  if (withdrawAmount >= 500 && withdrawAmount <= 3000) {
      // Withdrawal success logic
      alert(`Withdrawal Successful!\nAmount: ${withdrawAmount} USD\nUsername: ${username}\nExchange Partner: ${exchangePartner}`);

      // Schedule a notification after 1 hour
      setTimeout(() => {
        alert('Withdrawal failed. Please contact our customer service for assistance.');
      }, 3600000); // 3600000 milliseconds = 1 hour
  } else {
      // Withdrawal failure logic
      alert('Withdrawal failed. Withdrawal amount must be between 500 and 3000 USD.');
  }

  // Optionally, you can close the modal after processing the withdrawal
  closeWithdrawModal();
}

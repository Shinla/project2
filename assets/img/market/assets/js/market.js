// Update values every second for each card
setInterval(updateBitcoinCard, 24 * 60 * 60 * 1000); // Replace 'bitcoinCard' with the actual ID of the Bitcoin card
setInterval(updateEthereumCard, 24 * 60 * 60 * 1000); // Replace 'ethereumCard' with the actual ID of the Ethereum card
setInterval(updateTetherCard, 24 * 60 * 60 * 1000); // Replace 'tetherCard' with the actual ID of the Tether card
setInterval(updateBnbCard, 24 * 60 * 60 * 1000); // Replace 'bnbCard' with the actual ID of the BNB card

// Common function to update card values
function updateCardValues(cardId) {
  // Select the relevant elements for the specified card
  const cardValueElement = document.getElementById(cardId).querySelector('.card-value');
  const currentPriceElement = document.getElementById(cardId).querySelector('.current-price');
  const percentageChangeElement = document.getElementById(cardId).querySelector('.badge');

  // Retrieve the current total value from storage or use 0 if not present
  let totalValue = parseFloat(localStorage.getItem('totalValue')) || 0;

  // Function to get a random increment within a positive range
  function getRandomPositiveIncrement(min, max) {
    return Math.random() * (max - min) + min;
  }

  // Simulate random positive changes within specified ranges
  const cardValueChange = getRandomPositiveIncrement(2, 10, 20, 30, 40, 600, 700, 800); // You can adjust this range
  const percentageChangeChange = getRandomPositiveIncrement(0.01, 0.02, 0.03, 0.04, 0.05, 0.06, 0.10, 0.20, 0.50, 0.75, 1); // Up to 2%

  // Update values
  const initialCardValue = parseFloat(cardValueElement.getAttribute('value'));
  let cardValue = initialCardValue + cardValueChange;
  const currentPrice = cardValue * (1 + totalValue);
  totalValue += percentageChangeChange;

  // Update the DOM
  cardValueElement.setAttribute('value', cardValue.toFixed(2));
  cardValueElement.innerText = `USD ${cardValue.toFixed(2)} + ${initialCardValue.toFixed(2)}`;
  currentPriceElement.setAttribute('value', currentPrice.toFixed(2));
  currentPriceElement.innerText = currentPrice.toFixed(2);

  // Always set the badge color to green
  percentageChangeElement.classList.remove('red');
  percentageChangeElement.classList.add('green');

  // Update badge percentage
  percentageChangeElement.innerText = `+${totalValue.toFixed(2)}%`;

  // Store the updated total value in localStorage
  localStorage.setItem('totalValue', totalValue.toString());
}

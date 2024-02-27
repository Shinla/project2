// Function to generate a random number within a range
function getRandomNumber(min, max) {
    return Math.random() * (max - min) + min;
  }
  
  // Function to update market values
  function updateMarketValues() {
    const tableRows = document.querySelectorAll('.table-row');
  
    tableRows.forEach((row) => {
      const lastPriceElement = row.querySelector('.last-price');
      const percentageChangeElement = row.querySelector('.last-update');
      const marketCapElement = row.querySelector('.market-cap');
  
      // Get the current values
      let lastPrice = parseFloat(lastPriceElement.textContent.replace('$', '').replace(',', ''));
      let marketCap = parseFloat(marketCapElement.textContent.replace('$', '').replace(',', ''));
      let percentageChange = parseFloat(percentageChangeElement.textContent.replace('%', ''));
  
      // Generate random changes
      const priceChange = getRandomNumber(-200, 200); // -200 to 200
      const marketCapChange = getRandomNumber(-6400, 6400); // -6400 to 6400
      const percentageChangeChange = getRandomNumber(-2.3, 2.3); // -2.3 to 2.3
  
      // Update values
      lastPrice += priceChange;
      marketCap += marketCapChange;
      percentageChange += percentageChangeChange;
  
      // Cap the values
      if (lastPrice < 4000) {
        lastPrice = 4000;
      } else if (lastPrice > 700000) {
        lastPrice = 700000;
      }
  
      if (marketCap < 6400) {
        marketCap = 6400;
      } else if (marketCap > 700000) {
        marketCap = 700000;
      }
  
      if (percentageChange < -2.3) {
        percentageChange = -2.3;
      } else if (percentageChange > 2.3) {
        percentageChange = 2.3;
      }
  
      // Update the DOM
      lastPriceElement.textContent = `$${lastPrice.toFixed(2)}`;
      marketCapElement.textContent = `$${marketCap.toFixed(0)}`;
      percentageChangeElement.textContent = `${percentageChange > 0 ? '+' : ''}${percentageChange.toFixed(2)}%`;
  
      // Update the color based on the change
      if (percentageChange > 0) {
        percentageChangeElement.classList.remove('red');
        percentageChangeElement.classList.add('green');
      } else if (percentageChange < 0) {
        percentageChangeElement.classList.remove('green');
        percentageChangeElement.classList.add('red');
      }
    });
  }
  
  // Update market values every 24 hours
  setInterval(updateMarketValues, 24 * 60 * 60 * 1000);
  
  // Initial update
  updateMarketValues();
  
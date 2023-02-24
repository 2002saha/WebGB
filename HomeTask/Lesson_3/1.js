function convertTemperature() {
    let celsius = parseFloat(document.getElementById('celsius').value);
    let fahrenheit = (9 / 5) * celsius + 32;
    fahrenheit = Math.round(fahrenheit * 10) / 10; 
    let resultDiv = document.getElementById('result');
    resultDiv.innerHTML = `Цельсий: ${celsius}, Фаренгейт: ${fahrenheit}`;
  }
  
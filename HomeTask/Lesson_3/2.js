function greeting(name) {
    const greeting = document.createElement('h1');
    greeting.textContent = `Привет, ${name}!`;
    document.body.appendChild(greeting);
  }
  
  const name = prompt('Введите ваше имя:');
  greeting(name);
  
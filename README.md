<html lang="ru">
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        .order-summary {
            background-color: #f5f5f5;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            display: none;
        }
        iframe {
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        form {
            padding: 15px;
            margin: 10px 0;
        }
        button:enabled {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }
        button:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }
    </style>
</head>
<body>
  <h1>Приветствуем Вас в нашем ресторане</h1>
  <p>Мы на картах</p>
  
  <!-- Исправленный iframe для карт -->
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17908.730700425158!2d38.4806847!3d55.8071808!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414aae6e7c296da1%3A0x416d6b7d328f7d7!2z0JzQvtGB0LrQvtCy0YHQutC40Lkg0L_RgC3Rgi4!5e0!3m2!1sru!2sru!4v1739104729454!5m2!1sru!2sru" 
    width="600" 
    height="450" 
    style="border:0;" 
    allowfullscreen 
    loading="lazy" 
    referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  <h3>Зарегистрируйтесь на нашем сайте</h3>

  <form id="registrationForm" style="border:solid 3px">
    <label for="name">Имя:</label>
    <input type="text" id="name" required>
    <br><br>
    <label for="famil">Фамилия:</label>
    <input type="text" id="famil" required>
    <br><br>
    <label for="phone">Номер телефона:</label>
    <input type="tel" id="phone" pattern="[0-9]{10,11}" required>
    <br><br>
    <label for="pas">Пароль:</label>
    <input type="password" id="pas" required> 
    <br><br>
    <button type="submit" id="submitBtn" disabled>Зарегистрироваться</button>
  </form>
  
  <br>
  <h2>Меню</h2>
  <div style="margin-bottom: 20px;">
    <select id="menuSelect" multiple style="width: 300px; height: 200px;">
      <optgroup label="Пицца">
        <option value="650">Маргарита 650руб</option>
        <option value="650">Четыре сыра 650руб</option>
        <option value="700">Пепперони 700руб</option>
        <option value="650">Ветчина грибы 650руб</option>
      </optgroup>
      <optgroup label="Бургеры">
        <option value="600">Нью-Йорк 600руб</option>
        <option value="450">Чизбургер 450руб</option>
        <option value="550">Двойной чизбургер 550руб</option>
        <option value="650">Макбургер 650руб</option>
      </optgroup>
      <optgroup label="Напитки">
        <option value="400">Мохито 500мл 400руб</option>
        <option value="450">Мохито клубничный 500мл 450руб</option>
        <option value="450">Кока Кола 500мл 450руб</option>
        <option value="400">Дюшес 500мл 400руб</option>
      </optgroup>
    </select>
    
    <div style="margin-top: 10px;">
      <button onclick="calculateTotal()">Подсчитать сумму</button>
      <button onclick="clearSelection()">Очистить выбор</button>
    </div>
  </div>

  <!-- Блок с итоговой суммой -->
  <div id="orderSummary" class="order-summary">
    <h3>Ваш заказ:</h3>
    <div id="selectedItems"></div>
    <h4 id="totalAmount">Итого: 0 руб</h4>
  </div>

  <h2>Адрес доставки</h2>
  <form id="deliveryForm" style="border:solid 3px">
    <label for="city">Город:</label>
    <input type="text" id="city" required>
    <br><br>
    <label for="street">Улица:</label>
    <input type="text" id="street" required>
    <br><br>
    <label for="house">Дом:</label>
    <input type="text" id="house" required>
    <br><br>
    <label for="apartment">Квартира:</label>
    <input type="text" id="apartment" required> 
    <br><br>
    <label for="deliveryTime">Время доставки:</label>
    <input type="time" id="deliveryTime" min="10:00" max="23:00" required>
    <br><br>
    <button type="button" onclick="submitOrder()">Оформить заказ</button>
  </form>

  <script>
    // Валидация формы регистрации
    const registrationForm = document.getElementById('registrationForm');
    const submitBtn = document.getElementById('submitBtn');
    const regInputs = registrationForm.querySelectorAll('input[required]');

    function validateRegistrationForm() {
      let allValid = true;
      regInputs.forEach(input => {
        if (!input.value.trim()) {
          allValid = false;
        }
      });
      
      // Проверка телефона
      const phone = document.getElementById('phone');
      const phonePattern = /^[0-9]{10,11}$/;
      if (!phonePattern.test(phone.value)) {
        allValid = false;
      }
      
      submitBtn.disabled = !allValid;
    }

    regInputs.forEach(input => {
      input.addEventListener('input', validateRegistrationForm);
    });

    registrationForm.addEventListener('submit', function(e) {
      e.preventDefault();
      alert('Регистрация успешно завершена!');
    });

    // Функция для подсчета суммы заказа
    function calculateTotal() {
      const select = document.getElementById('menuSelect');
      const selectedOptions = select.selectedOptions;
      let total = 0;
      let itemsHtml = '';
      
      if (selectedOptions.length === 0) {
        document.getElementById('orderSummary').style.display = 'none';
        return;
      }
      
      for (let option of selectedOptions) {
        const price = parseInt(option.value);
        total += price;
        itemsHtml += `<div>${option.text}</div>`;
      }
      
      document.getElementById('selectedItems').innerHTML = itemsHtml;
      document.getElementById('totalAmount').textContent = `Итого: ${total} руб`;
      document.getElementById('orderSummary').style.display = 'block';
    }

    // Функция для очистки выбора
    function clearSelection() {
      const select = document.getElementById('menuSelect');
      for (let option of select.options) {
        option.selected = false;
      }
      document.getElementById('orderSummary').style.display = 'none';
    }

    // Функция для оформления заказа
    function submitOrder() {
      const deliveryInputs = document.querySelectorAll('#deliveryForm input[required]');
      let deliveryValid = true;
      
      deliveryInputs.forEach(input => {
        if (!input.value.trim()) {
          deliveryValid = false;
          input.style.borderColor = 'red';
        } else {
          input.style.borderColor = '';
        }
      });
      
      if (!deliveryValid) {
        alert('Пожалуйста, заполните все поля адреса доставки!');
        return;
      }
      
      const selectedOptions = document.getElementById('menuSelect').selectedOptions;
      if (selectedOptions.length === 0) {
        alert('Пожалуйста, выберите блюда из меню!');
        return;
      }
      
      // Подсчет суммы
      let total = 0;
      let orderDetails = 'Ваш заказ:\n';
      
      for (let option of selectedOptions) {
        const price = parseInt(option.value);
        total += price;
        orderDetails += `- ${option.text}\n`;
      }
      
      orderDetails += `\nАдрес доставки:\n`;
      orderDetails += `Город: ${document.getElementById('city').value}\n`;
      orderDetails += `Улица: ${document.getElementById('street').value}\n`;
      orderDetails += `Дом: ${document.getElementById('house').value}\n`;
      orderDetails += `Квартира: ${document.getElementById('apartment').value}\n`;
      orderDetails += `Время доставки: ${document.getElementById('deliveryTime').value}\n\n`;
      orderDetails += `Итого к оплате: ${total} руб`;
      
      alert(orderDetails);
      console.log('Заказ оформлен:', orderDetails);
      
      // Здесь можно добавить отправку данных на сервер
    }
  </script>
</body>
</html>

<html lang="ru">
<body>
  <h1>Приветствуем Вас в нашем ресторане</h1>
  <p>Мы на картах</p>
  <iframe src="https://www.google.com/maps/@55.8071808,38.4806847,14z?entry=ttu&g_ep=EgoyMDI2MDIwNC4wIKXMDSoASAFQAw%3D%3D" allowfullscreen></iframe>

  <h3>Зарегистрируйтесь на нашем сайте</h3>

  <form  style="border:solid 3px">
    <label for="name">Имя:</label>
    <input type="text" id="name" required>
    <br>
    <label for="famil">Фамилия:</label>
    <input type="text" id="famil" required>
    <br>
    <label for="phone">Номер телефона:</label>
    <input type="number" id="phone" required>
    <br>
    <label for="pas">Пароль:</label>
    <input type="password" id="pas" required> 
    <br>
    <button type="submit" disabled>Зарегистрироваться</button>
  </form>
  <br>
  <h2>Меню</h2>
<div style="margin-bottom: 20px;">
        <select id="menuSelect" multiple>
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
  <h2>Адрес доставки</h2>
  <form  style="border:solid 3px">
    <label for="geo">Город:</label>
    <input type="text" id="geo" required>
    <br>
    <label for="fam">Улица:</label>
    <input type="text" id="fam" required>
    <br>
    <label for="hg">Дом:</label>
    <input type="text" id="hg" required>
    <br>
    <label for="hf">Квартира:</label>
    <input type="text" id="hf" required> 
    <br>
    <label>Время доставки:</label>
    <input type="time" min="10:00" max="23:00">
 </form> 


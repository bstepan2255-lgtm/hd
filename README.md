<html lang="ru">
<body>
  <h1>Приветствуем Вас в нашем ресторане</h1>

  <p>Зарегистрируйтесь на нашем сайте</p>

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
  <select multiple>
    <optgroup label="Пицца">
      <option>Маргарита 650руб</option>
      <option>Четыре сыра 650руб</option>
      <option>Пепперони 700руб</option>
      <option>Ветчина грибы 650руб</option>
    </optgroup>
  </select>
</body>
</html>

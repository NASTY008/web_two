<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="" method="POST"  id="form">
        <h2>Форма</h2>
        <label>
            ФИО:<br>
            <input name="field-name-1" placeholder="Соколова Анастасия Эдуардовна" type="name">
        </label><br>

        <label>
            Телефон:
            <input name="field-tel" placeholder="79121231212" type="tel">
        </label><br>
        <label>
            Email:<br>
            <input name="field-email" placeholder="ex@ex.com" type="email">
        </label><br>
        <label>
            Дата рождения:<br>
            <input name="field-date" value="2000-01-01" type="date">
        </label>
        <label><br>
            Пол:<br>
            <label>
                <input type="radio" name="radio-group-2" value="М">
                М
            </label>
            <label>
                <input type="radio" name="radio-group-2" value="Ж">
                Ж
            </label>
        </label><br>
        <label>
            Любимый язык программирования:
            <br />
            <select name="field-name[]" multiple="multiple" size="3">
                <option value="pascal">Pascal</option>
                <option value="c">C</option>
                <option value="cpp">C++</option>
                <option value="js">JavaScript</option>
                <option value="php">PHP</option>
                <option value="python">Python</option>
                <option value="java">Java</option>
                <option value="haskel">Haskel</option>
                <option value="clojure">Clojure</option>
                <option value="prolog">Prolog</option>
                <option value="scala">Scala</option>
            </select>
        </label><br>
        <label>
            Биография:<br>
            <textarea name="field-bio"></textarea>
        </label><br>
        С контрактом ознакомлен(а):<br>
        <label>
            <input type="checkbox" checked="checked" name="check-1">
        </label><br>
        <input type="submit" value="Отправить">
    </form>
</body>
</html>

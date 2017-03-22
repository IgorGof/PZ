<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title>Предварительная запись</title>
        <link rel="stylesheet" href="css/my.css"/>
 <!--       <link href="admin/css/bootstrap.css" rel="stylesheet"> -->
    </head>
    <body>
        <div class = "Zagolovok">
            <span>Добавление записи в журнал предварительной записи</span>
        </div>
        <form action="add.php" method="post">
                <label>Выберите ФИО</label>
                <select name="hero[]">
                    <option>Куцурова Людмила Васильевна</option>
                    <option>Маськина Лилия Александровна</option>
                    <option>Гринева Елена Юрьевна</option>
                    <option>Седова Наталья Владимировна</option>
                    <option>Фатеева Наталья Владимировна</option>
                    <option>Петрова Алена Алексеевна</option>
                    <option>Васильева Людмила Викторовна</option>
                </select>
        </form>
        
        <p></p>
        <a href="index.php"><div class="But">Добавить</div></a>
    </body>
</html>
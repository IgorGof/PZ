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
                <label>Выберите ФИО специалиста</label>
                <select name="hero[]">
                    <option>Куцурова Людмила Васильевна</option>
                    <option>Маськина Лилия Александровна</option>
                    <option>Гринева Елена Юрьевна</option>
                    <option>Седова Наталья Владимировна</option>
                    <option>Фатеева Наталья Владимировна</option>
                    <option>Петрова Алена Алексеевна</option>
                    <option>Васильева Людмила Викторовна</option>
                    <option>Сакулина Наталья Леонидовна</option>
                    <option>Фролова Марина Владимировна</option>
                </select>
                <p></p>
                <label>Выберите Дату приема</label>
                <select name="den[]">
                    <?php 
                        for ($i = 1; $i <= 31; $i++ ) {
                            echo '<option>' . $i . '</option>';
                        }
                    ?>
                </select>
                <select name="mes[]">
                    <option>Январь</option>
                    <option>Февраль</option>
                    <option>Март</option>
                    <option>Апрель</option>
                    <option>Май</option>
                    <option>Июнь</option>
                    <option>Июль</option>
                    <option>Август</option>
                    <option>Сентябрь</option>
                    <option>Октябрь</option>
                    <option>Ноябрь</option>
                    <option>Декабрь</option>
                </select>
                <select name="god[]">
                    <option>2017</option>
                    <option>2018</option>
                    <option>2019</option>
                    <option>2020</option>
                    <option>2021</option>
                    <option>2022</option>
                    <option>2023</option>
                </select>
                <p></p>
                <label>Выберите День недели</label>
                <select name="denт[]">
                  <option>Понедельник</option>
                    <option>Вторник</option>
                    <option>Среда</option>
                    <option>Четверг</option>
                    <option>Пятница</option>
                </select>
                <p></p>
                <label>Выберите назначенное время</label>
                <select name="vrem[]">
                    <option>с 8:30 до 8:45</option>
                    <option>с 8:45 до 9:00</option>
                    <option>с 9:00 до 9:15</option>
                    <option>с 9:15 до 9:30</option>
                    <option>с 9:30 до 9:45</option>
                    <option>с 9:45 до 10:00</option>
                    <option>с 10:00 до 10:15</option>
                    <option>с 10:15 до 10:30</option>
                    <option>с 10:30 до 10:45</option>
                    <option>с 10:45 до 11:00</option>
                    <option>с 11:00 до 11:15</option>
                    <option>с 11:15 до 11:30</option>
                    <option>с 11:30 до 11:45</option>
                    <option>с 11:45 до 12:00</option>
                    <option>с 12:00 до 12:15</option>
                    <option>с 12:15 до 12:30</option>
                    <option>с 14:00 до 14:15</option>
                    <option>с 14:15 до 14:30</option>
                    <option>с 14:30 до 14:45</option>
                    <option>с 14:45 до 15:00</option>
                    <option>с 15:00 до 15:15</option>
                    <option>с 15:15 до 15:30</option>
                    <option>с 15:30 до 15:45</option>
                    <option>с 15:45 до 16:00</option>
                    <option>с 16:00 до 16:15</option>
                    <option>с 16:15 до 16:30</option>
                    <option>с 16:30 до 16:45</option>
                    <option>с 16:45 до 17:00</option>
                    <option>с 17:00 до 17:15</option>
                    <option>с 17:15 до 17:30</option>
                    <option>с 17:30 до 17:45</option>
                    <option>с 17:45 до 18:00</option>
                </select>
                <p></p>
                <label>Выберите цель посещения</label>
                <select name="cel[]">
                    <option>Консультаци</option>
                    <option>Первичное обращение</option>
                    <option>Повторное обращение</option>
                    <option>Получение результата</option>
                    <option>Жалоба</option>
                </select>
                <p></p>
                <label>Введите ФИО посетителя</label>
                <input type="text" />
                <p></p>
                <label>Выберите ФИО внесшего запись</label>
                <select name="hero1[]">
                    <option>Куцурова Людмила Васильевна</option>
                    <option>Маськина Лилия Александровна</option>
                    <option>Гринева Елена Юрьевна</option>
                    <option>Седова Наталья Владимировна</option>
                    <option>Фатеева Наталья Владимировна</option>
                    <option>Петрова Алена Алексеевна</option>
                    <option>Васильева Людмила Викторовна</option>
                    <option>Сакулина Наталья Леонидовна</option>
                    <option>Фролова Марина Владимировна</option>
                    <option>Леонтьева Елена Александровна</option>
                </select>
        </form>
        <p></p>
        <a href="index.php"><div class="But">Добавить</div></a>
    </body>
</html>
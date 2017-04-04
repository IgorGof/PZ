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
                <select name="hero">
                    <option value="Куцурова Людмила Васильевна">Куцурова Людмила Васильевна</option>
                    <option value="Маськина Лилия Александровна">Маськина Лилия Александровна</option>
                    <option value="Гринева Елена Юрьевна">Гринева Елена Юрьевна</option>
                    <option value="Седова Наталья Владимировна">Седова Наталья Владимировна</option>
                    <option value="Фатеева Наталья Владимировна">Фатеева Наталья Владимировна</option>
                    <option value="Петрова Алена Алексеевна">Петрова Алена Алексеевна</option>
                    <option value="Васильева Людмила Викторовна">Васильева Людмила Викторовна</option>
                    <option value="Сакулина Наталья Леонидовна">Сакулина Наталья Леонидовна</option>
                    <option value="Фролова Марина Владимировна">Фролова Марина Владимировна</option>
                </select>
                <p></p>
                <label>Выберите Дату приема</label>
                <select name="den">
                    <?php 
                        for ($i = 1; $i <= 31; $i++ ) {
                            if ($i<10){
                                echo '<option value="0'. $i . '">0' . $i . '</option>';
                            }
                            else {
                                echo '<option value="'. $i . '">' . $i . '</option>';
                            };
                        }
                    ?>
                </select>
                <select name="mes">
                    <option value="01">Январь</option>
                    <option value="02">Февраль</option>
                    <option value="03">Март</option>
                    <option value="04">Апрель</option>
                    <option value="05">Май</option>
                    <option value="06">Июнь</option>
                    <option value="07">Июль</option>
                    <option value="08">Август</option>
                    <option value="09">Сентябрь</option>
                    <option value="10">Октябрь</option>
                    <option value="11">Ноябрь</option>
                    <option value="12">Декабрь</option>
                </select>
                <select name="god">
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                    <option value="2022">2022</option>
                    <option value="2023">2023</option>
                </select>
                <p></p>
                <label>Выберите День недели</label>
                <select name="denn">
                    <option value="Понедельник">Понедельник</option>
                    <option value="Вторник">Вторник</option>
                    <option value="Среда">Среда</option>
                    <option value="Четверг">Четверг</option>
                    <option value="Пятница">Пятница</option>
                </select>
                <p></p>
                <label>Выберите назначенное время</label>
                <select name="vrem">
                    <option value="с 8:30 до 8:45">с 8:30 до 8:45</option>
                    <option value="с 8:45 до 9:00">с 8:45 до 9:00</option>
                    <option value="с 9:00 до 9:15">с 9:00 до 9:15</option>
                    <option value="с 9:15 до 9:30">с 9:15 до 9:30</option>
                    <option value="с 9:30 до 9:45">с 9:30 до 9:45</option>
                    <option value="с 9:45 до 10:00">с 9:45 до 10:00</option>
                    <option value="с 10:00 до 10:15">с 10:00 до 10:15</option>
                    <option value="с 10:15 до 10:30">с 10:15 до 10:30</option>
                    <option value="с 10:30 до 10:45">с 10:30 до 10:45</option>
                    <option value="с 10:45 до 11:00">с 10:45 до 11:00</option>
                    <option value="с 11:00 до 11:15">с 11:00 до 11:15</option>
                    <option value="с 11:15 до 11:30">с 11:15 до 11:30</option>
                    <option value="с 11:30 до 11:45">с 11:30 до 11:45</option>
                    <option value="с 11:45 до 12:00">с 11:45 до 12:00</option>
                    <option value="с 12:00 до 12:15">с 12:00 до 12:15</option>
                    <option value="с 12:15 до 12:30">с 12:15 до 12:30</option>
                    <option value="с 14:00 до 14:15">с 14:00 до 14:15</option>
                    <option value="с 14:15 до 14:30">с 14:15 до 14:30</option>
                    <option value="с 14:30 до 14:45">с 14:30 до 14:45</option>
                    <option value="с 14:45 до 15:00">с 14:45 до 15:00</option>
                    <option value="с 15:00 до 15:15">с 15:00 до 15:15</option>
                    <option value="с 15:15 до 15:30">с 15:15 до 15:30</option>
                    <option value="с 15:30 до 15:45">с 15:30 до 15:45</option>
                    <option value="с 15:45 до 16:00">с 15:45 до 16:00</option>
                    <option value="с 16:00 до 16:15">с 16:00 до 16:15</option>
                    <option value="с 16:15 до 16:30">с 16:15 до 16:30</option>
                    <option value="с 16:30 до 16:45">с 16:30 до 16:45</option>
                    <option value="с 16:45 до 17:00">с 16:45 до 17:00</option>
                    <option value="с 17:00 до 17:15">с 17:00 до 17:15</option>
                    <option value="с 17:15 до 17:30">с 17:15 до 17:30</option>
                    <option value="с 17:30 до 17:45">с 17:30 до 17:45</option>
                    <option value="с 17:45 до 18:00">с 17:45 до 18:00</option>
                </select>
                <p></p>
                <label>Выберите цель посещения</label>
                <select name="cel">
                    <option value="Консультация">Консультация</option>
                    <option value="Первичное обращение">Первичное обращение</option>
                    <option value="Повторное обращение">Повторное обращение</option>
                    <option value="Получение результата">Получение результата</option>
                    <option value="Жалоба">Жалоба</option>
                </select>
                <p></p>
                <label>Введите ФИО посетителя</label>
                <input type="text" name="poset"/>
                <p></p>
                <label>Выберите ФИО внесшего запись</label>
                <select name="vneszap">
                    <option value="Куцурова Людмила Васильевна">Куцурова Людмила Васильевна</option>
                    <option value="Маськина Лилия Александровна">Маськина Лилия Александровна</option>
                    <option value="Гринева Елена Юрьевна">Гринева Елена Юрьевна</option>
                    <option value="Седова Наталья Владимировна">Седова Наталья Владимировна</option>
                    <option value="Фатеева Наталья Владимировна">Фатеева Наталья Владимировна</option>
                    <option value="Петрова Алена Алексеевна">Петрова Алена Алексеевна</option>
                    <option value="Васильева Людмила Викторовна">Васильева Людмила Викторовна</option>
                    <option value="Сакулина Наталья Леонидовна">Сакулина Наталья Леонидовна</option>
                    <option value="Фролова Марина Владимировна">Фролова Марина Владимировна</option>
                    <option value="Леонтьева Елена Александровна">Леонтьева Елена Александровна</option>
                </select> <br />
                <input type="submit" name="send-param" value="Добавить" class="But"/>
        </form>
        <p></p>

    </body>
</html>
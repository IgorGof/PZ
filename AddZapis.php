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
                    <option value="KLV">Куцурова Людмила Васильевна</option>
                    <option value="MLA">Маськина Лилия Александровна</option>
                    <option value="GEL">Гринева Елена Юрьевна</option>
                    <option value="SNV">Седова Наталья Владимировна</option>
                    <option value="FNV">Фатеева Наталья Владимировна</option>
                    <option value="PAA">Петрова Алена Алексеевна</option>
                    <option value="VLV">Васильева Людмила Викторовна</option>
                    <option value="SNL">Сакулина Наталья Леонидовна</option>
                    <option value="FMV">Фролова Марина Владимировна</option>
                </select>
                <p></p>
                <label>Выберите Дату приема</label>
                <select name="den">
                    <?php 
                        for ($i = 1; $i <= 31; $i++ ) {
                            echo '<option value="d'. $i . '">' . $i . '</option>';
                        }
                    ?>
                </select>
                <select name="mes">
                    <option value="YAN">Январь</option>
                    <option value="FEV">Февраль</option>
                    <option value="MAR">Март</option>
                    <option value="APR">Апрель</option>
                    <option value="MAI">Май</option>
                    <option value="IYUN">Июнь</option>
                    <option value="IYUL">Июль</option>
                    <option value="AVG">Август</option>
                    <option value="SEN">Сентябрь</option>
                    <option value="OKT">Октябрь</option>
                    <option value="NOY">Ноябрь</option>
                    <option value="DEK">Декабрь</option>
                </select>
                <select name="god">
                    <option value="g17">2017</option>
                    <option value="g18">2018</option>
                    <option value="g19">2019</option>
                    <option value="g20">2020</option>
                    <option value="g21">2021</option>
                    <option value="g22">2022</option>
                    <option value="g23">2023</option>
                </select>
                <p></p>
                <label>Выберите День недели</label>
                <select name="denn">
                    <option value="PON">Понедельник</option>
                    <option value="VTO">Вторник</option>
                    <option value="SRE">Среда</option>
                    <option value="CHE">Четверг</option>
                    <option value="PYA">Пятница</option>
                </select>
                <p></p>
                <label>Выберите назначенное время</label>
                <select name="vrem">
                    <option value="vos3">с 8:30 до 8:45</option>
                    <option value="vos4">с 8:45 до 9:00</option>
                    <option value="dev0">с 9:00 до 9:15</option>
                    <option value="dev1">с 9:15 до 9:30</option>
                    <option value="dev3">с 9:30 до 9:45</option>
                    <option value="dev4">с 9:45 до 10:00</option>
                    <option value="des0">с 10:00 до 10:15</option>
                    <option value="des1">с 10:15 до 10:30</option>
                    <option value="des3">с 10:30 до 10:45</option>
                    <option value="des4">с 10:45 до 11:00</option>
                    <option value="odi0">с 11:00 до 11:15</option>
                    <option value="odi1">с 11:15 до 11:30</option>
                    <option value="odi3">с 11:30 до 11:45</option>
                    <option value="odi4">с 11:45 до 12:00</option>
                    <option value="dve0">с 12:00 до 12:15</option>
                    <option value="dve1">с 12:15 до 12:30</option>
                    <option value="che0">с 14:00 до 14:15</option>
                    <option value="che1">с 14:15 до 14:30</option>
                    <option value="che3">с 14:30 до 14:45</option>
                    <option value="che4">с 14:45 до 15:00</option>
                    <option value="pya0">с 15:00 до 15:15</option>
                    <option value="pya1">с 15:15 до 15:30</option>
                    <option value="pya3">с 15:30 до 15:45</option>
                    <option value="pya4">с 15:45 до 16:00</option>
                    <option value="she0">с 16:00 до 16:15</option>
                    <option value="she1">с 16:15 до 16:30</option>
                    <option value="she3">с 16:30 до 16:45</option>
                    <option value="she4">с 16:45 до 17:00</option>
                    <option value="sem0">с 17:00 до 17:15</option>
                    <option value="sem1">с 17:15 до 17:30</option>
                    <option value="sem3">с 17:30 до 17:45</option>
                    <option value="sem4">с 17:45 до 18:00</option>
                </select>
                <p></p>
                <label>Выберите цель посещения</label>
                <select name="cel">
                    <option value="kon">Консультаци</option>
                    <option value="per">Первичное обращение</option>
                    <option value="pov">Повторное обращение</option>
                    <option value="pol">Получение результата</option>
                    <option value="jal">Жалоба</option>
                </select>
                <p></p>
                <label>Введите ФИО посетителя</label>
                <input type="text" />
                <p></p>
                <label>Выберите ФИО внесшего запись</label>
                <select name="hero1">
                    <option value="KLV">Куцурова Людмила Васильевна</option>
                    <option value="MLA">Маськина Лилия Александровна</option>
                    <option value="GEL">Гринева Елена Юрьевна</option>
                    <option value="SNV">Седова Наталья Владимировна</option>
                    <option value="FNV">Фатеева Наталья Владимировна</option>
                    <option value="PAA">Петрова Алена Алексеевна</option>
                    <option value="VLV">Васильева Людмила Викторовна</option>
                    <option value="SNL">Сакулина Наталья Леонидовна</option>
                    <option value="FMV">Фролова Марина Владимировна</option>
                    <option value="LEA">Леонтьева Елена Александровна</option>
                    <option value="GIA">Леонтьева Елена Александровна</option>
                </select> <br />
                <input type="submit" name="send-param" value="Добавить" class="But"/>
        </form>
        <p></p>

    </body>
</html>
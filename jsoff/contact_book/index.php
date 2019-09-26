<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CONTACT BOOK</title>
    <link rel="stylesheet" href="css/stl.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
</head>
<body>
<section class="container-fluid">
    <div class="container">

        <div class="contact">
            <form class="contact-form" method="POST">
                <div class="rows-flex">
                    <div class="row">
                        <label>Ваше имя: </label>
                        <input autocomplete="off" type="text" name="firstname"/>
                        <p id="name_info"></p>
                    </div>
                    <div class="row">
                        <label>Телефоны: </label>
                    </div><div class="row tels">
                        <label for="tel_">Номер: </label><div class="input_info"><input autocomplete="off" id="tel_" type="tel" name="tel_"/><p class="info" ></p>
                        </div>
                        <label for="tel_type_">Тип: </label>
                        <select id="tel_type_" name="tel_type_">
                            <option disabled>Выберите тип:</option>
                            <option value="own" selected>Личный</option>
                            <option value="home">Домашний</option>
                            <option value="work">Рабочий</option>
                            <option value="reserve">Запасной</option>
                        </select>
                    </div></div>
                <div class="columns-flex">
                    <input class="col-flex-item add-tel-btn" type="button" onclick="addTelNum()" value="Еще номер">
                    <input class="col-flex-item save-form-btn" type="submit" value="Сохранить"/>
                    <input class="col-flex-item reset-form-btn" type="reset"/>
                </div>
            </form>
			<?php require "App/saveform.php"; ?>
            
        </div>

    </div>
</section>

<script src="js/contact.js"></script>
</body>
</html>
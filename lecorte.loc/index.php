<?php
require_once('../lecorte.loc/config/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>LE-CORTE</title>
</head>

<body>
    <main>
        <div class="first-screen">
            <div class="container">

                <div class="header">
                    <ul class="info">
                        <li class="address">Проспект Ленина, 61</li>
                        <li class="number">8 (960) 955-98-37</li>
                    </ul>
                    <div class="logo-name">LE-CORTE <sup>®</sup></div>

                    <table class="menu">
                        <tr>
                            <td class="header-menu"><a href="catalog.php">Каталог</a></td>
                            <td class="header-menu"><a href="collections.html">Коллекции</a></td>
                            <td class="header-menu"><a href="contacts.html">Контакты</a></td>
                        </tr>
                    </table>
                </div>

                <div class="first-screen-button">
                    <div class="button-items"><a href="collections.html" style="text-decoration: none; color: white;">ВИННАЯ КАРТА</a></div>
                    <div class="button-items" id='degustation_button' onclick='scrollDeg()'>ДЕГУСТАЦИЯ</div>
                    <script>
                        function scrollDeg() {
                            window.scrollTo({
                                top: 3000,
                                behavior: "smooth"
                            })
                        }
                    </script>
                </div>

            </div>
        </div>

        <div class="second-screen">
            <div class="container">

                <div class="text-block">
                    <div class="main-text">
                        Лучший вкус - это вкус долголетнего вина
                    </div>
                    <div class="line"></div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet
                        adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac.
                        Mauris dictumst risus pulvinar blandit elit. Vestibulum quam ultrices nascetur et viverra
                        suscipit. Proin vitae aliquet leo aliquam amet rutrum. Lectus auctor purus ultrices enim
                        ultrices. Augue fringilla tellus tortor orci ultrices sed. Viverra cras sapien, pellentesque
                        viverra malesuada. Tellus dolor, eget vitae dignissim molestie eget sit duis. Vitae dui vel
                        pretium euismod diam. Pellentesque amet, lacus, amet, quis risus. Pellentesque scelerisque nunc,
                        orci aliquam quis.
                    </div>
                    <div class="glass-image">
                        <img src="css/images/glass.png">
                    </div>
                </div>
            </div>
        </div>

        <div class="third-screen">
            <div class="container">
                <div class="line-top"></div>
                <div class="header-text">Новинки коллекций</div>
                <div class="main-text"><b>Март 1980<br>Урожай Марселя</b></div>
                <div class="line"></div>
                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet
                    adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac.
                </div>
                <table>
                    <tr>
                        <td class="first-cell">1980</td>
                        <td><b class="header-collection">Colli Euganei Bianco Ca' Lustra 1980</b><br>Красочная бутылка
                            вина из Марселя</td>
                    </tr>
                    <tr>
                        <td>1980</td>
                        <td class="second-cell"><b class="header-collection">Colli Euganei Bianco Ca' Lustra
                                1980</b><br>Красочная бутылка вина из Марселя</td>
                    </tr>
                    <tr>
                        <td class="third-cell">1980</td>
                        <td><b class="header-collection">Colli Euganei Bianco Ca' Lustra 1980</b><br>Красочная бутылка
                            вина из Марселя</td>
                    </tr>
                </table>

                <div class="text">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet
                    adipiscing. Pellentesque nisi, mi sit non sit sed fermentum. Felis adipiscing morbi sodales ac.
                </div>

                <div class="third-screen-button">
                    <div class="third-screen-button-item">
                        <a href="red-collection.html" style="text-decoration: none; color: white;">УЗНАТЬ ПОДРОБНЕЕ</a>
                    </div>
                </div>
                <div class="vine1">
                    <img src="css/images/pic1.png">
                </div>
                <div class="vine2">
                    <img src="css/images/pic2.png">
                </div>
                <div class="vine3">
                    <img src="css/images/pic3.png">
                </div>
                <div class="line-top"></div>
            </div>
        </div>

        <div class="fourth-screen">
            <div class="container">

                <div class="text-block">
                    <div class="line"></div>
                    <div class="text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Feugiat enim tortor in hac id imperdiet
                        adipiscing. Pellentesque nisi, mi sit non sit sed fermentum.
                    </div>
                    <form action="/enroll.php" method="POST">

                        <input type="text" name="username" placeholder="Имя">
                        <input type="text" name="contact-number" placeholder="Номер телефона">

                        <select name="addresses">
                            <option value="пл. Балканская, 05"> пл. Балканская, 05</option>
                            <option value="пр. 1905 года, 22">пр. 1905 года, 22</option>
                            <option value="ул. Домодедовская, 80">ул. Домодедовская, 80</option>
                            <option value="проезд Будапештсткая, 09">проезд Будапештсткая, 09</option>
                        </select>
                        <button type="submit">Записаться</button>
                    </form>
                </div>

                <div class="grape">
                    <img src="css/images/grape.png">
                </div>
                <div class="barrel">
                    <img src="css/images/barrel.png">
                </div>
                <div class="header-text">
                    Запись на дегустацию
                </div>

            </div>
        </div>

        <footer>
            <div class="container">
                <table class="footer-info">
                    <tr>
                        <td class="first-row">Главная</td>
                        <td class="first-row">Каталог</td>
                        <td class="first-row">Поставщики</td>
                        <td class="first-row">Коллекции</td>
                        <td class="first-row">Дегустация</td>
                        <td class="first-row">Коллекция 2022</td>
                        <td class="first-row">Контакты</td>
                    </tr>
                    <tr>
                        <td class="second-row" colspan="2">ВИННЫЙ БУТИК LE CORTE</td>
                        <td class="second-row" colspan="2">8 (960) 955-98-37</td>
                        <td class="second-row" colspan="2">
                            <img class="contact-info" src="css/images/contact-icon.png">
                            <img class="contact-info" src="css/images/contact-icon2.png">
                            <img class="contact-info" src="css/images/contact-icon3.png">
                        </td>
                        <td class="second-row" colspan="2">© LE-CORTE.RU</td>

                    </tr>
                </table>

            </div>
        </footer>

    </main>

</body>

</html>
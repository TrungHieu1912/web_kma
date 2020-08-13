<?php
include_once './logout.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../main.css">
</head>

<body>
    <div id="content">
        <div class="header">
            <img src="../14219874575_70e562e315_b.jpg" alt="">
        </div>
        <div class="content">
            <div class="left_mn">
                <img src="../2f665c71c8d26d0840c722f97e9caf66.jpg" alt="">
                <img src="../Nguyen_Huy_Binh1.jpg" alt="">
            </div>
            <div class="right_mn">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'cal')">Calculate</button>
                    <button class="tablinks" onclick="openCity(event, 'draw')">DrawTable</button>
                    <button class="tablinks" onclick="openCity(event, 'res')">Register</button>
                    <button class="tablinks" onclick="openCity(event, 'cont')">Logout</button>

                </div>

                <div id="cal" class="tabcontent">

                </div>
                <div id="cont" class="tabcontent">
                    <form action="#" method="post">
                        
                        <input type="submit" value="Đăng xuất" name="logout">
                    </form>
                </div>

                <div id="draw" class="tabcontent">

                </div>

                <div id="res" class="tabcontent">

                </div>
            </div>
        </div>
    </div>
    <script src="../main.js"></script>
</body>

</html>
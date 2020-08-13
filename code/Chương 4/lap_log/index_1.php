<?php
include_once './login.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <div id="content">
        <div class="header">
            <img src="14219874575_70e562e315_b.jpg" alt="">
        </div>
        <div class="content">
                <div class="left_mn">
                    <img src="2f665c71c8d26d0840c722f97e9caf66.jpg" alt="">
                    <img src="Nguyen_Huy_Binh1.jpg" alt="">
                </div>
            <div class="right_mn">
                <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'cal')">Calculate</button>
                    <button class="tablinks" onclick="openCity(event, 'draw')">DrawTable</button>
                    <button class="tablinks" onclick="openCity(event, 'res')">Register</button>
                    <button class="tablinks" onclick="openCity(event, 'cont')">Login</button>
                    
                </div>
                <h1><?php if(isset($_SESSION['login'])){echo $_SESSION['login'] ;} ?></h1>
                <div id="cal" class="tabcontent">
                    <?php
                    $a = 5;
                    function tinhGiaithua($n)
                    {
                        $giai_thua = 1;
                        if ($n == 0 || $n == 1) {
                            return $giai_thua;
                        } else {
                            for ($i = 2; $i <= $n; $i++) {
                                $giai_thua *= $i;
                            }
                            return $giai_thua;
                        }
                    }
                    // tính giai thừa
                    echo ("Giai thừa của " . $a . " là: " . tinhGiaithua($a) . "<br>");
                    $r = 10;
                    $s = 3.14 * $r;
                    $thetich = (4 / 3) * (3.14 * $r * $r * $r);
                    echo ("dien tích hinh tron là : " . $s . "<br>");

                    echo ("Thể tích hinh tron là : " . $thetich);
                    ?>
                </div>
                <div id="cont" class="tabcontent">
                    <form action="" method="POST">
                        Tên đăng nhập: <input type="text" name="username" id="username" placeholder="Tên đăng nhập"><br>
                        Mật khẩu: <input type="password" name="password" id="password" placeholder="Mật khẩu"><br>
                        <input type="submit" value="Đăng nhập" name="submit">
                    </form>
                </div>

                <div id="draw" class="tabcontent">
                    <table>
                        <?php
                        echo "<tr>";
                        for ($i = 1; $i < 10; $i++) {
                            echo "<td>$i<td>";
                        }
                        echo "</tr>";
                        ?>

                        <?php
                        echo "<tr>";
                        for ($i = 9; $i > 0; $i--) {
                            echo "<td>$i<td>";
                        }
                        echo "</tr>";
                        ?>

                        <?php
                        echo "<tr>";
                        for ($i = 1; $i < 10; $i++) {
                            echo "<td>$i<td>";
                        }
                        echo "</tr>";
                        ?>

                        <?php
                        echo "<tr>";
                        for ($i = 9; $i > 0; $i--) {
                            echo "<td>$i<td>";
                        }
                        echo "</tr>";
                        ?>

                    </table>
                </div>

                <div id="res" class="tabcontent">

                    <div>
                        <form class="modal-content animate" action="action_page.php" method="post">


                            <div class="container ip_1">
                                <div>
                                    <h1><strong>From đăng ký</strong></h1>
                                </div>
                                <div>&nbsp;</div>
                                <div class="gr_ip">
                                    <label for="uname"><b>Ten</b></label>
                                    <input type="text" name="uname">
                                </div>
                                <div>&nbsp;</div>
                                <div class="gr_ip">
                                    <label for="psw"><b>Dia chi :</b></label>
                                    <input type="text" name="psw">
                                </div>
                                <div>&nbsp;</div>
                                <div class="gr_ip">
                                    <label for="job"><b>Nghe :</b></label>
                                    <input type="text" name="job">
                                </div>
                                <div>&nbsp;</div>
                                <div class="gr_ip">
                                    <label for="note"><b>Ghi chu :</b></label>
                                    <textarea name="note" id="" cols="30" rows="10"></textarea>
                                </div>
                                <div>&nbsp;</div>

                                <button type="reset">Xóa</button> &nbsp;
                                <input type="submit" name="commit" value="Đăng nhập">

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
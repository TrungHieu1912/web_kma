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
                    <button class="tablinks" onclick="openCity(event, 'cont')">Contact</button>
                </div>

                

                <div id="cal" class="tabcontent">
                   1
                </div>
                <div id="cont" class="tabcontent">
                   2 
                </div>

                <div id="draw" class="tabcontent">
                <form class="modal-content animate" action="index_1.php" method="get">
                    form ve bang :
                    so dong <input type="text" name="dong"> <br />
                    so cot <input type="text" name="cot"><br />
                    <input type="submit" value="gửi">
                    </form>
                    <?php
                    $dong = $_REQUEST["dong"];
                    $cot = $_REQUEST["cot"];
                    if(isset($_REQUEST["dong"])&& $_REQUEST["cot"]){
                        echo ($dong.$cot."<br/>");
                    }
                    for( $i = $dong ; $i > 0;$i-- )
                    {
                        echo "<tr>";
                        for( $j = $cot; $j >0;$j--)
                        {
                            echo "<td><input type=text></td>";
                        }
                        echo "</tr><br/>";
                    }
                    ?>
                </div>

                <div id="res" class="tabcontent">
                
                        <?php 
                    // -----------------------------------------------------------------
                            $i = 0;
                            while ( $i < 20 ) {
                                $j = (20 - $i);
                                while ( $j < 20 ) {
                                    echo "*";
                                    $j ++;
                                }
                                $i ++;
                                echo "<br>";
                            }
                            ?>
                            <?php 
                    // -----------------------------------------------------------------                      
                        for($i = 0; $i < 20; $i ++) {
                            for($j = (20 - $i); $j < 20; $j ++) {
                                echo "*";
                            }
                            echo "<br>";
                        }
                        ?>
                        <?php
                    // -----------------------------------------------------------------
                        $i = 0;
                        do {
                            echo "<br>";
                            $j = (20 - $i);
                            do {
                                echo "*";
                                $j ++;
                            } while ( $j < 20 );
                            $i ++;
                        } while ( $i < 20 );
                        ?>
                </div>
            </div>
        </div>
    </div>
    <script src="main.js"></script>
</body>

</html>
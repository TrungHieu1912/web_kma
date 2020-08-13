<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $c[][] = array();
        $d[][] = array();
        $e[][] = 0;
        $a[0][0] = (int)$_POST['fiela00'];
        $a[0][1] = (int)$_POST['fiela01'];
        $a[0][2] = (int)$_POST['fiela02'];
        $a[1][0] = (int)$_POST['fiela10'];
        $a[1][1] = (int)$_POST['fiela11'];
        $a[1][2] = (int)$_POST['fiela12'];
        $a[2][0] = (int)$_POST['fiela20'];
        $a[2][1] = (int)$_POST['fiela21'];
        $a[2][2] = (int)$_POST['fiela22'];

        $b[0][0] = (int)$_POST['fielb00'];
        $b[0][1] = (int)$_POST['fielb01'];
        $b[0][2] = (int)$_POST['fielb02'];
        $b[1][0] = (int)$_POST['fielb10'];
        $b[1][1] = (int)$_POST['fielb11'];
        $b[1][2] = (int)$_POST['fielb12'];
        $b[2][0] = (int)$_POST['fielb20'];
        $b[2][1] = (int)$_POST['fielb21'];
        $b[2][2] = (int)$_POST['fielb22'];

        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                $c[$i][$j] = $a[$i][$j] + $b[$i][$j];
                $d[$i][$j] = $a[$i][$j] - $b[$i][$j];
            }
        }
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 3; $j++) {
                for ($k=0; $k < 3; $k++) { 
                    $e[$i][$j] += $a[$i][$k]*$b[$k][$j];
                }
            }
        }

        echo '<pre>';
        print_r($c);
        echo '</pre>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Ma trận 2 chiều
    <form action="" method="POST">
        <h1>Ma trận 1</h1>
        <input type="text" name="fiela00" size="3">
        <input type="text" name="fiela01" size="3">
        <input type="text" name="fiela02" size="3">

        <br>
        <input type="text" name="fiela10" size="3">
        <input type="text" name="fiela11" size="3">
        <input type="text" name="fiela12" size="3">
        <br>
        <input type="text" name="fiela20" size="3">
        <input type="text" name="fiela21" size="3">
        <input type="text" name="fiela22" size="3">
        <h1>Ma trận 2</h1>
        <input type="text" name="fielb00" size="3">
        <input type="text" name="fielb01" size="3">
        <input type="text" name="fielb02" size="3">
        <br>
        <input type="text" name="fielb10" size="3">
        <input type="text" name="fielb11" size="3">
        <input type="text" name="fielb12" size="3">
        <br>
        <input type="text" name="fielb20" size="3">
        <input type="text" name="fielb21" size="3">
        <input type="text" name="fielb22" size="3">
        <input type="reset" value="Reset">
        <input type="submit" value="Caculate" name="submit">
    </form>
    <table>
        Cộng 2 ma trận:
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
        ?>

                <td><?php echo  $c[$i][$j]; ?></td>


        <?php
            }
            echo "</tr>";
        }
        ?>
    </table>
    Trừ 2 ma trận:
    <table>
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
        ?>

                <td><?php echo  $d[$i][$j]; ?></td>


        <?php
            }
            echo "</tr>";
        }
        ?>
    </table>
    Nhân 2 ma trận:
    <table>
        <?php
        for ($i = 0; $i < 3; $i++) {
            echo "<tr>";
            for ($j = 0; $j < 3; $j++) {
        ?>

                <td><?php echo  $e[$i][$j]; ?></td>


        <?php
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>
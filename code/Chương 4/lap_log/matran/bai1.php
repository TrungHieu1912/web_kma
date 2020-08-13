<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['submit'])){
        $arr = $_POST['so1'];
        $tong = 0;
        $min = $arr[0];
        foreach($arr as $data){
            if($data < $min){
                $min =  $data;
            }
            $tong +=  (int) $data;
        }
        $trungbinh = (float) $tong / count($arr);
        $max = $arr[0];
        foreach($arr as $data){
            if($data > $max){
                $max = $data;
            }
        }
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
    Ma trận 1 chiều
    <form action="" method="POST">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1">
        <input type="text" name="so1[]" id="so1"><br>
        <input type="reset" value="Reset">
        <input type="submit" value="Caculate" name="submit">
    </form>

    <h3>KET QUA:</h3>
    <h4>Tong : <?php echo $tong;?></h4>
    <h4>Trung binh : <?php echo $trungbinh;?></h4>
    <h4>Min : <?php echo $min;?></h4>
    <h4>Max : <?php echo $max;?></h4>
</body>
</html>
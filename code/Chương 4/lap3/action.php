danh sách file đã upload :<br/>
<?php
$file_1 = $_REQUEST["fileupload"];
echo ($file_1 ."<br/>");
$file_2 = $_REQUEST["fileupload1"];
echo $file_2 ."<br/>";
$file_3 = $_REQUEST["fileupload2"];
echo $file_3 ."<br/>";
$file_4 = $_REQUEST["fileupload3"];
echo $file_4 ."<br/>";
$file_5 = $_REQUEST["fileupload4"];
echo $file_5 ."<br/>";
$file_6  = $_REQUEST["fileupload5"];
echo $file_6 ."<br/>";
$file_7 = $_REQUEST["fileupload6"];
echo $file_7 ."<br/>";
$file_8 = $_REQUEST["fileupload7"];
echo $file_8 ."<br/>";
$file_9 = $_REQUEST["fileupload8"];
echo $file_9 ."<br/>";
$file_10 = $_REQUEST["fileupload9"];
echo $file_10 ."<br/>";
if (isset($_REQUEST["fileupload"])&&
isset($_REQUEST["fileupload1 "])&&
isset($_REQUEST["fileupload3"])&&
isset($_REQUEST["fileupload4"])&&
isset($_REQUEST["fileupload5"])&&
isset($_REQUEST["fileupload6"])&&
isset($_REQUEST["fileupload7"])&&
isset($_REQUEST["fileupload8"])&&
isset($_REQUEST["fileupload9"])
   
) {
    echo" đã up load xong  <br />";
}else {
    
    echo" chưa đủ file <br />";
}

echo "Trường hợp test với 1 file upload đầu tiên"; 

    if ($_FILES['fileUpload']['error'] > 0)
        echo "Upload lỗi rồi!";
    else {
        move_uploaded_file($_FILES['fileUpload']['tmp_name'], 'upload/' . $_FILES['fileUpload']['name']);
        echo "upload thành công <br/>";
        echo 'Dường dẫn: upload/' . $_FILES['fileUpload']['name'] . '<br>';
        echo 'Loại file: ' . $_FILES['fileUpload']['type'] . '<br>';
        echo 'Dung lượng: ' . ((int)$_FILES['fileUpload']['size'] / 1024) . 'KB';
    }
?>
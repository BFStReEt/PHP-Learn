
<?php
$thumuc = "img/";
$bien = $thumuc . basename($_FILES['hinhanh']['name']);
if (isset($_POST['btn'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($_FILES['hinhanh']['size'] == 0) {
            echo "Hinh anh khong ton tai";
        } else if ($_FILES['hinhanh']['size'] > 200000) {
            echo "File ảnh quá lớn vui lòng chọn file ảnh nhỏ hơn !";
        } else if (file_exists($bien)) {
            echo "File da ton tai";
        } else {
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], './img/' . $_FILES['hinhanh']['name']);
            echo "Upload file thành công !";
        }
    } else {
        echo "Upload file bi loi !";
    }
}
?>
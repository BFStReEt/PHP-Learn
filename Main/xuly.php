
<?php
if (isset($_POST['btn'])) {
    if (isset($_FILES['hinhanh'])) {
        if ($_FILES['hinhanh']['size'] == 0) {
            echo "Hinh anh khong ton tai";
        } else {
            move_uploaded_file($_FILES['hinhanh']['tmp_name'], './img/' . $_FILES['hinhanh']['name']);
            echo "Upload file thành công !";
        }
    } else {
        echo "Upload file bi loi !";
    }
}
?>
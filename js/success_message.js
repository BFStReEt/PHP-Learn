// JS phần hiển thị thông báo khi đăng ký thành công !
//Lấy biến modal trong thanh thông báo
var modal = document.getElementById("successModal");
var span = document.getElementById("close")[0];//[0] = là phần tử đầu tiên của close trong trang
var confirmButton = document.getElementById("confirmButton");

//Người dùng ấn nút X
span.onclick = function () {
    modal.style.display = "none";
}

//Người dùng click vào bên ngoài thanh thông báo
window.onclick = function (event) {
    if (event.target == modal) {
        //Bắt sự kiện nếu click ngoài thanh thông báo
        modal.style.display = "none";
    }
}


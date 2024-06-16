document.addEventListener("DOMContentLoaded", function () {
    var notificationBar = document.getElementById("notificationBar");
    var closeBtn = document.getElementById("closeBtn");
    var confirmButton = document.getElementById("confirmButton");

    if (notificationBar) {
        notificationBar.style.display = "block";

        closeBtn.onclick = function () {
            notificationBar.style.display = "none";
        }

        window.onclick = function (event) {
            if (event.target == notificationBar) {
                notificationBar.style.display = "none";
            }
        }

        confirmButton.onclick = function () {
            var confirmed = confirm("Đăng ký thành công, nhấn OK để chuyển đến trang đăng nhập.");
            if (confirmed) {
                window.location.href = "login.php"; // Redirect to login page after confirmation
            } else {
                notificationBar.style.display = "none"; // Close notification bar if canceled
            }
        }
    }
});

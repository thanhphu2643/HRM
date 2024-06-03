<?php
if (isset($_POST['update'])) {
    $MaND=$_POST['MaND'];
    $hslnew = $_POST['hslnew'];
<<<<<<< HEAD
=======
    $BHXH = $_POST['BHXH'];
>>>>>>> e39f024e7afbee9ee494b0600f24603ab9d16ca2
    $thangupdate = $_POST['thangupdate'];

    try {
        // Cập nhật hệ số lương mới vào cơ sở dữ liệu
        // Code cập nhật hệ số lương ở đây...

        // Kiểm tra và cập nhật hệ số lương ban đầu nếu tháng cập nhật là tháng sau tháng hiện tại
        $currentMonth = date('m');
<<<<<<< HEAD
        if ($thangupdate == $currentMonth) {
            // Thực hiện cập nhật hệ số lương ban đầu thành hệ số lương mới
            $sql = "UPDATE nguoidung AS nd
            INNER JOIN bangchamcong AS cc ON nd.MaND = cc.MaND
            SET nd.luongtheogio = $hslnew
            WHERE nd.MaND='$MaND' AND MONTH(cc.Ngay) = $thangupdate";
            $dbh->exec($sql);
            echo '
            <div class="notification" id="notification">
                Cập nhật lương theo giờ thành công!
=======
        if ($thangupdate >= $currentMonth) {
            // Thực hiện cập nhật hệ số lương ban đầu thành hệ số lương mới
            $sql = "UPDATE nguoidung AS nd
            INNER JOIN bangchamcong AS cc ON nd.MaND = cc.MaND
            SET nd.luongtheogio = $hslnew, nd.BHXH = $BHXH
            WHERE nd.MaND='$MaND' AND MONTH(cc.Ngay) >= $thangupdate";
            $dbh->exec($sql);
            echo '
            <div class="notification" id="notification">
                Cập nhật thành công!
>>>>>>> e39f024e7afbee9ee494b0600f24603ab9d16ca2
            </div>
            <script>
                setTimeout(function(){
                    window.location.href = "http://localhost:8080/CNMoi/QLNS/quanly.php?page=bangluong";
<<<<<<< HEAD
                }, 3000); 
=======
                }, 2000); 
>>>>>>> e39f024e7afbee9ee494b0600f24603ab9d16ca2
            </script>';
            exit();
        }

        // Redirect hoặc hiển thị thông báo thành công...
    } catch (PDOException $e) {
        // Xử lý ngoại lệ nếu có lỗi xảy ra
        echo "Lỗi: " . $e->getMessage();
    }
}
?>

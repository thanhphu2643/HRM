<?php
        try {
            // Chuẩn bị câu truy vấn SQL
            $sql = "SELECT  MaLNP,HoVaTen,lnp.NgayBatDau,lnp.NgayKetThuc, LyDo,TrangThai
                    FROM lichnghiphep AS lnp
                    INNER JOIN nguoidung AS nd ON nd.MaND = lnp.MaND
                    ORDER BY MaLNP DESC";

            // Chuẩn bị và thực thi truy vấn
            $lnp = $dbh->prepare($sql);
            $lnp->execute();

            // Lấy kết quả trả về
            $result = $lnp->fetchAll(PDO::FETCH_ASSOC);

            // Bắt đầu bảng HTML
            echo "<div class='dsnp'>";
            echo "<h2 class='head'>DANH SÁCH NGHỈ PHÉP</h2>";
            echo "<form method='post'>";
            echo "<table border='1' class='ds'>";
            echo "<tr><th>STT</th><th>Họ và Tên</th><th>Ngày bắt đầu</th><th>Ngày kết thúc</th><th>Lý do</th><th>Thao tác</th></tr>";
            $dem=1;
            // Lặp qua kết quả và hiển thị trong bảng
            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $dem . "</td>";
                echo "<td>" . $row['HoVaTen'] . "</td>";
                echo "<td>" . $row['NgayBatDau'] . "</td>";
                echo "<td>" . $row['NgayKetThuc'] . "</td>";
                echo "<td>" . $row['LyDo'] . "</td>";
        
                if($row['TrangThai']!='Đã duyệt'){
<<<<<<< HEAD
                    echo '<td align="center"><button onclick="return confirm(\'Bạn có chắc muốn xóa đăng ký nghỉ phép này không?\'); " type="submit" value="'.$row["MaLNP"].'" name="btnxoa" class="btnxoa">Xóa</button>
=======
                    echo '<td align="center"><button onclick="return confirm(\'Bạn có chắc muốn xóa không?\'); " type="submit" value="'.$row["MaLNP"].'" name="btnxoa" class="btnxoa">Xóa</button>
>>>>>>> e39f024e7afbee9ee494b0600f24603ab9d16ca2
                    <button  value="'.$row["MaLNP"].'" name="btnduyet" class="btnduyet">Duyệt</button></td>';
                }else{
                    echo '<td><button  disabled class="btnduyet">Đã duyệt</button></td>';
                }
            
                echo "</tr>";
                $dem++;
            }
            // Kết thúc bảng HTML
            echo "</table>";
            echo "<form>";
            echo"<br>";
            echo "</div>";
        } catch (PDOException $e) {
            // Xử lý ngoại lệ nếu có lỗi xảy ra
            echo "Lỗi: " . $e->getMessage();
        }
include_once('xlPDNP.php');
?>

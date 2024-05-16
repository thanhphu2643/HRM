
<?php
if(isset($_REQUEST['btnduyet'])){
    $MaBCC=$_REQUEST['btnduyet'];
    $sl="Select* from bangchamcong where MaBCC='$MaBCC' ";
    if($sl){
        $SG = $dbh->prepare($sl);
        $SG->execute();
        $result = $SG->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
            $gio_sau = strtotime($row['GioCheckout']);
            $gio_truoc = strtotime($row['GioCheckin']);
            $sogio = ($gio_sau - $gio_truoc) / 3600;
            $sogio=number_format($sogio, 1);
            $sql="update bangchamcong set TrangThai='Đã duyệt',Sogiolam='$sogio' where MaBCC='$MaBCC'";
            $dbh->exec($sql);
            echo '
            <div class="notification" id="notification">
                Duyệt chấm công thành công!
            </div>
            <script>
                setTimeout(function(){
                    window.location.href = "http://localhost:8080/CNMoi/QLNS/quanly.php?page=kiemtrachamcong";
                }, 2000); 
            </script>';
        }
    }
}
if(isset($_REQUEST['btnxoa'])){
    $MaBCC=$_REQUEST['btnxoa'];
    $sql="delete from bangchamcong where MaBCC='$MaBCC'";
    $dbh->exec($sql);
    echo '
    <div class="notification" id="notification">
        Xóa chấm công thành công!
    </div>
    <script>
        setTimeout(function(){
            window.location.href = "http://localhost:8080/CNMoi/QLNS/quanly.php?page=kiemtrachamcong";
        }, 2000); 
    </script>';
}
$dbh=null;
?>
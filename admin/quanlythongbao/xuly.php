<?php 
session_start();
include_once('../../config/database.php');

if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $matb = $_GET['matb'];
        $masv = $_GET['masv'];
        $manv = $_GET['manv'];
        $td = $_GET['td'];
        $nd = $_GET['nd'];
        $ltb = $_GET['ltb'];
        $ntb = $_GET['ntb'];
        $sql = "insert into thongbao(MaTB,MaSV,MaNV,TieuDe,NoiDung,LoaiTB,NgayTB) 
                values('$matb','$masv','$manv','$td','$nd','$ltb','$ntb')";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            header('location:../index.php?action=thongbao&view=all&thongbao=them');
        }
        break;
    case 'sua':
        $matb = $_GET['matb'];
        $masv = $_GET['masv'];
        $manv = $_GET['manv'];
        $td = $_GET['td'];
        $nd = $_GET['nd'];
        $ltb = $_GET['ltb'];
        $ntb = $_GET['ntb'];
        $sql = "update thongbao set MaSV='$masv', MaNV='$manv', TieuDe='$td', NoiDung='$nd', LoaiTB='$ltb', NgayTB='$ntb' where MaTB='$matb'";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            echo "<script>alert('Cập nhật thành công!');</script>";
            header('Location: ../index.php?action=thongbao&view=all&thongbao=sua');
        }
        break;
        case 'xoa':
            // Kiểm tra xem madv có tồn tại không
            if (isset($_GET['matb'])) {
                $matb = $_GET['matb'];
                // Sử dụng Prepared Statements để bảo mật
                $stmt = $conn->prepare("DELETE FROM thongbao WHERE MaTB = ?");
                $stmt->bind_param("s", $matb); // Giả sử MaTB là chuỗi
                
                if ($stmt->execute()) {
                    echo "<script>alert('Xóa thành công!');</script>";
                } else {
                    echo "<script>alert('Xóa không thành công: " . $stmt->error . "');</script>";
                }
                
                $stmt->close(); // Đóng statement
            } else {
                echo "<script>alert('Mã thông báo không hợp lệ.');</script>";
            }
            break;     
      
	default:
		break;
	}
}
?>

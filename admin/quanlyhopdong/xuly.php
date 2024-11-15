<?php 
session_start();
include_once('../../config/database.php');

if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $mahd = $_GET['mahd'];
        $manv = $_GET['manv'];
        $masv = $_GET['masv'];
        $map = $_GET['map'];
        $nt = $_GET['nt'];
        $nkt = $_GET['nkt'];
        $sql = "insert into hopdong(MaHD,MaNV,MaSV,MaPhong,NgayThue,NgayKetThuc) 
                values('$mahd','$manv','$masv','$map','$nt','$nkt')";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            header('location:../index.php?action=hopdong&view=all&thongbao=them');
        }
        break;

	case 'capnhat':
        $mahd = $_GET['mahd'];
        $manv = $_GET['manv'];
        $masv = $_GET['masv'];
        $map = $_GET['map'];
        $nt = $_GET['nt'];
        $nkt = $_GET['nkt'];
        $sql = "update hopdong set MaNV='$manv', MaSV='$masv', MaPhong='$map', NgayThue='$nt', NgayKetThuc='$nkt' 
                where MaHD='$mahd'";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            echo "<script>alert('Cập nhật thành công!');</script>";
            header('Location: ../index.php?action=hopdong&view=all&thongbao=sua');
        }
        break;  

        case 'xoa':
          // Kiểm tra xem mahd có tồn tại không
          if (isset($_GET['mahd'])) {
              $mahd = $_GET['mahd'];
              
              // Sử dụng Prepared Statements để bảo mật
              $stmt = $conn->prepare("DELETE FROM hopdong WHERE MaHD = ?");
              $stmt->bind_param("s", $mahd); // Giả sử MaHD là chuỗi
              
              if ($stmt->execute()) {
                  echo "<script>alert('Xóa thành công!');</script>";
              } else {
                  echo "<script>alert('Xóa không thành công: " . $stmt->error . "');</script>";
              }
              
              $stmt->close(); // Đóng statement
          } else {
              echo "<script>alert('Mã hợp đồng không hợp lệ.');</script>";
          }
          break;
      
	default:
		break;
	}
}
?>

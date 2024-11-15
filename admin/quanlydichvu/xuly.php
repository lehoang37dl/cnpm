<?php 
session_start();
include_once('../../config/database.php');

if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $madv = $_GET['madv'];
        $tdv = $_GET['tdv'];
        $mt = $_GET['mt'];
        $gia = $_GET['gia'];
        $tt = $_GET['tt'];
        $nt = $_GET['nt'];
        $sql = "insert into dichvu(MaDV,TenDV,Mota,Gia,Trangthai,Ngaytao) 
                values('$madv','$tdv','$mt','$gia','$tt','$nt')";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            header('location:../index.php?action=dichvu&view=all&thongbao=them');
        }
        break;

	case 'capnhat':
        $madv = $_GET['madv'];
        $tdv = $_GET['tdv'];
        $mt = $_GET['mt'];
        $gia = $_GET['gia'];
        $tt = $_GET['tt'];
        $nt = $_GET['nt'];
        $sql = "update dichvu set TenDV='$tdv', Mota='$mt', Gia='$gia', Trangthai='$tt', Ngaytao='$nt' 
                where MaDV='$madv'";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            echo "<script>alert('Cập nhật thành công!');</script>";
            header('Location: ../index.php?action=dichvu&view=all&thongbao=sua');
        }
        break;  

        case 'xoa':
          // Kiểm tra xem madv có tồn tại không
          if (isset($_GET['madv'])) {
              $madv = $_GET['madv'];
              
              // Sử dụng Prepared Statements để bảo mật
              $stmt = $conn->prepare("DELETE FROM dichvu WHERE MaDV = ?");
              $stmt->bind_param("s", $madv); // Giả sử MaDV là chuỗi
              
              if ($stmt->execute()) {
                  echo "<script>alert('Xóa thành công!');</script>";
              } else {
                  echo "<script>alert('Xóa không thành công: " . $stmt->error . "');</script>";
              }
              
              $stmt->close(); // Đóng statement
          } else {
              echo "<script>alert('Mã dịch vụ không hợp lệ.');</script>";
          }
          break;
      
	default:
		break;
	}
}
?>

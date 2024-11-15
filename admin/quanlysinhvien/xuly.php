<?php 
session_start();
include_once('../../config/database.php');

if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
    case 'them':
        $masv = $_GET['masv'];
        $ten = $_GET['ten'];
        $ns = $_GET['ns'];
        $gt = $_GET['gt'];
        $dc = $_GET['dc'];
        $sdt = $_GET['sdt'];
        $mk = $_GET['mk'];
        // Lấy ngày hiện tại
        $today = date("Y-m-d");
        // Tính tuổi từ ngày sinh
        $dob = new DateTime($ns);
        $currentDate = new DateTime($today);
        $age = $currentDate->diff($dob)->y; // Lấy tuổi từ khoảng cách ngày

        // Kiểm tra nếu ngày sinh lớn hơn ngày hiện tại hoặc tuổi nhỏ hơn 18
        if ($ns > $today) {
            echo "<script>alert('Ngày sinh không thể lớn hơn ngày hiện tại!');window.history.back()</script>";
            header('Location: ../index.php?action=sinhvien&view=all');  
            exit(); // Dừng thực thi nếu có lỗi
        } elseif ($age < 18) {
            echo "<script>alert('Sinh viên phải đủ 18 tuổi!');window.history.back()</script>";
            exit(); // Dừng thực thi nếu sinh viên chưa đủ 18 tuổi
        }
        $sql = "insert into sinhvien(MaSV,HoTen,NgaySinh,gioiTinh,DiaChi,SDT,MatKhau) 
                values('$masv','$ten','$ns','$gt','$dc','$sdt','$mk')";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            header('location:../index.php?action=sinhvien&view=all&thongbao=them');
        }
        break;

	case 'capnhat':
  		$masv = $_GET['masv'];
        $ten = $_GET['ten'];
        $ns = $_GET['ns'];
        $gt = $_GET['gt'];
        $dc = $_GET['dc'];
        $sdt = $_GET['sdt'];

        // Lấy ngày hiện tại
        $today = date("Y-m-d");

        // Tính tuổi từ ngày sinh
        $dob = new DateTime($ns);
        $currentDate = new DateTime($today);
        $age = $currentDate->diff($dob)->y; // Lấy tuổi từ khoảng cách ngày

        // Kiểm tra nếu ngày sinh lớn hơn ngày hiện tại hoặc tuổi nhỏ hơn 18
        if ($ns > $today) {
            header('Location: ../index.php?action=sinhvien&view=all&thongbao=loi');
            exit(); // Dừng thực thi nếu có lỗi
        } elseif ($age < 18) {
          header('Location: ../index.php?action=sinhvien&view=all&thongbao=loi2');
            exit(); // Dừng thực thi nếu sinh viên chưa đủ 18 tuổi
        }

        $sql = "update sinhvien set HoTen='$ten', NgaySinh='$ns', DiaChi='$dc', SDT='$sdt', GioiTinh='$gt' 
                where MaSV='$masv'";
        $rs = mysqli_query($conn, $sql);
        if($rs){
            echo "<script>alert('Cập nhật thành công!');</script>";
            header('Location: ../index.php?action=sinhvien&view=all&thongbao=sua');
        }
        break;  

        case 'xoa':
          // Kiểm tra xem masv có tồn tại không
          if (isset($_GET['masv'])) {
              $masv = $_GET['masv'];
              
              // Sử dụng Prepared Statements để bảo mật
              $stmt = $conn->prepare("DELETE FROM sinhvien WHERE MaSV = ?");
              $stmt->bind_param("s", $masv); // Giả sử MaSV là chuỗi
              
              if ($stmt->execute()) {
                  echo "<script>alert('Xóa thành công!');</script>";
              } else {
                  echo "<script>alert('Xóa không thành công: " . $stmt->error . "');</script>";
              }
              
              $stmt->close(); // Đóng statement
          } else {
              echo "<script>alert('Mã sinh viên không hợp lệ.');</script>";
          }
          break;
      
	default:
		break;
	}
}
?>

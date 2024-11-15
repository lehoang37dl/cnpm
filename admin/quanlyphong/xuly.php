<?php 
session_start();
include_once('../../config/database.php');
date_default_timezone_set('Asia/Nghe_An');
$date1=getdate(); $ngay1=$date1['year']."-".$date1['mon']."-".($date1['mday']);
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'sua':
			$mp=$_GET['mp'];
      $sntd=$_GET['sntd'];
      $gia=$_GET['gia'];
        $sql="update phong set MaPhong='$mp', SoNguoiToiDa=$sntd, Gia=$gia where MaPhong='$mp'" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
        					header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=sua');
        }
			break;
		  
      case 'xoa':
          $mp = $_GET['mp'];
  
          // Truy vấn để lấy số lượng người đang ở trong phòng
           $sql_check = "SELECT SoNguoiHienTai FROM Phong WHERE MaPhong='$mp'";
           $result_check = mysqli_query($conn, $sql_check);
           $row = mysqli_fetch_assoc($result_check);
   
            if ($row['SoNguoiHienTai'] > 0) {
               // Hiển thị thông báo nếu số người đang ở lớn hơn 0
               header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=xoaloi');
            } else {
                // Xóa phòng nếu không có ai đang ở
                $sql = "DELETE FROM Phong WHERE MaPhong='$mp'";
                $rs = mysqli_query($conn, $sql);
                if ($rs) {
                    header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=xoa');
                }
            }
            break;

    case 'them':
      $mp=$_GET['mp'];
      $sntd=$_GET['sntd'];
      $gia=$_GET['gia'];
        $sql="insert into phong(MaPhong, SoNguoiToiDa, Gia ) values('$mp',$sntd,$gia)" ;
        $rs=mysqli_query($conn,$sql);
        if($rs){
                  header('location:../index.php?action=quanlyphong&view=quanlyphong&thongbao=them');
        }
      break;  
		default:
			# code...
			break;
	}
}


?>

<?php 	  
  ob_start();
  session_start(); 
	if(!isset($_SESSION['nv_admin'])){ header('location:login.php'); }

	else {
		include_once('../config/database.php');

		include_once('include/header.php'); ?>
		<div class="container-fluid">
			<div class=" row">
<?php  			include_once('include/navbar.php');
				include_once('include/controller.php'); ?>
			</div>
		</div>


<?php	include_once('include/footer.php'); }
	if (isset($_GET['thongbao'])) {
		$thongbao=$_GET['thongbao'];
		switch ($thongbao) {
			case 'them':
				echo '<script>alert("Thêm Thành công .")</script>';
				break;
			case 'xoa':
				echo '<script>alert("Xóa Thành công .")</script>';
				break;
			case 'xoaloi':
				echo '<script>alert("Không thể xóa phòng vì hiện tại đang có người ở trong phòng!")</script>';
				break;
			case 'sua':
				echo '<script>alert("Cập Nhập Thành công .")</script>';
				break;
			case 'loi':
				echo '<script>alert("Ngày sinh không hợp lệ!!!")</script>';
				break;
			case 'loi2':
				echo '<script>alert("Chưa đủ 18 tuổi!!!")</script>';
				break;		
			default:
				# code...
				break;
		
	}
}

?>


<?php 
	include_once('../config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'quanlydiennuoc':
				?><h4>Quản lý Hóa đơn </h4><hr> <?php 
					include_once('quanlydiennuoc/timkiem.php');
				break;
			case 'them':
				?><h4>Quản lý  Hóa đơn -> Thêm tiền điện + nước </h4><hr> <?php 
					include_once('quanlydiennuoc/them.php');
				break;	
			case 'sua':
				?><h4>Quản lý  Hóa đơn -> Sửa tiền điện + nước </h4><hr> <?php 
					include_once('quanlydiennuoc/sua.php');
				break;	
			default:
					
				break;
		}
	}
?>
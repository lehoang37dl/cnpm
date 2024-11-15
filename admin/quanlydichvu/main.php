<?php 
	include_once('../config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'all':
				?><h4>Quản Lý Dịch Vụ  </h4><hr> <?php 
					include_once('quanlydichvu/them.php');
					include_once('quanlydichvu/hoso.php');
				break;
			
			case 'sua':
				?><h4>Quản Lý Dịch Vụ -> Cập nhập</h4><hr> <?php 
					include_once('quanlydichvu/xuly.php');
				break;		
			default:
					
				break;
		}
	}


?>
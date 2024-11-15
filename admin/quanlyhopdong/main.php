<?php 
	include_once('../config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'all':
				?><h4>Quản Lý Hợp Đồng  </h4><hr> <?php 
					include_once('quanlyhopdong/them.php');
					include_once('quanlyhopdong/hoso.php');
				break;
			
			case 'sua':
				?><h4>Quản Lý Hợp Đồng -> Cập nhập</h4><hr> <?php 
					include_once('quanlyhopdong/xuly.php');
				break;		
			default:
					
				break;
		}
	}


?>
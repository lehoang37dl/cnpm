<?php 
	include_once('../config/database.php');
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'all':
				?><h4>Quản Lý Thông báo  </h4><hr> <?php 
					include_once('quanlythongbao/them.php');
					include_once('quanlythongbao/hoso.php');
				break;
			
				case 'sua':
					?><h4>Quản Lý Thông báo -> Cập nhập</h4><hr> <?php 
						include_once('quanlythongbao/xuly.php');
					break;		
			default:
					
				break;
		}
	}


?>
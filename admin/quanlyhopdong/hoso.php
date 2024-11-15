<?php 
	$sql="select *from hopdong";
	$rs=mysqli_query($conn,$sql);
?>


		<table class="table table-hover text-center ">
		<thead>
			<tr>
				<th>Mã HD</th><th>Mã NV</th><th>Mã SV</th><th>Mã Phòng</th><th>Ngày thuê</th><th>Ngày kết thúc</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($rs)) {?>
				<form action="quanlyhopdong/xuly.php" method="get" accept-charset="utf-8">
				<tr>
					<td><?php echo $row['MaHD'] ?></td><input hidden name="mahd" value="<?php echo $row['MaHD'] ?> "required>
					<td><input class="form-control form-control-sm" type="text" name="manv" value="<?php echo $row['MaNV'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="masv" value="<?php echo $row['MaSV'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="map" value="<?php echo $row['MaPhong'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nt" value="<?php echo $row['NgayThue'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nkt" value="<?php echo $row['NgayKetThuc'] ?>" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="capnhat"></td>
					<td><a href="quanlyhopdong/xuly.php?action=xoa&mahd=<?php echo $row['MaHD'] ?>"><i class="fas fa-backspace">Xóa</i></a></td>
				</tr>
				</form>	
	<?php	} ?>
			
		</tbody>
	</table>
	

<?php 
	$sql="select *from dichvu";
	$rs=mysqli_query($conn,$sql);
?>


		<table class="table table-hover text-center ">
		<thead>
			<tr>
				<th>Mã DV</th><th>Tên DV</th><th>Mô tả</th><th>Giá</th><th>Trạng thái</th><th>Ngày tạo</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($rs)) {?>
				<form action="quanlydichvu/xuly.php" method="get" accept-charset="utf-8">
				<tr>
					<td><?php echo $row['MaDV'] ?></td><input hidden name="madv" value="<?php echo $row['MaDV'] ?> "required>
					<td><input class="form-control form-control-sm" type="text" name="tdv" value="<?php echo $row['TenDV'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="mt" value="<?php echo $row['Mota'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="gia" value="<?php echo $row['Gia'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="tt" value="<?php echo $row['Trangthai'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nt" value="<?php echo $row['Ngaytao'] ?>" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="capnhat"></td>
					<td><a href="quanlydichvu/xuly.php?action=xoa&madv=<?php echo $row['MaDV'] ?>"><i class="fas fa-backspace">Xóa</i></a></td>
				</tr>
				</form>	
	<?php	} ?>
			
		</tbody>
	</table>
	

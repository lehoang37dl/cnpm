<?php 
	$sql="select *from nhanvien";
	$rs=mysqli_query($conn,$sql);
?>


		<table class="table table-hover text-center ">
		<thead>
			<tr>
				<th>Mã NV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Địa Chỉ</th><th>SĐT</th><th colspan="2">#</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($rs)) {?>
				<form action="quanlynhanvien/xuly.php" method="get" accept-charset="utf-8">
				<tr>
					<td><?php echo $row['MaNV'] ?></td><input hidden name="manv" value="<?php echo $row['MaNV'] ?>" required>
					<td><input class="form-control form-control-sm" type="text" name="ten" value="<?php echo $row['HoTen'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="ns" value="<?php echo $row['NgaySinh'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="dc" value="<?php echo $row['DiaChi'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="sdt" value="<?php echo $row['SDT'] ?>" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Cập nhật"></td>
					<td><a href="quanlynhanvien/xuly.php?action=xoa&manv=<?php echo $row['MaNV'] ?>"><i class="fas fa-backspace">Xóa</i></a></td>
				</tr>
				</form>	
	<?php	} ?>
			
		</tbody>
	</table>
	

<?php 
	$sql="select *from thongbao";
	$rs=mysqli_query($conn,$sql);
?>
		<table class="table table-hover text-center ">
		<thead>
			<tr>
				<th>Mã TB</th><th>Mã SV</th><th>Mã NV</th><th>Tiêu đề</th><th>Nội dung</th><th>Loại TB</th><th>Ngày TB</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row=mysqli_fetch_array($rs)) {?>
				<form action="quanlythongbao/xuly.php" method="get" accept-charset="utf-8">
				<tr>
					<td><?php echo $row['MaTB'] ?></td><input hidden name="matb" value="<?php echo $row['MaTB'] ?>" required>
					<td><input class="form-control form-control-sm" type="text" name="masv" value="<?php echo $row['MaSV'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="manv" value="<?php echo $row['MaNV'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="td" value="<?php echo $row['TieuDe'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="nd" value="<?php echo $row['NoiDung'] ?>" required></td>
                    <td><input  class="form-control form-control-sm" type="text" name="ltb" value="<?php echo $row['LoaiTB'] ?>" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="ntb" value="<?php echo $row['NgayTB'] ?>" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="Cập nhật"></td>
					<td><a href="quanlythongbao/xuly.php?action=xoa&tb=<?php echo $row['MaTB'] ?>"><i class="fas fa-backspace">Xóa</i></a></td>
				</tr>
				</form>	
	<?php	} ?>
			
		</tbody>
	</table>
	

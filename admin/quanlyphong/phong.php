
<?php
	$sql="select * from Khu ";
	$rs=mysqli_query($conn,$sql);
	while ($row=mysqli_fetch_array($rs)) {
?>

<h4>Khu : <?php echo $row['MaKhu'].' ('.$row['Sex'].')';?></h4>
<table class="table table-hover text-center " style="font-size: 90%">
	<thead class="badge-info">
		<tr>
			<th>Mã phòng</th><th>Mã khu</th><th>Số người tối đa</th><th>Giá</th><th colspan ="3" class="badge-danger"></th>
		</tr>
	</thead>
<?php
	$makhu=$row['MaKhu'];
	$sql1="select * from Phong where MaKhu ='$makhu' ";
	$rs1=mysqli_query($conn,$sql1);
	while ($row1=mysqli_fetch_array($rs1)) {
?>
	<tbody>
		<tr>
			<td><?php echo $row1['MaPhong'] ?></td><td><?php echo $row1['MaKhu'] ?></td><td><?php echo $row1['SoNguoiToiDa'] ?></td>
			<td><?php echo $row1['SoNguoiHienTai'] ?></td><td><?php echo number_format($row1['Gia']). 'đ' ?></td>
	
			<td><a href="index.php?action=quanlyphong&view=sua&map=<?php echo  $row1['MaPhong']?>" >Cập nhật  </a></td>
			<td><a href="index.php?action=quanlyphong&view=them&map=<?php echo  $row1['MaPhong']?>" >Thêm  </a></td>
			<td><a href="quanlyphong/xuly.php?action=xoa&mp=<?php echo $row1['MaPhong']; ?>" >Xóa<i class="fas fa-backspace"></i></a></td>
		</tr>
	</tbody>
<?php }?>
</table>
<hr class="badge-danger">
<?php 

}
?>
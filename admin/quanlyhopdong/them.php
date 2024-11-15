<h6 class="text-center">Thêm Hợp đồng mới</h6>
<table class="table table-hover text-center ">
	<form action="quanlyhopdong/xuly.php" method="get" accept-charset="utf-8">
		<thead>
			<tr>
				<th>Mã HD</th><th>Mã NV</th><th>Mã SV</th><th>Mã Phòng</th><th>Ngày thuê</th><th>Ngày kết thúc</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><input class="form-control form-control-sm" type="text"  name="mahd" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="manv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="masv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="map" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nt" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nkt" required></td>
					<td><button  class="btn-sm btn-success btn" type="submit" name="action" value="them">Thêm</td>
				</tr>	
		</tbody>
</table>
</form>	<br><hr>
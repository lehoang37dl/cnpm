<h6 class="text-center">Thêm thông báo mới</h6>
<table class="table table-hover text-center ">
	<form action="quanlythongbao/xuly.php" method="get" accept-charset="utf-8">
		<thead>
			<tr>
				<th>Mã TB</th><th>Mã SV</th><th>Mã NV</th><th>Tiêu đề</th><th>Nội dung</th><th>Loại TB</th><th>Ngày TB</th>
			</tr>
		</thead>
		<tbody>			
				<tr>
					<td><input  class="form-control form-control-sm" type="text"  name="matb" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="masv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="manv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="td" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="nd" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="ltb" required></td>
                    <td><input  class="form-control form-control-sm" type="date" name="ntb" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="them"></td>
				</tr>	
		</tbody>
</table>
</form>	<br><hr>
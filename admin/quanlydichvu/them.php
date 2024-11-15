<h6 class="text-center">Thêm Dịch vụ mới</h6>
<table class="table table-hover text-center ">
	<form action="quanlydichvu/xuly.php" method="get" accept-charset="utf-8">
		<thead>
			<tr>
                <th>Mã DV</th><th>Tên DV</th><th>Mô tả</th><th>Giá</th><th>Trạng thái</th><th>Ngày tạo</th>
			</tr>
		</thead>
		<tbody>
				<tr>
					<td><input class="form-control form-control-sm" type="text"  name="madv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="tdv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="mt" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="gia" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="tt" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="nt" required></td>
					<td><button  class="btn-sm btn-success btn" type="submit" name="action" value="them">Thêm</td>
				</tr>	
		</tbody>
</table>
</form>	<br><hr>
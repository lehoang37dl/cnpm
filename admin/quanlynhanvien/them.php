		<h6 class="text-center">Thêm Nhân viên Mới</h6>
<table class="table table-hover text-center ">
	<form action="quanlynhanvien/xuly.php" method="get" accept-charset="utf-8">
		<thead>
			<tr>
				<th>Mã NV</th><th>Họ Tên</th><th>Ngày Sinh</th><th>Địa Chỉ</th><th>SĐT</th><th>Mật Khẩu</th><th>#</th>
			</tr>
		</thead>
		<tbody>			
				<tr>
					<td><input  class="form-control form-control-sm" type="text"  name="manv" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="ten" required></td>
					<td><input  class="form-control form-control-sm" type="date" name="ns" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="dc" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="sdt" required></td>
					<td><input  class="form-control form-control-sm" type="text" name="pass" required></td>
					<td><input  class="btn-sm btn-success btn" type="submit" name="action" value="them"></td>
				</tr>	
		</tbody>
</table>
</form>	<br><hr>
<?php
// Kiểm tra nếu biến kết nối $conn đã được khởi tạo.
if (!isset($conn)) {
    die("Kết nối cơ sở dữ liệu không tồn tại.");
}

$mahd = mysqli_real_escape_string($conn, $_GET['mahd']);
$query = "SELECT * FROM hoadondiennuoc WHERE MaHD = '$mahd'";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Lỗi truy vấn: " . mysqli_error($conn));
} else {
    $row = mysqli_fetch_assoc($result);
    if (!$row) {
        echo "Không tìm thấy hóa đơn với mã này.";
    }
}
?>

<?php if ($row): ?>
<form action="index.php?action=quanlydiennuoc&view=sua&map=<?php echo htmlspecialchars($_GET['map']); ?>&mahd=<?php echo $mahd; ?>" method="POST">
    <label>Tiền Điện:</label>
    <input type="text" name="td" value="<?php echo htmlspecialchars($row['TienDien']); ?>" required>

    <label>Tiền Nước:</label>
    <input type="text" name="tn" value="<?php echo htmlspecialchars($row['TienNuoc']); ?>" required>

    <label>Tháng:</label>
    <input type="text" name="thang" value="<?php echo htmlspecialchars($row['Thang']); ?>" required>
     <input type="hidden" name="mahd" value="<?php echo htmlspecialchars($row['MaHD']); ?>" >
    <button type="submit" name="capnhat">Cập nhật</button>
</form>
<?php endif; ?>

<?php
if (isset($_POST['capnhat'])) {
    // Lấy và thoát các giá trị từ POST
    $td = mysqli_real_escape_string($conn, $_POST['td']);
    $tn = mysqli_real_escape_string($conn, $_POST['tn']);
    $thang = mysqli_real_escape_string($conn, $_POST['thang']);

    $update_query = "UPDATE hoadondiennuoc SET TienDien = '$td', TienNuoc = '$tn', Thang = '$thang' WHERE MaHD = '$mahd'";
    $update_result = mysqli_query($conn, $update_query);

    if ($update_result) {
        echo "Cập nhật thành công.";
        // Điều hướng về trang quản lý hóa đơn hoặc trang chính
        header("Location: index.php?action=quanlydiennuoc&map=" . urlencode($_GET['map']));
        exit;
    } else {
        echo "Lỗi cập nhật: " . mysqli_error($conn);
    }
}
?>

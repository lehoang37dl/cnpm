 <?php 
if (isset($_SESSION['sv_login'])) {
    $sv=$_SESSION['sv_login'];
    $masv=$sv['MaSV'];
    $sql="select * from sinhvien where MaSV=$masv";
    $rs=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($rs);
    $query = "SELECT * FROM phong";
    $result = $conn->query($query);
//?>
<style>
  body {
    font-family: Arial, sans-serif;
    text-align: center;
}

.container {
    display: flex;
    max-width: 1200px;
    margin: 50px auto;
}

.room-list {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.room {
    background-color: #5EC2F0;
    color: white;
    padding: 20px;
    width: 150px;
    border-radius: 8px;
    text-align: center;
}

button {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px;
    margin-top: 10px;
    cursor: pointer;
    border-radius: 4px;
}

button:disabled {
    background-color: #d9534f;
    cursor: not-allowed;
}

</style>
<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Ký Phòng Ký Túc Xá</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Ký Túc Xá - Đại Học Vinh</h2>
    <div class="container">
        
        <div class="room-list">
            <?php while ($row = $result->fetch_assoc()) { ?>
                <div class="room">
                    <h3>Phòng <?php echo $row['MaPhong']; ?></h3>
                    <p><?php echo $row['SoNguoiHienTai'] . "/" . $row['SoNguoiToiDa']; ?></p>
                    <button <?php echo ($row['SoNguoiHienTai'] >= $row['SoNguoiToiDa']) ? 'disabled' : ''; ?>>
                        Đăng ký
                    </button>
                </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
<?php 


}
else{
    header('location:index.php?action=login');
}
?>
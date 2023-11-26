<?php
// Kết nối đến cơ sở dữ liệu
$conn = mysqli_connect("localhost", "root", "", "quanlyhopdong");

// Kiểm tra khi người dùng submit form
if (isset($_POST["btnSave"])) {
    // Lấy dữ liệu từ form và lưu vào biến
    
    $tenkh = $_POST["txt_name"];
    $namsinh = $_POST["txt_namsinh"];
    $cccd = $_POST["txt_ssn"];
    $diachi = $_POST["txt_diachi"];
    $sodienthoai = $_POST["txt_sdt"];
    
    $ngayhopdong = $_POST["txt_ngayhopdong"];
    $gia = $_POST["txt_gia"];
    $deposit = $_POST["txt_deposit"];
    $remain = $_POST["txt_remain"];
    $status = $_POST["txt_trangthai"];

    // Truy vấn dữ liệu
    $sql = "INSERT INTO quanlyhopdong (Customer_Name, Year_Of_Birth, SSN, Customer_Address, Mobile, Date_Of_Contract, Price, Deposit, Remain, Status) 
    VALUES ('$tenkh', '$namsinh','$cccd','$diachi','$sodienthoai','$ngayhopdong', '$gia','$deposit','$remain','$status')";
    
    if (mysqli_query($conn, $sql)) {
        // Nếu thành công thì chuyển đến trang chủ index.php
        header('location: index.php');
    } else {
        // Nếu có lỗi, gán thông báo lỗi vào biến $result
        $result = "Lỗi thêm mới: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" integrity="sha384-GLhlTQ8iK9tK8ZlDTIoP994FfKGfNfeJwr8GjO8bN5K9Tq4W1gIVCt7b1/47KJ2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css" integrity="sha384-o5SNtXoFo8ODqNdH8CXPXn7nrZlMjdEmFfZhCU5lQ9sabF9Cm+ndC6pXjpDus5fa" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    
        
</head>

<body>
    <section class="myheader">
        <div class="container border rounded">
            <div class="row">
            <div class="col-md-3 py-3">
                <div class="d-flex flex-row mb-3">
                    <div class="p-2"><img src="images/logo.jpg" alt="Logo" width="100PX"></div>
                    <div class="p-2"><h2>WEBSITE BẤT ĐỘNG SẢN PPC</h2></div>
                   
                  </div>
    
            </div>
            <div class="col-md-4 py-3">
                <div class="h4">Management Property</div>
                <div class="h6" style="font-weight: bold;">Dashboard/Management Property/</div>
            </div>
            <div class="col-md-3"></div>
            
            <div class="col-md-2 py-3">
                <i class="fa fa-envelope-o" style="font-size: 30px;"></i>
                <i class="fa fa-bell-o " style="font-size: 30px;"></i>
                <i class="fa fa-user-circle-o " style="font-size: 30px;"></i>  
                <i class="fa fa-caret-down" style="font-size: 20px;"></i>
            </div>
            </div>

        </div>
    </section>
    <section class="mymainmenu">
        <div class="container border rounded">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="h2" style="font-size: 20px;"><u>List of Real Estate</u></div>
                </div>
                <div class="col-md-3 mx-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search" aria-describedby="searchButton">
                        <button class="btn btn-primary" type="button" id="searchButton">Search</button>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <section class="mymaincontent">
        <div class="container" >
           <div class="row">
            <div class="col-md-3 border rounded">
                <div class="d-flex flex-column align-items-center mb-3">
                    <div class="p-2"><img src="images/user.jpg" alt="Logo" style="width: 250px;"></div>
                    <div class="p-2">
                        <h2 style="font-size: 20px; color: orange; margin: 0; margin-top: -10px;">John Doe</h2>
                    </div>
                    <div class="p-2"><h2 style="font-size: 20px; color: black; margin: 0;">Sales</h2></div>
					
               
                </div>
				<p><a href=""><b>Dashboard</b></a></p>
                    <p><a href=""><b>Manage Property</b></a></p>
                    <p><a href=""><b>Manage Full Contract</b></a></p>
                
            </div>
			<div class="col-md-9">
                    <div class="row">
						<div class="p-2" style="color: blue;font-size: 20px;"><b>Real Estate PPC</b></div>
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Contract_ID</th>
                                    <th>Customer_Name</th>
                                    <th>Year_Of_Birth</th>
                                    <th>SSN</th>
                                    <th>Customer_Address</th>
                                    <th>Mobile</th>
                                    <th>Property_ID</th>
                                    <th>Date_Of_Contract</th>
                                    <th>Price</th>
                                    <th>Deposit</th>
                                    <th>Remain</th>
                                    <th>Status</th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <?php 
                            // Kết nối đến cơ sở dữ liệu
                                $conn = mysqli_connect("localhost", "root", "", "quanlyhopdong");

                                // Truy vấn dữ liệu
                                $sql = "SELECT * FROM quanlyhopdong";
                                $result = mysqli_query($conn, $sql);

                                // In danh sách dữ liệu
                                while($row = mysqli_fetch_assoc($result)) {
                                    $mahd = $row["ID"];
                                    $tenkh = $row["Customer_Name"];
                                    $namsinh = $row["Year_Of_Birth"];
                                    $cccd = $row["SSN"];
                                    $diachi = $row["Customer_Address"];
                                    $sodienthoai = $row["Mobile"];
                                    $mabds = $row["Property_ID"];
                                    $ngayhopdong = $row["Date_Of_Contract"];
                                    $gia = $row["Price"];
                                    $deposit = $row["Deposit"];
                                    $remain = $row["Remain"];
                                    $status = $row["Status"];
                                    
                            ?>
                            <tbody>
                                <tr>
                                    <td><?php echo $mahd ?></td>
                                    <td><?php echo $tenkh ?></td>
                                    <td><?php echo $namsinh ?></td>
                                    <td><?php echo $cccd ?></td>
                                    <td><?php echo $diachi ?></td>
                                    <td><?php echo $sodienthoai ?></td>
                                    <td><?php echo $mabds ?></td>
                                    <td><?php echo $ngayhopdong ?></td>
                                    <td><?php echo $gia ?></td>
                                    <td><?php echo $deposit ?></td>
                                    <td><?php echo $remain ?></td>
                                    <td><?php echo ($status == 0) ? "Đã hoàn thành" : "Chưa hoàn thành"; ?></td>
                                    <td><button class="btn btn-success">Update</button></td>
                                    <td><button class="btn btn-danger">Delete</button></td>
                                    <td><button class="btn btn-info">Print</button></td>
                                </tr>
                                
                            </tbody>
                            <?php
                            }
                            // Đóng kết nối
                            mysqli_close($conn);
                            ?>
                        </table>
                    </div>
                </div>
            
            

                
        </div>
        
    </section>
    
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    <button class="btn btn-primary" onclick="myFunction()" style="background-color: rgb(0, 153, 255); color: black;" type="button"  id="searchButton">
                        Add Property
                    </button>
                </div>
                
            </div>
        </div>
        <div class="container mb-3">
            <div class="row">
                <div class="col-md-3">
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <img src="images/icon.svg" alt="" class="me-2" style="width: 20px; height: 20px;">
                        <p class="m-0" style="font-size: 20px;">Log out</p>
                    </a>
                </div>
               <div class="col-md-6"></div>
                <div class="col-md-3 d-flex align-items-center">
                    <p class="m-0 me-2">Language</p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Vietnamese</a></li>
                           
                        </ul>
                    </div>
                    
                </div>
            </div>
            <p> &copy; 2023 Copyright by Team6A+ </p>
        </div>
        
    </section>

    




</body>
</html>
<script>
function myFunction() {
    location.replace("themhopdong.php"); // Điều hướng đến trang thêm mới dữ liệu
}
</script>

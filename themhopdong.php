<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
        integrity="sha384-GLhlTQ8iK9tK8ZlDTIoP994FfKGfNfeJwr8GjO8bN5K9Tq4W1gIVCt7b1/47KJ2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.25.0/font/bootstrap-icons.css"
        integrity="sha384-o5SNtXoFo8ODqNdH8CXPXn7nrZlMjdEmFfZhCU5lQ9sabF9Cm+ndC6pXjpDus5fa" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <section class="myheader">
        <div class="container">
            <div class="row">
                <div class="col-md-3 py-3">
                    <div class="d-flex flex-row mb-3">
                        <div class="p-2"><img src="images/logo.jpg" alt="Logo" width="100PX"></div>
                        <div class="p-2">
                            <h2>WEBSITE BẤT ĐỘNG SẢN PPC</h2>
                        </div>

                    </div>

                </div>
                <div class="col-md-4 py-3">
                    <div class="h4">Management Full Contract</div>
                    <div class="h6" style="font-weight: bold;">
                    <a href="index.php">Dashboard/Management Full Contract/ Add Full Contract/</a>
                    
                    </div>
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
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="h2" style="font-size: 20px;"><u>Add Full Contract</u></div>
                </div>
                <div class="col-md-3 mx-auto">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Search"
                            aria-describedby="searchButton">
                        <button class="btn btn-primary" type="button" id="searchButton">Search</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="mymaincontent">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex flex-column align-items-center mb-3">
                        <div class="p-2"><img src="images/user.jpg" alt="Logo" style="width: 250px;"></div>
                        <div class="p-2">
                            <h2 style="font-size: 20px; color: orange; margin: 0; margin-top: -10px;">John Doe</h2>
                        </div>
                        <div class="p-2">
                            <h2 style="font-size: 20px; color: black; margin: 0;">Sales</h2>
                        </div>

                    </div>

                </div>
                <div class="col-md-3">
                    <div class="p-2" style="color: blue;font-size: 20px;"><b>Real Estate PPC</b></div>

                </div>

            </div>

    </section>
    <section class="body">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <p><a href="index.php"><b>Dashboard</b></a></p>
                    <p><a href="index.php"><b>Manage Property</b></a></p>
                    <p><a href="index.php"><b>Manage Full Contract</b></a></p>
                </div>
                <div class="col-md-9">
                    <form action="xulyhopdong.php" id="form" class="form" method="post">
                        <h2 style="text-align: center;"> Add new Contract</h2> <br> <br>
                        <div class="form-group">
                            <input type="text" id="txt_name" name="txt_name" class="form-input" placeholder="Full Name"
                                aria-describedby="input-username" />
                            <input type="text" class="form-input" id="txt_mahd" name="txt_mahd" placeholder="Contact ID" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-input" id="txt_namsinh" name="txt_namsinh" placeholder="Year Of Birth" />
                            <input type="text" class="form-input" id="txt_mabds" name="txt_mabds" placeholder="Propety ID" disabled>
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-input" id="txt_ssn" name="txt_ssn" placeholder="CCCD" />
                            <input type="text" class="form-input" id="txt_gia" name="txt_gia" placeholder="Price" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-input" id="txt_diachi" name="txt_diachi" placeholder="Address" />
                            <input type="text" class="form-input" id="txt_deposit" name="txt_deposit" placeholder="Deposit" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="text" class="form-input" id="txt_sdt" name="txt_sdt" placeholder="Mobile" />
                            <input type="text" class="form-input" id="txt_remain" name="txt_remain" placeholder="Remain" >
                        </div>
                        <br>
                        <div class="form-group">
                            <input type="date" class="form-input" id="txt_ngayhopdong" name="txt_ngayhopdong" placeholder="Date of contract" />
                            <input type="text" class="form-input" id="txt_trangthai" name="txt_trangthai" placeholder="Status" > <br>
                            <td>
                                <input type="radio" id="txt_trangthai_0" name="txt_trangthai" value="0">Đã hoàn thành
                                <input type="radio" id="txt_trangthai_1" name="txt_trangthai" value="1">Chưa hoàn thành
                            </td>
            
                            <tr>
                                <td class="form-group" align="center">
                                    <input type="submit" id="btn" name="btnSave" value="Save">
                                </td>
                            </tr>
                        </div>
                        </p>
                        
                    </form>
                </div>
            </div>

        </div>
    </section>
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-9">
                    
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
                <div class="col-md-8">

                </div>
                <div class="col-md-1 d-flex align-items-center">
                    <p class="m-0 me-2">Language</p>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            English
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#">Vietname</a></li>

                        </ul>
                    </div>
                </div>
                <p> &copy; 2023 Copyright by Team6A+ --- TEAM 10 </p>
            </div>
        </div>
        
    </section>






</body>

</html>

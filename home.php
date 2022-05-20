<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../home/css/home.css">
    <link rel="stylesheet" type="text/css" href="../function/css/information.css">
    <link rel="stylesheet" type="text/css" href="../function/css/business.css">
    <link rel="stylesheet" type="text/css" href="../function/css/user.css">
    <!-- <link rel="stylesheet" type="text/css" href="../function/css/streering_document.css"> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="../function/js/generalInformation.js"></script>
    <script src="../function/js/business.js"></script>
        <script src="../function/js/user.js"></script>

    <title>Document</title>
</head>
<body>
    <div class="main">
        <div class="header">
           <div class="header-core">
               <div class="header-core--title">
                   <div class="header-core--title_img">
                       <img src="../img/logo-humg1.png" style="width :65px;">
                   </div>
                   <div class="header-core--title_content">
                       <h1>Quản lý đoàn viên</h1>
                   </div>
               </div>
               
               <div class="header-core--function">
                   <div class="function-generalInformation function1">
                       <div class="generalInformation">THÔNG TIN CHUNG</div>
                       <i class="fa-solid fa-chevron-down" style="font-size:7px;margin-top:3px;"></i>
                   </div>
                  <div class="function-business function1">   <!-- Nghiệp vụ -->
                       <div class="business">NGHIỆP VỤ QUẢN LÝ ĐOÀN VIÊN</div>
                       <i class="fa-solid fa-chevron-down" style="font-size:7px;margin-top:3px;"></i>
                   </div>
                   <div class="function-steering_document function1">   <!-- Nghiệp vụ -->
                       <div class="steering_document">VĂN BẢN CHỈ ĐẠO</div>
                       <i class="fa-solid fa-chevron-down" style="font-size:7px;margin-top:3px;"></i>
                   </div>
                   <div class="function-user function1 ">
                       <i class="fa-solid fa-user function-user_item"></i>
                   </div>
            
               </div>
           </div>
        </div>


        <!-- Thông tin chung -->
        <div class="dropdown-function-generalInformation">
            <div class="function-generalInformation__overlay">
                <div class="dropdow-menu_generalInformation">
                    <div class="layer-menu_generalInformation">
                        <div class="listOfMembers general-information">
                            <a href="">Danh sách đoàn viên</a>
                        </div>
                        <div class="informationMenbers general-information">
                            <a href="">Thông tin đoàn viên</a>
                        </div>
                        <div class="revenueTracking general-information">
                            <a href="">Theo dõi thu chi đoàn phí</a>
                        </div>
                        <div class="executiveBoard general-information">
                            <a href="">Ban chấp hành</a>
                        </div>
                    </div>
                </div>
            
            </div>
        </div>

        <!-- Nghiệp vụ quản lý đoàn viên -->
        <div class="dropdown-function-business">
            <div class="function-business__overlay">
                <div class="dropdow-menu_business">
                    <div class="layer-menu_business">
                        <div class="deleteMembers general-business">
                            <a href="">Xóa đoàn viên</a>
                        </div>
                        <div class="membershipAssessment general-business">
                            <a href="">Đánh giá xếp loại đoàn viên</a>
                        </div>
                        <div class="reward-and-disciplinerevenueTracking general-business">
                            <a href="../function/khen_ky/danhsachkhen_ky.php">Khen thưởng và kỷ luật</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Cascc văn bản chỉ đạo -->
        <!-- <div class="dropdown-function-steering_document">
            <div class="function-business__overlay">
                <div class="dropdow-menu_business">

                    
                </div>
            </div>
        </div> -->

        <!-- Menu đăng nhập -->
        <div class="dropdown-user">
            <div class="dropdown-user-overlay">
                <div class="dropdown-menu-user">
                    <div class="layer-menu-user">
                        <div class="header-change--user general-information">
                            <a href="">Đổi mật khẩu</a>
                        </div>
                        <div class="header-changer-password general-information">
                            <a href="../user/logout.php">Đăng xuất</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    
</body>
</html>
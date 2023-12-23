<?php
    include ('admin/config/config.php');
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header('Location: login.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"
    />
    <link rel="stylesheet" href="style.css">
    <title>Quản lý thiết bị</title>
</head>
<body>
    <?php
        include ('admin/config/config.php');
    ?>
    <div class="sidebar">
      <div class="logo-details">
        <img src="image/logo-dark.png" alt="">
        <div class="logo_name">Việt Đan JSC</div>
        <i class="bx bx-menu" id="btn"></i>
      </div>
      <ul class="nav-list">
        <!-- <li>
          <i class="bx bx-search"></i>
          <form action="index.php?quanly=tim" method="post">
            <input type="text" name="timkiem" placeholder="Tìm kiếm..." autocomplete="off"/>
          </form>
          <span class="tooltip">Tìm kiếm</span>
        </li> -->
        <li>
          <a href="index.php">
            <i class="bx bx-grid-alt"></i>
            <span class="links_name">Trang chủ</span>
          </a>
          <span class="tooltip">Trang chủ</span>
        </li>
        <li>
          <a href="index.php?quanly=lietkenhap">
            <i class='bx bx-file'></i>
            <span class="links_name">Quản lý phiếu nhập</span>
          </a>
          <span class="tooltip">Quản lý phiếu nhập</span>
        </li>
        <li>
          <a href="index.php?quanly=lietkesua">
            <i class='bx bxs-wrench'></i>
            <span class="links_name">Quản lý phiếu sửa</span>
          </a>
          <span class="tooltip">Quản lý phiếu sửa</span>
        </li>
        <li>
          <a href="index.php?quanly=doitac">
            <i class="fa-regular fa-handshake"></i>
            <span class="links_name">Quản lý đối tác</span>
          </a>
          <span class="tooltip">Quản lý đối tác</span>
        </li>
        <li>
          <a href="#">
            <i class="bx bx-pie-chart-alt-2"></i>
            <span class="links_name">Biểu đồ thống kê</span>
          </a>
          <span class="tooltip">Biểu đồ thống kê</span>
        </li>
        <li class="profile">
          <div class="profile-details">
            <img src="image/user.png" alt="profileImg" style="background-size: cover; background-repeat: no-repeat;"/>
            <div class="name_job">
              <div class="name"><?php echo $_SESSION['dangnhap'] ?></div>
              <div class="job">
                  <?php
                    if($_SESSION['dangnhap'] == 'admin@vd.com'){
                      echo "Quản lý";
                    }
                    else{
                      echo "Nhân viên";
                    }
                  ?>
              </div>
            </div>
          </div>
          <?php
              if(isset($_GET['dangxuat']) && $_GET['dangxuat']==1){
                unset($_SESSION['dangnhap']);
                header('Location: login.php');
              }
          ?>
          <div class="logout">
            <a href="index.php?dangxuat=1"><i class="bx bx-log-out" id="log_out"></i></a>
          </div>
        </li>
        </li>
      </ul>
    </div>

    <section class="home">
        <div class="admin">
            <?php
                include ('admin/main.php');
            ?>
        </div>
    </section>

    <script src="main.js"></script>
    
</body>
</html>

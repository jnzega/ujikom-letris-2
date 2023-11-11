<?php 
session_start();
if(empty($_SESSION['nis'])){ ?>
<script type="text/javaScript">
  window.location.assign('loginPage.php');
</script>
<?php } ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Masuk</title>
    <link rel="stylesheet" href="style/style.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
        <div class="logo_name">Peduli Diri</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="?url=dashboard">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Dashboard</span>
        </a>
         <span class="tooltip">Dashboard</span>
      </li>
     <li>
       <a href="?url=inputData">
         <i class='bx bx-pie-chart-alt-2' ></i>
         <span class="links_name">Input Data</span>
       </a>
       <span class="tooltip">Input Data</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <div class="name_nis">
             <div class="name"><?php echo $_SESSION['nama_lengkap'];?></div>
             <div class="nis"><?php echo $_SESSION['nis'];?></div>
           </div>
         </div>
         <a href="functions/logout.php"><i class='bx bx-log-out' id="log_out" ></i></a>
     </li>
    </ul>
  </div>
  <section class="home-section">
      <?php
        if(!empty(@$_GET['url'])){
            switch (@$_GET['url']) {
                case 'inputData';
                    include'functions/inputData.php';
                    break;
                case 'dashboard';
                  echo "<div class=\"text\">Dashboard Data Jadwal Kegiatan PKL</div>";
                  include 'functions/dashboard.php';
                    break;
                default:
                    echo "<h3>Halaman Tidak Ditemukan</h3>";
                    break;
            }
        } else {
          echo "<div class=\"text\">Dashboard Data Jadwal Kegiatan PKL</div>";
          include 'functions/dashboard.php';
        }
      ?>
  </section>
  <script>
  let sidebar = document.querySelector(".sidebar");
  let closeBtn = document.querySelector("#btn");
  let searchBtn = document.querySelector(".bx-search");

  closeBtn.addEventListener("click", ()=>{
    sidebar.classList.toggle("open");
    menuBtnChange();//calling the function(optional)
  });

  searchBtn.addEventListener("click", ()=>{ // Sidebar open when you click on the search iocn
    sidebar.classList.toggle("open");
    menuBtnChange(); //calling the function(optional)
  });

  // following are the code to change sidebar button(optional)
  function menuBtnChange() {
   if(sidebar.classList.contains("open")){
     closeBtn.classList.replace("bx-menu", "bx-menu-alt-right");//replacing the iocns class
   }else {
     closeBtn.classList.replace("bx-menu-alt-right","bx-menu");//replacing the iocns class
   }
  }
  </script>
</body>
</html>
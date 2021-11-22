<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/sidebar.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
  <body>
    <?php include "../proses/koneksi.php";
          $qry_user=mysqli_query($conn,"select * from user");
          session_start();
    ?>
    <div class="sidebar close">
      <div class="logo-details">
        <i class="fab fa-contao"></i>
        <span class="logo_name">Dashboard</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="user_dashboard.php">
            <i class="fas fa-users"></i>
            <span class="link_name">User</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="user_dashboard.php">User</a></li>
          </ul>
        </li>
        <li>
          <a href="produk_dashboard.php">
          <i class="fas fa-chart-bar"></i>
            <span class="link_name">Detail Product</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Detail Product</a></li>
          </ul>
        </li>
        <li>
          <a href="tambah_produk.php">
          <i class="fas fa-cart-plus"></i>
            <span class="link_name">Tambah Product</span>
          </a>
          <ul class="sub-menu blank">
            <li><a class="link_name" href="#">Tambah Product</a></li>
          </ul>
        </li>
        <li>
          <div class="profile-details">
            <div class="profile-content">
            </div>
            <div class="name-job">
              <div class="profile_name"><?=$_SESSION['nama']?></div>
            </div>
            <a href="../proses/logout.php"><i class="fas fa-sign-out-alt"></i></a>
          </div>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <div class="home-content">
        <i class="fas fa-bars"></i>
        <span class="text">Cheva Shop</span>
      </div>
    </section>
    <script>
      let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e) => {
          let arrowParent = e.target.parentElement.parentElement; //selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
        });
      }
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".fa-bars");
      console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", () => {
        sidebar.classList.toggle("close");
      });
    </script>
  </body>
</html>
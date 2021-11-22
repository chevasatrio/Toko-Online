<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../asset/css/login.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Masuk" class="btn solid" />
          </form>
          <form action="../proses/proses_login.php" method="post" class="sign-in-form">
            <h2 class="title">Masuk</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input type="submit" name="login" value="Masuk" class="btn solid" />
          </form>

          <form
            action="../proses/proses_register.php"
            method="post"
            class="sign-up-form"
          >
            <h2 class="title">Daftar</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="nama" placeholder="Nama" />
            </div>
            <div class="input-field">
              <i class="fas fa-at"></i>
              <input type="email" name="email" placeholder="email" />
            </div>
            <div class="input-field">
              <i class="fas fa-phone-alt"></i>
              <input type="tel" name="telp" placeholder="Telephone" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" />
            </div>
            <input
              type="submit"
              name="simpan"
              value="Daftar"
              class="btn"
              value="Daftar"
            />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Kalian Pengguna Baru ?</h3>
            <p>
              Yuk, buruan daftar dan berbelanja dengan mudah, hemat, cepat, dan
              dimana saja
            </p>
            <button class="btn transparent" id="sign-up-btn">Daftar</button>
          </div>
          <img src="../asset/image/login.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah Memiliki Akun ?</h3>
            <p>
              Jika kalian sudah memiliki akun, kalian bisa masuk melalui tombol
              dibawah ini
            </p>
            <button class="btn transparent" id="sign-in-btn">Masuk</button>
          </div>
          <img src="../asset/image/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../asset/js/login.js"></script>
  </body>
</html>

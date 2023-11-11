<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration Form</title>
  <!---Custom CSS File--->
  <style>
    /* Import Google font - Poppins */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
    }
    body{
    min-height: 100vh;
    width: 100%;
    background: #11101D;
    }
    .container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    max-width: 430px;
    width: 100%;
    background: #fff;
    border-radius: 7px;
    box-shadow: 0 5px 10px rgba(0,0,0,0.3);
    }
    .container .registration{
    display: none;
    }
    #check:checked ~ .registration{
    display: block;
    }
    #check:checked ~ .login{
    display: none;
    }
    #check{
    display: none;
    }
    .container .form{
    padding: 2rem;
    }
    .form header{
    font-size: 2rem;
    font-weight: 500;
    text-align: center;
    margin-bottom: 1.5rem;
    }
    .form input{
    height: 60px;
    width: 100%;
    padding: 0 15px;
    font-size: 17px;
    margin-bottom: 1.3rem;
    border: 1px solid #ddd;
    border-radius: 6px;
    outline: none;
    }
    .form input:focus{
    box-shadow: 0 1px 0 rgba(0,0,0,0.2);
    }
    .form a{
    font-size: 16px;
    color: #009579;
    text-decoration: none;
    }
    .form a:hover{
    text-decoration: underline;
    }
    .form input.button{
    color: #fff;
    background: #11101D;
    font-size: 1.2rem;
    font-weight: 500;
    letter-spacing: 1px;
    margin-top: 1.7rem;
    cursor: pointer;
    transition: 0.4s;
    }
    .form input.button:hover{
    background: #009579;
    }
    .signup{
    font-size: 17px;
    text-align: center;
    }
    .signup label{
    color: #009579;
    cursor: pointer;
    }
    .signup label:hover{
    text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="container">
    <input type="checkbox" id="check">
    <div class="login form">
      <header>Selamat Datang</header>
      <form method="post" action="functions/login.php">
        <input name="nama_lengkap" required type="text" placeholder="Masukkan Nama Lengkap">
        <input name="nis" type="text" required placeholder="Masukkan Nomor Induk Siswa">
        <input type="submit" class="button" value="Masuk">
      </form>
      <div class="signup">
        <span class="signup">Belum memiliki akun?
         <label for="check">Daftar</label>
        </span>
      </div>
    </div>
    <div class="registration form">
      <header>Pendaftaran</header>
      <form method="post" action="functions/register.php">
        <input name="nama_lengkap" required type="text" placeholder="Daftarkan Nama Lengkap Siswa">
        <input name="nis" type="text" required placeholder="Daftarkan Nomor Induk Siswa">
        <input type="submit" class="button" value="Daftar">
      </form>
      <div class="signup">
        <span class="signup">Sudah terdaftar?
         <label for="check">Masuk</label>
        </span>
      </div>
    </div>
  </div>
</body>
</html>
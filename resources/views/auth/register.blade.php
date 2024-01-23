
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Laporkan Saja!</title>
   <link rel="stylesheet" href="css/styleLogin.css">
   @include('sweetalert::alert')
</head>
<body>
<div class="form-container">
                <form action="{{route('register')}}" method="post" >
                  <h1 style="color: #3498db;">REGISTRASI</h1>
                  @csrf
                    <input type="text" class="box" name="name" id="name" placeholder="Nama" required><br>
                    <input type="text" class="box" name="username" id="username" placeholder="Username" required><br>
                    <input type="email" class="box" name="email" id="floatingInput" placeholder="nama@gmail.com" required><br>
                    <input type="password" class="box" name="password" id="floatingPassword" placeholder="Password" required><br>
                    <input type="password" class="box" name="password-confirmation" id="floatingPassword" placeholder="Konfirmasi Password" required><br>
                    <center><input class="btn" type="submit"></input></center>
                  <p>Sudah punya akun ? || <a  style="color : #3498db" href="/login" > Login </a></p>
                </form>
              </div>
      </body>
</html>
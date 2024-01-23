
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
                <form action="{{route('postlogin')}}" method="post" >
                  <img src="img/logo.png" alt="" width="390px">
                  <h1 style="color: #3498db;">LOGIN</h1>
                  @csrf
                  @if(session()->has('status'))
                    <div class="alert alert-succes">
                      {{ session()->get('status') }}
                    </div>
                  @endif
                    <input type="text" class="box" name="username" id="floatingPassword" placeholder="Username" required autocomplete="off"><br>
                    <input type="password" class="box" name="password" id="floatingPassword" placeholder="Password" required>
                    <center><input class="btn" type="submit"></input></center>
                  <p>Belum punya akun ? || <a  style="color : #3498db" href="/register" > Registrasi </a></p>
                </form>
              </div>
      </body>
</html>
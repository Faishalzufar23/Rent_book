<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>1001 Library</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @vite('resources/sass/app.scss')
</head>
<body>
    @include('layout.nav')
    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login aaaaa</title>


      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <style>
        body {
          background-color: #f9f9f9;
        }

        .login-container {
          max-width: 400px;
          margin: 0 auto;
          padding: 30px;
          border: 1px solid #e0e0e0;
          border-radius: 5px;
          background-color: #fff;
          box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
          margin-top: 200px;
        }

        .login-header {
          text-align: center;
          margin-bottom: 30px;
        }

        .login-header h2 {
          color: rgb(0, 0, 0);
        }

        .form-group {
          margin-bottom: 20px;
        }

        .form-group label {
          font-weight: bold;
        }

        .form-control {
          border-color: #ccc;
        }

        .btn-login {
          background-color: #ffc400;
          border-color: #d8a400;
          color: #fff;
        }

        .btn-login:hover,
        .btn-login:focus {
          background-color: #b58600;
          border-color: #b58600;
          color: #fff;
        }
      </style>
    </head>

    <body>



      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="login-container">
              <div class="login-header">
                <h2>Login</h2>
              </div>
              <form>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" placeholder="Enter your username">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Enter your password">
                </div>
                <button type="submit" class="btn btn-login btn-block">Login</button>
              </form>
            </div>
          </div>
        </div>
      </div>



    </body>
    </html>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container-fluid">
          <a class="navbar-brand" href="D:\xampp\htdocs\department\home.php">RCSS</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="D:\xampp\htdocs\department\index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://rcssdepartment.herokuapp.com/contact.php">Contact</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="D:\xampp\htdocs\department\gallary.php">Gallery</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="D:\xampp\htdocs\department\department.php">Department</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="D:\xampp\htdocs\department\about.php">About us</a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img height="800px" src="https://www.rajagiritech.ac.in/home/images/02.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="800px" src="data:image/jpeg;base64,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" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img height="800px" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT5nYJDdChOUv2V7P9mvqMPvlkdl8kg2MfbIg&usqp=CAU" class="d-block w-100" alt="...">
                      </div>
                    </div>
                  </div>

              </div>
          </div>
      </div>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                <table class="table table-borderless">
                  <h3>Login</h3>
                  <h4>--------</h4>
                    <tr>
                        <td>User-name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-success">Login</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-12 col-md-6 col-lg-6">
                <table class="table table-borderless">
                  <h3>Sign up </h3>
                  <h3>--------</h3>
                    <tr>
                        <td>First name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email-id</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Confirm password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-danger">Sign up</button></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>
<?php use App\Product;
use App\Category;
use App\User;?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
    crossorigin="anonymous">
  
  <link rel="stylesheet" href="../css/bootstrap.css">
  <style>
  </style>
  <title></title>
</head>

<body>
  <!-- HEADER -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.blade.php" class="navbar-brand">E-Commerce</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
     

        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a href="card.blade.php " class="nav-link">
              <i class="fab fa-cc-visa"></i> Card
            </a>
          </li>
          <li class="nav-item ">
            <a href="login.blade.php" class="nav-link">
              <i class="fas fa-user-times"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <section id="card" class="my-3">
      <div class="container">
          <div class="row">
              <div class="col">
                <div class="card">
                    <div class="card-header">
                      <h4>Products</h4>
                    </div>
                    <table class="table table-striped">
                      <thead class="thead-dark">
                        <tr>
                          <th>Name</th>
                          <th>price</th>
                          <th>Quantity</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                        <form action="/Buy/{{$asd->id}}" method="POST" enctype="multipart/form-data">
            @csrf                          <td name="name" value="{{$asd->name}}">{{$asd->name}}</td>
                          <td name="price" value="{{$asd->price}}">{{$asd->price}}</td>
                          <td><input type ="text" name="quantity" id="price" class="form-control" value="1" ></td>
        
                        
                          <td>
                            <a href="\home1.blade.php" class="btn btn-secondary">
                              <i class="fas fa-angle-double-right thead-dark"></i> Delete
                            </a>
                          </td>
                        </tr>
                       
                        
                      </tbody>
                    </table>
                  </div>
                  <a href="\home1.blade.php" class="btn btn-light btn-block my-2">
                    <i class="fas fa-arrow-left"></i> Back To Market
                  </a>
                  <input type="submit" href="\Buy\{id}" class="btn btn-light btn-block my-2" value="BUY">
                    </form>
                </div>
              </div>
          </div>
      </div>
  </section>

  <footer id="main-footer" class="bg-dark text-white mt-5 p-5">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead text-center">
            Copyright &copy; Team22
            
          </p>
        </div>
      </div>
    </div>
  </footer>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
  crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
  crossorigin="anonymous"></script>


<script>
  // Get the current year for the copyright
  $('#year').text(new Date().getFullYear());
</script>
</body>

</html>
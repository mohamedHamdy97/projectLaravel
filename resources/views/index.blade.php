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
 
  <title>E-Commerce</title>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
        <div class="container">
          <a href="index.blade.php" class="navbar-brand">E-Commerce</a>
          <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
              <li class="nav-item px-2">
                <a href="index.blade.php" class="nav-link active">Dashboard</a>
              </li>
              <li class="nav-item px-2">
                <a href="posts.blade.php" class="nav-link">Product</a>
              </li>
              <li class="nav-item px-2">
                <a href="categories.blade.php" class="nav-link">Categories</a>
              </li>
              <li class="nav-item px-2">
                <a href="users.blade.php" class="nav-link">Users</a>
              </li>
            </ul>
    
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown mr-3">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-user"></i> Welcome {{auth()->user()->name}}
                </a>
                <div class="dropdown-menu">
                  <a href="profile.blade.php/{{auth()->user()->id}}" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Profile
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="login" class="nav-link">
                  <i class="fas fa-user-times"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      
  <!-- HEADER -->
  <header id="main-header" class="py-2 bg-primary text-white">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h1>
            <i class="fas fa-cog"></i> Dashboard</h1>
        </div>
      </div>
    </div>
  </header>
      <!-- ACTIONS -->
  <section id="actions" class="py-4 mb-4 bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-3 mb-1">
          <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#addPostModal">
            <i class="fas fa-plus"></i> Add Product
          </a>
        </div>
        <div class="col-md-3 mb-1">
          <a href="#" class="btn btn-success btn-block" data-toggle="modal" data-target="#addCategoryModal">
            <i class="fas fa-plus"></i> Add Category
          </a>
        </div>
       
      </div>
    </div>
  </section>
  
  <!-- POSTS -->
  <section id="posts">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="card">
            <div class="card-header">
              <h4>History</h4>
            </div>
            <table class="table table-striped">
              <thead class="thead-dark">
                <tr>
                  <th>User_ID</th>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Total Price</th>
                  <th></th>
                </tr>
                
                @foreach ($admin as $item )
                                 <tr>
                                    <?php  $pr=Product::find($item->product_id);
                                    $user=User::find($item->user_id);?>
                                    <td scope="row">{{$user->name}}</td>
                                    <td scope="row">{{$pr->name}}</td>
                                    <td>{{$item->number_of_product}}</td>
                                    <td>{{$item->Total}}</td>
                                    </tr>
                                 @endforeach
              </thead>
              <tbody>
                
              </tbody>
            </table>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card text-center bg-primary text-white mb-3">
            <div class="card-body">
              <h3>Product</h3>
              <h4 class="display-4">
                <i class="fas fa-pencil-alt"></i>  <?php $pro=Product::all();?>{{count($pro)}}
              </h4>
              <a href="posts.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-success text-white mb-3">
            <div class="card-body">
              <h3>Categories</h3>
              <h4 class="display-4">
                <i class="fas fa-folder"></i> <?php $catt=Category::all();?>{{count($catt)}}
              </h4>
              <a href="categories.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>

          <div class="card text-center bg-warning text-white mb-3">
            <div class="card-body">
              <h3>Users</h3>
              <h4 class="display-4">
                <i class="fas fa-users"></i> <?php $user=User::all();?>{{count($user)}}
              </h4>
              <a href="users.blade.php" class="btn btn-outline-light btn-sm">View</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
    <!-- FOOTER -->
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
<div>
@include('asd')
</div>

   <!-- MODALS -->

  <!-- ADD POST MODAL -->
  <div class="modal fade" id="addPostModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title">Add Product</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <form method="post" action="{{route('asd2')}}" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
              <label for="title">ID</label>
              <input type="text"  name="id" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Name</label>
              <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="title">Price</label>
              <input type="text" name="price" class="form-control">
            </div>
            <div class="form-group">
              <label for="title"> Quantity</label>
              <input type="text"  name="quantity" class="form-control">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <input type="text" name="catid" class="form-control">
            </div>
            <div class="form-group">
              <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" name="image" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
              </div>
              <small class="form-text text-muted">Max Size 3mb</small>
            </div>
            <div class="form-group">
              <label for="body">Short description</label>
              <textarea  name ="desc" class="form-control"></textarea>
            </div>
        
        </div>
        <div class="modal-footer">
          <input type="submit" class="btn btn-primary" value="Save Changes">
        </div>
      </div>
      </form>
    </div>
  </div>

  <!-- ADD CATEGORY MODAL -->
  <div class="modal fade" id="addCategoryModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Add Category</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('asd')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">

              <label for="title">Title</label>
              <input type="text" name ="catgory_name" class="form-control">
            </div>
            <label for="image">Upload Image</label>
              <div class="custom-file">
                <input type="file" name ="catgory_image" class="custom-file-input" id="image">
                <label for="image" class="custom-file-label">Choose File</label>
              </div>
        </div>
       
        <div class="modal-footer">
          <input type="submit" class="btn btn-success"  value="Save Changes">
        </div>
        
        </form>
        
      </div>
    </div>
  </div>

  <!-- ADD USER MODAL -->
  <div class="modal fade" id="addUserModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-warning text-white">
          <h5 class="modal-title">Add User</h5>
          <button class="close" data-dismiss="modal">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control">
            </div>
            <div class="form-group">
              <label for="password2">Confirm Password</label>
              <input type="password" class="form-control">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button class="btn btn-warning" data-dismiss="modal">Save Changes</button>
        </div>
      </div>
    </div>
  </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
    crossorigin="anonymous"></script>
  <script src="https://cdn.ckeditor.com/4.9.2/standard/ckeditor.js"></script>

  <script>
    // Get the current year for the copyright

    CKEDITOR.replace('editor1');
  </script>
</body>

</html>
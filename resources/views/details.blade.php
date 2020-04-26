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
                  <i class="fas fa-user"></i> Welcome Glal
                </a>
                <div class="dropdown-menu">
                  <a href="profile.blade.php" class="dropdown-item">
                    <i class="fas fa-user-circle"></i> Profile
                  </a>
                </div>
              </li>
              <li class="nav-item">
                <a href="login.blade.php" class="nav-link">
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
            Product One</h1>
        </div>
      </div>
    </div>
  </header>
    <!-- ACTIONS -->
    <section id="actions" class="py-4 mb-4 bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <a href="\index.blade.php" class="btn btn-light btn-block mb-2">
                <i class="fas fa-arrow-left"></i> Back To Dashboard
              </a>
            </div>
           
            <div class="col-md-3">
              <a href="\pro\{{$proid->id}}" class="btn btn-danger btn-block mb-2">
                <i class="fas fa-trash"></i> Delete Post
              </a>
            </div>
          </div>
        </div>
      </section>
    
      <!-- DETAILS -->
  <section id="details">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-header">
              <h4>Edit Product</h4>
            </div>
            <div class="card-body">
              <form  action="\details\{{$proid->id}}" method= "post">
              @csrf
                @method('put')
                
                <div class="form-group">
                  <label for="title">Name</label>
                  <input type="text" name="name" value="{{$proid->name}}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="title">Price</label>
                  <input type="text" name="price" value="{{$proid->price}}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="title"> Quantity</label>
                  <input type="text" name="quantity" value="{{$proid->quantity}}" class="form-control">
                </div>
                <div class="form-group">
                  <label for="category">Category</label>
                  <input type="text" name="catid" value="{{$proid->category_id}}" class="form-control">
                </div>
               
                <div class="form-group">
                  <label for="image">Upload Image</label>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image">
                    <label for="image" class="custom-file-label">Choose File</label>
                  </div>
                  <small class="form-text text-muted">Max Size 3mb</small>
                </div>
                <div class="form-group">
                  <label for="body">Short description</label>
                  <textarea name="editor1" class="form-control">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat culpa nam cumque voluptatum. Possimus recusandae porro architecto officiis illo dignissimos ratione aut officia reprehenderit! Iure cum numquam fugit doloremque quis ullam illo odit, odio voluptates non quisquam laboriosam consectetur quasi perspiciatis! Sapiente minus aperiam nobis molestias autem ut praesentium laudantium?</textarea>
                </div>
                <div class="col-md-3">

<input type="submit" class="btn btn-success" value="Save Changes">
              </form>
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
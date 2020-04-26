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
    .card{
        min-height: 500px;
        
    }
    .card img{
        height: 300px;
    }
  </style>
  <title></title>
</head>

<body>
  <nav class="navbar navbar-expand-sm navbar-dark bg-dark p-0">
    <div class="container">
      <a href="index.blade.php" class="navbar-brand">E-Commerce</a>
    </div>
  </nav>
  <section id="prodcut">
      <div class="container">
          <div class="row">
              <div class="col-md-4 my-3">
                <div class="card text-center">
                    <img class="card-img-top img-fluid"  src="../img/pc.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Web Development</h4>
                        <h5> products : 4</h5>
                       
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                        <a href="pro.blade.php" class="btn btn-dark d-block">show more</a>
                    </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                 <div class="card text-center">
                    <img class="card-img-top img-fluid"  src="../img/tc.jpeg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Tech Gadgets</h4>
                        <h5> products : 15</h5>
                       
                        <p class="card-text">
                            <small class="text-muted">Last updated 10 mins ago</small>
                        </p>
                        <a href="pro.blade.php" class="btn btn-dark d-block">show more</a>
                    </div>
                </div>
                </div>
                <div class="col-md-4 my-3">
                    <div class="card text-center">
                       <img class="card-img-top img-fluid"  src="../img/bs.jpg" alt="">
                       <div class="card-body">
                           <h4 class="card-title">Business</h4>
                           <h5> products : 4</h5>
                          
                           <p class="card-text">
                               <small class="text-muted">Last updated 15 mins ago</small>
                           </p>
                           <a href="pro.blade.php" class="btn btn-dark d-block">show more</a>
                       </div>
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



</body>

</html>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact</title>
       <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

  <link rel="stylesheet" href="style.css">
  </head>
  <body>
       <nav class="navbar fixed-top navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <span id="brand">JUBAER</span></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
       
      </ul>
    </div>
  </div>
</nav>
    <form style="margin-left: 2%;margin-top: 15px" action="contact1.php" method="post">
    <div class="form-floating mb-3">
  <input type="text"class="form-control" id="floatingInput" name="name" placeholder="Your first name.." required />
  <label for="floatingInput">Name </label> 
</div>     
  <div class="form-floating mb-3">
  <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
  <label for="floatingInput">Email address</label>
</div>
  <div class="form-floating">
  <textarea class="form-control" placeholder="Leave a comment here" name="message" id="floatingTextarea"></textarea>
  <label for="floatingTextarea">Message</label>
</div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>


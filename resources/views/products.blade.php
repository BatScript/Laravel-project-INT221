<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="app.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <script src="app.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@600&display=swap" rel="stylesheet">
    <title>{{$name}}</title>
</head>
<body>
    <div class="contents">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="logo">
            <div    class="logoimg">
                <img src="images/wm.png" alt="">
            </div>
            <div class="logotext">
                <h1 class = "text-center">Watermelon</h1>
                <p class="text-center">Quench your thirst of speed</p>
            </div>
        </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto" id="text">
                <li class="nav-item active">
                  <a class="nav-link active" href="/">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/wpad">wPad</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/wphone">wPhone</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="/wbook">wBook</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="/login">Join Us</a>
                </li>
              </ul>
            </div>
          </nav>
    </div>
    <div class=wPad-intro>
        <img src={{$src1}} alt="">
        <div class="txt">
            <h1><b>{{$name}} 2021</b></h1>
            <p>{{$srctxt1}}</p>
        </div>
    </div>
    <div class=wPad-feats>
        <div class="txt">
            <h1><b>Features</b></h1>
            <p>{{$srctxt2}}</p>
        </div>
        <img src={{$src2}} alt="">
    </div>
</body>
<footer>
    <div>
      <h3>Products</h3>
      <p>abcd</p>
      <p>efgh</p>
    </div>
    <div>
      <h3>Products</h3>
      <p>abcd</p>
      <p>efgh</p>
    </div>
    <div>
      <h3>Products</h3>
      <p>abcd</p>
      <p>efgh</p>
    </div>
    <div>
      <h3>Products</h3>
      <p>abcd</p>
      <p>efgh</p>
    </div>
</footer>
</html>
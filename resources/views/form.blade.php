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
    <title>Tell us</title>
</head>
<body>
  <h1 class="text-center"><b>Connect to us</b></h1>

    <form action="form" method="POST">
      @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input name ='First-name' type="text" id="form6Example1" class="form-control" />
              <label class="form-label" for="form6Example1">First name</label><br>
              <span style="color: red">@error('First-name'){{$message}}@enderror</span>
            </div>
          </div>
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form6Example2" class="form-control" />
              <label class="form-label" for="form6Example2">Last name</label>
            </div>
          </div>
        </div>
      
        <!-- Text input -->
      
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input name="E-mail" type="email" id="form6Example5" class="form-control" />
          <label class="form-label" for="form6Example5">Email</label><br>
          <span style="color: red">@error('E-mail'){{$message}}@enderror</span>
        </div>
      
        <!-- Number input -->
        <div class="form-outline mb-4">
          <input type="number" id="form6Example6" class="form-control" />
          <label class="form-label" for="form6Example6">Phone</label>
        </div>

        <div id="hide">
          <div class="form-outline mb-4">
            <input name="password" type="password" id="form6Example5" class="form-control" />
            <label class="form-label" for="form6Example5">Password</label><br>
            <span style="color: red">@error('E-mail'){{$message}}@enderror</span>
          </div>
      
        <!-- Message input -->
      
        <!-- Checkbox -->
        <div class="form-check d-flex justify-content-center mb-4">
          <input
            class="form-check-input me-2"
            type="checkbox"
            value=""
            id="form6Example8"
            checked
          />
          <label class="form-check-label" for="form6Example8"> Create an account?</label>
        </div>
      
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
      </form>
      
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  
  <style>
    body {
      margin: 0;
      font-family: "Source Sans Pro", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
    }

    .input-group-text {
      background-color: transparent;
      border-left: none;
      cursor: pointer;
    }

    .form-control {
      border-right: none;
    }
  </style>
</head>

<body>
<div class="container mt-3">
  <div class="row justify-content-center">
    <div class="col-sm-4">
      <div class="card ">
        <div class="card-header bg-primary text-white">
          <h3> LOGIN </h3>
        </div>
        <div class="card-body">
          <form action="{{ route('loginvalidate') }}" method="POST">
            @csrf
            <div class="mb-3 mt-3">
              <label for="email">Enter email:</label>
              <input type="text" class="form-control" id="email" name="email">
              @if($errors->has('email'))
              <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>

            <div class="mb-3 mt-3">
              <label for="password">Enter password:</label>
              <div class="input-group">
                <input type="password" class="form-control" id="password" name="password">
                <span class="input-group-text" id="togglePassword">
                  <i class="fa fa-eye"></i>
                </span>
              </div>
              @if($errors->has('password'))
              <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>

            <br/>
            <!-- all errors -->
            @if($errors->has('all'))
            <span class="text-danger">{{ $errors->first('all') }}</span>
            @endif
            <br/>

            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
              <input class="btn btn-success" type="submit" name="login" id="login" value="LOGIN" />
              <a href="" class="btn btn-danger"> CANCEL </a>
            </div>
            <br/>
            
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#password');

  togglePassword.addEventListener('click', function (e) {
    // Toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    
    // Toggle the eye icon
    this.querySelector('i').classList.toggle('fa-eye');
    this.querySelector('i').classList.toggle('fa-eye-slash');
  });
</script>

</body>
</html>

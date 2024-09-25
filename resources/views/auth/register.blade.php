<!DOCTYPE html>
 <html lang="en">
 <head>
   <title>REGISTER PAGE</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<style>
body {
    margin: 0;
    font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    text-align: left;
    background-color: #fff;
}
</style>

 <body>




 <div class="container mt-3">


   <div class="row justify-content-center">
        <div class="col-sm-4">
           <div class="card ">

               <div class="card-header bg-primary text-white"> <h3> REGISTER </h3>   </div>
               <div class="card-body">
               <form action="{{ route('registervalidate') }}" method="POST">
                    @csrf
                     <div class="mb-3 mt-3">
                   <label for="item_name">Enter Name:</label>
                   <input type="text" class="form-control" id="name"  name="name" >
                    @if ($errors->has('name'))
                   <span class="text-danger">{{ $errors->first('name') }}</span>
                   @endif

                   </div>
                   <div class="mb-3 mt-3">
                   <label for="item_name">Enter email:</label>
                   <input type="text" class="form-control" id="email"  name="email" >
                   @if ($errors->has('email'))
                   <span class="text-danger">{{ $errors->first('email') }}</span>
                   @endif



                   </div>

                   <div class="mb-3 mt-3">
                   <label for="item_price">Enter password:</label>
                   <input type="password" class="form-control" id="password"   name="password" >
                   @if ($errors->has('password'))
                   <span class="text-danger">{{ $errors->first('password') }}</span>
                   @endif

                  </div>
                  <br/>

                   <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                       <button class="btn btn-success" type="submit"   >REGISTER</button>
                       <a href="" class="btn btn-danger"  > CANCEL </a>
                     </div>
                     <br/>
                     <div class="d-flex justify-content-center">
                     <a class="btn btn-default text-center" href="{{ route('login') }}"> LOGIN INSTEAD</a>

                     </div>
                     </form>
               </div>



           </div>



        </div>



      </div>

 </div>


 </body>
 </html>

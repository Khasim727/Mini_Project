<!-- <!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Modal with PHP</title>
  <!-- Include Bootstrap CSS -->
  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">

  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">   
    <title>Ristorante Con Fusion: About Us</title>
    <link rel="shortcut icon" href="img/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
    
</head>
<body>  -->
   
  <div class="modal fade" id="login" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header head">
              <h5 class="modal-title modal-secondary" id="exampleModalLabel">Login</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <!-- inserting form here  -->
              <form action="database.php" method='post'>
                <div class="form-group row">
                    <div class="col-md-6">
                    <label for="idNo" class="form-label">ID Number:</label>
                        <input type="text" class="form-control" id="" name="id" placeholder="Enter Id Number">
                    </div>
                    <div class="col-md-6">
                    <label for="pwd" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter Sms Password">
                    </div>
                    
                </div>
                <br>
                 <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <button type="button" class="btn btn-secondary btn-sm ml-auto" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm ml-1">Sign in</button>  
                    </div>      
                 </div>
              </form>
            </div>
          </div>
        </div>
      </div>

  <!-- Include Bootstrap JavaScript -->
  <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html> -->

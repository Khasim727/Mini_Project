<!DOCTYPE html>
<html>
<head>
  <title>Responsive Background Image</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- including css here-->
    <link rel="stylesheet" href="style.css">
  
</head>
<body>
<div class="container d-flex justify-content-center align-items-center"
  style="overflow:hidden;position:relative;height:500px;">
  <form action="database.php" method="POST"  id="form"  style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);" 
  class="p-5 border rounded" style="max-width:600px;">
    <h2 class="text-center mb-4">Login</h2>
    <div class="mb-3">
      <label for="username" class="form-label text-primary">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Enter your username" name="id" required style="background-color:rgb(228, 99, 0);">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label text-primary">Password</label>
      <input type="password" class="form-control" id="password" placeholder="Enter your password" name="password" required>
    </div>
    <button type="submit" class="btn btn-success">Sign in</button>
  </form>
</div>

   <div id="particles-js"></div>

    

   <script src='https://code.jquery.com/jquery-1.11.1.min.js'></script><script  src="./script.js"></script>
</body>
</html>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <title>Welcome !</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://localhost:8080/ide-web/css/bootstrap.min.css">
  <script src="http://localhost:8080/ide-web/js/bootstrap.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
  <h1>Welcome to your Dashboard !</h1>
  <p style="margin-bottom:5px">Pick one of our programs that you</p> 
  <p>would like to try !</p> 
</div>
  
<div class="container">
  <div class="row">
    <div class="col-sm-4">
		<button class="btn btn-warning btn-lg btn-block" onclick="document.location = '<?php echo base_url('/shrtit/')?>'" style="outline:none; height:200px;">shrt.it</button>
    </div>
    <div class="col-sm-4">
		<button class="btn btn-primary btn-lg  btn-block" onclick="document.location = '<?php echo base_url('/calculator/')?>'" style="outline:none; height:200px;">Calculator</button>
    </div>
    <div class="col-sm-4"> 
		<button class="btn btn-danger btn-lg  btn-block" onclick="document.location = '<?php echo base_url('/vastream/')?>'" style="outline:none; height:200px;">VASTREAM</button>
    </div>
  </div>
</div>

</body>
</html>

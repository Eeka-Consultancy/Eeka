
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Cinzel" rel="stylesheet">
	<link rel="stylesheet" href="css/login.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="icon" href="logo/logo.png">
	<!-- <link rel="stylesheet" href="css/style.css"> -->
    <link rel="stylesheet" href="css/login.css">
    <script>
    $(document).ready(function () 
    {
  //called when key is pressed in textbox
      $("#quantity").keypress(function (e) 
        {
          //if the letter is not digit then display error and don't type anything
          if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) 
          {
            //display error message
            $("#errmsg").html("*Please enter number only").show();
               return false;
          }
          else if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which < 57)) 
          {
            $("#errmsg").fadeOut("slow");
          }
        });
    });
  </script>
</head>
<body>
<div class="container-fluid">
    <a class="navbar-brand" href="index.php" style="font-size: 30px;font-family:'Aldrich', sans-serif;">
        <img src="logo/logo.png" width="150px;" alt="">
    </a>
</div>
<!-- <nav class="navbar navbar-light fixed-top navbar-expand-md nav">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php" style="font-size: 30px;font-family:'Aldrich', sans-serif;">
        	<img src="logo/logo.png" width="150px;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto" id="nav-lang">
                <li class="nav-item">
                    <a class="nav-link scroll-link " href="index.html">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " href="#section-1">SERVICE</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " href="#section-2">CAREERS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " href="#section-3">CLIENTS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " href="#section-1">ABOUT US</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " style="margin-right: 10px;" href="#section-1">CONTACT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link scroll-link " style="margin-right: 10px;" href="login.html">LOGIN</a>
                </li>                                
                <li class="nav-item">
                    <a class="nav-link scroll-link btn btn-outline-primary" id="nav-btn" href="#section-4">Get Started</a>
                </li>
            </ul>
        </div>
    </div>
</nav> -->
<div class="container-fluid" style="margin-top: 10px;">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12 offset-xl-3 offset-md-3" style="background-color: white;">
            <p class="text-center" style="font-size: 30px; margin-top: 10px;color: black">REGISTER</p>
        </div>
    </div>
	<div class="row">        
		<div class="col-xl-3 col-md-4 col-sm-12 col-xs-12 offset-xl-3 offset-md-3" style="background-color: white;color: black;">
			<form action="" class="form-group">
				<label for="username">FIRST NAME</label>
				<input type="text" class="form-control" required>
				<label for="password">PASSWORD</label>
				<input type="password" class="form-control" required>
                <label for="password">E-MAIL ID</label>
                <input type="email" class="form-control" required>
                <br>
                GENDER
                <br>
                <input type="radio" name="gender" checked> MALE
                &nbsp;&nbsp;
                <input type="radio" name="gender"> FEMALE
                &nbsp;&nbsp;
                <input type="radio" name="gender"> OTHER				        
		</div>
        <div class="col-xl-3 col-md-4 col-sm-12 col-xs-12" style="background-color: white;color: black;">                        
                <label for="fname">LAST NAME</label>
                <input type="text" class="form-control" required>
                <label for="re-password">RE-PASSWORD</label>
                <input type="password" class="form-control" required>   
                <label for="password">PHONE NUMBER</label>
                <input type="text" class="form-control" id="quantity" required>                                
                <span id="errmsg" style="color: red;"></span>
                <label for="password">DATE OF BIRTH</label>
                <input type="date" class="form-control" id="quantity" required>
            </form>         
        </div>  
	</div>  
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12 offset-md-3" style="background-color: white;color: black;">
            <input type="checkbox"> REMEMBER ME
            <br><br>
            <input type="submit" name="submit" value="REGISTER" class="btn btn-outline-dark" style="margin-bottom: 20px;">
            <br>
            <a href="login.php" class="btn btn-outline-dark" style="margin-bottom: 20px;">GO TO LOGIN</a>
        </div>
    </div>  
</div>
</body>
</html>
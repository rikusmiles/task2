Skip to content
This repository
Search
Pull requests
Issues
Gist
 @rikusmiles
 Watch 0
  Star 0
  Fork 0 rikusmiles/task2
 Code  Issues 0  Pull requests 0  Projects 0  Wiki  Pulse  Graphs  Settings
Branch: master Find file Copy pathtask2/index.php
69bb32c  4 minutes ago
@rikusmiles rikusmiles My third commit
1 contributor
RawBlameHistory     69 lines (58 sloc)  2.48 KB
<!DOCTYPE html>
<html>
<head>
	<title>Project-Sign up page</title>
	<link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/login-style.css">
    <link rel="stylesheet" type="text/css" href="Bootstrap/css/animate.css">

</head>

<body>

  <div class="container">
    <div class="row">
      <div class="jumbotron">
    	  		<div class="form-group">
    	  		 <center>
    	  		 <h1>Sign up page</h1>
    	  		 </centre>
    	  	    </div>
      </div>
    	<div class="col-md-offset-4 col-sm-offset-4 col-xs-4 col-sm-4 col-md-4 col-lg-4">
    	  	<form action="" method="POST" class="form-horizontal" role="form">
    	  	
    	  	<div class="form-group">
    	  		<h2>Enter details</h2>
    	  	</div>


             <div class="form-group">
            	<label class="control-label animated bounceInDown">Email</label><br>
            	  <div class="col-sm-9">
            		<input type="email" name="" id="input" class="form-control animated bounceInDown" value="" required="required" pattern="" title="" placeholder="Email id">
            	  </div>
              </div>

             <div class="form-group">
            	<label class="control-label animated bounceInDown">Password</label><br>
            	 <div class="col-sm-9">
            		<input type="password" name="" id="password" class="form-control animated bounceInDown" value="" required="required" pattern="" title="" placeholder="Password">
            	 </div>
             </div>

             <div class="form-group">
            	<label class="control-label animated bounceInDown">Confirm Password</label><br>
            	 <div class="col-sm-9">
            		<input type="password" name="" id="confirm_password" class="form-control animated bounceInDown" value="" required="required" pattern="" title="" placeholder="Confirm Password">
            	 </div>
             </div>

             <div class="form-group">
            	<label class="control-label animated bounceInDown">Username</label><br>
            	 <div class="col-sm-9">
            		<input type="text" name="" id="input" class="form-control animated bounceInDown" value="" required="required" pattern="" title="" placeholder="Choose username">
            	 </div>
             </div>

    	  	 <div class="form-group">
    	  		<div class="col-sm-9">
    	  			<button type="submit" class="btn btn-primary">Submit</button>
    	  		</div>
    	  	 </div>

    	    </form>
        </div>
    </div>
  </div>
</body>
</html>
Contact GitHub API Training Shop Blog About
© 2016 GitHub, Inc. Terms Privacy Security Status Help
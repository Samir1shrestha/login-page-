<?php 
// include('header.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Live Football</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

<script src="js/comments.js"></script>
<!-- jQuery -->
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
		  <a href="./../../newsfeed/index.html" ><i style="padding: 10px;" class="fa fa-home desktop-home fa-2x"></i></a>
        </div>
        <div style="background-color:#222222 " class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
		  <li class="active" style="background-color:purple ;"><a href="./index.php">Football</a></li>
            <li ><a style="color:aliceblue" href="./Basketball.php">Basketball</a></li>
            <li ><a style="color:aliceblue" href="./running.php">Running</a></li>
            <li ><a style="color:aliceblue" href="./swimming.php">Swimming</a></li>
          </ul>
         
        </div><!--/.nav-collapse -->
      </div>
    </div>

	<!-- youtube video -->
	<div class="container">
		<div style="margin:0px 20px 0px 20px ;" class="row">
			<div class="col-lg-12">
			<iframe width="1060" height="515" src="https://www.youtube.com/embed/MmIPJoLuwUg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>			</div>
		</div>

		<!-- name of match -->
		<div class="match">
			<h1>Nepal Vs Bangladesh <span style="background-color: red;" class="badge badge-danger">live</span></h1>
		</div>
	</div>
	
	<div class="container" style="min-height:500px;">


	<div class=''>
	</div>

<!-- <title>phpzag.com : Demo Comment System with Ajax, PHP & MySQL</title> -->
<!-- <script src="js/comments.js"></script> -->
<?php 
// include('football.php');
?>
	<div class="container">	
		<div class="row">
			<div class="col-lg-6">
			<h2> Comment</h2>		
		<br>		
		<form method="POST" id="commentForm">
			<div class="form-group">
				<input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required />
			</div>
			<div class="form-group">
				<textarea name="comment" id="comment" class="form-control" placeholder="Enter Comment" rows="5" required></textarea>
			</div>
			<span id="message"></span>
			<br>
			<div class="form-group">
				<input type="hidden" name="commentId" id="commentId" value="0" />
				<input type="submit" name="submit" id="submit" class="btn btn-primary" value="Post Comment" />
			</div>
		</form>		
			</div>
		</div>
	
		
		<br>
		<div id="showComments"></div>   
</div>	
<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body></html>
<?php 
// include('footer.php');
?>



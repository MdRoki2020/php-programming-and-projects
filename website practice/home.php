<!DOCTYPE html>
<html>

    <head>
	
	    <title>home page</title>
		<!-- font awesome cdn -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
		<!-- font awesome cdn end -->
		
		<!-- CSS only bootstap -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
		<!-- CSS only bootstap end -->
		
		<style>
		
		*{
		margin:0px;
		padding:0px;
		}
     	.hading h2 {
        font-weight: bold;
		color:white;
		margin-bottom: 30px;
        }
		
		body{
		background:#34495E;
		color:white;
		}
		header {
        background: beige;
        font-weight: bold;
        }
		header h1{
		font-weight:bold;
		color:black;
		}
		.paragraph {
        line-height: 30px;
        }
		.tm2 {
        margin-top: 45px;
        margin-bottom: 45px;
        }
		footer {
        background: black;
        color: white;
        }
		footer {
        padding: 15px 10px;
        }
		.comment a {
        color: white;
        }

        .comment {
        margin-top: 10px;
        }

        .share a {
        color: white;
        }

        .share {
        margin-top: 10px;
        }
		textarea.comment {
        background: #ddd;
        text-align: center;
        border-radius: 5px;
		border-radius: 5px;
        border: 2px solid #ff5200d4;
		transition:.4s;
        }
        textarea.comment2 {
        border-radius: 5px;
        border: 2px solid #ff5200;
        background: #ddd;
        margin-left: 16px;
        margin-top: 7px;
		transition:.4s;
        }
		textarea.comment:hover {
        transform: scale(1.1);
        }
		textarea.comment2:hover {
        transform: scale(1.1);
        }
		.navbarLastLi {
        margin-top: 7px;
        margin-left: 5px;
        }
		.navbarLastLi a {
        color: #00000078;
        }
		input.commentbtn1 {
		margin-left: 20px;
		padding: 0px 25px;
		background: #ddd;
		font-weight: 600;
		}

        input.commentbtn2 {
		margin-top: 20px;
		margin-left: 20px;
		padding: 0px 25px;
		background: #ddd;
		font-weight: 600;
		}
		
		
		</style>
	
	</head>
	<body>
	    
		<header class="header text-center">
	
	    <h1>Welcome To My Website</h1>
		
		<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light top-fixed">
        <a class="navbar-brand" href="#"><img  src=""/>HOME</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
                      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
        <a class="nav-link" href="home.php">HOME</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="profile.php">Profile</a>
        </li>
        <li class="navbarLastLi nav-item">
        <?php
			
			if(!isset($_COOKIE["currentUser"])){
			echo '<a href="logout core.php">Logout</a>';
			}
			else{
				echo "Login";
			}
			
		?>
        </li> 
        </div>
        </nav>
        </div>
	
	    </header>
		
        <div class="hading">
		<h2 class="text-center">Time Line</h2>
		</div>
		
		
		<section>
		
		<div class="row tm1">
		
		    <div class="col-lg-4">
			
			
			
			</div>
			<div class="col-lg-4 paragraph">
			
			<p>The orange originated in a region encompassing Southern China, Northeast India, and Myanmar, and the earliest mention of the sweet orange was in Chinese literature in 314 BC. As of 1987, orange trees were found to be the most cultivated fruit tree in the world. Orange trees are widely grown in tropical and subtropical climates for their sweet fruit. The fruit of the orange tree can be eaten fresh, or processed for its juice or fragrant peel. As of 2012, sweet oranges accounted for approximately 70% of citrus production.</p>
			
			<div class="homeImg">
			
			    <img class="img-fluid" src="https://pngimg.com/uploads/juice/juice_PNG7156.png"/>
			
			</div>
			
			
			<div class="row">
			
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-thumbs-up"></i> Like<a/></div>
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-comments"></i> Comment<a/></div>
				<div class="col-lg-4 share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
			
			</div>
			
			<textarea class="comment" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>
			<input class="commentbtn1" type="submit" value="submit"/>
			</div>
			
			
			<div class="col-lg-4">
			
			
			
			</div>
		
		</div>
		<div class="row tm2">
		
		    <div class="col-lg-4">
			
			
			
			</div>
			<div class="col-lg-4 paragraph">
			
			<p>The Sun is the star at the center of the Solar System. It is a nearly perfect sphere of hot plasma,[18][19] heated to incandescence by nuclear fusion reactions in its core, radiating the energy mainly as visible light and infrared radiation. It is by far the most important source of energy for life on Earth. Its diameter is about 1.39 million kilometres (864,000 miles), or 109 times that of Earth.</p>
			
			<div class="homeImg">
			
			    <img class="img-fluid" src="https://cdn.cnn.com/cnnnext/dam/assets/171204142317-colorscope-orange-image-sunset-full-169.jpg"/>
			
			</div>
			
			<div class="row">
			
			    <div class="col-lg-4   comment"><a href="#"><i class="far fa-thumbs-up"></i> Like<a/></div>
			    <div class="col-lg-4   comment"><a href="#"><i class="far fa-comments"></i> Comment<a/></div>
				<div class="col-lg-4   share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
			    
				<form action="home.php" method="post">
			    <textarea class="comment2" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>
				
				<input class="commentbtn2" type="submit" value="submit"/>
				</form>
			</div>
			
			</div>
			<div class="col-lg-4">
			
			
			
			</div>
		
		</div>
		
		</section>
		

		<footer>
	
	    <div class="container">&copy; <i>copyright roki 2021</i></div>
	
	   </footer>
	
	<!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	</body>

</html>
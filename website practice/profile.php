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
		footer {
        background: black;
        color: white;
        }
		footer {
        padding: 15px 10px;
        }
		.proPhoto {
        width: 200px;
		margin: auto;
		margin-top: 25px;
        }
        .proPhoto img {
        width: 100%;
        }
		.photoName {
        margin-top: 10px;
        }
        .photoName h2 {
        font-weight: 600;
	    margin-bottom: 40px;
        }
		.post2 {
        margin-top: 65px;
        margin-bottom: 45px;
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
        margin-left: 15px;
        border: 2px solid #ff5200;
        border-radius: 5px;
        background: #ddd;
		transition:.4s;
        }
		textarea.comment:hover {
        transform: scale(1.1);
        }
		.navbarLastLi {
        margin-top: 7px;
        margin-left: 5px;
        }
		.navbarLastLi a {
        color: #00000078;
        }
		
		</style>
	
	</head>
	<body>
	    
		<header class="header text-center">
		
		<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light top-fixed">
        <a class="navbar-brand" href="#"><img  src=""/>PROFILE</a>
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
		
		<section>
		
		<div class="proPhoto">
		
		    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRijpZAR1iIHZBBbasecAWi2pIR_3FBCDh87Q&usqp=CAU"/>
			<div class="photoName">
		    <h2 class="text-center">Tasnim Usha</h2>
		    </div>
		
		</div>
		
		<div class="row post1">
		
		    <div class="col-lg-4">
			
			
			
			</div>
			<div class="col-lg-4">
			
			
			<p>I Love Orange With Me !!</p>
			<img class="img-fluid" src="https://static.toiimg.com/photo/77220951.cms"/>
			<div class="row">
			
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-thumbs-up"></i> Like<a/></div>
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-comments"></i> Comment<a/></div>
				<div class="col-lg-4 share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
				
				<textarea class="comment" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>
			
			</div>
			
			</div>
			<div class="col-lg-4">
			
			
			
			</div>
		
		</div>
		<div class="row">
		
		    <div class="col-lg-4">
			
			
			
			</div>
			<div class="col-lg-4 post2">
			
			
			<p>Orange Car. I Like This One !!</p>
			<img class="img-fluid" src="https://acuraconnected.com/wp-content/uploads/2019/10/acura_1280_2019_10_02_01.jpg"/>
			<div class="row">
			
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-thumbs-up"></i> Like<a/></div>
			    <div class="col-lg-4 comment"><a href="#"><i class="far fa-comments"></i> Comment<a/></div>
				<div class="col-lg-4 share"><a href="#"><i class="fas fa-share"></i> Share</a></div>
				
				<textarea class="comment" name="comment" placeholder="Enter Your Comment" rows="1" cols="30"></textarea>
			
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
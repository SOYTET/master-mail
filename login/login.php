<?php 
session_start();
include("../src/connection.php");
$message = "";
if(!$connection_mail){
    die("connection_mail death");
}
if(	isset($_POST["username"])&&
    isset($_POST["password"])){
        $username = $_POST["username"];
        $password = $_POST["password"];
        $chack = mysqli_query($connection_mail,"SELECT `username`, `password` FROM `register` WHERE `username` = '$username' && `password` = '$password';");
        $chack2 = mysqli_query($connection_mail,"SELECT `username` FROM `register` WHERE `username` = '$username';");
        // $result = mysqli_query($connection_mail,"INSERT INTO `User_login` (`Username`,`pw`, `ID`, `when-create`) VALUES ('$username', '$password', NULL, CURRENT_TIME());");
        $chackU = mysqli_fetch_assoc($chack);
        $chackU2 = serialize($chack2);
        if($chackU == true){
            $message = ("U are login sucessfully, Now you can click login again to directly in Dashboard!");
            $username = $_POST['username'];
            $_SESSION['username'] = $username;
			$chackRef = $_GET['ref'];
     
// $_SESSION["Password"] = "$Password";
			if(!isset($chackRef)){
				header('location: /master-mail/index.php');
			}else{
				header('location: '.$_GET['ref']);
			}
        }
        else{
            $message = ("Username or password was wrong");
        }
}
else{
    $message = "please fill in blank";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Xplore || LOGIN</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="containerAll">
	<img class="wave" src="#">
	<div class="container">
		<div class="img">
			<img src="../img/image-removebg-preview.png" alt="this is Makara playing guitar!!">
		</div>
		<div class="login-content">
			<form method="post">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>username</h5>
           		   		<input type="text" class="input" name="username">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>password</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
				<?php echo $message; ?>
            	<a href="#" class="forgetPass">Forgot Password?</a><a href="../register/Register.php">Doesn't have account yet</a>
            	<input type="submit" class="btn" value="master log">
            </form>
        </div>
    </div>
</div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
<style>
	*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
}

body{
    font-family: 'Poppins', sans-serif;
    overflow: hidden;
	background-color: #e0e0e0;
}
.containerAll{
	height: 80vh;
	width: 80vw;
	position: fixed;
	/* background-color: #38d39f; */
	border-radius: 29px;
	top: 10vh;
	left: 10vw;
	background: #e0e0e0;
	box-shadow:  5px 5px 6px #aaaaaa,
             -5px -5px 6px #ffffff;
}

.wave{
	position: fixed;
	bottom: 0;
	left: 0;
	height: 100%;
	z-index: -1;
	opacity: 90%;
}

.container{
    width: 80%;
    height: 80%;
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    /* grid-gap :7rem; */
    padding: 0 2rem;
}

.img{
	display: flex;
	justify-content: flex-end;
	align-items: center;
}

.login-content{
	display: flex;
	justify-content: flex-start;
	align-items: center;
	text-align: center;
}

.img img{
	width: 400px;
	height: 400px;
}

form{
	width: 360px;
}

.login-content img{
    height: 100px;
}

.login-content h2{
	margin: 15px 0;
	color: #333;
	text-transform: uppercase;
	font-size: 2em;
}

.login-content .input-div{
	position: relative;
    display: grid;
    grid-template-columns: 7% 93%;
    margin: 25px 0;
    padding: 5px 0;
    border-bottom: 2px solid #d9d9d9;
}

.login-content .input-div.one{
	margin-top: 0;
}

.i{
	color: #d9d9d9;
	display: flex;
	justify-content: center;
	align-items: center;
}

.i i{
	transition: .3s;
}

.input-div > div{
    position: relative;
	height: 45px;
}

.input-div > div > h5{
	position: absolute;
	left: 10px;
	top: 50%;
	transform: translateY(-50%);
	color: #999;
	font-size: 10px;
	transition: .3s;
}

.input-div:before, .input-div:after{
	content: '';
	position: absolute;
	bottom: -2px;
	width: 0%;
	height: 2px;
	background-color: #38d39f;
	transition: .4s;
}

.input-div:before{
	right: 50%;
}

.input-div:after{
	left: 50%;
}

.input-div.focus:before, .input-div.focus:after{
	width: 50%;
}

.input-div.focus > div > h5{
	top: -5px;
	font-size: 9px;
}

.input-div.focus > .i > i{
	color: #38d39f;
}

.input-div > div > input{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	border: none;
	outline: none;
	background: none;
	padding: 0.5rem 0.7rem;
	font-size: 1.2rem;
	color: #555;
	font-family: 'poppins', sans-serif;
}

.input-div.pass{
	margin-bottom: 4px;
}

a{
	display: block;
	text-align: right;
	text-decoration: none;
	color: #999;
	font-size: 0.9rem;
	transition: .3s;
}

a:hover{
	color: #38d39f;
}

.btn{
	display: block;
	width: 100%;
	height: 50px;
	border-radius: 25px;
	outline: none;
	border: none;
	background-image: linear-gradient(to right, #32be8f, #38d39f, #32be8f);
	background-size: 200%;
	font-size: 1.1rem;
	color: #fff;
	font-family: 'Poppins', sans-serif;
	/* text-transform: uppercase; */
	margin: 1rem 0;
	cursor: pointer;
	transition: .5s;
}
.btn:hover{
	background-position: right;
}


@media screen and (max-width: 1050px){
	.container{
		grid-gap: 5rem;
	}
}

@media screen and (max-width: 1000px){
	form{
		width: 290px;
	}

	.login-content h2{
        font-size: 2.4rem;
        margin: 8px 0;
	}

	.img img{
		width: 400px;
	}
}

@media screen and (max-width: 900px){
	.container{
		grid-template-columns: 1fr;
	}
	.title{
		text-align: center;
		font-family:Arial, Helvetica, sans-serif;
	}
	.img{
		display: none;
	}

	.wave{
		display: none;
	}

	.login-content{
		justify-content: center;
	}
	.forgetPass{
		font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
	}
	.containerAll{
		width: 100vw;
		margin-left: 0;
	}
}
</style>
<script>
	const inputs = document.querySelectorAll(".input");


function addcl(){
	let parent = this.parentNode.parentNode;
	parent.classList.add("focus");
}

function remcl(){
	let parent = this.parentNode.parentNode;
	if(this.value == ""){
		parent.classList.remove("focus");
	}
}


inputs.forEach(input => {
	input.addEventListener("focus", addcl);
	input.addEventListener("blur", remcl);
});

</script>

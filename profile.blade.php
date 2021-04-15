<!DOCTYPE html>
<html>
<head>
	<title>Me</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
	<style type="text/css">
*{
	margin: 0;
	padding:0;
	box-sizing: border-box;
	font-family: 'Yeseva One', cursive;
}
html{
	scroll-behavior: smooth;
}

.container{
	padding: 0 100px 0 100px;
	z-index: 1;
}
nav ul,
.main-info-section,
.education-category{
	display: flex;
	flex-wrap: wrap;
	justify-content: space-between;
}

body{
	background-color: #252627;
	}
 header{
 	display: flex;
 	flex-wrap: wrap;
 	justify-content: space-between;
 	padding:20px 0;
 }

 .navbar{
 	background-color: #181818;
 }

 header h1,
 header a,
 .text p,
 .about h1,
 .skills h1,
 .education h1,
 .contact h1{
 	color: #BEBEBE;
 }

 li{
 	list-style: none;
 	margin-left: 30px;}

 	a{
 		text-decoration: none;
 	font-size: .9rem;
 	text-transform: uppercase;
 	position: relative;
 	top: 50%;
 	bottom: 50%;
 	transform: translateY(-50%);

 }

 .main-info-section{
 	height: calc(100vh - 81.6px);
 }

.text{
	margin-top: 120px;
}

.text h1{
	color: #fff;
	font-size: 3.5rem;
	cursor: context-menu;
}

.text span{
	display: inline-block;
}
span:hover {
	color: #48CFAD;
	transition: all .5s;
}

span.name {
	color: #ED5565;
}
span.m-left{
	margin-left: -10px;
}
.text p{
	letter-spacing: 3px;
	word-spacing: 10px;
	font-size: .8rem;
}

.text a{
	padding: 12px 25px;
	background-color: none;
	border:3px solid #ED5565;
	color: #ED5565;
	font-size: .8rem;
	letter-spacing: 2px;
	position: relative;
	top:80px;
	overflow: hidden;
	transition: .5s;
	display: inline-block;
}

.text a:hover{
	color: #fff;
}

.text a::before{
	content: '';
	background-color: #ED5565;
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 0%;
	z-index: -1;
	transition: .5s;

}

.text a:hover::before{
	height: 100%;
}
.profile-image img{
	width: 450px;
	margin-top: 50px;
}

.about{
	height: 100vh;
	margin-top: 300px;
}

.about h1,
.education h1{
	font-size: 8rem;
	z-index: 0;
	opacity: .1;
}

.about-me-info {
	max-width: 900px;
	background-color: #252627;
	box-shadow: 0 0 1.2rem rgba(0,0,0,.25);
	padding: 50px;
	position: relative;
	top: -70px;
	left: 50%;
	right: 50%;
	transform: translateX(-50%);
	z-index: 1;

}

.about-me-info p{
	font-size: 1.3rem;
	color: #BEBEBE;
}

.about-me-info p:nth-child(2),
.about-me-info p:last-child{
	margin-top: 30px;
}

.about img{
	width: 300px;
	position: relative;
	top: -300px;
	left: calc(100% - 100px);
	right: calc(100% - 100px);
	transform: translateX(calc(-100% + 100px));
}

.skills h1,
.contact h1{
	text-align: right;
	font-size: 7rem;
	opacity: .1;
}

.skills-info{
	font-size: 1.4rem;
	color: #BEBEBE;
	max-width: 800px;
	position: relative;
	left: 50%;
	right: 50%;
	transform: translateX(-50%);
	text-align: center;
	margin-bottom: 50px;
}

.html{
	display: flex;
	flex-wrap: wrap;
	justify-content: center;
	margin-bottom: 40px;
}



.education-category button{
	text-transform: capitalize;
	border:3px solid #ED5565;
	padding:15px 30px ;
	border-radius: 50px;
	margin-top: 50px;
	color: #ED5565;
	margin-bottom: 50px;
	margin-left: 100px;
	margin-right: 100px;
	font-size: 1.8rem;
	letter-spacing: 5px;
	background-color: #252627;
	outline: none;
	cursor: pointer;
}

.skills-category button{
	text-transform: capitalize;
	border:3px solid #BEBEBE;
	padding:15px 30px ;
	border-radius: 20px;
	margin-top: 50px;
	color: #ED5565;
	margin-left: 130px;
	margin-bottom: 100px;
	font-size: 1.8rem;
	letter-spacing: 5px;
	background-color: #252627;
	outline: none;
	cursor: pointer;
}


.education a{
	justify-self:center;
	position: relative;
}

 .contact{
 	margin-top: 100px;
 }
 form input,
 form textarea{
 	display: block;
 	width: 500px;
 	padding: 20px;
 	background-color: #252627;
 	border: 3px solid #707070;
 	margin:20px 0;
 	outline: none;
 	font-size: 1.2rem;
 	color: #fff;
 	position: relative;
 	left: 50%;
 	right: 50%;
 	transform: translateX(-50%);}
form input:last-child {
	width: 150px;
	background-color: #ED5565;
	border:none;
	cursor: pointer;
}
footer hr{
	border:2px solid #707070;
	margin-top: 80px;
}
footer p{
	text-align: center;
	color: #707070;
	font-size: 1.2rem;
	padding: 30px 0;
}



	</style>




</head>
<body>
<div class="container navbar">
	<header>
		<div class="logo">
			<h1>TUTYERA</h1>
		</div>
		<nav>
			<ul>
				<li><a href="#about">{{__('msg.aboutme')}}</a></li>
				<li><a href="#skills">{{__('msg.skills')}}</a></li>
				<li><a href="#education">{{__('msg.edu')}}</a></li>
			</ul>
		</nav>
	</header>
	<div class="dropdown">
  <a class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Lang
  </a>
  <ul class="dropdown-menu" id="list">
    <li><a href="lang/en">EN</a></li>
    <li><a href="lang/ru">RU</a></li>
    <li><a href="lang/kz">KZ</a></li>
  </ul>
</div>
</div>

<div class="container main-info-section">
	<div class="text">
		<h1>
			<h1>{{__('msg.Hi')}}</h1>
			<h2 style="color: #fff;">{{__('msg.iam')}}</h2>
		</h1>
		<p>CSS / JavaScript / HTML</p>
		<a href="#contact">{{__('msg.contactme')}}</a>
	</div>
	<div class="profile-image">
		<img src="{{asset('images/444.jpg')}}">
	</div>
</div>
<div class="container about" id="about">
	<h1>{{__('msg.about')}}</h1>
	<div class="about-me-info">
		<p>{{__('msg.des1')}}</p>
		<p>{{__('msg.18')}}</p>
		<p>{{__('msg.lang')}}</p>
		<p>{{__('msg.interest')}}</p>

	</div>
	<img src="{{asset('images/dotted-shape.png')}}">
</div>
<div class="container skills" id="skills">
	<h1>{{__('msg.Skill')}}</h1>
	<p class="skills-info">
{{__('msg.des2')}}
	</p>



		<div class="skills-category">
		<button class="active">HTML</button>
		<button >CSS</button>
		<button >JAVASCRIPT</button>



</div>


</div>

<div class="container education" id="education">
	<h1>{{__('msg.education')}}</h1>
	<div class="education-category">
		<button id="school" class="active">{{__('msg.school')}}</button>
		<button id="school">{{__('msg.univer')}}</button>

	</div>
	<div >
		<a href=""><img style="margin-left: 70px;" src="https://lh3.googleusercontent.com/proxy/BSqW-ijl-8XdOUE72tobmjAp5nwwaMj8fM5iBhx92zweQ81j-Ug6FYA0RjfCh5aZyfjX9phwjCtKgzr_6iSpubLlZ4S1bFp8DqslTGgxIFkg-8ivXdxNbCw"></a>
		<a href=""><img style="margin-left: 420px; margin-top:30px;
		" width="200px" height="200px" src="https://upload.wikimedia.org/wikipedia/commons/c/cb/Logo_of_Suleymen_Demirel_University%2C_Kazakhstan.png"></a>

	</div>

</div>

<div class="container contact" id="contact">
	<h1>{{__('msg.contactme')}}</h1>
	<form method="POST" action="{{route('send')}}" enctype="multipart/form-data">
    @csrf
		<input type="text" name="name" placeholder="{{__('msg.name')}}">
		<input type="email" name="email" placeholder="{{__('msg.email')}}">
		<input type="email" placeholder="190103367@stu.sdu.edu.kz" disabled >
		<textarea name="msg" cols="20" rows="5" placeholder="{{__('msg.msg')}}"></textarea>
		<input type="submit" name="">
	</form>
</div>

<footer>
	<hr>
	<p>2021 22 {{__('msg.date')}} 23:59.<br>
	{{__('msg.thanks')}}</p>
</footer>

</body>
<script type="text/javascript">


</script>

</html>

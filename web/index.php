<?php
/*
 * Copyright (C) 2011 OpenSIPS Project
 *
 * This file is part of opensips-cp, a free Web Control Panel Application for 
 * OpenSIPS SIP server.
 *
 * opensips-cp is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * opensips-cp is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */
 
 require("../config/local.inc.php");
?>

<html>

<head>
 <title><?=$login_page_title?></title>
 <link href='style.css' type='text/css' rel='StyleSheet'>
<style>
body {
    background: #2e3e4e;
    display: flex;
height: 100%;
}
*, :after, :before {
    box-sizing: border-box;
}
img {
    max-width: 100%
}
.container {
    max-width: 1500px;
    padding: 0 15px;
    margin: auto;
}
.row {
    margin-left: -15px;
    margin-right: -15px;
}
    .row:after, .row:before {
        content: " ";
        display: table;
    }
    .row:after {
        clear: both;
    }
@media (min-width: 992px) {
    .col-md-6 {
        width: 50%;
        float: left;
        position: relative;
        min-height: 1px;
        padding-left: 15px;
        padding-right: 15px;
    }
}
.login-title {
    margin: 20px;
    font-size: 38px;
    font-weight: 100;
    text-align: center;
    color: #fff;
}
.login-form-input {
    border: 1px solid #5d7286;
    background: #2f3e4d;
    padding: 5px 15px;
    height: 52px;
    margin: 10px 4px;
    width: 389px;
    display: block;
    box-shadow: inset 0 0 130px 100px #2f3e4d;
    -webkit-text-fill-color: #fff;
    font-size: 24px;
}
    .login-form-input:focus {
        border-color: #accc4d;
        outline: none;
    }
.login-form label {
    color: #a3b4c5;
    font-size: 14px;
    text-transform: uppercase;
}
.form-group {
    margin-bottom: 30px;
}
.submit-login-form {
    width: 393px;
    height: 54px;
    outline: none;
    font-size: 20px;
    padding: 10px 20px;
    border: 1px solid #accc4d;
    background: #accc4d;
    color: #fff;
    border-radius: 5px;
    box-shadow: 0 3px 5px #202c37;
    cursor: pointer;
    font-weight: 600;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    text-decoration: none;
    display: inline-block;
    margin: 20px 0;
}
.link-vc {
    position: absolute;
    bottom: 0;
    color: #fff;
    width: 100%;
    text-align: center;
    padding: 40px;
}
    .link-vc a {
        color: #fff;
        text-decoration: none;
        display: inline-block;
        line-height: 46px;
    }
    .link-vc svg path, .link-vc svg circle {
        fill: #ee303a;
    }
.link-vc-inline-block {
    display: inline-block;
    float: left;
    margin-right: 10px;
    color: #a3b4c5;
}
.link-vc a:hover .link-vc-inline-block {
    color: #fff;
}
.link-vc a:hover svg path, .link-vc a:hover svg circle {
    fill: #fff;
}
</style>
</head>

<body>
<div class="container">
  <div class="row">
        <div class="col-md-6">
 		<h1 class="login-title">
                    <?=$login_title?>
                </h1>
            <img width="700" height="" src="images/openSips-logo.png">
        </div>
        <div class="col-md-6">
            <form action="login.php" method="post">
               
                <div class="login-form">
                    <div class="form-group">
                        <label>
                            <?php echo($login_user) ?>
                        </label>
                        <input type="text" name="name" class="login-form-input" autofocus />
                    </div>
                    <div class="form-group">
                        <label>
                            <?php echo($login_pass) ?>
                        </label>
                        <input type="password" name="password" class="login-form-input">
                    </div>
                    <div>
                        <input class="submit-login-form" type="submit" alt="Login" name="acces" value="Get in">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="link-vc">
<a target="_blank" href="https://www.voicenter.com/">
<span class="link-vc-inline-block">
CSS by
</span>
 <svg height="46" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="157.9px" height="35.8px" viewBox="0 0 157.9 35.8" style="enable-background:new 0 0 157.9 35.8;" xml:space="preserve"><g><g><path d="M38.9,11.5h2c0.3,0,0.6,0.2,0.7,0.5l3.6,9.6l3.6-9.6c0.1-0.3,0.4-0.5,0.7-0.5h2c0.4,0,0.8,0.5,0.6,0.9l-5.3,13.1c-0.1,0.3-0.4,0.5-0.7,0.5h-1.8c-0.3,0-0.6-0.2-0.7-0.5l-5.3-13.1C38.2,11.9,38.5,11.5,38.9,11.5z"></path><path d="M52.5,18.7L52.5,18.7c0-4.1,3.2-7.5,7.6-7.5c4.4,0,7.6,3.3,7.6,7.4v0c0,4.1-3.2,7.4-7.6,7.4C55.7,26.1,52.5,22.8,52.5,18.7z M64.5,18.7L64.5,18.7c0-2.5-1.8-4.5-4.3-4.5c-2.5,0-4.3,2-4.3,4.5v0c0,2.5,1.8,4.5,4.3,4.5C62.7,23.2,64.5,21.2,64.5,18.7z"></path><path d="M71,11.5h1.7c0.4,0,0.7,0.3,0.7,0.7v12.9c0,0.4-0.3,0.7-0.7,0.7H71c-0.4,0-0.7-0.3-0.7-0.7V12.2C70.2,11.8,70.6,11.5,71,11.5z"></path><path d="M75.8,18.7L75.8,18.7c0-4.1,3.1-7.5,7.5-7.5c2.4,0,3.9,0.7,5.1,1.7c0.3,0.2,0.3,0.7,0.1,1l-1.1,1.3c-0.2,0.3-0.6,0.3-0.9,0.1c-1-0.8-2-1.2-3.2-1.2c-2.4,0-4.2,2-4.2,4.5v0.2c0,2.3,1.9,4.3,4.2,4.3c1.4,0,2.3-0.5,3.2-1.3c0.3-0.2,0.7-0.2,0.9,0l1.1,1.1c0.3,0.3,0.3,0.7,0,1c-1.4,1.3-2.9,2.1-5.4,2.1C79,26.1,75.8,22.8,75.8,18.7z"></path><path d="M91.8,11.5h9.4c0.4,0,0.7,0.3,0.7,0.7v1.4c0,0.4-0.3,0.7-0.7,0.7h-7v2.9h6.1c0.4,0,0.7,0.3,0.7,0.7v1.4c0,0.4-0.3,0.7-0.7,0.7h-6.1v3h7.1c0.4,0,0.7,0.3,0.7,0.7v1.4c0,0.4-0.3,0.7-0.7,0.7h-9.5c-0.4,0-0.7-0.3-0.7-0.7v-13C91.1,11.8,91.4,11.5,91.8,11.5z"></path><path d="M105,11.5h1.9c0.2,0,0.4,0.1,0.5,0.3l6.5,8.6v-8.1c0-0.4,0.3-0.7,0.7-0.7h1.7c0.4,0,0.7,0.3,0.7,0.7v13c0,0.4-0.3,0.7-0.7,0.7h-1.7c-0.2,0-0.4-0.1-0.5-0.3l-6.7-8.8v8.4c0,0.4-0.3,0.7-0.7,0.7H105c-0.4,0-0.7-0.3-0.7-0.7v-13C104.3,11.8,104.6,11.5,105,11.5z"></path><path d="M123.3,14.4h-3.8c-0.3,0-0.6-0.3-0.6-0.6v-1.7c0-0.3,0.3-0.6,0.6-0.6h10.7c0.3,0,0.6,0.3,0.6,0.6v1.7c0,0.3-0.3,0.6-0.6,0.6h-3.8v10.8c0,0.3-0.3,0.6-0.6,0.6h-2c-0.3,0-0.6-0.3-0.6-0.6V14.4z"></path><path d="M133.4,11.5h9.5c0.4,0,0.6,0.3,0.6,0.6v1.5c0,0.4-0.3,0.6-0.6,0.6h-7v2.9h6.1c0.4,0,0.6,0.3,0.6,0.6v1.5c0,0.4-0.3,0.6-0.6,0.6h-6.1v3h7.1c0.4,0,0.6,0.3,0.6,0.6v1.5c0,0.4-0.3,0.6-0.6,0.6h-9.6c-0.4,0-0.6-0.3-0.6-0.6V12.1C132.8,11.8,133,11.5,133.4,11.5z"></path><path d="M146,12.1c0-0.3,0.3-0.6,0.6-0.6h6c1.8,0,3.2,0.5,4.2,1.5c0.8,0.8,1.2,1.9,1.2,3.3v0c0,2.3-1.3,3.8-3.1,4.4l2.9,4.2c0.3,0.4,0,0.9-0.5,0.9H155c-0.2,0-0.4-0.1-0.5-0.3l-2.9-4.3h-2.5v4c0,0.3-0.3,0.6-0.6,0.6h-2c-0.3,0-0.6-0.3-0.6-0.6V12.1z M152.3,18.4c1.5,0,2.4-0.8,2.4-2v0c0-1.4-0.9-2-2.5-2h-3.1v4.1H152.3z"></path></g><g><path d="M24.9,24.3l0,0.1c0,0.3,0.2,0.5,0.4,0.7l1,0.7c0.4,0.3,1.1,0.2,1.4-0.2c1.7-2.3,2.6-4.9,2.6-7.7s-0.9-5.5-2.6-7.7c-0.3-0.4-1-0.5-1.4-0.2l-1,0.7c-0.2,0.2-0.4,0.4-0.4,0.7l0,0.1c0,0.2,0.1,0.4,0.2,0.6c1.3,1.7,1.9,3.7,1.9,5.7c0,2.1-0.7,4.1-1.9,5.7C25,23.8,24.9,24,24.9,24.3z"></path><path d="M20.7,21.2l0,0.1c0,0.3,0.2,0.5,0.4,0.7l0.8,0.6c0.4,0.3,1.1,0.2,1.4-0.2c1.9-2.6,1.9-6.5,0-9c-0.3-0.4-1-0.5-1.4-0.2l-0.8,0.6c-0.2,0.2-0.4,0.4-0.4,0.7l0,0.1c0,0.2,0.1,0.4,0.2,0.6c1.1,1.5,1.1,3.9,0,5.4C20.8,20.8,20.7,21,20.7,21.2z"></path><path d="M29.6,28.1c-0.4-0.4-1.1-0.4-1.5,0c-2.7,2.7-6.3,4.2-10.1,4.2c-7.9,0-14.4-6.4-14.4-14.4C3.5,10,10,3.5,17.9,3.5c3.8,0,7.4,1.5,10.1,4.2c0.4,0.4,1.1,0.4,1.5,0l1-1c0.4-0.4,0.4-1.1,0-1.5C27.1,1.9,22.7,0,17.9,0C8,0,0,8,0,17.9s8,17.9,17.9,17.9c4.8,0,9.2-1.9,12.6-5.2c0.4-0.4,0.4-1.1,0-1.5L29.6,28.1z"></path><circle cx="17.8" cy="17.9" r="1.7"></circle></g></g></svg>
</a>
</div>
<center>



<?php
 if (isset($_GET['err'])) {
 if ($_GET['err']==1) echo('<div class="loginError">'.$login_err.'</div>');
 if ($_GET['err']==2) echo('<div class="loginError">'.$session_err.'</div>');
 }
?>
</center>
</body>

</html>

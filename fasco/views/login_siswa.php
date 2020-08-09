<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="theme-color" content="#000080">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#000080" />
    <!-- Tell the browser to be responsive to screen width -->
	<title>YARBUU OFFLINE | E-Learning Junior High School of Muhammadiyah Cimanggu</title>
    <meta name="description" content="YARBUU | E-Learning Junior High School of Muhammadiyah Cimanggu">
    <meta name="author" content="IT Team Junior High School of Muhammadiyah Cimanggu">
	<meta property="og:title" content="YARBUU | E-Learning Junior High School of Muhammadiyah Cimanggu" />
<meta property="og:type" content="website" />
<meta property="og:url" content="<?php echo base_url();?>" />
<meta property="og:image" content="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png" />

<!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="http://smpmuh-cimanggu.sch.id/assets/images/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->
	
<style>
@import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,700;1,700&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,700&display=swap');

h1, h2, h3, h4, h5, h6 {
  font-family: 'Ubuntu', sans-serif;
}

a, p, article, li {
  font-family: 'Roboto', sans-serif;
}

a {
  text-decoration: none;
}

* {
  box-sizing: border-box;
}

.image-row {
    text-align: center;
}
.image-box {
    width: 80%;
    padding: 1%;
    margin: .5%;
    background: transparent;
    display: inline-block;
    font-size: 0; /* fixes bottom padding */
}
.image-box img {
    max-width: 100%;
}

/* style the container */
.container {
  position: relative;
  border-radius: 5px;
  background-color: transparent;
  padding: 20px 0 30px 0;
  margin-top: 50px;
} 

.container p {
  text-align: center;
  color: #000080;
} 

/* style inputs and link buttons */
input,
.btn {
  width: 100%;
  padding: 12px;
  border: none;
  border-radius: 4px;
  margin: 5px 0;
  opacity: 0.85;
  display: inline-block;
  font-size: 17px;
  line-height: 20px;
  text-decoration: none; /* remove underline from anchors */
}

input:hover,
.btn:hover {
  opacity: 1;
}

/* add appropriate colors to fb, twitter and google buttons */
.fb {
  background-color: #3B5998;
  color: white;
}

.twitter {
  background-color: #55ACEE;
  color: white;
}

.google {
  background-color: #dd4b39;
  color: white;
}

/* style the submit button */
input[type=submit] {
  background-color: #0000cd;
  color: white;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #0000cd;
}

/* Two-column layout */
.col {
  float: left;
  width: 50%;
  margin: auto;
  padding: 0 50px;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* vertical line */
.vl {
  position: absolute;
  left: 50%;
  transform: translate(-50%);
  border: 2px solid #ddd;
  height: 175px;
}

/* text inside the vertical line */
.vl-innertext {
  position: absolute;
  top: 50%;
  transform: translate(-50%, -50%);
  background-color: #f1f1f1;
  border: 1px solid #ccc;
  border-radius: 50%;
  padding: 8px 10px;
}

/* hide some text on medium and large screens */
.hide-md-lg {
  display: none;
}

/* bottom container */
.bottom-container {
  text-align: center;
  background-color: #666;
  border-radius: 0px 0px 4px 4px;
}

/* Responsive layout - when the screen is less than 650px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 650px) {
  .col {
    width: 100%;
    margin-top: 0;
  }
  /* hide the vertical line */
  .vl {
    display: none;
  }
  /* show the hidden text on small screens */
  .hide-md-lg {
    display: block;
    text-align: center;
  }
}
</style>
</head>
<body>

<div class="container">

	<div class="image-row">
		<div class="image-box">
			<img src="<?php echo base_url(); ?>assets/back/siswa/images/home.png" width="240px">
		</div>
		
	</div>
	
	
	
  <form action="<?php echo base_url(); ?>index.php/auth/login_siswa" method="post">
    <div class="row">
      <h2 style="text-align:center; color: #000080;">Student Log In</h2>
      <div class="vl">
        <span class="vl-innertext">or</span>
      </div>

      <div class="col">        

        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
      </div>
      
    </div>
  </form>
  <p><strong>YARBUU OFFLINE</strong> | E-Learning Junior High School of Muhammadiyah Cimanggu</p>
</div>

</body>
</html>

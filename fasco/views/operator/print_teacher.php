<!DOCTYPE html>
<html dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="apple-mobile-web-app-status-bar-style" content="#000080" />
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo $title; ?></title>
    
<!-- ****** faviconit.com favicons ****** -->
    <link rel="shortcut icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" sizes="16x16 32x32 64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-192.png">
    <link rel="icon" type="image/png" sizes="160x160" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-160.png">
    <link rel="icon" type="image/png" sizes="96x96" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-96.png">
    <link rel="icon" type="image/png" sizes="64x64" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-64.png">
    <link rel="icon" type="image/png" sizes="32x32" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-16.png">
    <link rel="apple-touch-icon" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-57.png">
    <link rel="apple-touch-icon" sizes="114x114" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-114.png">
    <link rel="apple-touch-icon" sizes="72x72" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-72.png">
    <link rel="apple-touch-icon" sizes="144x144" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <link rel="apple-touch-icon" sizes="60x60" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-60.png">
    <link rel="apple-touch-icon" sizes="120x120" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-120.png">
    <link rel="apple-touch-icon" sizes="76x76" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-76.png">
    <link rel="apple-touch-icon" sizes="152x152" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-180.png">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/favicon-144.png">
    <meta name="msapplication-config" content="http://www.smpmuh-cimanggu.sch.id/assets/images/favicon/browserconfig.xml">
    <!-- ****** faviconit.com favicons ****** -->
<style>
@import url('https://fonts.googleapis.com/css2?family=Mukta:wght@400;700&display=swap');
.flex-container {
  /* We first create a flex layout context */
  display: flex;
  
  /* Then we define the flow direction 
     and if we allow the items to wrap 
   * Remember this is the same as:
   * flex-direction: row;
   * flex-wrap: wrap;
   */
  flex-flow: row wrap;
  
  /* Then we define how is distributed the remaining space */
  justify-content: space-around;
  
  padding: 0;
  margin: 0;
  list-style: none;
}

.flex-item {
  background: transparent;
  border: solid 3px #000;
  padding: 10px 20px;
  width: 45%;
  margin: 10px 3px;
  height: 290px;  
  text-align: left;
}

h4 {
	font-size: 18pt;
	font-weight: bolder;
	font-family: 'Mukta', sans-serif;
	text-align: center;
}

td {
	font-size: 12pt;
	font-family: 'Mukta', sans-serif;
}

.flex-item:nth-child(11),
.flex-item:nth-child(12),
.flex-item:nth-child(23),
.flex-item:nth-child(24),
.flex-item:nth-child(35),
.flex-item:nth-child(36),
.flex-item:nth-child(47),
.flex-item:nth-child(48){
	margin: 0 0 42px 0;
}

</style>

</head>

<body>
	<div class="flex-container">
	<?php                     
        $i = 1; 
        foreach ($get_all_teacher as $s){                       
    ?>
		<div class="flex-item">
			<h4>KARTU LOGIN E-LEARNING YARBUU<br>
			SMP MUHAMMADIYAH PLUS CIMANGGU</h4>
			<hr>
			<table>				
				<tr>
					<td>Nama </td>
					<td>:</td>
					<td><?php echo $s->nama; ?></td>					
				</tr>
				<tr>
					<td>Username </td>
					<td>:</td>
					<td><?php echo $s->username; ?></td>					
				</tr>
				<tr>
					<td>Password </td>
					<td>:</td>
					<td><?php echo $s->password; ?></td>					
				</tr>
				                                                   
			</table>
			<p>Kunjungi <?php echo base_url(); ?> untuk masuk ke elearning</p>
		</div>										
    <?php } ; ?>
	</div>
</body>
</html>
<?php
$cn = new mysqli('localhost','root','','ukk_kennoldy');
if(isset($_POST['id'])){
$id = $_POST['id'];
$fullname = $_POST['fullname'];
$username = $_POST['username'];
$password = $_POST['password'];
$level= $_POST['level'];
$cn->query("INSERT INTO user(id,fullname,username,password,level) values('$id','$fullname','$username','$password','$level')");
}
?>
<html>
<head>
<title>Kenn's Travel</title>
<link href="<?php echo URL_ASSETS;?>frontend/css/style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Book Your Travel Widget Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- //end-smoth-scrolling -->
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="<?php echo URL_ASSETS;?>frontend/js/jquery-1.11.1.min.js"></script>
<!--webfonts-->
<link href="<?php echo URL_ASSETS;?>frontend/font/font1.css" rel='stylesheet' type='text/css'>
<link href="<?php echo URL_ASSETS;?>frontend/font/font2.css" rel='stylesheet' type='text/css'>
<!--//webfonts-->
</head>
<body>
									<div class="navigation">
										<ul class="navig">
											<li class="active"><a href="<?php echo base_url(); ?>welcome/index"><i class="bag"></i><p>Flights</p><div class="clear"></div></a></li>
											<li class="nab"><a href="#"><i class="gallery"></i><p>Cruises</p><div class="clear"></div></a></li>
											<li class="naa" ><a href="#"><i class="settings"></i><p>Trains</p><div class="clear"></div></a></li>
											<li class="nac"><a href="#"><i class="message"></i><p>Cars</p><div class="clear"></div></a></li>
											<li class="nae"><a href="#"><i class="send"></i><p>Hotels</p><div class="clear"></div></a></li>
											<li class="nae"><a href="<?php echo base_url(); ?>welcome/signupuser"><i class="bag"></i><p class="active">Sign Up</p><div class="clear"></div></a></li>
										</ul>
									</div>
							<h1>SIGN UP</h1>

							<div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 container-form">
            <form class="form-horizontal" role="form" method="POST">
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputID" class="control-label">ID Number</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputID" name="id" placeholder="ID">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputNama" class="control-label">Nama</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputNama" name="fullname" placeholder="Nama Lengkap">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputUsername" class="control-label">Username</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputUsername" name="username"placeholder="Username">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-2">
                  <label for="inputPassword" class="control-label">Password</label>
                </div>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputPassword" name="password" placeholder="Password">
                </div>
              </div>
              <div class="form-group" draggable="true">
                <div class="col-sm-2">
                  <label for="inputLevel" class="control-label">Level</label>
                </div>
                <div class="col-sm-10" name="level">
                  <input type="radio" name="level" value="1">1
                  <input type="radio" name="level" value="2">2
                  <input type="radio" name="level" value="3">3</div>
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10 btn-login">
                  <button type="submit" class="btn btn-default">LOGIN</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      <?php
        $cn = new mysqli('localhost','root','','ukk_kennoldy');
        $no = 1;
        $qry = $cn->query("SELECT * FROM user");
        echo '<center><table border=5></center>
              <center><B>DAFTAR USER KENNS TRAVEL</B></center></td></tr><br>';
          echo '<tr><td colspan=10>';
          echo '<tr>
                  <th><center>No</center></th>
                  <th><center>ID Number</center></th>
                  <th><center>Fullname</center></th>
                  <th><center>Username</center></th>
                  <th><center>Password</center></th>
                  <th><center>Level</center></th>
                </tr>';
        while ($data = $qry->fetch_array(MYSQLI_ASSOC))
        {
          ?> 
                    <tr>

                          <td><?php echo $no++ ?></td>
                          <td><?php echo $data['id'] ?></td>
                          <td><?php echo $data['fullname'] ?></td>
                          <td><?php echo $data['username'] ?></td>
                          <td><?php echo $data['password'] ?></td>
                          <td><?php echo $data['level'] ?></td>
                          <td> 
                             <a href= "edit.php?id=<?php echo $data['id'] ?>"> 
                              <button type="button" class="btn btn-success">Edit</button> </a>
                             <a href= "delete.php?id=<?php echo $data['id'] ?>"> 
                              <button type="button" class="btn btn-danger">Delete</button> </a>

                          </td>
                    </tr>

            <?php
          }
          ?>
						
			<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; 2018 Kenn's Travel. All rights Reserved | Design by <a href="http://w3layouts.com">Kennoldy</a></p>
			</div>
		</div>
	<!--//end-copyright-->
</body>
</html>
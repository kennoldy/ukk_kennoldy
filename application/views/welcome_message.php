<!DOCTYPE html>
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
											<li class="active"><a href="<?php echo base_url(); ?>welcome/index"><i class="bag"></i><p class="active">Flights</p><div class="clear"></div></a></li>
											<li class="nab"><a href="#"><i class="gallery"></i><p>Cruises</p><div class="clear"></div></a></li>
											<li class="naa" ><a href="#"><i class="settings"></i><p>Trains</p><div class="clear"></div></a></li>
											<li class="nac"><a href="#"><i class="message"></i><p>Cars</p><div class="clear"></div></a></li>
											<li class="nae"><a href="#"><i class="send"></i><p>Hotels</p><div class="clear"></div></a></li>
											<li class="nae"><a href="<?php echo base_url(); ?>welcome/signupuser"><i class="bag"></i><p>Sign Up</p><div class="clear"></div></a></li>
										</ul>
									</div>
							<h1>Kenn's Travel</h1>
						<div class="main">
									<div class="facts">
										<div class="booking-form">
											<div class="online_reservation">
													<div class="b_room">
														<div class="booking_room">
															<div class="reservation">
																<ul>		
																	<li  class="span1_of_1 desti">
																	 <h4>Choose your destination </h4>
																		 <div class="section_dest">
																			  <select>
																					<option value="0">Destination City</option>
																					<option value="1">Usa</option>
																					<option value="2">London</option>
																					<option value="3">Mexico</option>
																					<option value="4">India</option>
																				</select>
																		 </div>					
																	 </li>
																</ul>
															</div>
															<div class="reservation">
																<ul>	
																	 <li  class="span1_of_1">
																		 <h5>Check in date </h5>
																		 <div class="book_date">
																			 <form>
																				<input class="date" id="datepicker" type="text" value="20/07/2018" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '20/07/2018';}" required="">
																			 </form>
																		</div>	
	
																	 </li>
																	 <li  class="span1_of_1 left">
																		 <h5>Check out date </h5>
																		 <div class="book_date">
																			<form>
																				<input class="date" id="datepicker" type="text" value="20/07/2018" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '20/07/2018';}" required="">
																			 </form>
																		 </div>					
																	 </li>
																	  <div class="clear"></div>
																	 </ul>
																	 <div class="groups">
							                                                 <div class="grid_4 columns">
																						<h5>Rooms</h5>
																							<select class="custom-select" id="select-4">
																								<option selected="selected">1</option>
																								<option>1</option>
																								<option>2</option>
																								<option>3</option>
																								<option>4</option>
																							</select>
																						</div>		
																						<div class="grid_5 columns">
																							<h5>Adults</h5>
																							<select class="custom-select" id="select-5">
																								<option selected="selected">0</option>
																								<option>0</option>
																								<option>1</option>
																								<option>2</option>
																								<option>3</option>
																							</select>
																						</div>	
																						<div class="grid_6 columns">
																							<h5>Child</h5>
																							<select class="custom-select" id="select-6">
																								<option selected="selected">0</option>
																								<option>0</option>
																								<option>1</option>
																								<option>2</option>
																								<option>3</option>
																							</select>
																						</div>	
																						<div class="clear"></div>
																					</div>
																	<!---strat-date-piker---->
																		<link rel="stylesheet" href="<?php echo URL_ASSETS;?>frontend/css/jquery-ui.css" />
																		<script src="<?php echo URL_ASSETS;?>frontend/jquery-ui.js"></script>
																		  <script>
																				  $(function() {
																					$( "#datepicker,#datepicker1" ).datepicker();
																				  });
																		  </script>
																	<!---/End-date-piker---->
															</div>
																
																			<div class="date_btn">
																				<form>
																					<input type="submit" value="Search">
																				</form>
																			</div>
														</div>
														<div class="clear"></div>
													</div>
											</div>
											<!---->
										</div>	
									</div>
								
								</div>
			<!--start-copyright-->
   		<div class="copy-right">
   			<div class="wrap">
				<p>&copy; 2018 Kenn's Travel. All rights Reserved | Design by <a href="http://w3layouts.com">Kennoldy</a></p>
		</div>
	</div>
	<!--//end-copyright-->
</body>
</html>
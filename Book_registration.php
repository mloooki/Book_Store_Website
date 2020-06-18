<!DOCTYPE html>


<html>


   	<head>
   
      		<meta charset = "utf-8">
	  		<title> Book Registration </title>
      		<link rel="stylesheet" type="text/css" href="style.css">
      		<meta http-equiv="refresh" content="60" >
			<style type = "text/css">
			 p  {color:#4CAF50}
			
			</style>
  	</head>

   	<body>
      		<div style="position: absolute; right:20%; top:25%; padding:4% ; width : 35%">
							  <h2 style = "color:#4CAF50"> Please Enter Book Data: </h2>

						      <form method="post" enctype="multipart/form-data" autocomplete = "on" action="Book_registration.php">
											    <p>
											     	Title:
												    <input id = "title" type = "text"  placeholder = "Enter the title of the book" name="Title"> </p>
												<p>
											     	Published year: 
												    <input id = "Pyear" type = "date" name="Published"  > </p>
												<p>
											     	Published By: 
												    <input id = "PublishBy" type = "text"  placeholder = "Published By" name="Publishedby"> </p>
												
												<p> Type:
												  	new <input id = "type" type = "radio" value = "1" name="type">
												 	 used <input id = "type" type = "radio" value = "2" name="type">
												</p>
												<p>
											     	Price : 
												    <input id = "price" type = "number"  placeholder = "The price" min="1" name="Price"> </p>
												<p>
													 Photo : 
												   	<input type="file" id="photo"  placeholder = "The price" name="Photo"> </p>
							  
							  <hr>
							  <h2 style = "color:#4CAF50"> Register to sale books </h2>


											    <p>
											    	 Your name: 
												    <input id = "name" type = "text"  placeholder = "Enter your name" name="yourname"> </p>
											    <p>
											    	 Your mobile number: 
												    <input id="phone" type="tel"  placeholder = "0555555555" name="mobile">
											    <p>
											     	Your Email: 
												    <input id = "email" type = "email"  placeholder = "name@domain.com" name="email"> </p>

												<p>
												    <input type = "submit" value = "Submit" name="Submit">
													<input type = "reset" value = "Clear"> </p>
							  </form>

   		
   			</div>


	  
  			<header>    
			            <img style="margin-left: 5px" src="Photos/logo.png"width=""height="90"> 
          				<span style = "color : white ; font-size : 42px ; position : relative ; left :40% ;top:-25px ; font:Comic Sans MS ">Book Store</span>
         				<img style="float: right" src="Photos/book.png"width="70"height="85">
  			</header>

			<div class="topnav">
						  <a href="Welcome.html" >Welcome</a>
						  <a href="ReadAboutUs.html">Read About Us</a>
						  <a href="ContactUs.html">Contact Us</a>
						  <a href="Books_for_sale.php">Books For Sale</a>
						  <a class="active" href="Book_registration.php">Books Registration</a>
  
			</div>

			<div class="sidebar">
						   <nav> 
							      <a href = "Main.php"> <img src="Photos/Home.png" 
							       			style="margin-left: -5px ;"alt="Home png clipart from pngtree.com" width = "37px" height = "39px"></a>

							     <ul> 
									    <li> <a href = "Welcome.html" > <img src = "Photos/Welcome.png" alt ="Welcome" width = "37px" height = "45px"></a> </li>
									    <li> <a href = "ReadAboutUs.html"> <img src = "Photos/read.png" alt ="readaboutus" width = "37px" height = "45px"></a> </li>
								        <li> <a href = "ContactUs.html"> <img src = "Photos/contactus2.png" alt ="ContactUs" width = "37px" height = "45px"></a> </li>
								        <li> <a href = "Books_for_sale.php"> <img src = "Photos/sale.png" alt ="BookForSale" width = "37px" height = "45px"></a> </li>
							   	        <li> <a href = "Book_registration.php"> <img src = "Photos/Registration.png"alt ="BookRegistaration" width = "37px" height = "45px"></a> </li>
							     </ul>

						   </nav>
 
			</div>
			
			<?php

	if (isset($_POST["Submit"])){
		        $target = "upload/".basename($_FILES['Photo']['name']);
				 $con = mysqli_connect("localhost","root","","bookstore");
				$q1=$_POST['Title'];
				$q2=$_POST['Published'];
				$q3=$_POST['Publishedby'];
				$q4=$_POST['type'];
				$q5=$_POST['Price'];
				$q6=$_FILES["Photo"]["name"];
				$q7=$_POST['yourname'];
				$q8=$_POST['email'];
				$q9=$_POST['mobile'];
				mysqli_select_db($con,"bookstore");
			
				$query = "INSERT INTO books (	title, Published_year, Published_By, Type, Price, Photo, username, email ,mobile_num)
				VALUES ('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q8', '$q9')";
				mysqli_query($con,$query);
                move_uploaded_file($_FILES['Photo']['name'],$target); }
?>
			
            <footer>
		          <p style = "color:white"><strong> &copy; 2019 Group 6, IS203, IMAM, all rights reserved</strong> 
		               <span style = "position :absolute ; left : 80% ; top : -4px"> 
					      	    <a href = "http://www.twitter.com"> <img src = "Photos/TwitterS.png" height = "25px"> </a>
						        <a href = "http://www.youtube.com"> <img src = "Photos/YoutubeS.png" height = "25px"> </a>
						        <a href = "http://www.facebook.com"> <img src = "Photos/FacebookS.png" height = "25px"> </a>
						        <a href = "http://www.instagram.com"> <img src = "Photos/InstagramS.png" height = "25px"> </a>

			            </span> 
		          </p>
            </footer>


   </body>


</html>
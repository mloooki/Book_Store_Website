<!DOCTYPE html>
<html>
    <head>

      	<title>Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
      	<meta http-equiv="refresh" content="60" >
        <meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    </head>
    <body>
  		  <header>    
			       <img style="margin-left: 5px" src="Photos/logo.png"width=""height="90"> 
          		   <span style = "color : white ; font-size : 42px ; position : relative ; left :40% ;top:15px ; font:Comic Sans MS ">Book Store</span>
         		   <img style="float: right" src="Photos/book.png"width="70"height="85">
  		  </header>

         <div class="topnav">
                    <a href="Welcome.html" >Welcome</a>
                    <a href="ReadAboutUs.html">Read About Us</a>
                    <a href="ContactUs.html">Contact Us</a>
                    <a href="Books_for_sale.php">Books For Sale</a>
                    <a href="Book_registration.php">Boooks Registration</a>
                    
         </div>
         <div class="sidebar">
               <nav> 
                    <a  href = "Main.php"> <img src="Photos/Home.png" 
                        style="margin-left: -5px ;"  
                        alt="Home  png clipart from pngtree.com" width = "37px" height = "39px"> </a>
						    <ul> 

							    <li> <a href = "Welcome.html" > <img src = "Photos/Welcome.png" alt ="Welcome" width = "37px" height = "45px"></a> </li>
							    <li> <a href = "ReadAboutUs.html"> <img src = "Photos/read.png" alt ="ReadAboutUs" width = "37px" height = "45px"></a> </li>
							    <li> <a href = "ContactUs.html"> <img src = "Photos/contactus2.png" alt ="ContactUs" width = "37px" height = "45px"></a> </li>
							    <li> <a href = "Books_for_sale.php"> <img src = "Photos/sale.png" alt ="sale" width = "37px" height = "45px"></a> </li>
							    <li> <a href = "Book_registration.php"> <img src = "Photos/Registration.png"alt ="BookRegistration" width = "37px" height = "45px"></a> </li>

						    </ul>
              </nav>
              	 
          </div> 

          <h2 class="w3-center">Automatic Slideshow</h2>

          <div class="w3-content w3-section" style="max-width:500px">
                <img class="mySlides" src="Photos/lib5.jpeg" style="width:70% ; height: 50%;position: absolute;left: 15%;top:22%">
                <img class="mySlides" src="Photos/lib2.png" style="width:70%;height: 50%;position: absolute;left: 15%;top:22%">
                <img class="mySlides" src="Photos/lib3.jpg" style="width:70%; height: 50%;position: absolute;left: 15%;top:22%">
                <img class="mySlides" src="Photos/lib4.jpg" style="width:70%; height: 50%;position: absolute;left: 15%;top:22%">
                <img class="mySlides" src="Photos/lib.jpg" style="width:70%; height: 50%;position: absolute;left: 15%;top:22%">
         </div>
         <div style = "position: absolute ; top : 75% ; right : 15%">
		 
        <?php 
        $con = mysqli_connect("localhost","root","","bookstore");
        $res = mysqli_query($con,"SELECT * FROM books where Type =1");
        while($row = mysqli_fetch_array($res)) {
            ?> <img src="upload/<?php echo $row["Photo"]; ?>" height="150" width="150"> <?php 
             echo "Price : "; echo $row["Price"];
            echo "  Type:"; echo $row["Type"];


            
        }
		
        ?>
		 </div>
         <script>
                var myIndex = 0;
                carousel();

                function carousel() {
                                       var i;
                                       var x = document.getElementsByClassName("mySlides");
                                      for (i = 0; i < x.length; i++) {
                                                             x[i].style.display = "none"; }

                                      myIndex++;
                                     if (myIndex > x.length) {myIndex = 1}    
                                     x[myIndex-1].style.display = "block";  
                                     setTimeout(carousel, 2000); // Change image every 2 seconds
                                    }
         </script> 

               
         <footer>
			    <p>
                  <strong> &copy;  2019 Group 6, IS203, IMAM, all rights reserved</strong>
		     	  <span style = "position :absolute ; left : 80% ; top : -4px"> 
		     		  <a href = "http://www.twitter.com"> <img src = "Photos/TwitterS.png" height = "25px"> 
	                  <a href = "http://www.youtube.com"> <img src = "Photos/YoutubeS.png" height = "25px"> 
			          <a href = "http://www.facebook.com"> <img src = "Photos/FacebookS.png" height = "25px"> 
			          <a href = "http://www.instagram.com"> <img src = "Photos/InstagramS.png" height = "25px">
				  </span>
			    </p>
         </footer>

    </body>
</html>
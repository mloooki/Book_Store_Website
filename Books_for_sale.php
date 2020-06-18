<!DOCTYPE html>

<html>
     <head>
          <meta charset = "utf-8">
          <link rel="stylesheet" type="text/css" href="style.css">
	        <title> Books for sale </title>
	        <meta http-equiv="refresh" content="60" >

      </head>
      <body>
  			<header>    
			        <img style="margin-left: 5px" src="Photos/logo.png"width=""height="90"> 
          		    <span style = "color : white ; font-size : 42px ; position : relative ; left :40% ;top:-25px ; font:Comic Sans MS ">Book Store</span>
         			<img style="float: right" src="Photos/book.png"width="70"height="85">
  			</header>


            <div class="topnav">
                          <a href="Welcome.html" >Welcome</a>
                          <a href="ReadAboutUs.html">Read About Us</a>
                          <a href="ContactUs.html">Contact Us</a>
                          <a class = "active"href="Books_for_sale.php">Books For Sale</a>
                          <a href="Book_registration.php">Books Registration</a>
  
            </div>
            <div class="sidebarR">
                       <nav> 
                              <a href = "Main.php"> <img src="Photos/Home.png" 
                                 style="margin-left: -5px ;"  
                                 alt="Home  png clipart from pngtree.com" width = "37px" height = "39px"> </a>
     
						      <ul> 

							      <li> <a href = "Welcome.html" > <img src = "Photos/Welcome.png" alt ="Welcome" width = "37px" height = "45px"></a> </li>
							      <li> <a href = "ReadAboutUs.html"> <img src = "Photos/read.png" alt ="ReadAboutUs" width = "37px" height = "45px"></a> </li>
							      <li> <a href = "ContactUs.html"> <img src = "Photos/contactus2.png" alt ="ContactUs" width = "37px" height = "45px"></a> </li>
							      <li> <a href = "Books_for_sale.php"> <img src = "Photos/sale.png" alt ="sale" width = "37px" height = "45px"></a> </li>
							      <li> <a href = "Book_registration.php"> <img src = "Photos/Registration.png"alt ="BookRegistration" width = "45px" height = "37px"></a> </li>

						      </ul>
                       </nav>
 
            </div>
			
						<center>
						<BR><BR>
						<BR><BR>
						<BR><BR>
						<BR><BR>
						<BR><BR>
						<BR><BR>

              <table border = "1">
                            <tr>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Editor</th>
                                <th>type</th>
                                <th>price</th>
                                <th>Name</th>
                                <th>Mobile</th>
                                <th>Email</th>
                                <th>Image</th>
                            </tr>
        <?php 
        $con = mysqli_connect("localhost","root","","bookstore");
        $res = mysqli_query($con,"SELECT * FROM books");
        while($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>"; echo $row["title"]; echo "</td>";
            echo "<td>"; echo $row["Published_year"]; echo "</td>";
            echo "<td>"; echo $row["Published_By"]; echo "</td>";
            echo "<td>"; echo $row["Type"]; echo "</td>";
            echo "<td>"; echo $row["Price"]; echo "</td>";
            echo "<td>"; echo $row["username"]; echo "</td>";
            echo "<td>"; echo $row["mobile_num"]; echo "</td>";
            echo "<td>"; echo $row["email"]; echo "</td>";
            echo "<td>";?> <img src="upload/<?php echo $row["Photo"]; ?>" height="150" width="150"> <?php echo "</td>";

            echo "</tr>";
        }
        ?>
		</table>
</center>



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
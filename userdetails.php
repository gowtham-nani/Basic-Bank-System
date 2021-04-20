<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>

.button{
margin-left:300px;
font-weight: 600;
    padding: 10px 20px !important;
    
text-transform: uppercase !important;
color: var(--theme-link-color-visited);;
    background-color: #004981;
    border-color: #3ea49d;
    border-width: 0;
    padding: 7px 14px;
    font-size: 30px;
    outline: none !important;
    background-image: none !important;
    filter: none;
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    text-shadow: none;
    text-align:none;
    }

    img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}

img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}


</style>
<body>
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is gfg
$database = 'bank';

// Server is localhost with
// port number 3308
$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM userdetails";
$result = $mysqli->query($sql);
$mysqli->close();
?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
    <img src="https://internshala.com/cached_uploads/logo%2F5e2fddc2128b01580195266.png" alt="logo" style="width:40px;">
  </a>
  
    
  <ul class="navbar-nav">
    
 <div class="btn-group">
  <button onclick="document.location='index.php'" type="button" class="btn btn-primary">Home</button>
     </div></ul>---

    
  <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
    <button type="button"  class="btn btn-warning">about us</button></a>--
    
     <button type="button"  onclick="document.location='transactionhistory.php'" class="btn btn-info">Transaction History</button>
    
   
  
<div class="container mt-2">

  <input class="form-control" id="myInput" type="text" placeholder="Search..">
  
  
</div></div>


<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV *").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</nav>
<br>


<div class="container">
  
  <div class="col">
 
  
 
				
  
  <div id="myDIV" class="mt-3">
  
 <?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
  
 <div class="row row--1">
  
  <?php  
         
    if ($rows['ID']==1){   ?> 
    <a href="moneytransfer.php?ID=<?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/p843x403/141396206_2493794024259654_6265087547529057040_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=-7YyLsPS8cEAX86poRA&_nc_ht=scontent.fhyd1-4.fna&tp=6&oh=9d9aded097af4a3e5e48412088527f0a&oe=6096749D"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
     </a>
           
    <?php }    
    
        
?>  





 <?php
if ($rows['ID']==2){   ?> 
<a href="moneytransfer.php?ID=<?php echo $rows['ID'] ;?>">
     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/104331003_194077888575821_401002836288722534_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=HutkpDZD3qUAX-FBve8&edm=ABfd0MgAAAAA&ccb=7-4&oh=f47a4d288ffa9e43868c3e400760aefa&oe=6099F6A4&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
           
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==3){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/164419267_788753738718465_2230036935495910194_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=x01wCArvgdkAX_ipJaN&edm=ABfd0MgAAAAA&ccb=7-4&oh=cd704a529a8bac88ee22bb5ad5f6a51c&oe=609C6EA1&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==4){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/90985050_523347848594538_4485919209812918272_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=LeF8IICz0W8AX_hcEF_&_nc_ht=scontent.fhyd1-4.fna&oh=5335f048a201ec754cf3a502066844af&oe=609A8018"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
         </a>  
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==5){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/p843x403/170220245_1190771458015690_3601409687975844895_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=F2WEQPZkDxcAX_y0a_H&_nc_ht=scontent.fhyd1-3.fna&tp=6&oh=7e35b1ebd46a3f5673b98aa77611f419&oe=609B3058"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
           
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==6){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://instagram.fvga2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/67712818_1348616035294428_896999693521780736_n.jpg?tp=1&_nc_ht=instagram.fvga2-1.fna.fbcdn.net&_nc_ohc=W85yRIP32goAX8Wy6bN&edm=ABfd0MgAAAAA&ccb=7-4&oh=553772c66da443dc1df351b99ba6a749&oe=6099AA56&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           </a>
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==7){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-2.fna.fbcdn.net/v/t1.6435-9/74241445_2504303969801498_5151015051880038400_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=JrFE1wiz8MEAX-56W2R&_nc_ht=scontent.fhyd1-2.fna&oh=3c8589b0ddd36a11b4ea5967c1c70099&oe=609C9B4E"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
         </a>  
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==8){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fvga2-1.fna.fbcdn.net/v/t31.18172-8/13147829_2011836462375323_4997514148478018788_o.jpg?_nc_cat=100&ccb=1-3&_nc_sid=174925&_nc_ohc=X8Vw7KPj5iwAX8vrBuB&_nc_ht=scontent.fvga2-1.fna&oh=9b6c186ad30e8a3e2c544a379654287f&oe=609CF4E6"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           </a>  
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==9){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/172690451_484734182710817_8004029811343064611_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=vtTmfy7d7eoAX8MSiiu&_nc_ht=scontent.fhyd1-4.fna&oh=99aec3978ed1c9f817c63bdda4c7915d&oe=609B0278"   style="background-color:orange" class="img-thumbnail"/>
    </a>  
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==10){   ?> 
<a href="moneytransfer.php?ID= <?php echo $rows['ID'] ;?>">
     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/46272044_683165832084398_7425190098989219840_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=muqBKOpoe1QAX-L-RvD&_nc_ht=scontent.fhyd1-3.fna&oh=97e69e310519ec4fa2d89d6f6981c37f&oe=609C64E5"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          </a>   
    <?php }    
    
        
?>  
      </div>
    <div class="row row--1">
    <button type="button" class="btn btn-danger">
   <?php echo $rows['Name']?> <span class="badge badge-light"><?php echo $rows['ID'] ?></span>
  </button> </div>
    
      <div class="row row--1"><br><code>Email</code><kbd class="text-success"><?php echo $rows['Email']?></kbd> </div>
     <div class="row row--1"><br> <code>Balance</code><kbd class="text-warning"><?php echo $rows['Balance']?></kbd>  </div><br>
    
     
   
     
     <?php

                    }
                ?>
  
 
  </div>
  </div>
    </div>
 
   


<br>

  </div>
  
  <br><br>
   
</body>
</html>
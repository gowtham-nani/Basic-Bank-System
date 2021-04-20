<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer History</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
    	img {
  border: 1px solid #ddd;
  border-radius: 4px;
  padding: 5px;
  width: 150px;
}









.form-control {
    display: block;
    width: 15%;
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}



img:hover {
  box-shadow: 0 0 2px 1px rgba(0, 140, 186, 0.5);
}
		button{
			border:none;
			background: #d9d9d9;
		}
	    button:hover{
			background-color:#777E8B;
			transform: scale(1.1);
			color:white;
		}

    </style>
</head>

<body>
<nav class="navbar navbar-expand-sm bg-secondary navbar-dark">

  <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
    <img src="https://internshala.com/cached_uploads/logo%2F5e2fddc2128b01580195266.png" alt="logo" style="width:40px;">
  </a>
  

  <ul class="navbar-nav">
    <li class="nav-item">
 <div class="btn-group">
    <button onclick="document.location='index.php'" type="button" class="btn btn-primary">Home</button>
    
   
  </div>
  
  

 
    <button type="button" onclick="document.location='userdetails.php'" class="btn btn-success">New Transaction</button>
    

  
   
    

  <a href="https://www.thesparksfoundationsingapore.org/">
    <button type="button"  class="btn btn-warning">about us</button><a>
    
 </li>
  </ul>
</nav>

	<div class="container">
        <h2 class="text-center text-success pt-4">Transfer History</h2>
        
       <br>
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
               
            </tr>
        </thead>
        <tbody>
        <?php

            $user = 'root';
$password = '';

// Database name is gfg
$database = 'bank';

// Server is localhost with
// port number 3308
$servername='localhost:3308';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
    }

// SQL query to select data from database
 $sql ="select * from transaction";
$query =$mysqli->query($sql) ;
$mysqli->close();


           
?>  

        
        <?php // LOOP TILL END OF DATA
				while($rows=$query->fetch_assoc())
				{
			?>

            


            <tr>
            
            <td class="py-2">
             <?php  
        
         
    if ($rows['sender']=="Bharath"){   ?> 
    
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/p843x403/141396206_2493794024259654_6265087547529057040_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=-7YyLsPS8cEAX86poRA&_nc_ht=scontent.fhyd1-4.fna&tp=6&oh=9d9aded097af4a3e5e48412088527f0a&oe=6096749D"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  





 <?php
if ($rows['sender']=="Jaisimha"){   ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/104331003_194077888575821_401002836288722534_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=HutkpDZD3qUAX-FBve8&edm=ABfd0MgAAAAA&ccb=7-4&oh=f47a4d288ffa9e43868c3e400760aefa&oe=6099F6A4&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['sender']=="Arshad"){  ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/164419267_788753738718465_2230036935495910194_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=x01wCArvgdkAX_ipJaN&edm=ABfd0MgAAAAA&ccb=7-4&oh=cd704a529a8bac88ee22bb5ad5f6a51c&oe=609C6EA1&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Tharun"){   ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/90985050_523347848594538_4485919209812918272_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=LeF8IICz0W8AX_hcEF_&_nc_ht=scontent.fhyd1-4.fna&oh=5335f048a201ec754cf3a502066844af&oe=609A8018"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Ganesh"){   ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/p843x403/170220245_1190771458015690_3601409687975844895_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=F2WEQPZkDxcAX_y0a_H&_nc_ht=scontent.fhyd1-3.fna&tp=6&oh=7e35b1ebd46a3f5673b98aa77611f419&oe=609B3058"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['sender']=="Jagadesh"){   ?> 

     <img src="https://images-na.ssl-images-amazon.com/images/I/31rNsnic6wL.jpg"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Gokul"){  ?> 

     <img src="https://image.shutterstock.com/image-vector/number-seven-symbol-neon-sign-260nw-1131532157.jpg"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Imran"){    ?> 

     <img src="https://i.pinimg.com/originals/68/8d/9a/688d9a7ef47b1084c8cc93c557e2b8ed.png"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
           
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Gowtham"){    ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/172690451_484734182710817_8004029811343064611_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=vtTmfy7d7eoAX8MSiiu&_nc_ht=scontent.fhyd1-4.fna&oh=99aec3978ed1c9f817c63bdda4c7915d&oe=609B0278"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['sender']=="Varun"){    ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/46272044_683165832084398_7425190098989219840_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=muqBKOpoe1QAX-L-RvD&_nc_ht=scontent.fhyd1-3.fna&oh=97e69e310519ec4fa2d89d6f6981c37f&oe=609C64E5"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  


             <?php echo $rows['sender']; ?>
            </td>
            <td class="py-2">
            <?php  
        
         
    if ($rows['receiver']=="Bharath"){   ?> 
    
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/p843x403/141396206_2493794024259654_6265087547529057040_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=-7YyLsPS8cEAX86poRA&_nc_ht=scontent.fhyd1-4.fna&tp=6&oh=9d9aded097af4a3e5e48412088527f0a&oe=6096749D"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  





 <?php
if ($rows['receiver']=="Jaisimha"){   ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/104331003_194077888575821_401002836288722534_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=HutkpDZD3qUAX-FBve8&edm=ABfd0MgAAAAA&ccb=7-4&oh=f47a4d288ffa9e43868c3e400760aefa&oe=6099F6A4&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['receiver']=="Arshad"){  ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/164419267_788753738718465_2230036935495910194_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=x01wCArvgdkAX_ipJaN&edm=ABfd0MgAAAAA&ccb=7-4&oh=cd704a529a8bac88ee22bb5ad5f6a51c&oe=609C6EA1&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Tharun"){   ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/90985050_523347848594538_4485919209812918272_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=LeF8IICz0W8AX_hcEF_&_nc_ht=scontent.fhyd1-4.fna&oh=5335f048a201ec754cf3a502066844af&oe=609A8018"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Ganesh"){   ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/p843x403/170220245_1190771458015690_3601409687975844895_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=F2WEQPZkDxcAX_y0a_H&_nc_ht=scontent.fhyd1-3.fna&tp=6&oh=7e35b1ebd46a3f5673b98aa77611f419&oe=609B3058"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['receiver']=="Jagadesh"){   ?> 

     <img src="https://instagram.fvga2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/67712818_1348616035294428_896999693521780736_n.jpg?tp=1&_nc_ht=instagram.fvga2-1.fna.fbcdn.net&_nc_ohc=W85yRIP32goAX8Wy6bN&edm=ABfd0MgAAAAA&ccb=7-4&oh=553772c66da443dc1df351b99ba6a749&oe=6099AA56&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Gokul"){  ?> 

     <img src="https://scontent.fhyd1-2.fna.fbcdn.net/v/t1.6435-9/74241445_2504303969801498_5151015051880038400_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=JrFE1wiz8MEAX-56W2R&_nc_ht=scontent.fhyd1-2.fna&oh=3c8589b0ddd36a11b4ea5967c1c70099&oe=609C9B4E"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Imran"){    ?> 

     <img src="https://scontent.fvga2-1.fna.fbcdn.net/v/t31.18172-8/13147829_2011836462375323_4997514148478018788_o.jpg?_nc_cat=100&ccb=1-3&_nc_sid=174925&_nc_ohc=X8Vw7KPj5iwAX8vrBuB&_nc_ht=scontent.fvga2-1.fna&oh=9b6c186ad30e8a3e2c544a379654287f&oe=609CF4E6"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
           
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Gowtham"){    ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/172690451_484734182710817_8004029811343064611_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=vtTmfy7d7eoAX8MSiiu&_nc_ht=scontent.fhyd1-4.fna&oh=99aec3978ed1c9f817c63bdda4c7915d&oe=609B0278"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['receiver']=="Varun"){    ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/46272044_683165832084398_7425190098989219840_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=muqBKOpoe1QAX-L-RvD&_nc_ht=scontent.fhyd1-3.fna&oh=97e69e310519ec4fa2d89d6f6981c37f&oe=609C64E5"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  

            <?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
          
                
        <?php
            }

        ?>
        </tbody>
    </table>

    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
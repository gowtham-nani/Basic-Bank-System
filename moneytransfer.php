<?php


	$servername = "localhost:3308";
        $username = "root";
        $password = "";
        $database = "bank";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}





   










if(isset($_POST['submit']))
{
    $from = $_GET['ID'];
    
     $to= $_POST['to'];
   
    $amount = $_POST['amount'];

    $sql = "SELECT * from userdetails where ID=$from";
    $query = mysqli_query($conn,$sql);
    $sql1 = mysqli_fetch_array($query); 

    $sql = "SELECT * from userdetails where ID=$to";
    $query = mysqli_query($conn,$sql);
    $sql2 = mysqli_fetch_array($query);



    
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';
        echo '</script>';
    }


  
    
    else if($amount > $sql1['Balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")'; 
        echo '</script>';
    }
    


   
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                
                $newbalance = $sql1['Balance'] - $amount;
                $sql = "UPDATE userdetails set Balance=$newbalance where ID=$from";
                mysqli_query($conn,$sql);
             

                
                $newbalance = $sql2['Balance'] + $amount;
                $sql = "UPDATE userdetails set Balance=$newbalance where ID=$to";
                mysqli_query($conn,$sql);
                
                $sender = $sql1['Name'];
                $receiver = $sql2['Name'];

                $sql = "INSERT INTO transaction(sender, receiver,amount) VALUES ('$sender','$receiver','$amount')";
                $query=mysqli_query($conn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='userdetails.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
    <img src="https://internshala.com/cached_uploads/logo%2F5e2fddc2128b01580195266.png" alt="logo" style="width:40px;">
  </a>
  
    
  <ul class="navbar-nav">
    
 <div class="btn-group">
  <button onclick="document.location='index.php'" type="button" class="btn btn-primary">Home</button>
     </div></ul>---

    
  <a class="navbar-brand" href="https://www.thesparksfoundationsingapore.org/">
    <button type="button"  class="btn btn-warning">about us</button></a>
    
   
   <button type="button"  onclick="document.location='transactionhistory.php'" class="btn btn-info">Transaction History</button>
    




</nav>
</div>


 


	
        
           <?php
                
           

	$servername = "localhost:3308";
        $username = "root";
        $password = "";
        $database = "bank";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


          
                
                 
                $sid=$_GET['ID'];
                $sql = "SELECT * FROM  userdetails where ID=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>

             <br>

           <br>
        <div class="container-fluid">
  
  <div class="col">
        <div class="row row--1">

        <?php  
        
         
    if ($rows['ID']==1){   ?> 
    
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/p843x403/141396206_2493794024259654_6265087547529057040_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=-7YyLsPS8cEAX86poRA&_nc_ht=scontent.fhyd1-4.fna&tp=6&oh=9d9aded097af4a3e5e48412088527f0a&oe=6096749D"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  





 <?php
if ($rows['ID']==2){   ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/104331003_194077888575821_401002836288722534_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=HutkpDZD3qUAX-FBve8&edm=ABfd0MgAAAAA&ccb=7-4&oh=f47a4d288ffa9e43868c3e400760aefa&oe=6099F6A4&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==3){   ?> 

     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/164419267_788753738718465_2230036935495910194_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=x01wCArvgdkAX_ipJaN&edm=ABfd0MgAAAAA&ccb=7-4&oh=cd704a529a8bac88ee22bb5ad5f6a51c&oe=609C6EA1&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==4){   ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/90985050_523347848594538_4485919209812918272_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=LeF8IICz0W8AX_hcEF_&_nc_ht=scontent.fhyd1-4.fna&oh=5335f048a201ec754cf3a502066844af&oe=609A8018"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==5){   ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/p843x403/170220245_1190771458015690_3601409687975844895_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=F2WEQPZkDxcAX_y0a_H&_nc_ht=scontent.fhyd1-3.fna&tp=6&oh=7e35b1ebd46a3f5673b98aa77611f419&oe=609B3058"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==6){   ?> 

     <img src="https://instagram.fvga2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/67712818_1348616035294428_896999693521780736_n.jpg?tp=1&_nc_ht=instagram.fvga2-1.fna.fbcdn.net&_nc_ohc=W85yRIP32goAX8Wy6bN&edm=ABfd0MgAAAAA&ccb=7-4&oh=553772c66da443dc1df351b99ba6a749&oe=6099AA56&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==7){   ?> 

     <img src="https://scontent.fhyd1-2.fna.fbcdn.net/v/t1.6435-9/74241445_2504303969801498_5151015051880038400_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=JrFE1wiz8MEAX-56W2R&_nc_ht=scontent.fhyd1-2.fna&oh=3c8589b0ddd36a11b4ea5967c1c70099&oe=609C9B4E"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==8){   ?> 

     <img src="https://scontent.fvga2-1.fna.fbcdn.net/v/t31.18172-8/13147829_2011836462375323_4997514148478018788_o.jpg?_nc_cat=100&ccb=1-3&_nc_sid=174925&_nc_ohc=X8Vw7KPj5iwAX8vrBuB&_nc_ht=scontent.fvga2-1.fna&oh=9b6c186ad30e8a3e2c544a379654287f&oe=609CF4E6"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==9){   ?> 

     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/172690451_484734182710817_8004029811343064611_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=vtTmfy7d7eoAX8MSiiu&_nc_ht=scontent.fhyd1-4.fna&oh=99aec3978ed1c9f817c63bdda4c7915d&oe=609B0278"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==10){   ?> 

     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/46272044_683165832084398_7425190098989219840_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=muqBKOpoe1QAX-L-RvD&_nc_ht=scontent.fhyd1-3.fna&oh=97e69e310519ec4fa2d89d6f6981c37f&oe=609C64E5"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           
    <?php }    
    
        
?>  
</div>
<div class="row row--1">
   <button type="button" class="btn btn-danger">
   <?php echo $rows['Name']?> <span class="badge badge-light"><?php echo $rows['ID'] ?></span>
  </button></div>
    
      <div class="row row--1"><code>Email</code><kbd class="text-success"><?php echo $rows['Email']?></kbd></div>
     <div class="row row--1"><code>Balance</code><kbd class="text-warning"><?php echo $rows['Balance']?></kbd></div>
        
      </div>
      </div>
     </div>
        <br><br><br>
        </div>


        <h2 class=" text-success pt-4">Transfer To</h2>
        <br><br>
         
            
           <?php



               

	$servername = "localhost:3308";
        $username = "root";
        $password = "";
        $database = "bank";

// Create connection
        $conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


          
                
                $sid=$_GET['ID'];
                $sql = "SELECT * FROM  userdetails where ID!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
            
              <div class="container-fluid">
  
  <div class="col">
        <div class="row row--1">   
                 
            <?php  
         
    if ($rows['ID']==1){   ?> 
    

   <a href="#demo1"  data-toggle="collapse" >
  
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/p843x403/141396206_2493794024259654_6265087547529057040_n.jpg?_nc_cat=103&ccb=1-3&_nc_sid=730e14&_nc_ohc=-7YyLsPS8cEAX86poRA&_nc_ht=scontent.fhyd1-4.fna&tp=6&oh=9d9aded097af4a3e5e48412088527f0a&oe=6096749D"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==2){   ?> 

 <a href="#demo2"  data-toggle="collapse">
     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/104331003_194077888575821_401002836288722534_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=HutkpDZD3qUAX-FBve8&edm=ABfd0MgAAAAA&ccb=7-4&oh=f47a4d288ffa9e43868c3e400760aefa&oe=6099F6A4&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
         
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==3){   ?> 

 <a href="#demo3"  data-toggle="collapse">
     <img src="https://instagram.fhyd1-2.fna.fbcdn.net/v/t51.2885-19/s320x320/164419267_788753738718465_2230036935495910194_n.jpg?tp=1&_nc_ht=instagram.fhyd1-2.fna.fbcdn.net&_nc_ohc=x01wCArvgdkAX_ipJaN&edm=ABfd0MgAAAAA&ccb=7-4&oh=cd704a529a8bac88ee22bb5ad5f6a51c&oe=609C6EA1&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
          
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==4){   ?>

 <a href="#demo4"  data-toggle="collapse">
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/90985050_523347848594538_4485919209812918272_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=174925&_nc_ohc=LeF8IICz0W8AX_hcEF_&_nc_ht=scontent.fhyd1-4.fna&oh=5335f048a201ec754cf3a502066844af&oe=609A8018"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
         </a>  
         
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==5){   ?> 

 <a href="#demo5"  data-toggle="collapse">
     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/p843x403/170220245_1190771458015690_3601409687975844895_n.jpg?_nc_cat=109&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=F2WEQPZkDxcAX_y0a_H&_nc_ht=scontent.fhyd1-3.fna&tp=6&oh=7e35b1ebd46a3f5673b98aa77611f419&oe=609B3058"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    </a>
           
    <?php }    
    
        
?> 
 <?php
if ($rows['ID']==6){   ?> 

<a href="#demo6"  data-toggle="collapse">
     <img src="https://instagram.fvga2-1.fna.fbcdn.net/v/t51.2885-19/s320x320/67712818_1348616035294428_896999693521780736_n.jpg?tp=1&_nc_ht=instagram.fvga2-1.fna.fbcdn.net&_nc_ohc=W85yRIP32goAX8Wy6bN&edm=ABfd0MgAAAAA&ccb=7-4&oh=553772c66da443dc1df351b99ba6a749&oe=6099AA56&_nc_sid=7bff83"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           </a>
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==7){   ?> 

<a href="#demo7"  data-toggle="collapse">
     <img src="https://scontent.fhyd1-2.fna.fbcdn.net/v/t1.6435-9/74241445_2504303969801498_5151015051880038400_n.jpg?_nc_cat=108&ccb=1-3&_nc_sid=8bfeb9&_nc_ohc=JrFE1wiz8MEAX-56W2R&_nc_ht=scontent.fhyd1-2.fna&oh=3c8589b0ddd36a11b4ea5967c1c70099&oe=609C9B4E"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
         </a>  
         
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==8){   ?> 

<a href="#demo8"  data-toggle="collapse">
     <img src="https://scontent.fvga2-1.fna.fbcdn.net/v/t31.18172-8/13147829_2011836462375323_4997514148478018788_o.jpg?_nc_cat=100&ccb=1-3&_nc_sid=174925&_nc_ohc=X8Vw7KPj5iwAX8vrBuB&_nc_ht=scontent.fvga2-1.fna&oh=9b6c186ad30e8a3e2c544a379654287f&oe=609CF4E6"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
           </a>  
          
    <?php }    
   ?>
    
 <?php
if ($rows['ID']==9){   ?> 

<a href="#demo9"  data-toggle="collapse">
     <img src="https://scontent.fhyd1-4.fna.fbcdn.net/v/t1.6435-9/172690451_484734182710817_8004029811343064611_n.jpg?_nc_cat=102&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=vtTmfy7d7eoAX8MSiiu&_nc_ht=scontent.fhyd1-4.fna&oh=99aec3978ed1c9f817c63bdda4c7915d&oe=609B0278"   style="background-color:orange" class="img-thumbnail"/>
    </a>  
           
    <?php }    
    
        
?>  
 <?php
if ($rows['ID']==10){   ?> 

<a href="#demo10"  data-toggle="collapse">
     <img src="https://scontent.fhyd1-3.fna.fbcdn.net/v/t1.6435-9/46272044_683165832084398_7425190098989219840_n.jpg?_nc_cat=104&ccb=1-3&_nc_sid=09cbfe&_nc_ohc=muqBKOpoe1QAX-L-RvD&_nc_ht=scontent.fhyd1-3.fna&oh=97e69e310519ec4fa2d89d6f6981c37f&oe=609C64E5"  title="select"   style="background-color:orange" class="img-thumbnail"/>
    
          </a>  
         
    <?php }    
    
        
?>  
     </div>
     

     <div class="row row--1">
   <button type="button" class="btn btn-danger">
   <?php echo $rows['Name']?> <span class="badge badge-light"><?php echo $rows['ID'] ?></span>
  </button></div>
    
      <div class="row row--1"><code>Email</code><kbd class="text-success"><?php echo $rows['Email']?></kbd></div>
     <div class="row row--1"><code>Balance</code><kbd class="text-warning"><?php echo $rows['Balance']?></kbd></div><br>
        </select>
     
     <?php  
         
    if ($rows['ID']==1){   ?> 
    <form method="post" >
     <div id="demo1" class="collapse"  >
         <input type = "hidden" name = "to" value = "1" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     
     
   <?php  
         
    if ($rows['ID']==2){   ?> 
    <form method="post" >
     <div id="demo2" class="collapse"  >
         <input type = "hidden" name = "to" value = "2" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==3){   ?> 
    <form method="post" >
     <div id="demo3" class="collapse"  >
         <input type = "hidden" name = "to" value = "3" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==4){   ?> 
    <form method="post" >
     <div id="demo4" class="collapse"  >
         <input type = "hidden" name = "to" value = "4" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==5){   ?> 
    <form method="post" >
     <div id="demo5" class="collapse"  >
         <input type = "hidden" name = "to" value = "5" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==6){   ?> 
    <form method="post" >
     <div id="demo6" class="collapse"  >
         <input type = "hidden" name = "to" value = "6" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==7){   ?> 
    <form method="post" >
     <div id="demo7" class="collapse"  >
         <input type = "hidden" name = "to" value = "7" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==8){   ?> 
    <form method="post" >
     <div id="demo8" class="collapse"  >
         <input type = "hidden" name = "to" value = "8" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==9){   ?> 
    <form method="post" >
     <div id="demo9" class="collapse"  >
         <input type = "hidden" name = "to" value = "9" />
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit" >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     

   <?php  
         
    if ($rows['ID']==10){   ?> 
    <form method="post" >
     <div id="demo10" class="collapse"  >
        <!--<div type="submit" class="form-control" name="to" value="10"></div>-->
         <input type = "hidden" name = "to" value = "10" />
 
        <input type="number" class="form-control" name="amount" placeholder="amount" required><br>
        <button class="btn btn-warning" name="submit" type="submit"  >Transfer</button>   
              </div> </form>
    <?php }    
   ?>     


  <br><br>
      </div>
      </div>
     </div> 
            <?php 
                } 
            ?>
             </div>
  
  </div>
           
    
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
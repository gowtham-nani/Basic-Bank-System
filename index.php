<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bank-System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1 user-scalable=no">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<style>
body {
  

   background-image: url("https://content.indiainfoline.com/_media/iifl/img/article/2020-09/25/full/1601021754-5544.jpg");
  
   text-align: center;
   background-size: cover;
    
}

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

.city{
    background: rgba(255,255, 255, 0.3) !important;
    border-radius: 7px;
    width: 800px;
    margin: 100px auto 10px auto;
    
    
    
  
    height: 130px;
    
}




</style>
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
  
  

 
    <button type="button" onclick="document.location='userdetails.php'" class="btn btn-success">Transfer Money</button>
    

  
    <button type="button"  onclick="document.location='transactionhistory.php'" class="btn btn-info">Transaction History</button>
    

  <a href="https://www.thesparksfoundationsingapore.org/">
    <button type="button"  class="btn btn-warning">about us</button><a>
    
 </li>
  </ul>
</nav>
<div class="container">
<div class="row">
<div class="col-sm-12">
<div class="city">
   <h1><code><small>The Sparks Foundation Internship</small></code></h1>
    <h3> <kbd class="text-success "><small>Basic Banking System Website</small> </kbd></h3>
      </div>
  </div>

</div>
  </div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>

<button class="btn btn-success" onclick="document.location='userdetails.php'"><span class="spinner-grow spinner-grow-sm"></span> Transfer Money</button>

</body>
</html>

															
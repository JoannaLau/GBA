<?php

session_start();

?>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Employees</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

</head>

          
    <?php
  
    if(isset($_SESSION['type'])==1){
                    
    } else{
         header("Location: ./index.php");
        exit();
                    
    }
    ?>
    
  
    
<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper" class="shadow">
            <ul class="sidebar-nav" style="padding-top: 10%;">
                
                <li class="sidebar-brand" style="padding-top: 13px;">
                <h1 class="avenir">GBA</h1>
                    <br>
                <h6 class="avenir-light">Welcome, 
                    
                            
                <?php
                    
                    echo $_SESSION['first']; ?>
                    !</h6> 
              
                </li>
         
                <li style="padding-top: 20px;">
                    <hr>
                </li>
                
                 <li>
                 &nbsp;
                </li>
                
                
                 <li>
                 <span style="color: gray; font-size:14px;">MENU</span>
                </li>
                
              
                <li class="space">
                    <a href="clients.php" class="menu-kerning"><i class="fa fa-building-o gray" aria-hidden="true"></i> &nbsp;CLIENTS</a>
                </li>
                <li class="space">
                    <a href="#" class="menu-kerning"><i class="fa fa-credit-card" aria-hidden="true"></i> &nbsp;TRANSACTIONS</a>
                </li>
                <li class="space">
                    <a href="#" class="menu-kerning"><i class="fa fa-fax" aria-hidden="true"></i>&nbsp;&nbsp;SOA</a>
                </li>
                <li class="space">
                    <a href="#" class="menu-kerning"><i class="fa fa-book" aria-hidden="true"></i> &nbsp;COLLECTION LIST</a>
                </li>
                <li class="space">
                    <a href="#" class="menu-kerning"><i class="fa fa-bar-chart" aria-hidden="true"></i>&nbsp;&nbsp;REPORTS</a>
                </li>
                <li class="space">
                    <a href="users.php" class="menu-kerning"><i class="fa fa-users" aria-hidden="true"></i>&nbsp;&nbsp;EMPLOYEES</a>
                </li>
                <li>
                    &nbsp;
                </li>
                
                 <li>
                    &nbsp;
                </li>
                
            
            <form action="includes/logout.inc.php" method="POST">
                
                
                <center>  <button type="submit" name="submit" class="btn custom-btn teal small shadow" style="width:140px;">LOG OUT</button></center>
                </form>
                
                
                
            </ul>
            
      
            
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper" style="overflow-y:hidden; height:100%; padding-bottom: 8%;">
            <div class="container-fluid">
                
                <div class="row">
    <div class="col">
     <h2 style="color:white; padding:10px;" class="avenir-light">Employees</h2>
    </div>
    <div class="col">
&nbsp;
    </div>
                    <div class="col">
&nbsp;
    </div>
                    <div class="col">
&nbsp;
    </div>
                    <div class="col">
&nbsp;
    </div>
                    <div class="col">
    <form action="addUser.php" method="POST">        
                        
    <button type="submit" name="submit" class="btn btn-primary small custom-btn custom-btn-height shadow"  style="float: right; width:12em;">ADD EMPLOYEE</button>
                        </form>
    </div>
  </div>
                
                
           
<div class="shadow custom-round content" style="overflow-y:scroll; height:400px; background-color: white;">
        
</div>      
             
            </div>
            
            <br>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>

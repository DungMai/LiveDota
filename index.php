<?php 
    //include './config.php';
?>
<html>
    <head>
        <title>Live Dota </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>        
	
        <!-- Popup -->
         <link rel="stylesheet" type="text/css" media="screen" href="css/popup.css" />
        <script type="text/javascript" src="js/jquery.popupMiendatweb.min.js"></script>
    </head>
    <body>
      
        <div id="mask" ></div>
        <div id="wrapper">
            
            <div id="header">
                
                <?php 
                    include './content/header.php';
                ?>
                
            </div> <!-- End #headder -->
            
            <div id="content">
                
                <div id="left">
                    <?php 
                        include './content/left.php';
                    ?>
                </div> <!-- End #left -->
                
                <div id="center">
                    <?php 
                        include './content/center.php';
                    ?>
                 
                   
                </div> <!-- End #center -->
                
                <div id="right">
                    <?php 
                                        include './content/right.php';
                    ?>
                </div><!-- End #right -->
                
            </div>  <!-- End #content -->
            <div id="footer">
                
            </div>
            
        </div>  <!-- End #wrapper -->
    </body>
</html>

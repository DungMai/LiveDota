<?php 
    //include './config.php';
?>
<html>
    <head>
        <title>Live Dota </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        
        
    </head>
    <body>
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


<style type="text/css"> 
a {     text-decoration:none;  
    color:red; 
} 
.container {width: 960px; margin: 0 auto; overflow: hidden;} 
#content {    float: left; width: 100%;} 
#mask { 
    display: none; 
    background: #000;  
    position: fixed; left: 0; top: 0;  
    z-index: 10; 
    width: 100%; height: 100%; 
    opacity: 0.8; 
    z-index: 999; 
} 
.login-popup{ 
    display:none; 
    background: #333; 
    padding: 10px;     
    border: 2px solid #ddd; 
    float: left; 
    font-size: 1.2em; 
    position: fixed; 
    top: 50%; left: 50%; 
    z-index: 99999; 
    box-shadow: 0px 0px 20px #999; 
    -moz-box-shadow: 0px 0px 20px #999; /* Firefox */ 
    -webkit-box-shadow: 0px 0px 20px #999; /* Safari, Chrome */ 
    border-radius:3px 3px 3px 3px; 
    -moz-border-radius: 3px; /* Firefox */ 
    -webkit-border-radius: 3px; /* Safari, Chrome */ 
} 
img.btn_close { 
    float: right;  
    margin: -28px -28px 0 0; 
} 
</style> 

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script> 
<script type="text/javascript"> 
$(document).ready(function() { 
    $('a.login-window').click(function() { 
        // Getting the variable's value from a link  
        var loginBox = $(this).attr('href'); 
        //Fade in the Popup and add close button 
        $(loginBox).fadeIn(300); 
        //Set the center alignment padding + border 
        var popMargTop = ($(loginBox).height() + 24) / 2;  
        var popMargLeft = ($(loginBox).width() + 24) / 2;  
        $(loginBox).css({  
            'margin-top' : -popMargTop, 
            'margin-left' : -popMargLeft 
        }); 
        // Add the mask to body 
        $('body').append('<div id="mask"></div>'); 
        $('#mask').fadeIn(300); 
        return false; 
    }); 
    // When clicking on the button close or the mask layer the popup closed 
    $('a.close, #mask').live('click', function() {
        
      $('#mask , .login-popup').fadeOut(300 , function() { 
        $('#mask').remove();   
    });  
    return false; 
    }); 
}); 
</script> 

    <div id="content_2"> 
        <a href="#login-box" class="login-window">Login / Sign In</a> 
        <div id="login-box" class="login-popup">
        <a href="#" class="close">
            <span class="btn_close">CLOSE</span>
        </a> 
    <p>
         <video width="320" height="240" controls>
                                <source src="http://www.w3schools.com/html/movie.mp4" type="video/mp4">
                                <source src="http://www.w3schools.com/html/movie.ogg" type="video/ogg">                                
                              </video>
    </p> 
        </div> 
     
    </div> 


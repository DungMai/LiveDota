<?php
$dir = 'data/';
$files1 = scandir($dir, 1);
$filename = 'data/data.json';
$fileteam = 'data/team1.json';
$diemTeamA = 0;
$diemTeamB = 0;

$objTeam = json_decode(file_get_contents($fileteam));
$arrayTeam = $objTeam->Team;

//var_dump($arrayTeam);exit;

/* $list_file = array();
  if (is_dir($dir)){
  if ($dh = opendir($dir)){
  while (($file = readdir($dh)) !== false)
  {

  $list_file[] = $file;

  }
  closedir($dh);
  }
 */
// for($i = 0 ; $i <sizeof($files1); $i++)
// {
$json = file_get_contents($filename);

$obj = json_decode($json);

$arrayEvent = $obj->event;

$mainEvent = Array();

for ($j = 0; $j < sizeof($arrayEvent); $j++) {
    $event = $arrayEvent[$j];
    $mainEvent[] = $event;
}
// }
?>



<?php
//echo $mainEvent[0]-> Time . "<br />";
//


?>

<script type="text/javascript">
    
</script>





<div id="top_center">
    <div id="title">
        <h2>Tournament</h2>
    </div>
    <div id="time">
        <span>The Internationnal 2014</span><br>
        <span style="font-size: 22px;line-height: 19px;">20 </span><span> Jun</span><br>
        <span style="font-size: 16px;">29 minnutes from now</span>
    </div>
</div>
<div id="img_border">
    <img src="images/thanh-ngang.png">
</div>
<div id="top_center">
    <div id="title">
        <h2>Team</h2>
    </div>
    <div id="time_2">
        <div id="box_center">
            <div class="title_team">
                <div class="title_team_1">
                    <span class="fix_sp"><?php echo $arrayTeam[0]->Name; ?></span><br>
                    <span class="fix_sp"><i>46%</i></span>
                </div>                                   
            </div>
            <div class="title_team">
                <a href="#"><img src="<?php echo 'images/' . str_replace('', ' ', $arrayTeam[0]->Name) .'.png' ?>" style="width: 81px; height: 65px;margin-top: 6px;margin-left: 6px;"></a>
            </div>
            <div class="title_team">
                <div class="title_team_2">
                    <span style="font-size: 13px">vs</span>
                </div>


            </div>
            <div class="title_team" style="margin-left: 5px;">
                <a href="#"><img src="<?php echo 'images/' . str_replace('', ' ', $arrayTeam[1]->Name) .'.png' ?>" style="width: 81px; height:65px;margin-top: 6px;"></a>
            </div>
            <div class="title_team">
                <div class="title_team_1">
                    <span class="fix_sp"><?php echo $arrayTeam[1]->Name; ?></span><br>
                    <span class="fix_sp"><i>54%</i></span>
                </div>                                   
            </div>
        </div>
        <div id="box_list">
            <div class="menu_center btn_game_blue">
                <a href="#">GAME 1</a>
            </div>
            <div class="menu_center">
                <a href="#">GAME 2</a>
            </div>
            <div class="menu_center">
                <a href="#">GAME 3</a>
            </div>
        </div>
    </div>
</div>
<div id="img_border">
    <img src="images/thanh-ngang.png">
</div>
<div id="top_center">
    <div id="title">
        <h2>Line-up</h2>
    </div>
    <div id="time" style="float: left">
        <div id="icon_line">
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]->Hero1)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]->Hero2)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]->Hero3)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]->Hero4)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]->Hero5)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
        </div>
        <div id="icon_line_1">
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]->Hero1)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]->Hero2)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]->Hero3)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]->Hero4)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]->Hero5)) . '_icon' . '.png' ?>" class="img_icon"></a>
            </div>
        </div>
    </div>
</div><?php

function kTraDoiNao($name, $arrTeam) {
    for ($i = 1; $i <= 5; $i++) {
        $vittim = "Hero$i";
        if ($arrTeam[0]->$vittim == $name) {
            return 0;
        }
        if ($arrTeam[1]->$vittim == $name) {
            return 1;
        }
    }
}

for ($i = 0; $i < sizeof($mainEvent); $i++) {
    $icon = 'hero_icon/' . str_replace(' ', '_', trim($mainEvent[$i]->victim)) . '_icon' . '.png';
    $icon = str_replace('__', '_', $icon);
    $icon2 = 'hero_icon/' . str_replace('!', '', str_replace(' ', '_', (trim($mainEvent[$i]->Killer)))) . '_icon' . '.png';
    $icon2 = str_replace('__', '_', $icon2);
    $teamNameA =  trim($mainEvent[$i]->victim);
    $teamNameB = trim($mainEvent[$i]->Killer);
    
    $haha = "";
            
    
    if (kTraDoiNao(trim($mainEvent[$i]->victim), $arrayTeam) == 0) {
        $logoA = $icon;
        $logoB = $icon2;
        $icon_arrow = 'images/icon_arow_right.png';
        $diemTeamA ++;
        
       
    } else {
        $logoA = $icon2;
        $logoB = $icon;
        $icon_arrow = 'images/icon_arow_left.png';
        $diemTeamB ++;
        
    }
    ?>
<div id="top_center_1">

        <div id="title">
            <h2 style="color: black; font-size: 18px;"><?php echo $mainEvent[$i]->Time ?></h2>
        </div>
        <div id="time" style="float: left;margin-left: 109px;margin-top: 8px;margin-right: 20px;">
            <div class="icon_detail">
                <a href="#"><img src="<?php echo $logoA ?>" class="img_icon"></a>
            </div>
            <div class="icon_detail" style="padding: 5px;">
                <a href="#"><img src="<?php echo $icon_arrow; ?>" ></a>
            </div>
            <div class="icon_detail">
                <a href="#"><img src="<?php echo $logoB; ?>" class="img_icon"></a>
            </div>
        </div>

        <div id="num_ratio">
            <div class="icon_detail">
                <span><?php echo $diemTeamA ?></span>
            </div>
            <div class="icon_detail" >
                <span>-</span>
            </div>
            <div class="icon_detail">
                <span><?php echo $diemTeamB ?></span>
            </div>
        </div>


        <div id="icon-img-popup">                                                         
            <a class="pop_up" link_video="./video/1.mp4" team_nameA ="<?php echo $teamNameA ?>" team_nameB ="<?php echo $teamNameB ?>"  href="#popup_content" rel="prettyPhoto" title=""><img src="images/icon_arow.png" class="img_icon" /></a>             
                    
             </div> 
            

    </div>

    <?php
}
?>


                <div id="content_popup"> 
                    <div id="popup_content" class="window-popup">
                        <div class="name_Team" style="margin-left: 170px;">
                            <a href="#" class="close" style="text-decoration: none;">
                                <span class="btn_close" name= "teamNameA" style="color: #FFF;margin: 10px;"></span>
                                <b style="color: red;">VS</b>
                                <span class="btn_close" name= "teamNameB" style="color: #FFF;margin: 10px;"></span>
                            </a>
                        </div>
                        
                        <p>
                            <video width="600" height="450" controls>
                                <source id="src_link_video" src="" type="video/mp4">  
                                <source id="src_link_video" src="http://localhost/DoTa/video/1.mp4" type="video/mp4">  
                              
                                
                            </video>
                        </p>
                    </div>
                </div>

            





<script type="text/javascript"> 
     function log(s){
            console.log(s);
    }
     function show_nameA(haha){
            document.getElementsByName('teamNameA')[0].innerHTML = haha;
            log(haha);
    }
    function show_nameB(haha){
            document.getElementsByName('teamNameB')[0].innerHTML = haha;
            log(haha);
    }
$(document).ready(function() { 
    
    $('.menu_center').click(function() { 
        $('.menu_center').removeClass('btn_game_blue');
        $(this).addClass('btn_game_blue');
    });
    
    $('a.pop_up').click(function() { 
        // Getting the variable's value from a link  
        var loginBox = $(this).attr('href'); 
        
        var linkVideo = $(this).attr('link_video'); 
        
        $("#src_link_video").attr('src', linkVideo);
        
        var tendoiA = $(this).attr('team_nameA');
        show_nameA(tendoiA);
         var tendoiB = $(this).attr('team_nameB');
        show_nameB(tendoiB);
        
        //Fade in the Popup and add close button 
        $(loginBox).fadeIn(300); 
        //Set the center alignment padding + border 
        var popMargTop = ($(loginBox).height() + 24) / 2;  
        var popMargLeft = ($(loginBox).width() + 24) / 2;  
        $(loginBox).css({  
            'margin-top' : -popMargTop, 
            'margin-left' : -popMargLeft 
        });         
        
        $('#mask').fadeIn(300); 
        return false; 
    }); 
    // When clicking on the button close or the mask layer the popup closed 
    $('a.close, #mask').click(function() {        
      $('#mask , .window-popup').fadeOut(300);  
    return false; 
    }); 
}); 
</script> 
<style type="text/css">
.btn_game_blue
{
    border: 1px solid rgb(202, 9, 40);
    background: #A5ACFD;
}

#content_popup {    float: left; width: 100%;} 
#mask { 
    display: none; 
    background: #000;  
    position: fixed; left: 0; top: 0;  
    z-index: 10; 
    width: 100%; height: 100%; 
    opacity: 0.8; 
    z-index: 999; 
} 
.window-popup{ 
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

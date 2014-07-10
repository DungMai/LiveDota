<?php 
    
    $dir    = 'data/';
    $files1 = scandir($dir, 1);
    $filename = 'data/data.json';
    $fileteam = 'data/team1.json';
    
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

            for($j = 0; $j < sizeof($arrayEvent); $j++)
            {
                $event = $arrayEvent[$j];
                $mainEvent[] = $event;

            }
     // }



   

?>



<?php 

    //echo $mainEvent[0]-> Time . "<br />";

  //


?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
		<!--script src="js/jquery.lint.js" type="text/javascript" charset="utf-8"></script-->
		<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
		<script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>




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
                 <span class="fix_sp"><?php echo $arrayTeam[0]-> Name; ?></span><br>
                 <span class="fix_sp"><i>46%</i></span>
            </div>                                   
        </div>
        <div class="title_team">
            <a href="#"><img src="images/team1.png" style="width: 81px; height: 65px;margin-top: 6px;"></a>
        </div>
        <div class="title_team">
            <div class="title_team_2">
                <span style="font-size: 13px">vs</span>
            </div>


        </div>
        <div class="title_team" style="margin-left: 5px;">
            <a href="#"><img src="images/team11.png" style="width: 81px; height:65px;margin-top: 6px;"></a>
        </div>
        <div class="title_team">
            <div class="title_team_1">
                 <span class="fix_sp"><?php echo $arrayTeam[1]-> Name; ?></span><br>
                 <span class="fix_sp"><i>54%</i></span>
            </div>                                   
        </div>
    </div>
    <div id="box_list">
        <div class="menu_center">
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
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]-> Hero1)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]-> Hero2)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]-> Hero3)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]-> Hero4)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[0]-> Hero5)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
    </div>
     <div id="icon_line_1">
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]-> Hero1)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]-> Hero2)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]-> Hero3)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]-> Hero4)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
        <div class="icon_detail">
            <a href="#"><img src="<?php echo 'hero_icon/' . str_replace(' ', '_', trim($arrayTeam[1]-> Hero5)). '_icon' . '.png' ?>" class="img_icon"></a>
        </div>
    </div>
</div>
</div><?php 
   
    for($i = 0 ; $i < sizeof($mainEvent); $i++)
    {
        $icon = 'hero_icon/' . str_replace(' ', '_', trim($mainEvent[$i]-> victim)). '_icon' . '.png'; 
        $icon = str_replace('__', '_', $icon);
        $icon2 = 'hero_icon/' . str_replace('!', '',str_replace(' ', '_', (trim($mainEvent[$i]-> Killer)))). '_icon' . '.png'; 
        $icon2 = str_replace('__', '_', $icon2);
   ?>
<div id="top_center_1">
        
            <div id="title">
                <h2 style="color: black; font-size: 18px;"><?php echo $mainEvent[$i]-> Time?></h2>
            </div>
             <div id="time" style="float: left;margin-left: 109px;margin-top: 8px;margin-right: 20px;">
                 <div class="icon_detail">
                        <a href="#"><img src="<?php echo $icon ?>" class="img_icon"></a>
                </div>
                 <div class="icon_detail" style="padding: 5px;">
                      <a href="#"><img src="images/icon_arow_right.png" ></a>
                </div>
                <div class="icon_detail">
                    <a href="#"><img src="<?php echo $icon2 ;?>" class="img_icon"></a>
                </div>
             </div>

             <div id="num_ratio">
                 <div class="icon_detail">
                     <span>0</span>
                </div>
                 <div class="icon_detail" >
                      <span>-</span>
                </div>
                <div class="icon_detail">
                    <span>1</span>
                </div>
             </div>

        <div id="icon-img-popup">

            <div class="fleft">
            <ul class="gallery clearfix">

            </ul>
                    <ul class="gallery clearfix">

                            <a href="http://youtu.be/kh29_SERH0Y?rel=0" rel="prettyPhoto" ><img src="images/icon_arow.png" class="img_icon" /></a>
                    </ul>
            </div>
        </div>

    
</div>
                
 <?php 
    }
    ?>

                <!-- Popup Slide --> 
      	<script type="text/javascript" charset="utf-8">
            $(document).ready(function(){
                    $("area[rel^='prettyPhoto']").prettyPhoto();

                    $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: true});
                    $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: true});

                    $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                            custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                            changepicturecallback: function(){ initialize(); }
                    });

                    $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                            custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                            changepicturecallback: function(){ _bsap.exec(); }
                    });
            });
            </script>
 <!-- End Popup Slide -->
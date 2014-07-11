<?php 
    
    include './config.php';
    if(isset($_POST['submit']))
    {
        //print_r($_FILES);exit;
        
        $tenteam = $_POST['team_title'];
        $filename1 = "";
        
        
        //print_r($_FILES);
        
        $allowedExts = array("gif", "jpeg", "jpg", "png");  
        //Kiem tra hinh1: 
        $temp1 = explode(".", $_FILES["team_image1"]["name"]);
        $extension1 = end($temp1);
        
        if ((($_FILES["team_image1"]["type"] == "image/gif")
                || ($_FILES["team_image1"]["type"] == "image/jpeg")
                || ($_FILES["team_image1"]["type"] == "image/jpg")
                || ($_FILES["team_image1"]["type"] == "image/pjpeg")
                || ($_FILES["team_image1"]["type"] == "image/x-png")
                || ($_FILES["team_image1"]["type"] == "image/png"))
                && ($_FILES["team_image1"]["size"] < 600000)//byte
                && in_array($extension1, $allowedExts)) 
         {
            if ($_FILES["team_image1"]["error"] > 0) {
              echo "Return Code: " . $_FILES["team_image1"]["error"] . "<br>";
            } else {
                echo "Upload: " . $_FILES["team_image1"]["name"] . "<br>";
                echo "Type: " . $_FILES["team_image1"]["type"] . "<br>";
                echo "Size: " . ($_FILES["team_image1"]["size"] / 1024) . " kB<br>";
                echo "Temp file: " . $_FILES["team_image1"]["tmp_name"] . "<br>";

                $filename1 = "liveDoTa_img_".date('YmdHis').".". $extension1 ;
                move_uploaded_file($_FILES["team_image1"]["tmp_name"], "../images/" . $filename1);            
              }          
        } else {
          echo "Invalid file 1";
        }  
    
        
        
        if($filename1 != ""){
           $sql = "INSERT INTO team(name_team, img_team) VALUES('$tenteam','$filename1')";
           //echo $sql;
           $result = mysql_query($sql); 
           /*$result = query($sql);*/
            
            if($result == 1){
                header("location:index.php"); 
            }        
            else 
            {
                echo "Có lỗi xảy ra, vui lòng kiểm tra và thử lại!";
            } 
        }
        else{
            echo "Có lỗi xảy ra khi upload hình ảnh, vui lòng kiểm tra và thử lại!";
        }
        
           
    }
    
 
?>

<div class="product_content">
    <div class="title">Mobi Shop - Products</div>
    <ul class="breadcrumb">
        <li class="breadcrumbs">
            <a href="#">Trang chủ</a><span>/</span><a href="#">Slide</a>
        </li>
    </ul>
    <div class="form">
        <form name="form" method="POST" action="" enctype="multipart/form-data">
            <div class="controls">
                <div class="label">
                    <label>Tên team</label> 
                </div>
                <div class="input">
                    <input class="txt-form" name="team_title" type="text" maxlength="225">     
                </div>
            </div>         
            
            <div class="controls">
                <div class="label">
                    <label class="lbl-form">Hình ảnh</label> 
                </div>
                <div class="input">                    
                    <input class="file-form" name="team_image1" type="file">     
                </div>
            </div>
          
            <div class="controls">
                <div class="label">&nbsp;</div>
                <div class="input">
                    <input type="submit" class="bnt-form"  name="submit" value="Tạo">  
                </div>
            </div>            
        </form>
    </div>
</div>
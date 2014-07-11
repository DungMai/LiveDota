<?php



    $host = "http://thegioididong.site90.com/";



    $connect = mysql_connect('localhost', 'root', ''); // thực hiện chọn lấy một CSDL

    mysql_set_charset('utf8',$connect);

    if (!$connect) // ket noi that bai CSDL

    {

     die('Kết nối máy chủ thất bại ' . mysql_error());

    }

    mysql_select_db("team", $connect); // ket noi database 'mobishop' trong CSDL

    

    

    //Cac bien toan cuc:

    $path_image_small = "images/products/smalls/";

    $path_image_big = "images/products/bigs/";

    

    function query($sql)

    {

        $result = mysql_query($sql); //Truy vấn câu lệnh MySQL trên database  

        //Select ... -> table

        //Insert/update/delete -> tra so dong thanh cong 0, 1, 2 ....

        return $result;     

    }

    

    function getID(){

        $sql_getIDAuto ="SELECT LAST_INSERT_ID() as id";    

        $result = query($sql_getIDAuto);

        while ($row = mysql_fetch_assoc($result))

        {

            return $row['id'];

        }

        return 0;

    }

    function resize_image($fileinput,$fileoutput)

    {

        //$fileinput = '';



        //$resized = 'resized.jpg';

        $sized = 400;



        // Content type

        //header('Content-Type: image/jpeg');



        // Get new sizes

        list($width, $height) = getimagesize($fileinput);

        //echo "size: $width, $height";

        if($width > $sized && $height > $sized){

            if($width < $height)

                $percent = $sized/ $width;

            else

                $percent = $sized/ $height;

            //echo "percen: " . $percent*100;

            $newwidth = $width * $percent;

            $newheight = $height * $percent;



            // Load

            $thumb = imagecreatetruecolor($newwidth, $newheight);

            $source = imagecreatefromjpeg($fileinput);



            // Resize

            imagecopyresized($thumb, $source, 0, 0, 0, 0, $newwidth, $newheight, $width, $height);



            //Crop vuong:

            if($newwidth < $newheight){

                $thumb_crop = imagecreatetruecolor($newwidth, $newwidth);

                $du = $newheight - $newwidth;

                imagecopyresized($thumb_crop, $thumb, 0, 0, 0, $du/2, $newwidth, $newwidth, $newwidth, $newheight-$du);

            }

            else{

                //echo $newheight;

                $thumb_crop = imagecreatetruecolor($newheight, $newheight);

                $du = $newwidth - $newheight;

                imagecopyresized($thumb_crop, $thumb, 0, 0, $du/2, 0, $newheight, $newheight, $newwidth-$du, $newheight);

            }



            imagejpeg($thumb_crop, $fileoutput, 100);

            



        }

    }

    //resize_image("a.jpg", "xxx.jpg");

?>


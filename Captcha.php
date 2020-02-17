<?php
       $change_time=md5(microtime());
       $get_value=substr($change_time,0,6);
       //Create Iamge width and Height
       $create_image=imagecreate(100,30);
       // forbackground color in rgb
       imagecolorallocate($create_image, 51, 112,183);
       $text_color=imagecolorallocate($create_image,255, 255, 255);
       imagestring($create_image,5, 25, 7, $get_value, $text_color);
       //output
       header("content-type:image/jpeg");
       imagejpeg($create_image);
       imagedestroy($create_image);






?>

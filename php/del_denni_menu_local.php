<?php
        $data="denni_menu.jpg";    
        $dir = "C:\Users\SVEHLAK\portstanley\kocour\img";    
        $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$data) {
                unlink($dir."/".$file);//give correct path,
				echo 'File deleted successfully' . $data;
            }
        }    
        closedir($dirHandle);

?>
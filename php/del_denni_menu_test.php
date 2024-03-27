<?php
        $data="pokus.jpg";    
        $dir = "portstanley.cz/www/img/denni_nabidka";    
        $dirHandle = opendir($dir);    
        while ($file = readdir($dirHandle)) {    
            if($file==$data) {
                unlink($dir."/".$file);//give correct path,
				echo 'File deleted successfully' . $data;
            }
        }    
        closedir($dirHandle);

?>
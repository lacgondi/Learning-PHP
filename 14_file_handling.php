<?php
    $file = 'extras/users.txt';

    if(file_exists($file))
    {
        // echo readfile($file);
        $handle = fopen($file, 'r'); //pointer to the file
        $contents = fread($handle, filesize($file)); //store the values of the file in a var
        fclose($handle); //close the file
        echo $contents; 
    }
    else
    {
        $handle = fopen($file, 'w');
        $contents = 'Brad'. PHP_EOL . 'Sarah'. PHP_EOL. 'Mike';
        fwrite($handle, $contents);
        fclose($handle);
    }
?>
<!DOCTYPE html>
<html>
    <head><title>Uploading...</title></head>
    <body>
    <h1>Uploading File, Please wait while the snailman carries your data!...</h1>
<?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);
        if ($_FILES['the_file']['error'] > 0)
        {
            echo 'Problem:' ;
            switch ($_FILES['the_file']['error'])
            {
                    case 1:
                        echo 'File exceeded upload_max_filesize. ';
                        break;
                    case 2:
                        echo 'File Exceeded max_file_size. ';
                        break;
                    case 3:
                        echo 'File only partially uploaded. ';
                        break;
                    case 4:
                        echo 'No File Uploaded. ';
                        break;
                    case 6: 
                        echo 'Cannot upload file: no temp directroy specified. '; 
                        break;
                    case 7:
                        echo 'Upload failed: Cannot write to disk. ';
                        break;
                    case 8:
                        echo 'A PHP extension blocked the file upload. ';
                        break;
            }
            exit;
        }
        if ($_FILES['the_file']['type'] != 'image/png')
        {
            echo 'Problem: file is not a PNG image. ';
            exit;
        }
        $uploaded_file='Uploads/'.$_FILES['the_file']['name'];
        if (is_uploaded_file($_FILES['the_file']['tmp_name']))
        {
            if (!move_uploaded_file($_FILES['the_file']['tmp_name'], $uploaded_file))
            {
                echo 'Problem: Could not move file to destination directory.';
                exit;
            }
        }
        else
        {
            echo 'Problem: Possible file upload attack. Filename: ';
            echo $_FILES['the_file']['name'];
            exit;
        }
        echo 'File uploaded successfully. ';
        echo '<p>You uploaded the following image:<br/>';
        echo '<img src="Uploads/'.$_FILES['the_file']['name'].'"/>';
        ?>
    </body> 
</html>
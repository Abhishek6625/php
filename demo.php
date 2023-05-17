<?php
if(isset($_FILES['image'])){

    echo'<pre>';
    print_r($_FILES);
    echo'</pre>';

    //    echo $file_name = $_FILES['image']['name'];
   $file_name = $_FILES['image']['name'];
   $file_size = $_FILES['image']['size'];
   $file_type = $_FILES['image']['type'];
   $file_tmp = $_FILES['image']['tmp_name'];

//    move_uploaded_file($file_tmp,"image/".$file_name);
    if(move_uploaded_file($file_tmp,"image/".$file_name)){
        echo 'successfully uploaded.';
    }else{
        echo 'could not upload the file.';
    };

    
};





?>
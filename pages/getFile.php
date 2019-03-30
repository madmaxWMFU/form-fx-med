<?php
print_r($_POST);
print_r($_FILES);
$data = array();
 
if( isset( $_POST['msg'] ) ){
    $error = false;
    $files = array();
    $uploaddir = './examples/';  

    foreach( $_FILES as $file ){
        if( move_uploaded_file( $file['tmp_name'], $uploaddir . basename($file['name']) ) ){
            $files[] = realpath( $uploaddir . $file['name'] );
        }
        else{
            $error = true;
        }
    }
 
    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );
 
    echo json_encode( $data );
}
?>
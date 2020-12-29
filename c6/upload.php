<form action="" method="post" enctype="multipart/form-data">

    <input type="file" name="document_file" >
    <br>
    <br>
    <input type="submit" value="Upload" >

</form>


<?php

function pre($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}

if($_FILES){
    

    pre($_FILES);die;

    $dozvoleni_tipovi = [
        'text/plain',
        'text/html'
    ];

    if( !file_exists('uploads') ){
        mkdir('uploads');
    }

    if($_FILES['document_file']['error'] === 0){

        if($_FILES['document_file']['size'] < 5 * 1024){

           if(in_array( $_FILES['document_file']['type'], $dozvoleni_tipovi)) {

                $filename = rand() . $_FILES['document_file']['name'];
                $destination = "uploads/$filename";
                $tmp_filename = $_FILES['document_file']['tmp_name'];

                echo move_uploaded_file( $tmp_filename, $destination) ? 'Successfull upload' : 'Unsuccessfull upload';
           }

        } else {
            echo 'Error : Filesize is bigger than allowed !';
        }

    } else {
        echo "Error while uploading the file";
    }

}
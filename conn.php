<?php



    $connection  = mysqli_connect("localhost",'root','','mydb');

    if (!$connection){ echo "connect failed"; }

    

    $num = $_GET['valueR'];


    $qry= "INSERT INTO `sen_number`(valueR) VALUES ('$num ')";



    $insert  = mysqli_query( $connection ,$qry);



    if (!$insert ){

        echo "   Error happened  ";

    }

    else{

    

        echo "    Data is submitted successfuly   ";

    }

?>
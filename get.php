<?php
    include_once 'database.php';

    header('Content-Type: application/json');
    if(isset($_GET["id"])){
        $data_pengunjung = mysqli_query($mysql, 'SELECT * FROM pengunjung WHERE id = '.$_GET["id"]);
        
            $data  = mysqli_fetch_array($data_pengunjung, MYSQLI_ASSOC);
        
            echo json_encode($data);
    }else{
        $data_pengunjung = mysqli_query($mysql, 'SELECT * FROM pengunjung');
        
        $data  = mysqli_fetch_all($data_pengunjung, MYSQLI_ASSOC);
    
        echo json_encode($data);
    }
<?php


if(isset($_GET['p'])) 
    
    if ($_GET['p'] == 'tampil') {

    echo $_POST['Name'];
    echo "<br/>";
    echo $_POST['Password'];

    } else if ($_GET['p'] == "pesan") 

  {
     
        echo "Anda tidak dapat mengakses halaman ini";
}




?>
<?php
	
	$host		= "localhost"; // sesuaikan alamat server anda
	$username	= "root"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "kampus"; // sesuaikan database web server anda
		
	$koneksi = mysqli_connect($host,$username,$password,$database);
    
    if($koneksi){
        echo"Database Terhubung";
        
    }else{
        echo"Database Tidak Terhubung";
    }
// if(mysqli_connect_errno()){ //apa yang terjadi jika tidak konek
// 	echo "". mysqli_connect_error();
// } else {  //apa yang terjadi jika konek
// 	echo"";
// }
?>
<?php 
$host="localhost"; 
$user="root"; 
$password=""; 
$database="biodata"; 
$koneksi=mysql_connect($host,$user,$password); 
mysql_select_db($database,$koneksi); 
//cek koneksi 
if($koneksi){ 
 //echo "berhasil koneksi"; 
}else{ 
 echo "gagal koneksi"; 
} 
?>
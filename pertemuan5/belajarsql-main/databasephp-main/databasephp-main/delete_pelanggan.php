<?php 
require_once 'dbkoneksi.php';
?>

<?php 
   $ar_data[] = $_POST['id'];
   try 
   {
      $sql = "DELETE FROM pelanggan WHERE id = ?";
      $st = $dbh->prepare($sql);
      $st->execute($ar_data);
   } 
   catch(PDOException $e)
   {  
      echo $e->getMessage();
   }

   header('location:list_pelanggan.php');
?>
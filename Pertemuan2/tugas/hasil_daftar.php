<!DOCTYPE html>
<html>
<head>
	<title>Data Pendaftar</title>
	<!-- Load Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<center><h2>Data Pendaftar</h2></center>
        <br>
        
		<table class="table" border="1" width="100%">
			<thead>
				<tr>
					<th>No</th>
					<th>Nama Lengkap</th>
					<th>Email</th>
					<th>Alamat</th>
					<th>Telepon</th>
				</tr>
			</thead>
			<tbody>
				<tr>
                    <td>1</td>
					<td>Raffitri Melati</td>
					<td>raffitrimelati@gmail.com</td>
					<td>Bojonggede,Bogor</td>
					<td>08998278747</td>
				</tr>
				<tr>
                    <td>2</td>
					<td>Nayla Mahira</td>
					<td>nayla123@gmail.com</td>
					<td>Sawangan,Depok</td>
					<td>082311481440</td>
				</tr>
				<tr>
                    <td>3</td>
					<td> Muhammad Renjun</td>
					<td>naksjaksel@gmail.com</td>
					<td>Poltangan,Jaksel</td>
					<td>085698761102</td>
				</tr>


				<?php
				  /* Task 2
				    Tangkap dan tampilkan data dari form_daftar.
						Berikan error handling
				  */

                  if (isset($_POST["proses"])) {

                
                $i=3;
                $nama_lengkap = $_POST ["namalengkap"] ;
                $email = $_POST ["email"] ;
                $alamat = $_POST ["alamat"] ;
                $telepon = $_POST ["telepon"] ;
        
                echo "<tr>" ;
                echo "<td>" . $i . "</td>" ;
                echo "<td>" . $nama_lengkap . "</td>" ; 
                echo "<td> " . $email .  "</td>" ;
                echo "<td> " . $alamat .  "</td>" ;
                echo "<td> " . $telepon .  "</td>" ;
                echo "</tr>" ;

        
            }
				?>

			</tbody>
		</table>
	</div>
</body>
</html>
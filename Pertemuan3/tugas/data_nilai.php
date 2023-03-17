<div class="container">
 <center> <h2>Data Mahasiswa</h2> </center>
  <table class="table" border="1" width = "100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Mata Kuliah</th>
              <th>UTS</th>
              <th>UAS</th>
              <th>Tugas</th>
              <th>Rata-rata</th>
              <th>Grade</th>
              <th>Predikat</th>
              <th>Keterangan</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td>1</td>
              <td>Nayla Mahira</td>
              <td>Komunikasi Efektif</td>
              <td>90</td>
              <td>92</td>
              <td>85</td>
              <td>90.85</td>
              <td>A</td>
              <td>Sangat Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>2</td>
              <td>Rifkah</td>
              <td>Pemrograman Web 2</td>
              <td>79</td>
              <td>80</td>
              <td>82</td>
              <td>82.79</td>
              <td>B</td>
              <td>Memuaskan</td>
              <td>Lulus</td>
          </tr>
          <tr>
              <td>3</td>
              <td>Faiz Muhammad</td>
              <td>Basis Data</td>
              <td>60</td>
              <td>65</td>
              <td>69</td>
              <td>60.69</td>
              <td>C</td>
              <td>Cukup</td>
              <td>Lulus</td>


          <?php
					/**
					* Task 3
					* 1. Import libfungsi.php
					* 2. Tampilkan data dalam bentuk table
					* 3. Berikan error handling untuk mengatasi ketika form belum disubmit
					* Note: Sesuaikan dengan isi table yang sudah ada						
					*/
                    require("libfungsi.php");
                    if (isset($_POST["submit"])) {

                    $sum = 3 ;
                    $nama_lengkap = $_POST ["nama_lengkap"] ;
                    $matkul = $_POST ["matkul"] ;
                    $nilai_uts = $_POST ["nilai_uts"] ;
                    $nilai_uas = $_POST ["nilai_uas"] ;
                    $nilai_tugas = $_POST ["nilai_tugas"] ;
                    $n_rata = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3 ;
                   
                    echo "<tr>" ;
                    echo "<td>" .$sum++ ."</td>" ;
                    echo "<td>" . $nama_lengkap . "</td>" ;
                    echo "<td>" . $matkul . "</td>" ;
                    echo "<td>" . $nilai_uts . "</td>" ;
                    echo "<td>" . $nilai_uas . "</td>" ;
                    echo "<td>" . $nilai_tugas . "</td>" ;
                    echo "<td>" . number_format ($n_rata , 2 ) . "</td>" ;
                    echo grade ($n_rata) ;
                    echo predikat ($n_rata) ;
                    echo kelulusan ($n_rata) ;
                    echo "</tr>" ;
                    }
        ?>
        

                
                    
      </tbody>
  </table>
</div>
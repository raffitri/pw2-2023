<?php
/**
* Task 4 - Function
* function kelulusan
* function grade
* function predikat
*/



	function kelulusan($n_rata){
		/**
		* Function kelulusan, jika:
		* total nilai lebih dari 55 maka lulus
		* total nilai kurang dari 55 maka tidak lulus
		*/
        if ($n_rata >= 55) {
            echo "<td> Lulus </td>" ;
        } elseif($n_rata <= 55) {
            echo "<td> Tidak Lulus </td>" ;
        }
	}
	
	function grade($n_rata) {
	  /**
		* Function grade, jika:
		* total nilai <= 100 maka A
		* total nilai <= 84 maka B
		* total nilai <= 69 maka C
		* total nilai <= 55 maka D
		* total nilai <= 35 maka E
		* selain itu maka I
		*/ 
        if ($n_rata >= 85) {
            echo "<td> A </td>" ;
        } elseif($n_rata >= 70 && $n_rata <= 84) {
            echo "<td> B </td>" ;
        } elseif ($n_rata >= 56 && $n_rata <= 69) {
            echo "<td> C </td>" ;
        } elseif ($n_rata >= 36 && $n_rata <= 55) {
            return "<td> D </td>" ;
        } elseif ($n_rata >= 0 && $n_rata <= 35) {
            echo "<td> E </td>" ;
        } else {
            echo "<td> I </td>" ;
        }
	}
	
	function predikat($n_rata){
		/**
		* Function predikat, jika:
		* grade A maka Sangat Memuaskan
		* grade B maka Memuaskan
		* grade C maka Cukup
		* grade D maka Kurang
		* grade E maka Sangat Kurang
		* selain itu maka Tidak Ada
		*
		* Tips: Gunakan switch untuk mempermudah 
		* melakukan pengecekan kondisi berdasarkan function grade
		*/ 
            switch ($n_rata) {
                case ($n_rata >= 0 && $n_rata <= 35):
                    echo "<td> Sangat kurang </td>" ;
                    break ;
                case ($n_rata >= 36 && $n_rata <= 55):
                    echo "<td> Kurang </td>" ;
                    break ;
                case ($n_rata >= 56 && $n_rata <= 69):
                    echo "<td> Cukup </td>" ;
                    break ;
                case ($n_rata >= 70 && $n_rata <= 84):
                    echo "<td> Memuaskan </td>" ;
                    break ;
                case ($n_rata >= 85):
                    echo "<td> Sangat Memuaskan </td>" ;
                    break ;
                default :
                    echo "<td> Tidak Ada </td>" ;
                    break ;
            }
	}
?>
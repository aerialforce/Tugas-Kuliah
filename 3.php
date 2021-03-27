<?php 

	function draw_image($param='5'){

		$bintang = "&nbsp;&nbsp;*&nbsp;&nbsp;";
		$pager = "&nbsp;&nbsp;#&nbsp;&nbsp;";
		$batas_tengah = ceil($param/2);
		$jum_bagi = floor($param/2);

		//baris pertama
		$baris_1 = '';
		for($i=1;$i<=$param;$i++){
			if($i == '1' || $i == $param || $i == $batas_tengah){
				$baris_1 .= $bintang;
			}else{
				$baris_1 .= $pager;
			}
		}

		//baris kedua
		$baris_2 = '';
		for($i=1;$i<=$param;$i++){
			if($i == $batas_tengah){
				$baris_2 .= $bintang;
			}else{
				$baris_2 .= $pager;
			}
		}

		//baris ketiga
		$baris_3 = '';
		for($i=1;$i<=$param;$i++){
			if($i == $batas_tengah){
				$baris_3 .= $pager;
			}else{
				$baris_3 .= $bintang;
			}
		}

		//tampilan baris
		echo $baris_1.'<br>';
		for($i=1;$i<$jum_bagi;$i++){
			echo $baris_2.'<br>';
		}
		echo $baris_3.'<br>';
		for($i=1;$i<$jum_bagi;$i++){
			echo $baris_2.'<br>';
		}
		echo $baris_1.'<br>';

	}

	//jalankan function
	draw_image(5);
	echo "<br><br>";
	draw_image(7);
	echo "<br><br>";
	draw_image(9);

?>
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>DAFTAR NILAI</h2></div>
			<div class="panel-body">
			<div class="table-responsive">
				<table class="table table-bordered table-condensed table-striped table-responsive tablesorter table-responsive" id="myTable">
					<thead>
						<tr>
							<th class="text-center">NO</th>
							<th class="text-center">KODE</th>
							<th class="text-center">MATA KULIAH</th>
							<th class="text-center">SEMESTER</th>
							<th class="text-center">SKS</th>
							<th class="text-center">WKT UJIAN</th>
							<th class="text-center">UJIAN KE-</th>
							<th class="text-center">AKSI</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$no = 1;
						foreach($semua as $r){
							echo "<tr>";
							echo "<td class='text-center'>".$no."</td>";
							echo "<td>".$r->KD_MAKUL."</td>";
							if($r->NILAI == "E"){
								echo "<td>".$r->NAMA_MAKUL."&nbsp;&nbsp;&nbsp;<p class='glyphicon glyphicon-fire'></p></td>";
							}elseif($r->NILAI == "D" || $r->NILAI == "D-"){
								echo "<td>".$r->NAMA_MAKUL."&nbsp;&nbsp;&nbsp;<p class='glyphicon glyphicon-exclamation-sign'></p></td>";
							}elseif($r->NILAI == "C" || $r->NILAI == "C-"){
								echo "<td>".$r->NAMA_MAKUL."&nbsp;&nbsp;&nbsp;<p class='glyphicon glyphicon-repeat'></p></td>";
							}elseif($r->NILAI == "B" || $r->NILAI == "B-"){
								echo "<td>".$r->NAMA_MAKUL."&nbsp;&nbsp;&nbsp;<p class='glyphicon glyphicon-leaf'></p></td>";
							}elseif($r->NILAI == "A" || $r->NILAI == "A-"){
								echo "<td>".$r->NAMA_MAKUL."&nbsp;&nbsp;&nbsp;<p class='glyphicon glyphicon-thumbs-up'></p></td>";
							}elseif(!$r->NILAI){
								echo "<td>".$r->NAMA_MAKUL."</td>";
							}
							echo "<td align='center'>".$r->SEMESTER."</td>";
							echo "<td align='center'>".$r->JML_SKS."</td>";
							echo "<td align='center'>".$r->WKT_UJIAN."</td>";
							echo "<td align='center'>".$r->UJIAN_KE."</td>";
							echo "<td align='center'><button class='hapus btn btn-danger' data-kdmakul='".$r->KD_MAKUL."' data-ujianke='".$r->UJIAN_KE."'><span class='glyphicon glyphicon-trash'></span></button></td>";
							echo "</td>";
							$no++;
						}
						?>
					</tbody>
				</table>
				<p>Jumlah SKS yang telah ditempuh : <?php echo $sks_ditempuh;?> SKS</p>
			</div>
			</div>
		</div>
	</div>
</div>
<script>
$(function(){
	var theSite = "<?php echo site_url();?>"
	
	$(".hapus").click(function(){
		var iya = confirm("Hapus data ini ?")
		var kdmakul = $(this).attr("data-kdmakul")
		var ujianke = $(this).attr("data-ujianke")
		
		if(iya){
			$.ajax({
				url : theSite + "/kuliah/hapus",
				type : "POST",
				data : "kdmakul=" + kdmakul + "&ujianke=" + ujianke,
				success :function(hasil){
					if(hasil == "1"){
						//alert("Date Kode Makul : " + kdmakul + " Ujian ke- " + ujianke + " terhapus !")
						swal(
							'Berhasil!',
							'Date Kode Makul : ' + kdmakul + ' Ujian ke- ' + ujianke + ' terhapus !.',
							'success'
						  )
						window.location.href = theSite + "/kuliah/nilai"
					}else{
						alert("Proses Gagal !")
					}
				}
			})	
		}else{
			return false
		}
	})
})
</script>
<div class="container">
	<div class="row">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>DAFTAR MATA KULIAH</h2></div>
			<div class="panel-body">
				<div class="table-responsive">
					<table class="table table-bordered table-condensed table-striped tablesorter table-responsive" id="myTable">
						<thead>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">SEMESTER</th>
								<th class="text-center">KODE</th>
								<th class="text-center">MATA KULIAH</th>
								<th class="text-center">SKS</th>
								<th class="text-center">UJIAN KE</th>
							</tr>
						</thead>
						<tbody>
							<?php
							$no = 1;
							foreach($semua as $r){
								if(isset($r->UJIAN_KE)){
									echo "<tr style='background-color:B2DBF3;'>";
								}else{
									echo "<tr>";
								}
								echo "<tr>";
								echo "<td class='text-center'>".$no."</td>";
								echo "<td align='center'>".$r->SEMESTER."</td>";
								echo "<td>".$r->KD_MAKUL."</td>";
								echo "<td>".$r->NAMA_MAKUL."</td>";
								echo "<td align='center'>".$r->JML_SKS."</td>";
								echo "<td align='center'>".$r->UJIAN_KE."</td>";
								echo "</td>";
								echo "</tr>";
								$no++;
							}
							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>	
	</div>
</div>
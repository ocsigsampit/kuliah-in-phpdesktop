<div class="container">
	<div class="row>">
		<div class="panel panel-default">
			<div class="panel-heading"><h2>REKAM NILAI</h2></div>
			<div class="panel-body">
				<div class="form-horizontal col-sm-6 col-lg-6">
					<div class="form-group">
						<label  class="col-sm-4 control-label">Pilih Mata Kuliah</label>
						<div class="col-sm-6">
							<select class="form-control" id="kd_makul">
							<?php
							foreach($makul as $r){
								echo "<option value='".$r->KD_MAKUL."'>".$r->KD_MAKUL." - ".$r->NAMA_MAKUL."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
						<label  class="col-sm-4 control-label">Ujian Ke-</label>
						<div class="col-sm-6">
							<select class="form-control" id="ujian_ke">
							<?php
							for($i=1;$i<5;$i++){
								echo "<option value='".$i."'>".$i."</option>";
							}
							?>
							</select>
						</div>
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
						<label  class="col-sm-4 control-label">Pilih Nilai</label>
						<div class="col-sm-6">
							<select class="form-control" id="nilai">
								<option value="A">A</option>
								<option value="A-">A-</option>
								<option value="B">B</option>
								<option value="B-">B-</option>
								<option value="C">C</option>
								<option value="C-">C-</option>
								<option value="D">D</option>
								<option value="D-">D-</option>
								<option value="E">E</option>
							</select>
						</div>
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
					</div>
					<div class="form-group">
						<label class="col-sm-4 control-label"></label>
						<div class="col-sm-4">
							<button class="btn btn-primary" id="tmb_simpan"><span class="glyphicon glyphicon-floppy-disk"></span>&nbsp;&nbsp;Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
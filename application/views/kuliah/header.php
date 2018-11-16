<html>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
		
<head>
	<title>Kuliah</title>
	<script src="<?php echo base_url();?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url();?>bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url();?>select2/js/select2.min.js"></script>
	<script src="<?php echo base_url();?>sweetalert2/sweetalert2.min.js"></script>
	<script src="<?php echo base_url();?>jquery.tablesorter.min.js"></script>
	<script src="<?php echo base_url();?>modernizr.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo base_url()?>sweetalert2/sweetalert2.css">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/myCSS.css">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/reset.css">
	<link rel="stylesheet" href="<?php echo base_url();?>bootstrap/css/timelineStyle.css">
	<script type="text/javascript">

	$(document).ready(function(){
		
		/* setting select2 pada dropdown kode mata kuliah */
		$("#kd_makul").select2({
            placeholder: "Pilih Mata Kuliah"
        });

		/* saat tombol Simpan diklik */
		$("#tmb_simpan").click(function(){
			var site     = "<?php echo base_url();?>";
			var kd_makul = $("#kd_makul").val();
			var nilai    = $("#nilai").val();
			var ujian_ke = $("#ujian_ke").val();
			var iya      = confirm("Simpan ?");

			if(iya){
				$.ajax({
					type : "post",
					url  : site + "index.php/kuliah/simpan",
					data : "kd_makul=" + kd_makul + "&nilai=" + nilai + "&ujian_ke=" + ujian_ke
				}).done(function(data){
					if(data == "1"){
						swal(
							'Berhasil!',
							'Data berhasil disimpan.',
							'success'
						  )
						//alert("Data berhasil disimpan !");
					}else{
						alert("GAGAL !");
					}
				})
			}
		});

		/* setting tablesorter pada table */
		$("#myTable").tablesorter();

		});

	</script>
</head>
<body>
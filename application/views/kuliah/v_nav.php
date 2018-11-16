<nav class="navbar navbar-inverse" role="navigation"> 
   <div class="navbar-header"> 
      <button type="button" class="navbar-toggle" data-toggle="collapse"  
         data-target="#example-navbar-collapse"> 
         <span class="sr-only">Toggle navigation</span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span> 
         <span class="icon-bar"></span>
		  </button> 
      <a class="navbar-brand" href="#">KuliahkU</a> 
   </div> 
   <div class="collapse navbar-collapse" id="example-navbar-collapse"> 
      <ul class="nav navbar-nav"> 
         <li><a href="<?=site_url();?>/kuliah">Beranda</a></li> 
         <li><a href="<?=site_url();?>/kuliah/nilai">Nilai</a></li> 
         <li><a href="<?=site_url();?>/kuliah/tambah">Rekam Nilai</a></li> 
		 <li class="dropdown"> 
            <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
               <span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo $this->session->userdata('nama');?> 
               <b class="caret"></b> 
            </a> 
            <ul class="dropdown-menu"> 
               <li><a href="<?php echo site_url('/auth/logout/');?>"><span class="glyphicon glyphicon-off"></span>&nbsp;Log Out</a></li>
            </ul> 
         </li> 
      </ul> 
   </div> 
</nav>
<?php
	$user_id=$this->session->userdata('username');
 
	if(!$user_id){
 
  		redirect('login');
	}
 
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Share-it-up! : Home Admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<!--[if ie]><meta content='IE=8' http-equiv='X-UA-Compatible'/><![endif]-->
		<!-- bootstrap -->
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css";?> rel="stylesheet">      
		<link href=<?php echo base_url()."assets/bootstrap/css/bootstrap-responsive.min.css";?> rel="stylesheet">		
		<link href=<?php echo base_url()."assets/themes/css/bootstrappage.css";?> rel="stylesheet"/>
		
		<!-- logo icon -->
		<link rel="icon" href="<?php echo base_url(); ?>assets/img/icon.png" type="image/png">

		<!-- global styles -->
		
		<link href=<?php echo base_url()."assets/themes/css/main.css" ; ?> rel="stylesheet">
		<link href=<?php echo base_url()."assets/themes/css/flexslider.css";?> rel="stylesheet">

		<!--Catatan popup-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,700italic,400italic'>
		<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css'>

    	<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

		<!-- scripts -->
		<script src=<?php echo base_url()."assets/themes/js/jquery-1.7.2.min.js";?>></script>
		<script src=<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js";?>></script>				
		<script src=<?php echo base_url()."assets/themes/js/superfish.js";?>></script>	
		<script src=<?php echo base_url()."assets/themes/js/jquery.scrolltotopLogin.js";?>></script>
		<!--[if lt IE 9]>			
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script src="js/respond.min.js"></script>
		<![endif]-->

	</head>
	<style type="text/css">
		table, th, td {
    		border: 1px solid black;
    		border-collapse: collapse;
		}
		th, td {
    		padding: 5px;
		}
	</style>
    <body>


    <form action="<?php echo base_url()."Login/aksi_login"; ?>" method="POST" class="form login">
		<div id="top-bar" class="container">
			<div class="row">
				<div class="span4">
					<form method="POST" class="search_form">
						<input type="text" class="input-block-level search-query" Placeholder="eg. T-sirt">
					</form>
				</div>
				<div class="span8">
					<div class="account pull-right">
						<ul class="user-menu">
							<li><b>Hi, <?php echo $this->session->userdata('nama_user'); ?></b>		</li>	
							
								
							<li><a style="padding: 3px 5px;" class="btn btn-inverse large" href="<?php echo site_url('Logout'); ?>">Logout</a></li>		
						</ul>
					</div>
				</div>
			</div>

		</div>
		<div id="wrapper" class="container">
			<section class="navbar main-menu">
				<div class="navbar-inner main-menu">				
					<img src="<?php echo base_url('assets/img/logo.png'); ?> " style="width: 11%; height: 100%; margin-left:-10px;"/>
				</div>
			</section>

		
		<div id="page-wrapper">
            <div class="container-fluid">
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard Admin
                        </h1>
                        <ol class="breadcrumb">
                            <li class="active">
                                <a href="#"><i class="fa fa-lg fa-comments">List User</i></a>
                            </li>
                           
                        </ol>
                    </div>
                </div>

                <table align="center" style="width: 100%;">
                    <thead>
                        <th style="text-align: center;">No</th>
                        <th style="text-align: center;">Nama</th>  
                        <th style="text-align: center;">Alamat</th>
                        <th style="text-align: center;">Kecamatan</th>
                        <th style="text-align: center;">Kelurahan</th>
                        <th style="text-align: center;">Kode Pos</th>
                        <th style="text-align: center;">Foto Profil</th>
                        <th style="text-align: center;">Foto KTP</th>
                        <th style="text-align: center;">Deskripsi</th>
                    </thead>
                    
                    <tbody style="text-align: center;">
                        <?php foreach ($data as $x) { ?>
                        <tr>
                        
                        <td><?php echo $x['id_user']; ?></td>
                        <td><?php echo $x['nama_user']; ?></td>
                        <td><?php echo $x['alamat']; ?></td>
                        <td><?php echo $x['kecamatan']; ?></td>
                        <td><?php echo $x['kelurahan']; ?></td>
                        <td><?php echo $x['kode_pos']; ?></td>
                        <td><?php echo $x['foto_profil']; ?></td>
                        <td><?php echo $x['foto_ktp']; ?></td>
                        <td><?php echo $x['deskripsi']; ?></td>

                        
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <br>
                        
                    </form> 

            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
    </div>





		<script src="assets/themes/js/common.js"></script>
		<script src="assets/themes/js/jquery.flexslider-min.js"></script>
		<script type="text/javascript">
			$(function() {
				$(document).ready(function() {
					$('.flexslider').flexslider({
						animation: "fade",
						slideshowSpeed: 4000,
						animationSpeed: 600,
						controlNav: false,
						directionNav: true,
						controlsContainer: ".flex-container" // the container that holds the flexslider
					});
				});
			});
		</script>
    </body>
</html>

<!-- jQuery 3 -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/jquery/jquery.min.js"></script>
<!-- toastr -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/toastr/toastr.min.js"></script>
<!-- loading block-->
<script src="<?php echo base_url(); ?>assets/templates/plugins/loading-block/jquery.loading.block.js"></script>

<script>
  	toastr.options = {
  	  "closeButton": false,
  	  "debug": false,
  	  "newestOnTop": false,
  	  "progressBar": false,
  	  "positionClass": "toast-bottom-center",
  	  "preventDuplicates": true,
  	  "onclick": null,
  	  "showDuration": "300",
  	  "hideDuration": "1000",
  	  "timeOut": "5000",
  	  "extendedTimeOut": "1000",
  	  "showEasing": "swing",
  	  "hideEasing": "linear",
  	  "showMethod": "fadeIn",
  	  "hideMethod": "fadeOut"
  	}

  	function blockShow(){
  		$.loadingBlockShow({
  		 imgPath: '<?php echo base_url() ?>assets/templates/img/icon.gif',
  		 imgStyle: {
  			 width: 'auto',
  			 textAlign: 'center',
  			 marginTop: '20%'
  		 },
  		 style: {
  				position: 'fixed',
  				width: '100%',
  				height: '100%',
  				background: 'rgba(0, 0, 0, .8)',
  				left: 0,
  				top: 0,
  				zIndex: 10000
  			}
  		});
  	}

  	function blockHide(){
  		$.loadingBlockHide();
  	}
</script>

<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- jquery confirm -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/jquery-confirm/jquery-confirm.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/templates/js/adminlte.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/templates/plugins/chart.js/Chart.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/templates/js/pages/dashboard2.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/templates/js/demo.js"></script>

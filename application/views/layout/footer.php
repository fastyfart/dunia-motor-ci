	<footer>
		
	</footer>

	<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.js"); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>

	<script >
		$(function(){
			var loggedOut = "<?php echo $this->session->flashdata('loggedOut') ?>";
			if(loggedOut){
				alert('Anda telah keluar');
			}

		})
	</script>
</body>
</html>
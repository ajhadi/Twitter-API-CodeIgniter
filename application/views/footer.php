<style type="text/css">

/*footer bottom */
.footer-bottom {
	position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
	margin-top: 15px;
    padding-top: 5px;
    padding-bottom: 5px;
    border-top: 1px solid #2f2f33 ;
    background-image: url("<?php echo base_url()."assets/images/banner.jpg"?>");
    
}
.copyright-text p {
    color: #e4e7f0;
    margin-top: 5px;
    margin-bottom: 0;
    font-size:15px;
}

.copyright-text a {
    color: #e4e7f0;
    margin: 0px 10px 0px 10px;
    
}
.copyright-text a:hover {
    color: #aece61  ;
    
    
}

</style><div class="footer-section">
<div class="footer-bottom">
        <div class="container">
					<div class="row">
						<div class="col-sm-6 ">
							<div class="copyright-text">
								<p> © 2018</p>
							</div>
						</div> <!-- End Col -->
						<div class="col-sm-6  ">
						    <div class="copyright-text pull-right">
								<p> <a href="<?php echo base_url();?>index.php/dashboard"">Home</a> | <a href="<?php echo base_url();?>index.php/auth/Logout">Logout</a>
							</div>					
													
						</div>
		    </div> <!-- End Col -->
					</div>
				</div>
    </div>
           <!-- jQuery (costum) -->
        <script src="<?php echo base_url();?>assets/js/costum.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    </body>
</html>
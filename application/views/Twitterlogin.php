


<style type="text/css">
body{background-color: #e6ecf0;}
h3{
  color:#08a0e9;
}
label{
  color:#0084B4;
}
</style>

<?php 
include 'header.php';
 ?>
<!-- ============ MODAL ADD Account =============== -->
        
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <a type="button" class="close" href="<?php echo base_url();?>index.php/social_account">x</a>
                <h3 class="modal-title text-center" id="myModalLabel"><i class="fa fa-twitter fa-lg"></i> Follow the Steps</h3>
            </div>
                <div class="modal-body">
 					<p>1. Your twitter must <a href="https://twitter.com/logout" target="_blank"><b>Logged out</b></a> on this web browser Logout Twitter</p>
                    <p>2. <b>Sign In</b> and <a href="https://dev.twitter.com/apps/new" target="_blank"><b>Create an App</b></a> on Twitter for Developer</p>
                    <p>3. Create the <b>Access Token</b></p>
                    <br>
                    <p>*And then remember or copy the <b>Consumer Key</b>, <b>Consumer Secret</b>, <b>Access Token</b> and <b>Access Token Secret</b> in "Keys and Access Tokens" Tab.</p>
                </div>
                <div class="modal-footer">
                    <a class="button btn btn-default" href="<?=$oauthURL?>">Next</a>
                </div>
            </div>
            </div>
        <!--END MODAL ADD Account-->


            <?php include 'footer.php'; ?>
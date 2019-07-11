<style type="text/css">
body{background-color: #e6ecf0;}
h3{
  color:#08a0e9;
}
label{
  color:#0084B4;
}
</style>

  <section id="social-account-user">
      <div class="container-fluid">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header add_acc_head">
                <a type="button" class="close" href="<?php echo base_url();?>index.php">x</a>
                <h3 class="modal-title text-center" id="myModalLabel"><i class="fa fa-twitter fa-lg"></i>Add Account</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/social_account/addTwitterAccount'?>">
                <div class="modal-body">

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Screen Name</label>
                        <div class="col-xs-8">
                            <input name="screen_name" value="<?php echo $_SESSION['username'] ?>" class="form-control" type="text" required readonly>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-8">
                            <input name="name"
                            value="<?php echo $_SESSION['name'] ?>" class="form-control" type="text" required readonly>
                        </div>
                    </div>

                    <div class="form-group" hidden>
                        <div class="">
                            <input name="picture_url" value="<?php echo $_SESSION['picture_url'] ?>" class="form-control" type="text">
                        </div>
                        <div class="">
                            <input name="banner_url" value="<?php echo $_SESSION['banner_url'] ?>" class="form-control" type="text">
                        </div>
                        <div class="">
                            <input name="tweet_count" value="<?php echo $_SESSION['tweet_count'] ?>" class="form-control" type="text">
                        </div>
                        <div class="">
                            <input name="follower_count" value="<?php echo $_SESSION['follower_count'] ?>" class="form-control" type="text">
                        </div>
                        <div class="">
                            <input name="following_count" value="<?php echo $_SESSION['following_count'] ?>" class="form-control" type="text" required >
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Consumer Key</label>
                        <div class="col-xs-8">
                            <input name="consumer_key" class="form-control" type="text" placeholder="consumer key" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Consumer Secret</label>
                        <div class="col-xs-8">
                            <input name="consumer_secret" class="form-control" type="text" placeholder="consumer secret" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Access Token</label>
                        <div class="col-xs-8">
                            <input name="access_token" class="form-control" placeholder="access token" type="text" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Access Token Secret</label>
                        <div class="col-xs-8">
                            <input name="access_token_secret" class="form-control" placeholder="access_token_secret" type="text" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" value="submit">Finish</button>
                </div>
            </form>
            </div>
            </div>
        </div>
      </section>
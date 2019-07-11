<style type="text/css">

@media (max-width: 300px) {
    .visible-xs {
        display: inline-block !important;
    }
    .block {
        display: block !important;
        width: 100%;
        height: 1px !important;
    }
}

.title {
    display: inline-block;
    font-size: 1.2em;
    font-weight: bold;
    padding: 5px 15px;
}

.list-group{
  max-width: auto;
  margin: 10px 0px 0px 0px;
  
}
.acc-list{
  margin: 1px 0px 0 0px;
  overflow-y: scroll;
  max-height: 550px;
}

.name {
    font-size: 1.1em;
    font-weight: 700;
}

.screen_name {
    font-size: 0.9em;
}

.twPc-div {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    margin: 10px 0px 0 0px;
    height: auto;
    width: auto;
}
.twPc-div-grafik {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    margin: 10px 0px 0 0px;
    height: auto;
    width: auto;
}.twPc-div-account {
  overflow-y: scroll;
  overflow-x: hidden;
  display: inline-block;
    margin: 10px 0px 0 0px;
    height: 300px;
    width: auto;
}
.twpc-acc
{

  margin-bottom: 10px;
}
.twPc-bg {
    background-image: url("<?php echo $banner_url; ?>");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 100px;
    width: 100%;
}
.twPc-block {
    display: block !important;
}

.twPc-avatarLink {
    background-color: #fff;
    border-radius: 6px;
    display: inline-block !important;
    float: left;
    margin: -20px 10px 0 10px;
    max-width: 100%;
    padding: 1px;
    vertical-align: bottom;
}
.twPc-avatarImg {
    border: 2px solid #fff;
    border-radius: 7px;
    box-sizing: border-box;
    color: #fff;
    height: 70px;
    width: 70px;
}
.twPc-divUser {
    margin: -30px 0 0 ;
}
.twPc-divName {
  text-shadow: 1px 1px #000;
    color: #fff;
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.btn-pill{
  margin: -10px 20px;
  text-decoration:none;
  color:#fff;
  font-size:12px;
  font-weight:bold;
  padding:0 10px;
  line-height:32px;
  height: auto;
  display:inline-block;
  text-align:center;
  background-color:#4ab3f4;
  -webkit-border-radius: 16px;
  -moz-border-radius: 16px;
  border-radius: 16px;
}
.twPc-divName a {
    color: inherit !important;
}
.twPc-divStats {
    margin:5px 0 0 10px;
    padding: 10px 0;
}
.twPc-Arrange {
    box-sizing: border-box;
    display: table;
    margin: 0;
    min-width: 100%;
    padding: 0;
    table-layout: auto;
}
ul.twPc-Arrange {
    list-style: outside none none;
    margin: 0;
    padding: 0;
}
.twPc-ArrangeSizeFit {
    display: table-cell;
    padding: 0 10px 0 0;
    margin: 0;
    vertical-align: top;
}
.twPc-chart {
    padding-right: 10px;
    vertical-align: top;
    width: 250px;
}
.twPc-ArrangeSizeFit a:hover {
    text-decoration: none;
}
.twPc-StatValue {
    display: block;
    font-size: 18px;
    font-weight: 500;
    transition: color 0.15s ease-in-out 0s;
}
.twPc-StatLabel {
    color: #8899a6;
    font-size: 10px;
    letter-spacing: 0.02em;
    overflow: hidden;
    text-transform: uppercase;
    transition: color 0.15s ease-in-out 0s;
}

.card{
   margin: 10px 0px 0  0px;
}
.nav-tabs { border-bottom: 2px solid #DDD;}
  .nav-tabs > li.active > a, .nav-tabs > li.active > a:focus, .nav-tabs > li.active > a:hover { border-width: 0; }
  .nav-tabs > li > a { border: none; color: #666; }
      .nav-tabs > li.active > a, .nav-tabs > li > a:hover { border: none; color: #4285F4 !important; background: transparent; }
      .nav-tabs > li > a::after { content: ""; background: #4285F4; height: 2px; position: absolute; width: 100%; left: 0px; bottom: -1px; transition: all 250ms ease 0s; transform: scale(0); }
  .nav-tabs > li.active > a::after, .nav-tabs > li:hover > a::after { transform: scale(1); }
.tab-nav > li > a::after { background: #21527d none repeat scroll 0% 0%; color: #fff; }
.tab-pane { padding: 0; height: 550px;overflow-y: scroll;overflow-x: hidden;}
.tab-content{padding: 5px 5px 0 20px }

.card {background: #FFF none repeat scroll 0% 0%; box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3); margin-bottom: 30px; }

.add_acc_head{
  text-align: center;
  color:#1da1f2;
}
.control-label{
  color:#667594;
}

</style>

  <section id="social-account-user">
      <div class="container-fluid">
        <div class="row">


         

          <!-- profil start -->
          <div class="col-xs-9 col-sm-4 col-md-3">
            <div class="twPc-div">
                <a class="twPc-bg twPc-block"></a>

              <div>

                <a title="<?php echo $screen_name; ?>" href="https://twitter.com/<?php echo $screen_name; ?>" class="twPc-avatarLink">
                  <img alt="<?php echo $name; ?>" src="<?php echo $picture_url; ?>" class=" twPc-avatarImg">
                </a>
                <a class="btn-pill pull-right" data-toggle="modal" data-target="#tweet">Tweet</a>
                <div class="twPc-divUser">
                  <div class="twPc-divName">
                    <a href="<?php echo base_url().'index.php/social_account/delete_account/'.$account_id; ?>"><i class="fa fa-trash pull-right" style="font-size:15px;color:#fff;text-shadow: 1px 1px red;"></i></a>
                    <span><a href="https://twitter.com/<?php echo $screen_name; ?>" title="<?php echo $name; ?>">@<?php echo $screen_name; ?></a></span>
                  </div>
                  
                </div>

                <div class="twPc-divStats row">
                  <div class=" col-sm-6 col-md-6">
                  <ul class="twPc-Arrange">
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan" title="Tweet">
                        <span class="twPc-StatLabel twPc-block">Tweets</span>
                        <span class="twPc-StatValue"><?php echo $tweet_count; ?></span>
                      </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan/following" title="Friends">
                        <span class="twPc-StatLabel twPc-block">Friends</span>
                        <span class="twPc-StatValue"><?php echo $following_count; ?></span>
                      </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan/followers" title="Followers">
                        <span class="twPc-StatLabel twPc-block">Followers</span>
                        <span class="twPc-StatValue"><?php echo $follower_count; ?></span>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            </div>


            <div class="twPc-div-grafik">
              <div class="twPc-divStats">
                  <ul class="twPc-Arrange">
                    <li class="twPc-chart">
                      <?php $height='150';$chart_name='acc';include'highchart.php';?>
                    </li>
                  </ul>
              </div>
            </div>
          </div>

          <div class="twPc-div-account col-sm-1 col-xs-2 hidden-md  hidden-lg">
                      <?php  foreach ($account as $maccs) {?>
                      <div class="twpc_acc">
                                <a href="<?php echo base_url().'index.php/social_account/admin/'.$maccs->account_id; ?>"><img src="<?php echo $maccs->picture_url; ?>" class="img-responsive img-circle" title="<?php echo $maccs->name; ?>"></a>
                      </div>
                      <?php } ?>
            </div>
          <!-- profil end -->


          <div class="col-md-6 col-sm-6 col-xs-12">
            <!-- Nav tabs -->
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
                    <li role="presentation"><a href="#Followers" aria-controls="Followers" role="tab" data-toggle="tab">Followers</a></li>
                    <li role="presentation"><a href="#Friends" aria-controls="Friends" role="tab" data-toggle="tab">Friends</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="timeline">
                      <a class="twitter-timeline" data-chrome='noheader,nofooter' data-show-replies='true' href="https://twitter.com/<?php echo $screen_name; ?>">
                      Tweets by <?php echo $name; ?>
                      </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="Followers">
                    
                  </div>
                    <div role="tabpanel" class="tab-pane" id="Friends">
                      
                    </div>
                    
                </div>
              </div>

          </div>






          <div class="list-group col-sm-3 col-md-3 hidden-xs hidden-sm">
            <a type="button" class="btn add_acc_button" href="<?php echo base_url().'index.php/twitter'?>"><b><em class="fa fa-plus"></em> ADD ACCOUNT </b></a>
              <div class="acc-list">

                 <?php  foreach ($account as $accs) {?>
                  <a title="<?php echo $accs->name; ?>" href="<?php echo base_url().'index.php/social_account/user/'.$accs->account_id; ?>" class="list-group-item">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                          <img src="<?php echo $accs->picture_url; ?>" alt="Scott Stevens" class="img-responsive img-circle" />
                      </div>  
                      <div class="col-xs-9 col-sm-9">
                          <span class="name"><?php echo $accs->name; ?></span><br/>
                          <span class="screen_name">@<?php echo $accs->screen_name; ?></span>
                      </div>
                    </div>
                  </a>
                <?php } ?>
              </div>
          </div>
        </div>  
      </div>
    </section>



<!-- ============ MODAL TWEET =============== -->
        <div class="modal fade" id="tweet" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel"><i class="fa fa-twitter fa-lg"></i>Tweet</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/Tweet_Post'?>" enctype="multipart/form-data">
                <div class="modal-body">
 
                    <div hidden>
                    <input type="text" name="account_id" value="<?php echo $account_id ;?>">
                    <input type="text" name="consumer_key" value="<?php echo $consumer_key ;?>">
                    <input type="text" name="consumer_secret" value="<?php echo $consumer_secret ;?>">
                    <input type="text" name="access_token" value="<?php echo $access_token ;?>">
                    <input type="text" name="access_token_secret" value="<?php echo $access_token_secret ;?>">
                    </div>
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea name="status" class="form-control" type="text" placeholder="tweet"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-6">
                            <input name="foto" class="form-control" type="file">
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn btn-info" value="submit">SEND</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD Account-->
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
    margin: 50px 0px 0 0px;
    height: auto;
    width: auto;
}.twPc-div-grafik {
    background: #fff none repeat scroll 0 0;
    border: 1px solid #e1e8ed;
    border-radius: 6px;
    margin: 10px 0px 0 0px;
    height: auto;
    width: auto;
}
.twPc-bg {
    background-image: url("<?php echo base_url()."assets/images/banner.jpg"?>");
    background-position: 0 50%;
    background-size: 100% auto;
    border-bottom: 1px solid #e1e8ed;
    border-radius: 4px 4px 0 0;
    height: 40px;
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
    margin: -50px 10px 0 10px;
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
    color: #f1f1f1;
    font-size: 18px;
    font-weight: 700;
    line-height: 21px;
}
.btn-pill{
  margin: -50px 20px;
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
.pp{
  width: 40px;
}
.name-tweet{
  font-size: 14px;
}
.screen-name-tweet{
  font-size: 14px;
  color:#898;
}
.date-tweet{
  margin-right: 10px;
  font-size: 12px;
  color: #8899a6;
}

#tweet{
  display: block; /* Fallback for non-webkit */
  display: -webkit-box;
  max-width: auto;
  height: 12px*1.4*3; /* Fallback for non-webkit */
  margin: -5px 0 5px 0;
  font-size: 12px;
  line-height: 1.4;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
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
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="twPc-div">
                <a class="twPc-bg twPc-block"></a>

              <div>

                <a title="name" href="https://twitter.com/mertskaplan" class="twPc-avatarLink">
                  <img alt="Mert Salih Kaplan" src="http://api.randomuser.me/portraits/men/49.jpg" class="twPc-avatarImg">
                </a>
                <a class="btn-pill pull-right" href="#">Tweet</a>
                <div class="twPc-divUser">
                  <div class="twPc-divName">
                    <span><a href="https://twitter.com/mertskaplan" title="name">@<span>Screen_name</span></a></span>
                  </div>
                  
                </div>

                <div class="twPc-divStats row">
                  <div class=" col-sm-6 col-md-6">
                  <ul class="twPc-Arrange">
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan" title="Tweet">
                        <span class="twPc-StatLabel twPc-block">Tweets</span>
                        <span class="twPc-StatValue">0</span>
                      </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan/following" title="Friends">
                        <span class="twPc-StatLabel twPc-block">Friends</span>
                        <span class="twPc-StatValue">0</span>
                      </a>
                    </li>
                    <li class="twPc-ArrangeSizeFit">
                      <a href="https://twitter.com/mertskaplan/followers" title="Followers">
                        <span class="twPc-StatLabel twPc-block">Followers</span>
                        <span class="twPc-StatValue">0</span>
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
          <!-- profil end -->


          <div class="col-md-6 col-sm-8 col-xs-12">
            <!-- Nav tabs -->
            <div class="card">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active"><a href="#timeline" aria-controls="timeline" role="tab" data-toggle="tab">Timeline</a></li>
                    <li role="presentation"><a href="#profile" aria-controls="Followers" role="tab" data-toggle="tab">Followers</a></li>
                    <li role="presentation"><a href="#messages" aria-controls="Friends" role="tab" data-toggle="tab">Friends</a></li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">

                    <div role="tabpanel" class="tab-pane active" id="timeline">
                      <div class="row">
                        <?php  for ($x = 0; $x <= 10; $x++) {; ?>
                      <div class="col-md-12 col-xs-12">
                          <div class="media">
                            <a class="pull-left" href="#">
                            <img class="media-object img-circle img-responsive pp" src="http://api.randomuser.me/portraits/men/49.jpg">
                          </a>
                          <div class="media-body">
                            <p class="media-heading name-tweet pull-left">Name &nbsp;</p>
                              <span class="date-tweet pull-right"><i class="glyphicon glyphicon-calendar"></i> 2 days, 8 hours </span>
                              <a href=""><p class="screen-name-tweet">@Screen_Name</p></a>

                              <div id="tweet">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
                                Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
                                dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
                                Aliquam in felis sit amet augue.</div>
                              <ul class="list-inline">
                            
                                &nbsp;
                                <a href=""><span><i class="fa fa-comment-o"></i></span></a>
                                &nbsp;
                                <a href=""><span><i class="fa fa-retweet"></i></span></a>
                                &nbsp;
                                <a href=""><span><i class="fa fa-heart-o"></i></span></a>
                                &nbsp;
                                <a href=""><span><i class="fa fa-envelope-o"></i></span></a>
                          </ul>
                          <hr>
                           </div>
                        </div>
                      </div>
                     <?php } ?>
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="profile">tab 2</div>
                    <div role="tabpanel" class="tab-pane" id="messages">tab 3</div>
                    
                </div>
              </div>
          </div>






          <div class="list-group col-sm-3 col-md-3 hidden-xs hidden-sm">
            <a type="button" class="btn add_acc_button" data-toggle="modal" data-target="#add_acc"><b><em class="fa fa-plus"></em> ADD ACCOUNT </b></a>
              <div class="acc-list">
                 <?php for ($x = 0; $x <= 20; $x++) {;?>
                  <a href="#" class="list-group-item">
                    <div class="row">
                      <div class="col-xs-3 col-sm-3">
                          <img src="http://api.randomuser.me/portraits/men/49.jpg" alt="Scott Stevens" class="img-responsive img-circle" />
                      </div>  
                      <div class="col-xs-9 col-sm-9">
                          <span class="name">Name</span><br/>
                          <span class="screen_name">@screen_name</span>
                      </div>
                    </div>
                  </a>
                <?php } ?>
              </div>
          </div>
        </div>  
      </div>
    </section>



<!-- ============ MODAL ADD USER =============== -->
        <div class="modal fade" id="add_acc" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header add_acc_head">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel"><i class="fa fa-twitter fa-lg"></i>Add Account</h3>
            </div>
            <form class="form-horizontal" method="post" action="">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Consumer Key</label>
                        <div class="col-xs-8">
                            <input name="twitter_consumer_key" class="form-control" type="text" placeholder="consumer key" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Consumer Secret</label>
                        <div class="col-xs-8">
                            <input name="twitter_consumer_secret" class="form-control" type="text" placeholder="consumer secret" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Token</label>
                        <div class="col-xs-8">
                            <input name="twitter_token" class="form-control" type="text" placeholder="token" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Secret Token</label>
                        <div class="col-xs-8">
                            <input name="twitter_secret_token" class="form-control" type="text" placeholder="secret token" required>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                    <button class="btn btn-info" value="submit">Login</button>
                    <a class="pull-left learn" href="https://developer.twitter.com/en/docs/basics/authentication/guides/access-tokens" target="_blank">How do i get it all ?</a>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD USER-->
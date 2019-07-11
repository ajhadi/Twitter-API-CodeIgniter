<style type="text/css">
.foto{
  margin: 0 -15px 10px -15px;
}
.circle-tile {
    margin:10px 10px 10px 0px;
}
</style>


        <section id="admin">
          <div class="container-fluid">    
            <div class="row">
 

                    <div class="col-sm-4 col-md-6">
                      <div class="circle-tile ">
                            <?php $height=300;$chart_name='user';include'highchart.php';?>
                      </div>
                            <?php  foreach ($account as $accs) {?>
                              <div class="col-xs-2 foto"><a title="<?php echo $accs->name; ?>" href="<?php echo base_url().'index.php/dashboard/user/'.$accs->account_id; ?>">
                                    <img src="<?php echo $accs->picture_url; ?>" alt="Scott Stevens" class="img-responsive img-circle"></a></div>
                            <?php } ?>
                      </div>
                    <div class="col-sm-8 col-md-6">
                      <a class="twitter-timeline" data-height="550" data-show-replies='true' href="https://twitter.com/<?php echo $screen_name; ?>">
                      Tweets by <?php echo $name; ?>
                      </a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    </div>
            </div>
          </div>
        </section>

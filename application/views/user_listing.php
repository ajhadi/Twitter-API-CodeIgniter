    <style type="text/css">
.panel-table .panel-body{
  padding:0;
}

.panel-heading {
     background-image: url("<?php echo base_url()."assets/images/banner.jpg"?>");
     color: #fff;
}
.panel-title{
    color:#fff;
    font-size: 24px;
} 
.add_user_button{
    color:#fff;
}
.panel-table .panel-body .table-bordered{
  border-style: none;
  margin:0;
}

.panel-table .panel-body .table-bordered > thead > tr > th{
    text-align:center;
}


.panel-table .panel-footer .pagination{
  margin:0; 
}
.link{
    text-align: right;
}


.twPc-chart {
  margin-top: 20px;
    padding-right: 10px;
    vertical-align: top;
    width: auto;
}

    </style>
</head>
<body>
<?php include 'nav_admin.php' ?>

<div class="container-fluid">
    <div class="row">

        <div class="col-md-6">
            <div class="panel panel-default panel-table">
              <div class="panel-heading">
                <div class="row">
                  <div class="col col-xs-6">
                    <h1 class="panel-title">User Management</h1>
                  </div>
                  <div class="col col-xs-6 text-right">
                    <a type="button" class="btn add_user_button" data-toggle="modal" data-target="#add_user"><em class="fa fa-user-plus fa-lg"></em> </a>
                  </div>
                </div>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-bordered table-list">
                  <thead>
                    <tr>
                        
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th><em class="fa fa-cogs fa-lg"></em></th>
                    </tr> 
                  </thead>
                        <tbody>
                    <?php $no=1; foreach ($datausers as $users) { ?>
                        <tr>
                            <td><?php echo $users->first_name; ?></td>
                            <td><?php echo $users->username; ?></td>
                            <td><?php echo $users->email; ?></td>
                            <td><?php if ($users->group_id=="1") {echo "Admin";} else {echo "User";} ?></td>
                            <td align="center">
                              <a class="btn btn-info" href="<?php echo base_url()."index.php/user_management/refresh/".$users->user_id; ?>"><em class="fa fa- fa-bar-chart"></em></a>
                              <a class="btn btn-default" href="<?php echo base_url()."index.php/auth/edit_user/".$users->user_id; ?>"><em class="fa fa-pencil"></em></a>
                              <a class="btn btn-danger" href="<?php echo base_url()."index.php/user_management/deleteUser/".$users->user_id; ?>"><em class="fa fa-trash"></em></a>
                            </td>
                        </tr>
                    <?php } ?>
    
                        </tbody>
                </table>
            
              </div>
              <div class="panel-footer">
                <div class="row">
                  <div class="col col-xs-11">
                    <div class="link">
                      <?php
                        echo $this->pagination->create_links();
                    ?></div>
                    
                  </div>
                </div>
              </div>
            </div>
        </div>



        <!-- profil start -->
          <div class="col-xs-12 col-sm-12 col-md-5">
            <div class="twPc-chart">
              <?php $height='400';$chart_name='user';include'highchart.php';?>
            </div>
          </div>




    </div>
</div>



<!-- ============ MODAL ADD USER =============== -->
        <div class="modal fade" id="add_user" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h3 class="modal-title" id="myModalLabel">Add User</h3>
            </div>
            <form class="form-horizontal" method="post" action="<?php echo base_url().'index.php/auth/create_user'?>">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Name</label>
                        <div class="col-xs-8">
                            <input name="first_name" class="form-control" type="text" placeholder="Name..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Username</label>
                        <div class="col-xs-8">
                            <input name="username" class="form-control" type="text" placeholder="username..." required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-xs-3" >Email</label>
                        <div class="col-xs-8">
                            <input name="email" class="form-control" type="text" placeholder="Email..." required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Password</label>
                        <div class="col-xs-8">
                            <input name="password" class="form-control" type="password" placeholder="password..." required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >password confirm</label>
                        <div class="col-xs-8">
                            <input name="password_confirm" class="form-control" type="password" placeholder="retype password..." required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn btn-info" value="submit">Save</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD USER-->

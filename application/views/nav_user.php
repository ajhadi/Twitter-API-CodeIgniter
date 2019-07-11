<style type="text/css">
body{
  background-color: #e6ecf0;
  overflow-x: hidden;
}
  .navbar-default {
  font-size: 1.15em;
  font-weight: 400;
  background-image: url("<?php echo base_url()."assets/images/banner.jpg"?>");
  padding: 0;
  border: 0px;
  border-radius: 0px;
}

.navbar-default .navbar-nav>li>a {
  color: white;
}

.navbar-default .navbar-nav>li>a:hover {
  color: #cbf0ff;
}

.navbar-default .navbar-brand {
  color: #ffffff;
}

.navbar-default .navbar-brand:hover {
  color: #cbf0ff;
  text-shadow: 1px -1px 8px #b3e9ff;
}

.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:hover, .navbar-default .navbar-nav>.open>a:focus {
  background-color: #2f4254;
  color: white;
}

.navbar-default .navbar-toggle {
  border: none;
}

.navbar-default .navbar-collapse, .navbar-default .navbar-form {
  border: none;
}

.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
  background-color: #002433;
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #ffffff;
}

.sub-menu {
  background-color: #2f4254;
  color: white;
  border: 0px;
  border-radius: 2px;
  padding-top: 10px;
  padding-bottom: 10px;
  list-style-type: none;
}

.sub-menu>li>a {
  background-color: #2f4254;
  color: white;
  list-style-type: none;
}

.sub-menu>li>a:hover, .sub-menu>li>a:focus {
  background-color: #2f4254;
  color:white;
  list-style-type: none;
}

.sub-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #003246;
}

.navbar-default .navbar-nav .open .sub-menu>li>a {
    color: #ffffff;
}

@media (max-width: 767px) { 
  .sub-menu>li>a {
    background-color: #006b96;
    color: #ffffff;

  }
  .sub-menu>li>a:hover {
    color: #ffffff;

  }
  
  .navbar-default .navbar-nav .open .sub-menu>li>a:focus, .navbar-default .navbar-nav .open .sub-menu>li>a:hover {
    color: #ffffff;
    background-color: transparent;
  }
  
  .sub-menu .divider {
    height: 1px;
    margin: 9px 0;
    overflow: hidden;
    background-color: #005577;
  }
} 


.sub-menu-parent { position: relative; }

.sub-menu { 
  visibility: hidden; /* hides sub-menu */
  opacity: 0;
  position: absolute;
  top: 100%;
  left:-140%;
  width: 300%;
  transform: translatex(2em);
  z-index: -1;
  transition: all 0.5s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
}

.sub-menu-parent:focus .sub-menu,
.sub-menu-parent:focus-within .sub-menu,
.sub-menu-parent:hover .sub-menu {
  visibility: visible; /* shows sub-menu */
  opacity: 1;
  z-index: 1;
  transform: translatex(0%);
  transition-delay: 0s, 0s, 0.5s; /* this removes the transition delay so the menu will be visible while the other styles transition */
}


::-webkit-scrollbar-track
{
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);
  border-radius: 10px;
  background-color: #F5F5F5;
}

::-webkit-scrollbar
{
  width: 12px;
  background-color: #F5F5F5;
}

::-webkit-scrollbar-thumb
{
  border-radius: 10px;
  -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);
  background-color: #495a74;
}

</style>
            <section>
              <nav class="navbar navbar-default">
                  <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                      <a class="navbar-brand" href="<?php echo base_url(); ?>">SM Manager</a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                         <li><a href="<?php echo base_url();?>index.php/dashboard"><span class="fa fa-dashboard" aria-hidden="true"></span> Dashboard</a></li>
                         <li class="dropdown">
                          <a href="<?php echo base_url();?>index.php/social_account"><span class="fa fa-twitter" aria-hidden="true"></span> Social Account</a></li>
                          <li class="hidden-md hidden-lg"><a href="<?php echo base_url();?>index.php/auth/edit_user/<?php echo $_SESSION['iduser']; ?>"><span class="fa fa-spin fa-cog"></span> Setting</a></li>
                          <li class="hidden-md hidden-lg"><a href="<?php echo base_url();?>index.php/auth/Logout"><span class="fa fa-sign-out"></span> Logout</a></li>
                      </ul>
                      <ul class="nav navbar-nav navbar-right hidden-sm hidden-xs">
                         <li class="sub-menu-parent">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user fa-lg" aria-hidden="true"></span> <span class="caret"></span></a>
                          <ul class="sub-menu">
                            <li><a href="<?php echo base_url();?>index.php/auth/edit_user/<?php echo $_SESSION['iduser']; ?>"><span class="fa fa-spin fa-cog" aria-hidden="true"></span> Setting</a></li>
                            <li><a href="<?php echo base_url();?>index.php/auth/Logout"><span class="fa fa-sign-out" aria-hidden="true"></span> Logout</a></li>
                         </ul>
                        </li>
                      </ul>
                    </div><!-- /.navbar-collapse -->
                  </div><!-- /.container-fluid -->
                </nav>
            </section>
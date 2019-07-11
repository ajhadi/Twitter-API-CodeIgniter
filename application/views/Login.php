<!DOCTYPE html>
<html>
<head>
  <title></title>
  
     <style type="text/css">
    @CHARSET "UTF-8";
    /*
    over-ride "Weak" message, show font in dark grey
    */
    .brand{
      text-align: center;
      display: inline;
    }


    .progress-bar {
        color: #333;
    } 

    /*
    Reference:
    http://www.bootstrapzen.com/item/135/simple-login-form-logo/
    */

    * {
        -webkit-box-sizing: border-box;
         -moz-box-sizing: border-box;
              box-sizing: border-box;
      outline: none;
    }

        .form-control {
        position: relative;
        font-size: 16px;
        height: auto;
        padding: 10px;
        @include box-sizing(border-box);

        &:focus {
          z-index: 2;
        }
      }

    body {
      background: url(http://i.imgur.com/GHr12sH.jpg) no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }

    .login-form {
      margin-top: 60px;
    }

    .form {
      color: #5d5d5d;
      background: #f2f2f2;
      padding: 26px;
      border-radius: 10px;
      -moz-border-radius: 10px;
      -webkit-border-radius: 10px;
    }
      
      .form input,
      .form button {
        font-size: 18px;
        margin: 16px 0;
      }
      .form > div {
        text-align: center;
      }
      
    .form-links {
      text-align: center;
      margin-top: 1em;
      margin-bottom: 50px;
    }
      .form-links a {
        color: #fff;
      }
    </style>


  </head>
  <body>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/main-style.css">
     <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">




        <div id="container">  
          <div class="row" id="pwd-container">
            <div class="col-md-4 col-md-offset-4">
              <section class="login-form">
                <div class="form">
                <?php echo form_open('auth/login'); ?>
                  <fieldset>
                    <div class="brand"><h3>Social Media Management</h3></div>
                    
                    <input type="text" name="identity" placeholder="Email" required class="form-control input-lg identity"/>
                    <input type="password" name="password" class="form-control input-lg" id="password" placeholder="<?php echo lang('login_password_label');?>" required="" />
                    <div class="pwstrength_viewport_progress"></div> 
                    <p>
                      <?php echo lang('login_remember_label', 'remember');?>
                      <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
                    </p>
                    <button type="submit" name="login" class="btn btn-lg btn-primary btn-block">Login</button>
                  </fieldset>
                <?php echo form_close();?>
              </div>
              </section>  
              </div>

          </div>     
        </div>
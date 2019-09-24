
<!DOCTYPE html>
<html>
    <head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/company/css/mobile.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/css?family=Montserrat&display=swap" rel="stylesheet">
    <!-- <script src="<?php echo base_url(); ?>assets/company/js/ajax/jQuery/jquery-3.3.1.min.js"></script> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrapValidator.min.css"/>
    <!-- <script type="text/javascript" src="<?php echo base_url(); ?>assets/company/js/ajax/jquery/bootstrapValidator.min.js"></script>         -->
    </head>
    <body>
        <section class="login-page">
        <div class="container">
            <div class="row">
            <div class="col-md-3">
            </div>
             <div class="col-md-6 col-md-offset-3">
                 <div class="login-body">
                <div class="login-form">
                <form action="" id="admin_login" method="post">
                    <p>Log in</p>
                    <div class="form-group">
                        <?php  if($this->session->flashdata('message')) {  ?>
                        <div class="alert alert-danger"><?php echo $this->session->flashdata('message');?></div>
                        <?php  } ?>
                        <input type="text" name="username" id="username" placeholder="Your Email Address">
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="row">
                         <div class="col-md-12 text-center">
                                    <!-- <a href="index.html"> <input type="button" id="fap_login" class=" btn-block button-text btn button-success" value="Login"></a> -->
                           <button name="submit" type="submit" value="true" id="fap_login" class="tn-block button-text btn button-success btn btn-theme ripple btn-raised btn-block btn-submit">
                            <span>Log in</span>
                        </button>         
                         </div>
                   </div>
                
        </form>
        </div>
            </div>
             </div>
            
            </div>
        </div>
    </section>
        <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrapValidator.min.js"></script>
  
        <script>
            var BASE_URL = "<?php echo base_url(); ?>";
            var login_error = "<?php echo $this->session->flashdata('login_error'); ?>";
			     $('#admin_login').bootstrapValidator({  
        fields: {        
        	username:   {
                validators:          {
                notEmpty:              {
                        message: 'Please enter your Username'
                                       }
                                     }
                                    },
                password:           {
                validators:           {
                notEmpty:               {
                        message: 'Please enter your Password'
                                        }
                                      }
                                    }           
		}
        }).on('success.form.bv', function(e) {
          
        var username = $('#username').val();
           var password = $('#password').val();
    $.ajax({
           type:'POST',
           url: BASE_URL+'admin/dashboard/is_valid_login',
           data : {username:username,password:password},
           success:function(response)
           {     
         if(response==1)
         {
             window.location = BASE_URL+'admin';
         }
         else if (response==2)
         {
				location.reload();
         }
           }                
            });
        });  // admin login success function completes here  
        </script>
               
	</body>
</html>
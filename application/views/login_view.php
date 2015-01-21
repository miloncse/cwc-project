<section id="form"><!--form-->
    <div class="container">
        <div>
            <h4 style="color:red; padding-left: 100px;">
                <?php
                $execption = $this->session->userdata('execption');
                if (isset($execption)) {
                    echo $execption;
                    $this->session->unset_userdata('execption');
                }
                ?>
            </h4>
            <h4 style="color:green; padding-left: 100px;">
                <?php
                $message = $this->session->userdata('message');
                if (isset($message)) {
                    echo $message;
                    $this->session->unset_userdata('message');
                }
                ?>
            </h4>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Login to your account</h2>
                    <form action="<?php echo base_url(); ?>login/check_creds.html" method="post">
                        <input type="text" name="user_email" placeholder="Email/Username" />
                        <input type="password" name="user_password" placeholder="Password" />
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Keep me signed in
                        </span>
                        <button type="submit" class="btn btn-default">Login</button>
                    </form>
                </div><!--/login form-->
            </div>
            <div class="col-sm-1">
                <h2 class="or_btn">OR</h2>
            </div>
            <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>New User Signup!</h2>
                    <div style="color:red">
                        <?php
                        $error_message = $this->session->userdata('error_message');
                        if (isset($error_message)) {
                            echo $error_message;
                            $this->session->unset_userdata('error_message');
                        }
                ?>
                    </div>
                    <form action="<?php echo base_url();?>login/sign_up.html" method="post">
                        <input type="text" name="full_name" placeholder="Full Name" required="1"/>
                        <input type="text" name="username_signup" id="username_signup" placeholder="Username" required="1"/>
                        <div id="duplicate_username" style="color:red"></div>
                        <input type="email" name="email_address" id="email_address" placeholder="Email Address" required="1"/>
                        <div id="duplicate_email" style="color:red"></div>
                        <input type="password" name="password" id="password" placeholder="Password" required="1"/>
                        <input type="password" name="password_confirm" id="password_confirm" required="1" placeholder="Re-type Password"/><div id="message" style="color:red"></div>
                        <input type="text" name="phone_number" placeholder="Phone Number" required="1"/>
                        <button type="submit" class="btn btn-default" >Signup</button>
                    </form>
                </div><!--/sign up form-->
            </div>
        </div>
    </div>
</section><!--/form-->
<script>
$(document).ready(function(){
    $("#password_confirm").blur(function(){
        var  password =$("#password").val();
        var  password_confirm =$("#password_confirm").val();
        if(password !=password_confirm){
            $("#password_confirm").val("");
            $("#message").html("password does not match")
        }else{
          $("#message").html("")  
        }
    })
    
  $("#username_signup").blur(function(){
        var  username_signup =$("#username_signup").val();
        //alert(username_signup);
         $.ajax(
            {
                type: "POST",
                url: "login/check_user_name",
                data: {username_signup:username_signup},
                success: function(data)
                {
                    //alert(data);
                      $("#duplicate_username").html(data); 
                      
                }
            });
    })
  $("#email_address").blur(function(){
        var  user_email =$("#email_address").val();
        //alert(user_email);
         $.ajax(
            {
                type: "POST",
                url: "login/check_email",
                data: {user_email:user_email},
                success: function(data)
                {
                    //alert(data);
                      $("#duplicate_email").html(data); 
                      
                }
            });
    })  
})

</script>
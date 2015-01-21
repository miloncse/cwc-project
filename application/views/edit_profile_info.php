<div>
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
<section id="form" style="padding-left: 100px;"><!--form-->
    <div class="container"></div>
    <div class="col-sm-4">
                <div class="signup-form"><!--sign up form-->
                    <h2>Profile Info</h2>
                    <form action="<?php echo base_url() . "action/update_profile/" . $user_id; ?>" method="post">
                        Name:<input type="text" name="full_name" placeholder="<?php echo $full_name;?>"/>
                        Password:<input type="password" name="password" placeholder="New Password"/>
                        Confirm Password:<input type="password" name="password_confirm" placeholder="Confirm New Password"/>
                        Phone Number: <input type="text" name="phone_number" placeholder="<?php echo $phone_number;?>"/>
                        <button type="submit" class="btn btn-default">Update</button>
                    </form>
                </div><!--/sign up form-->
            </div>
</section>
    
    
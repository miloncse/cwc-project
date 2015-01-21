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
<div style="padding-left: 40px"><h4>Profile Information</h4></div>
<div class="row">
    <div class="col-sm-6">
        <div class="total_area">
            <ul>
                User Name:<li><?php echo $user_name; ?></li>
                Full Name:<li><?php echo $full_name; ?></li>
                Email Address:<li><?php echo $email_address; ?></li>
                Phone Number:<li><?php echo $phone_number; ?></li>

            </ul>
        </div>
    </div>
</div>
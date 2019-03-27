<div class="text-danger">
<?php 
    if($this->session->flashdata('login_fail'))
    {
        print '<div class= "error-msg">'.$this->session->flashdata('login_fail').'</div>';
    }

    if($this->session->flashdata('no_access'))
    {
        print '<div class= "error-msg">'.$this->session->flashdata('no_access').'</div>';
    }
?>
</div>
<div class="text-success">
<?php 
    if($this->session->flashdata('reg_success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('reg_success').'</div>';
    }
?>
</div>
<div class="login-form-area">
    <div class="container">
        <div class="login-form">
            <div class="form-header">Login Form</div>
            <?= form_open('users/login');?>
                <div class="form-group row">
                    <label for="email" class="col-md-2 col-form-label">Email</label>
                    <div class="col-md-6">
                    <?= form_input(['name'=>'email','placeholder'=>'Enter email...','value'=>set_value('email'), 'class'=>'form-control']);?>
                    </div>
                    <div class="col-md-4">
                        <?= form_error('email', '<div class="text-danger">','</div>'); ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-md-2 col-form-label">Password</label>
                    <div class="col-md-6">
                        <?= form_password(['name'=>'password','placeholder'=>'Enter password...','value'=> '', 'class'=>'form-control']);?>
                        <small><a href="">Forget password</a></small>
                    </div>
                    <div class="col-md-4">
                        <?= form_error('password', '<div class="text-danger">','</div>'); ?>
                    </div>
                </div>
             <!-- <div class="form-group row">
                 <label for="type" class="col-sm-2 col-form-label">Type</label>
                 <div class="col-sm-6">
                         <select class="form-control">
                             <option selected>Choose...</option>
                             <option value="1">User</option>
                             <option value="2">Admin</option>
                         </select>
                     </div>
                 <div class="col-sm-4"></div>
             </div> -->
              <div class="form-group row">
                <label for="type" class="col-md-2 col-form-label">Type</label>
                <div class="col-md-6">
                    <?php $options = array(
                            '' => 'Choose...',
                            'U'=> 'User',
                            'A'=> 'Admin'
                        );
                    print form_dropdown('type', $options, 'U', ['class' => 'form-control']);
                    ?>
                </div>
                <div class="col-md-4">
                     <?= form_error('type', '<div class="text-danger">','</div>'); ?>
                </div>
              </div>
                <div class="form-check">
                    <?=form_checkbox('checkbox', 'accept', False, ['class'=>'form-check-input']);?>
                    <label class="form-check-label">Remember me</label>
                </div>
            <div class="form-group">
                <?= form_submit(['name'=>'submit','value'=>'Login', 'class'=>'btn btn-primary btn-sm my-btn']); ?>
            </div>
                <div class="form-group" id="acc">
                    <span>Not a member?</span>
                    <a href="<?= base_url() ?>users/registration">Register now</a>
                </div>
            <?= form_close();?>
        </div>
    </div>
</div>

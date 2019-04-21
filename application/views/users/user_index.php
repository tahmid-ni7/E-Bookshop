<div class="text-success">
<?php 
    if($this->session->flashdata('login_success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('login_success').'</div>';
    }
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>
</div>


<div class="admin-index section-padding">
	<div class="user-heading text-center">
         <h3>Welcome, <span class = "text-info"><?php print $this->session->userdata('name') ?></span></h3>
        <p>You can sell your book with a proper price. You can see your book informations. You can track your order from here, and you can see your order details. You can also edit your profile information from here, like as your name, password and other informations.</p>   
    </div>
</div>
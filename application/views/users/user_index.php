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


<div class="admin-index section-padding text-center">
	<h3>Welcome to user home page</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum odit esse, voluptas sapiente velit vel reprehenderit nemo suscipit cumque sint!</p>
</div>
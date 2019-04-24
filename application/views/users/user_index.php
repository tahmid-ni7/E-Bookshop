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
<div class="row">
    <div class="col-lg-5">
     <div class="user-info">
        <div id="table-header">Profile details</div><br>
            <h4 class="text-info"><?= htmlentities($this->session->userdata('name')) ?></h4>
            <p><i class="fas fa-envelope"></i> <?= htmlentities($this->session->userdata('email'))?></p>
            <p><i class="fas fa-mobile-alt"></i> <?= htmlentities($this->session->userdata('contact'))?></p>
            <p><i class="fas fa-map-marked-alt"></i> <?= htmlentities($this->session->userdata('address'))?></p>
        </div>
    </div>
    <div class="col-lg-7">
        <div class="user-activities">
            <div id="table-header">Your Activities</div><br>
            <div class="user-books">
                <?php 
                $this->load->model('user_model');
                $count = count($this->user_model->my_books());
                $count_publishedBooks = count($this->user_model->my_published_books());
                print "<b>Total Books: </b>You have uploaded total ".$count." Books.";
                print "<p class = 'text-success'><b>Published Books: ".$count_publishedBooks."</b></p>"
                ?>
            </div>
            <div class="user-orders">
                <?php 
                $this->load->model('user_model');
                $count = count($this->user_model->my_orders());
                print "<b>Orders: </b>You placed ".$count." orders till now.";
                ?>
            </div>
            <div class="user-reviews">
                <?php 
                $this->load->model('user_model');
                $count = count($this->user_model->my_reviews());
                print "<b>Reviews: </b>You have written ".$count." reviews of books.";
                ?>
            </div>
        </div>
    </div>
</div>

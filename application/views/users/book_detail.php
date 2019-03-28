<br>
<div class="container">
	<div class="row">
		<div class="col-lg-8 col-md-9 col-sm-12" id="book-detail">
			<div id="table-header">Book Detail</div><br>
			<div class="row">
			<div class="col-lg-4 col-md-5 col-sm-6" id="book-img"><?php print '<img src = "'.strip_tags($book_detail->book_image).'" alt = "">';?></div>
			<div class="col-lg-8 col-md-7 col-sm-6">
				<div class="book-info">
				<div>Book Name: <?= strip_tags($book_detail->book_name)?></div>
				<div>Author: <i><?= strip_tags($book_detail->author)?></i></div>
				<div>Publisher: <?= strip_tags($book_detail->publisher)?></div>
				<div>Category: <?= strip_tags($book_detail->category)?></div>
				<div class="text-success"><i class="fas fa-check-circle"></i> In stock: <?= strip_tags($book_detail->quantity)?></div>
				<div>Price: <?= strip_tags($book_detail->price)?>.TK</div>
				
				</div>
				<div><?php print '<a href="'.base_url().'cart/add_to_cart/'.$book_detail->id.'" class="btn btn-outline-success btn-sm"><i class="fas fa-shopping-cart"></i> Add to cart</a>'; ?></div>
			</div>
			</div>

			<br><div class="book-description"><h5>Book description</h5><hr><?= $book_detail->description ?></div>
			<hr>

		  <?php if($this->session->userdata('logged_in'))
		  {
			$this->load->view("users/review");
		  }
		  else
		  {
		  	print '<div><p>Please log in to write a review. <a href="'.base_url('users/login').'" class = "btn-login">Login</a></p></div>';
		  }
		  ?>

		</div>
		<div class="col-lg-4 col-md-3">
			
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<?php $this->load->view("users/review_display"); ?>
		</div>
	</div>
</div>

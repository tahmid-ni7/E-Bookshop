<br>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-sm-8 col-xs-12" id="book-detail">
			<div id="table-header">Book Detail</div><br>
			<div class="row">
			<div class="col-md-4 col-sm-5" id="book-img"><?php print '<img src = "'.strip_tags($book_detail->book_image).'" alt = "">';?></div>
			<div class="col-md-8 col-sm-7">
				<div class="book-info">
				<div>Book Name: <?= strip_tags($book_detail->book_name)?></div>
				<div>Author: <i><?= strip_tags($book_detail->author)?></i></div>
				<div>Publisher: <?= strip_tags($book_detail->publisher)?></div>
				<div>Category: <?= strip_tags($book_detail->categoryId)?></div>
				<div>Price: <?= strip_tags($book_detail->price)?>.TK</div>
				</div>
				<div><a href="" class="btn btn-outline-success btn-sm"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>
			</div>
			</div>

			<br><div class="book-description"><h5>Book description</h5><hr><?= $book_detail->description ?></div>
			<hr>

		  <?php if($this->session->userdata('logged_in'))
		  {
			$this->load->view("users/review");
		  }
		  ?>

		</div>
		<div class="col-sm-4">
			
		</div>
	</div>
</div>

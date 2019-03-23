<br><div id="table-header">Buy Books</div><br>

<div class="row con-flex">
	<?php foreach($books as $book):?>
	<div class="col-lg-2 col-md-3 col-sm-4">
		<div id="single-book">
			<div id="book-image">
				<?php print '<img src = "'.strip_tags($book->book_image).'" alt = "">';?>
			</div>
			<?php print '<div id="addto-cart"><a href="'.base_url().'cart/add_to_cart/'.$book->id.'"><i class="fas fa-shopping-cart"></i> Add to cart</a></div>'; ?>
			<!-- <div id="addto-cart"><a href=""><i class="fas fa-shopping-cart"></i> Add to cart</a></div> -->
			
			<div class="book-text">
				<div id="book-name"><?= substr(htmlentities($book->book_name),0,21) ?></div>
				<div id="author">By <i><?= htmlentities($book->author) ?></i></div>
				<div id="price"><?= htmlentities($book->price) ?>.TK</div>
				<div id="book-details"><?php print '<a href = "'.base_url().'users/book_view/'.$book->id.'">View Details</a>'; ?></div>
				</div>
		</div>	
	</div>
	<?php endforeach;?>
</div>


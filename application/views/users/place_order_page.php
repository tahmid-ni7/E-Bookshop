<?php

	print "<h5 class = 'success-msg'>You have placed the order successfully</h5>";

	print "<div class = 'row'>";
	print "<div class = 'col-lg-6'>";
		print "<table class = 'table'>";

		print "<tr>";
		print "<th>Total Book Price</th>";
		print "<td colspan = '2'>".$this->cart->total().".TK</td>";
		print "</tr>";

		print "<tr>";
		$shipping = 40;
		print "<th>Shipping cost</th>";
		print "<td colspan = '2'>".$shipping.".TK</td>";
		print "</tr>";

		print "<tr>";
		$payable_total = $this->cart->total() + $shipping;
		print "<th>Total cost</th>";
		print "<td colspan = '2'>".$payable_total.".TK</td>";
		print "</tr>";
		
		print "</table>";
	print "</div>";

	print "<div class = 'col-lg-6'>";
	print "</table>";
			
		print "<h5>Your Products</h5>";
		print "<table class = 'table border-bottom table-hover'>";
		print "<tr>";
		print "<th>Image</th><th>Book Name</th><th>Quantity</th><th>Price</th><th>Subtotal</th>";
		print "</tr>";
		foreach ($this->cart->contents() as $books) 
		{
			print "<tr>";
			print "<td><img src = '".$books['book_image']."' alt = '' width='50' hieght='80'</td>";
			print "<td>";
			print $books['name'];
			print "</td>";
			print "<td>";
			print $books['qty'];
			print "</td>";
			print "<td>";
			print $books['price'];
			print ".TK</td>";
			print "<td>";
			print $books['subtotal'];
			print ".TK</td>";
			print "</tr>";
		}

		print "</table>";
	print "</div>";
	print "</div>";


?>
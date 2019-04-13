<br>
<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div id="table-header">Order Detail</div><br>
			<h5>Details information of Order number <?= $order_detail->orderId ?></h5>
			<table class="table">
				<tr>
					<th>Ship Name</th>
					<td colspan="1"><?= strip_tags($order_detail->name) ?></td>
				</tr>
				<tr>
					<th>Contact</th>
					<td colspan="1"><?= strip_tags($order_detail->contact) ?></td>
				</tr>
				<tr>
					<th>Email</th>
					<td colspan="1"><?= strip_tags($order_detail->email) ?></td>
				</tr>
				<tr>
					<th>Address</th>
					<td colspan="1"><?= strip_tags($order_detail->address) ?></td>
				</tr>
				<tr>
					<th>Shipping City</th>
					<td colspan="1"><?= strip_tags($order_detail->city) ?></td>
				</tr>
				<tr>
					<th>Total price</th>
					<td colspan="1"><?= strip_tags($order_detail->total_price) ?>.TK</td>
				</tr>
				<tr>
					<?php
					if($order_detail->paymentcheck == 1)
					{
						$order_detail->paymentcheck = "Cash on delivery";
					}
					else
					{
						$order_detail->paymentcheck = "Bank payment";
					}
					print '<th>Payment Type</th>';
					print '<td colspan="1">'.strip_tags($order_detail->paymentcheck).'</td>';
					?>
				</tr>
				<tr>
					<th>Order Date</th>
					<td colspan="1"><?= date('h:i a, d-M y', strtotime($order_detail->dateTime)) ?></td>
				</tr>
				<tr>
					<th>Order Books id</th>
					<td colspan="1"><?= strip_tags($order_detail->bookId) ?></td>
				</tr>
				
				<tr>
					<th>Book Quantity</th>
					<td colspan="1"><?= strip_tags($order_detail->quantity) ?></td>
				</tr>
				<tr class="border-bottom">
					<?php
					if($order_detail->status == 1)
					{
						$order_detail->status = '<span class = "text-success">Accepted</span>';
					}
					else
					{
						$order_detail->status = '<span class = "text-danger">Pending</span>';
					}
					print '<th>Order Status</th>';
					print '<td colspan="1">'.($order_detail->status).'</td>';
					?>
				</tr>
			</table>
		</div>
		<div class="col-lg-4"></div>
	</div>
</div><br>
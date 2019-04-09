<br>
<?php $this->load->model('user_model'); ?>
<?php if($this->user_model->my_orders()): ?>

	<div id="table-header">My orders</div>
	<table class="table table-hover">
  <thead class="">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Shipping contact</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Date</th>
      <th scope="col">Orders Status</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($orders as $order): ?>
    <tr>
      <?php print '<td>'.$order->orderId.'</td>'; ?>

      <?php print '<td>'.substr(strip_tags($order->name), 0, 100).'</td>'; ?>
      <?php print '<td>'.strip_tags($order->email).'</td>'; ?>
      <?php print '<td>'.strip_tags($order->contact).'</td>'; ?>
      <?php print '<td>'.strip_tags($order->total_price).'.TK</td>'; ?>
      <?php print '<td>'.date('h:i a, d-M y', strtotime($order->dateTime)).'</td>'; ?>

      <?php 
      if($order->status == 1)
      {
        $order->status = "Accepted";
      }
      else
      {
        $order->status = "Pending";
      }
      print '<td>'.strip_tags($order->status).'</td>';
       
      ?>
  
      <?php print '<td>';
        print '<a href= "'.base_url().'user_home/order_view/'.$order->orderId.'" title= "View Details" class="btn btn-primary btn-sm">Details</a>&nbsp';
        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>

<?php else: ?>
  <div class="error-msg"><?php print "You did not order any book yet. You can order books from here. "?>
  <a href="<?= base_url()?>users/all_books" class="text-primary"><b>Order your books</b></a> now.</div><br>
<?php endif; ?>
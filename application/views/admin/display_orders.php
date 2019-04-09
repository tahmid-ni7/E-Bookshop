<div class="text-success">
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>
</div>
<br>
<div class="container-fluid">
	<div id="table-header">all orders</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">email</th>
      <th scope="col">Shipping contact</th>
      <th scope="col">Shipping city</th>
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
      <?php print '<td>'.strip_tags($order->city).'</td>'; ?>
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
        print '<a href= "'.base_url().'admin/order_view/'.$order->orderId.'" title= "View Details" class="btn btn-primary btn-sm">Details</a>&nbsp';
        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>

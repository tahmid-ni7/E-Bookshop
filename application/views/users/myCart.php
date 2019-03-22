<br><div id="table-header">Your cart</div>
<div class="container">
  <?= form_open('cart/update_cart');?>
  <table class="table table-hover">
  <thead class="thead">
    <tr>
      <th>Quantity</th>
      <th>Name</th>
      <th>Price</th>
      <th>Image</th>
      <th>Sub total</th>
      <th>Action</th>
    </tr>
  </thead>

<?php
$i = 1;
foreach ($this->cart->contents() as $books) 
{
  print '<tbody>';
   
      print '<td>'.form_hidden($i.'[rowid]', $books['rowid']).'</td>';
      print '<tr>';
      print '<td>';
      print form_input(array('name'=> $i.'[qty]', 'value'=> $books['qty'], 'class'=>'form-control'));
      print '</td>';

      print "<td>".$books['name']."</td>";
      print "<td>".$books['price']."</td>";
      print "<td><img src = '".$books['book_image']."' alt = '' width='50' hieght='80'</td>";
      print "<td>".$books['subtotal']."</td>";
      print '<td>';
      print anchor("cart/delete_cart/".$books['rowid']."", "Delete", ['class'=>'btn btn-danger btn-sm']);
      print '</td>';

      print '</tr>';
      print '</tbody>';
      $i++;

}
      print "<tr>";
      print "<td colspan = '3'></td>";
      print "<td>Total</td>";
      print "<td>";
      print $this->cart->total();
      print "</td>";
      print "<td>";
      print anchor("", 'Check out now', ['class'=>'btn btn-primary btn-sm']);
      print "</td>";
      print "</tr>"
?>
</table>

<div>
  <span><?= form_submit("", 'Update cart', ['class'=>'btn btn-primary btn-sm'])?></span>
  <span><a href="<?= base_url()?>users/all_books" class="btn btn-success btn-sm">Continue shoping</a></span> 
</div>
</div>
<br>
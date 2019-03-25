<br>
<div id="table-header"><i class="fas fa-shopping-cart"></i> my cart</div>
<div class="container">
  <?php 
  if($this->session->flashdata('error'))
  {
    print '<div class = "error-msg">'.$this->session->flashdata('error').'</div>';
  }

  if($this->session->flashdata('remove_cart'))
  {
    print '<div class = "error-msg">'.$this->session->flashdata('remove_cart').'</div>';
  }
  ?>
  <?= form_open("cart/update_cart");?>
  <table class="table">
  <thead class="thead-light">
    <tr>
      <th>Image</th>
      <th>Book Name</th>
      <th>Quantity</th>
      <th>Price</th>
      <th>Sub total</th>
      <th>Action</th>
    </tr>
  </thead>

<?php
$i = 1;
foreach ($this->cart->contents() as $books) 
{
  print '<tbody>';
      print '<tr>';
      print '<td class="hidden">'.form_hidden($i.'[rowid]', $books['rowid']).'</td>';
      print '</tr>';

      print '<tr>';
      print "<td><img src = '".$books['book_image']."' alt = '' width='50' hieght='80'</td>";

      print "<td>".$books['name']."</td>";

      print '<td>';
      print form_input(array('name'=> $i.'[qty]', 'value'=> $books['qty'], 'class'=>'form-control'));
      print '</td>';

      print "<td>".$books['price'].".TK</td>";
      
      print "<td>".$books['subtotal'].".TK</td>";

      print '<td>';
      print anchor("cart/delete_cart/".$books['rowid']."", "<i class = 'fas fa-trash'></i>", ['class'=>'btn btn-outline-danger btn-sm', 'title'=>'Delete']);
      print '</td>';

      print '</tr>';
      print '</tbody>';
      $i++;

}
      print '<tr>';
      print "<td colspan = '3'></td>";
      print "<td><b>Shipping Fee</b></td>";
      if($this->cart->contents()){
        print "<td>40.TK</td>";
      }
      else{
        print "<td>0.TK</td>";
      }
      print '</tr>';

      print "<tr>";
      print "<td>";
      print '<a href ="'.base_url('users/all_books').'" class="btn btn-outline-success btn-sm"><i class="fas fa-shopping-bag"></i> Continue Shopping</a>';
      print "</td>";
      print "<td colspan = '1'></td>";
      print "<td>";
      print form_submit("", 'Update cart', ['class'=>'btn btn-primary btn-sm']);
      print "</td>";

      print "<td><b>Total</b></td>";
      if($this->cart->contents())
      {
        print "<td>";
        $shipping = 40;
        print $this->cart->total() + $shipping;
        print ".TK</td>";
      }
      else{
        print "<td>0.TK</td>";
      }

      print "<td>";
        print anchor("", '<i class="fas fa-check"></i> Checkout', ['class'=>'btn btn-outline-danger btn-sm']);
      print "</td>";
      print "</tr>"
?>
</table>

</div>
<br>
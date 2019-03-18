<div class="text-success">
<?php 
    if($this->session->flashdata('success'))
    {
        print '<div class= "success-msg">'.$this->session->flashdata('success').'</div>';
    }
?>
</div>

<div class="view-btn btn-sm"><a href="<?= base_url()?>admin/add_books">Add new book <i class="fas fa-plus-circle"></i></a></div>

<br>
<div class="container-fluid">
	<div id="table-header">Books list</div>
	<table class="table table-hover">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Book Name</th>
      <th scope="col">Description</th>
      <th scope="col">Author</th>
      <th scope="col">Publisher</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Category</th>
      <th scope="col">Book Image</th>
      <th scope="col">Action</th>
    </tr>
  </thead>


  <tbody>
  	<?php foreach($books as $book): ?>
    <tr>
      <?php print '<td>'.$book->id.'</td>'; ?>
      <?php print '<td><a href = "'.base_url().'admin/book_view/'.$book->id.'" title="More Description" class= "text-info">'.strip_tags(ucwords($book->book_name)).'</a></td>'; ?>

      <?php print '<td>'.substr(strip_tags($book->description), 0, 100).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->author).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->publisher).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->price).'.TK</td>'; ?>
      <?php print '<td>'.strip_tags($book->quantity).'</td>'; ?>
      <?php print '<td>'.strip_tags($book->categoryId).'</td>'; ?>

      <?php print '<td><img src = "'.strip_tags($book->book_image).'" alt = "" width="50" hieght="80" </td>';?>


      <?php print '<td>';
        print '<a href= "'.base_url().'admin/book_view/'.$book->id.'" title= "View More" class="btn btn-primary btn-sm">View</a>&nbsp';

        print '</td>'; 
      ?>
    </tr>
	<?php endforeach; ?>
  </tbody>
</table>
</div>

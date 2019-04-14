<div id="table-header">
<?php 
$this->load->model('user_model');
$count_reviews = count($this->user_model->get_reviews());

print "Reviews : (".$count_reviews.")";
?>
</div>
<table class="table table-hover">
	<tbody>
		<?php foreach($reviews as $comment): ?>
		<tr>
			<?php print '<td style="width: 230px">';
			print '<b class = "text-info">'.htmlentities($comment->name).'</b>';
			print '<p>'.htmlentities($comment->email).'</p>';
			print '<small>'.date('h:i a, d M Y', strtotime($comment->dateTime)).'</small>';
			print '</td>'; ?>
			<?php print '<td><p>'.nl2br(htmlentities($comment->review)).'</p></td>'; ?>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>

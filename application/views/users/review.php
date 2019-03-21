<form>
	<div><h5>Review</h5></div>
	    <div class="form-group row">
          
            <div class="col-md-10 col-sm-10">
                <?= form_textarea(['name'=>'review', 'placeholder'=>'Give a review',  'value'=>set_value('review'), 'class'=>'form-control', 'rows'=>'3'])?>
            </div>
            <div class="col-md-2 col-sm-2">
                <?= form_submit(['name'=>'submit', 'value'=>'Review', 'class'=>'btn btn-success'])?>
            </div>
        </div>
</form>
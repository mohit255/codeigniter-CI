<div class="container">
  
    <?php if( count($arts)): ?>
    <?php foreach($arts as $art): ?>
  <?= form_open("admin/update_article/{$art->id}",['class'=>'form-horizontal']); ?>
  <?= form_hidden('user_id',$this->session->userdata('user-id')); ?>
  <fieldset>
    <legend><h3>Add Article</h3></legend>
    
    <div class="row">
      <div class="form-group col-lg-10">
        <label for="inputEmail" class="col-lg-2 control-label">Title</label>
        <div class="col-lg-10">
          <?php echo form_input(['name'=>'title','class'=>'form-control','placeholder'=>'Article Title','value'=>$art->title]);?>
        </div>
      </div>
      <div class="col-lg-10" align="right">
        <?php echo form_error('title'); ?>
      </div>
    </div>
    <div class="row">
      <div class="form-group col-lg-10">
        <label for="inputPassword" class="col-lg-2 control-label">Article</label>
        <div class="col-lg-10">
          <?php echo form_textarea(['name'=>'body','class'=>'form-control','rows'=>'5','placeholder'=>'Article Body','value'=>$art->body]);?>
        </div>
      </div>
      <div class="col-lg-10" align="right">
        <?php echo form_error('body'); ?>
      </div>
    </div>
    
    <?php endforeach; ?>
    <?php endif; ?>
    <div class="form-group">
      <div class="col-lg-6 col-lg-offset-5">
        <?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'Reset']);?>
        <?php echo form_submit(['name'=>'submit','class'=>'btn btn-primary','value'=>'Add Article']);?>
      </div>
    </div>
  </fieldset>
</form>
</div>
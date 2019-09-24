<div class="container">
  <div class="">
    <?= form_open('user/login',['class'=>'form-horizontal','method'=>'post']); ?>
    <fieldset>
      <legend>Admin Login</legend>
      <div class="row">
        <div class="form-group col-lg-10">
          <label for="inputEmail" class="col-lg-2 control-label">Username</label>
          <div class="col-lg-10">
            <?php echo form_input(['name'=>'un','class'=>'form-control','placeholder'=>'Username']);?>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <?php echo form_error('un'); ?>
      </div>
      
      <div class="row">
        <div class="form-group col-lg-10">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <?php echo form_password(['name'=>'pass','class'=>'form-control','placeholder'=>'Password']);?>
          </div>
        </div>
        
        
        <div class="col-lg-10" align="right">
          <?php echo form_error('pass'); ?>
        </div>
      </div>
      
      <div class="row">
        <div class="form-group col-lg-10">
          <label for="inputPassword" class="col-lg-2 control-label">Role</label>
          <div class="col-lg-10">
            <?php
            $options = array(
            'author'         => ' Author ',
            'admin'           => ' Admin ',
            );
            $js = 'class="form-control"';
            $shirts_on_sale = array('author', 'admin');
            echo form_dropdown('role', $options, 'admin',$js);
            ?>
          </div>
        </div>
      </div>
      
      <div class="col-lg-10" align="right">
        <?php echo form_error('role'); ?>
      </div>
      <div class="form-group">
        <div class="col-lg-6 col-lg-offset-2">
          <?php echo form_reset(['name'=>'reset','class'=>'btn btn-default','value'=>'Reset']);?>
          <?php echo form_submit(['name'=>'sub','class'=>'btn btn-primary','value'=>'Login']);?>
        </div>
      </div>
    </fieldset>
  </form>
</div>
</div>
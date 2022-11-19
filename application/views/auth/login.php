<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b><?=lang('login_heading')?></b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg"><?=lang('login_subheading')?></p>

    <?php echo form_open("auth/login");?>
      <div class="input-group mb-3">
        <?php echo form_input($identity);?>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div id="infoMessage" class="alert alert-warning"><?php echo form_error('identity');?></div>
      <div class="input-group mb-3">
      <?php echo form_input($password);?>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div id="infoMessage" class="alert alert-warning"><?php echo form_error('password');?></div>
      <div class="row">
        <div class="col-8">
          <div class="icheck-primary">
          <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          <?php echo lang('login_remember_label', 'remember');?>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-4">
        <?php echo form_submit('submit', lang('login_submit_btn'), 'class = "btn btn-primary btn-block"');?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

    <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
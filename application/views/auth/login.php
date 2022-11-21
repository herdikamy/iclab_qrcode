<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?=base_url()?>" class="h1"><b><?=lang('login_heading')?></b></a>
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
      <?php
        if (validation_errors() == ''){

        }else{ ?>
      <div id="infoMessage" class="alert alert-warning"><font color="red"><?= form_error('identity');?></font></div>
      <?php
        }
      ?>
      <div class="input-group mb-3">
      <?php echo form_input($password);?>
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <?php
        if (validation_errors() == ''){

        }else{ ?>
      <div id="infoMessage" class="alert alert-warning"><font color="red"><?= form_error('password');?></font></div>
      <?php
        }
      ?>
      <?php
      if(is_string($message) == 'true' AND strlen($message) == '84' OR $message == ''){

      }else{ ?>
      <div id="flashMessage" class="alert alert-danger" data-flashdata="<?=$message?>"><?=$message?></div>
      <?php 
      }
      ?>
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
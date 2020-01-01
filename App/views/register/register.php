<?php $this->start('head') ?>
<?php $this->end() ?>

<?php $this->start('body') ?>
<div class="col-md-6 col-md-offset-3 well">
<form class="form" action="" method="post">
  <div class="bg-danger"><?= $this-displayErrors?>
  </div>
  <div class="form-group">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" value="<?= $this->post['fname ']?>">
  </div>

  <div class="form-group">
    <label for="email">Email</label>
    <input type="text" id="email" name="email" value="<?= $this->post['email']?>">
  </div>

  <div class="form-group">
    <label for="password">Choose a Password</label>
    <input type="password" id="password" name="password" value="<?= $this->post['password']?>">
  </div>

  <div class="form-group">
    <label for="confirm">Confirm a Password</label>
    <input type="password" id="confirm" name="password" value="<?= $this->post['password']?>">
  </div>

</form>
</div>
<?php $this->end() ?>

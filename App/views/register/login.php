<?php $this->start('head')?>
<?php $this->end()?>
<?php $this->start('body')?>

<div class="col-md-6 col-md-offset-3 well">
 <form class="form" action="<?=PROOT?>register/login" method="post">
   <div class="">
     <?=$this->displayErrors ?>
   </div>
   <h3 class="text-center">Log In</h3>
   <div class="form-group has-error">
     <label for="username">Username</label>
     <input type="text" name="username" id='username' class="form-control">
   </div>
   <div class="form-group">
     <label for="password">Password</label>
     <input type="password" name="password" id='password' class="form-control">
   </div>
   <div class="form-group">
     <label for="remember_me">Remember me
       <input type="checkbox" name="remember_me" id='remember_me' value="on">
     </label>
   </div>
   <div class="form-group">
      <input type="submit" value="Login" class="btn btn-large btn-primary">
   </div>
   <div class="text-right">
     <a href="<?=PROOT?>register/register" class = "text-primary">Register</a>
   </div>
 </form>
</div>
<?php $this->end()?>

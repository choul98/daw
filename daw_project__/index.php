
<?php
  include "includes/header.php";
?>

<div class="container">
  <div class='col-lg-4'>
      <h3>Login</h3>
      <form method='post' action='login.php'>
        <div class="form-group">
          <label for="email">Email address</label>
          <input name='email' type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
          
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input name='pass' type="password" class="form-control" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>
</div>

    <?php
        include "includes/footer.php";
    ?>

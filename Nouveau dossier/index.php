<!--
<!DOCTYPE html>
<html>
    <head>
    
    <title>Mon Site Web</title>
    
    </head>
    
    <body>
        <header>
            
            <h2>Univ Constantin 2</h2>
            
        </header>
-->
        <?php
            include "header.php";
        ?>
<!--
        <form method="post" action="page.php">
            <div class="box">
                <h1>Login</h1>
                <p>choiser </p>
                                <div class="radio">
                                  <input type="radio" id="id1" name="radio" value="admin"
                                         checked>
                                  <label for="admin">Admin</label>
                                </div>
                                <div class="radio">
                                  <input type="radio" id="id2" name="radio" value="enseignant">
                                  <label for="enseignant">Ensiegnant</label>
                                </div>
                                <div class="radio">
                                  <input type="radio" id="id3" name="radio" value="doctorant">
                                  <label for="doctorant">Doctorant</label>
                                </div>
                <p>Votre Email</p> 
                <input type="text" name="email" placeholder="Votre Email"  class="email" />
                  <p>Votre mot de pass</p> 
                <input type="password" name="pass" placeholder="PassWord" class="email" />
                <input type="submit" value="Sing In" class="btn"/>    
            </div> 
        </form>
-->
<div class='col-lg-6'>
    <form method='post' action='page.php'>
        <div class="input-group">
  <div class="input-group-prepend">
    <div class="input-group-text">
        
        <div class='radio'>
      <input type="radio" name='radio' value='admin' aria-label="Radio button for following text input">
        </div>
        <label for="admin">Admin</label>
        <br>
      <input type="radio" name='radio' value='enseignant' aria-label="Radio button for following text input">
        <label for="enseignant">Enseignant</label>
        <br>
      <input type="radio" name='radio' value='doctorant' aria-label="Radio button for following text input">
        <label for="doctorant">Doctorant</label>
    </div>
  </div>
</div>
        
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name='email' type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name='pass' type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>
</div>
    <?php
        include "footer.php";
    ?>

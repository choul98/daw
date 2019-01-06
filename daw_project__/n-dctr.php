<?php
    include "includes/header.php";
?>
        <div class="container">
            <div class="col-lg-10">
                <form action="add_doc.php" method="post">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input name='email' type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter Email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label for="nom">Nom</label>
                        <input name='nom' type="text" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom</label>
                        <input name='prenom' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="class">Classement</label>
                        <input name='class' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="spec">Spécialité</label>
                        <input name='spec' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="lab">Laboratoire</label>
                        <input name='lab' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="dep">Département</label>
                        <input name='dep' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input name='pass' type="password" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="pass2">Confirm Password</label>
                        <input name='pass2' type="password" class="form-control" placeholder="Confirm Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Register</button>
                </form>
        </div>    
    </body>



</html>




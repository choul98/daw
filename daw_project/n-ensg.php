<?php
    include "includes/header.php";
    include "includes/sidebar.php";
?>
        <div class="container">
            <br>
            <div class="col-lg-10">
                <form action="add_ens.php" method="post">
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
                        <label for="nbr_doc">Nombre des doctorants</label>
                        <input name='nbr_doc' type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="class">Grade</label>
                        <input name='class' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="spec">Spécialité</label>
                        <input name='spec' type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="labo">Laboratoire</label>
                        <input name='labo' type="text" class="form-control">
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
<?php
    include "includes/footer.php";
?>




<!DOCTYPE html>
<html lang="ru">
    <head>
        <title>Reg</title>
        <link rel='stylesheet' href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link rel='stylesheet' href="css/style.css">
    </head>
    <body>
        <div class="container mt-4">
            <div class='row'>
                <div class="col">
                    <h2>Registration form</h2>
                    <form action="php/check.php" method="post">
                        <input type="name" class="form-control" name="name" id="name" placeholder="Input the name" required><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Input the password" required><br>
                        <select id="family_members" name="family" required>
                            <option id='father'>Father</option>
                            <option id='mother'>Mother</option>
                            <option id='child'>Child</option>
                        </select>
                        <button class="btn btn-success" type="submit"> Sign up</button>
                    </form>
                </div>
                <div class="col">
                    <h2>Log in</h2>
                    <form action="php/auth.php" method="post">
                        <input type="name" class="form-control" name="name" id="name" placeholder="Input the name" required><br>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Input the password" required><br>
                        <button class="btn btn-success" type="submit"> Log in</button>
                    </form>
                </div>
            </div>  
        </div> 
    </body>
</html>
<?php
include db.php();
if($SERVER['REQUEST_METHOED']===POST){
    $name=$_POST['name'];
    $password=$_POST['password'];
    $sql-$conn->param['select password from restaurent where name=?'];
    $sql->bind_param('s',$name);
    $sql_execute();
    $sql->bind_result($password);
    $sql->fetch();
    if (password_verify ($password,$pass)){
        $_SESSION[name]
        header("location: home.php");
    }
}
?>
<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>login with us!!!</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>

        <div class="mb-3">
            <label for="" class="form-label">Name</label>
            <input
                type="text"
                class="form-control"
                name="name"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-body-secondary"
                >Help text</small
            >
        </div>
        <div class="mb-3">
            <label for="" class="form-label">password</label>
            <input
                type="text"
                class="form-control"
                name="password"
                id=""
                aria-describedby="helpId"
                placeholder=""
            />
            <small id="helpId" class="form-text text-body-secondary"
                >Help text</small
            >
        </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>

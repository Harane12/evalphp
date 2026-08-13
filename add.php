
<?php
include'db.php';

if ($_SERVER['REQUEST_METHOD']==='POST') {
    $Iid = $_POST['id'];
    $itemname = $_POST['name'];
    $itemdescription = $_POST['quantity'];
    $itemprice = $_POST['price'];
    $itemcategory = $_POST['category'];
    $sql=$conn->prepare('INSERT INTO menu VALUES(?,?,?,?,?)');
    $sql->bind_param('issds',$Id,$name,$description,$price,$category);
     if ($sql->execute()) {
        echo "New record created successfully";
    }
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>add item</title>
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
            <div
                class="container align-text-center-mt-5 col-md-4 border rounded shadow p-4"
            >
                <h1 class="text-center  mt3"> Add item</h1>
                <form action="" method="post" action="show.php">
   
    <div class="mb-3">
        <label for="" class="form-label">Id</label>
        <input
            type="number"
            class="form-control"
            name="id"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> Name</label>
        <input
            type="text"
            class="form-control"
            name="name"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
        
    </div>
    <div class="mb-3">
        <label for="" class="form-label">description</label>
        <input
            type="number"
            class="form-control"
            name="description"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
       
    </div>
    <div class="mb-3">
        <label for="" class="form-label"> price</label>
        <input
            type="price"
            class="form-control"
            name="category"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
      </div>
    <div class="mb-3">
        <label for="" class="form-label"> Catergory</label>
        <input
            type="catergory"
            class="form-control"
            name="category"
            id=""
            aria-describedby="helpId"
            placeholder=""
        />
    </div>
    <button
        type="submit"
        class="btn btn-primary"
    >
        Submit
    </button>
    
                </form>
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






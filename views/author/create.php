<?php 

require "../PHP-OOP/views/tamplate/header.php" ?>


<div class="container mt-2">
    <?php if(isset($_SESSION['validation_name'])) : ?>
        <div class="alert alert-danger">
            <?= $_SESSION['validation_name']  ?>
        </div>
    <?php endif ?>
    
    <form method="POST" action="/author/create">
        <h3 class="text-center">Add Author</h3>
        <div class="row">
            <input 
                class="form-control"
                name="name"
                placeholder="Please input author name.."/>

            <button type="submit" class="btn btn-primary mt-2">Submit</button>
            
            <a 
                class="text-center mt-2"
                href="/author">Back to Author List</a>
        </div>
    </form>
</div>


<?php require "../PHP-OOP/views/tamplate/footer.php" ?>

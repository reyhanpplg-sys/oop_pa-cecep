<?php 

require "tamplate/header.php";
$no = 1;
?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header text-center font-bold">
                List Author PPLG Library
            </div>

            <?php if(isset($_SESSION['success'])) : ?>
                <div class="alert alert-success">
                    <?= $_SESSION['success']  ?>
                </div>
            <?php endif ?>

            <div class="card-body">
                <div class="d-flex mb-3">
                    <a 
                    href="/author/create"
                    class="m-2 btn btn-dark">Add Author</a>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($data as $author) :?>
                                <tr>
                                    <td><?=  $no++  ?></td>
                                    <td><?=  $author->getName() ?></td>
                                    <td>
                                        <a class="bg-warning p-2 btn btn-rounded text-light" href="/author/ <?= $author->getId() ?>/edit">

                                            Update

                                        </a>

                                        <a class="bg-danger p-2 btn btn-rounded text-light" href="/author <?= $author->getId() ?>/delete">

                                            Delete

                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require "tamplate/footer.php" ?>

<?php require "tamplate/header.php" ?>

    <div class="container mt-2">
        <div class="card">
            <div class="card-header text-center font-bold">
                List Book PPLG Library
            </div>
            <div class="card-body">
                <div class="d-flex mb-3">
                    <input type="text" class="form-control" placeholder="Search book"/>
                    <button class="m-2 btn btn-dark">Find</button>
                </div>
                <div class="table-responsive">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Author</th>
                                <th>Title</th>
                                <th>Year</th>
                                <th>Publisher</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>


<?php require "tamplate/footer.php" ?>

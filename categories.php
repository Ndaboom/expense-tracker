<!DOCTYPE html>
<html lang="en">

<?php
include('db.php');
include('includes/header.php');
include('includes/functions.php');

// Fetch all categories
$categories = get_all_data_from_table('categories');

if (isset($_POST['add-category'])) {
    $q = $conn->prepare("INSERT INTO categories(name) VALUES(:name)");

    $q->execute([
        'name' => $_POST['designationInput']
    ]);

    $q->closeCursor();
}

?>

<body>
    <header class="navigation-bar">
        <nav>
            <h1>Expense tracker</h1>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <div class="side-bar">
            <ul>
                <li><span class="material-symbols-outlined">
                        widgets
                    </span><a href="dashboard.php">Dashboard</a></li>
                <li><span class="material-symbols-outlined">
                        category
                    </span> <a href="categories.php">Categories</a></li>
                <li><span class="material-symbols-outlined">
                        edit_calendar
                    </span> <a href="expenses.php">Expenses</a></li>
                <li><span class="material-symbols-outlined">
                        settings
                    </span> <a href="settings.php">Settings</a></li>
            </ul>
        </div>
        <div class="dashboard">
            <div class="card w-100">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-8">
                            Categories
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-category">Add Category</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead class="bg-secondary text-white">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Label</th>
                                <th scope="col">Added At</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($categories as $index => $category) : ?>
                                <tr>
                                    <th scope="row"><?= $index + 1 ?></th>
                                    <td><?= $category->name ?></td>
                                    <td><?= $category->added_at ?></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Add category modal -->
    <div class="modal" tabindex="-1" id="add-category">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="designationInput" class="form-label">Designation</label>
                            <input type="text" class="form-control" name="designationInput" id="designationInput" placeholder="Categories name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" name="add-category" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Add category modal -->

    <!-- Bootstrap script -->
    <script src="vendors/boostrap/js/bootstrap.min.js"></script>
</body>

</html>
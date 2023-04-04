<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="vendors/boostrap/css/bootstrap.min.css">
    <!-- Bootsrap -->
    <link rel="stylesheet" type="text/css" href="vendors/boostrap/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

    <?php
    session_start();
    // Check auth
    include('filters/auth_filter.php');

    ?>

    <title>Expense Tracker Dashboard</title>
</head>
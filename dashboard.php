<!DOCTYPE html>
<html lang="en">

<?php
include('includes/header.php');
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
            <div class="card">
                <i class="icon fa fa-cutlery"></i>
                <div class="title">Food</div>
                <div class="amount">$250</div>
                <div class="description">Total amount spent on food this month</div>
                <div class="category">Category: Food</div>
            </div>

            <div class="card">
                <i class="icon fa fa-car"></i>
                <div class="title">Transportation</div>
                <div class="amount">$100</div>
                <div class="description">Total amount spent on transportation this month</div>
                <div class="category">Category: Transportation</div>
            </div>

            <div class="card">
                <i class="icon fa fa-home"></i>
                <div class="title">Housing</div>
                <div class="amount">$500</div>
                <div class="description">Total amount spent on housing this month</div>
                <div class="category">Category: Housing</div>
            </div>

            <div class="card">
                <i class="icon fa fa-briefcase"></i>
                <div class="title">Business Expenses</div>
                <div class="amount">$350</div>
                <div class="description">Total amount spent on business expenses this month</div>
                <div class="category">Category: Business Expenses</div>
            </div>
        </div>
    </div>

</body>

</html>
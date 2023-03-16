<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Expense Tracker Dashboard</title>
</head>

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
                    </span> Dashboard</li>
                <li><span class="material-symbols-outlined">
                        category
                    </span> Categories</li>
                <li><span class="material-symbols-outlined">
                        edit_calendar
                    </span> Expenses</li>
                <li><span class="material-symbols-outlined">
                        settings
                    </span> Settings</li>
            </ul>
        </div>
        <div class="dashboard">
            <div class="card">
                <i class="icon fa fa-cutlery"></i>
                <div class="title">Food</div>
                <div class="amount">$250</div>
                <div class="description">Total amount spent on food this month</div>
                <div class="category">Category: Food</div>
                <div class="actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>

            <div class="card">
                <i class="icon fa fa-car"></i>
                <div class="title">Transportation</div>
                <div class="amount">$100</div>
                <div class="description">Total amount spent on transportation this month</div>
                <div class="category">Category: Transportation</div>
                <div class="actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>

            <div class="card">
                <i class="icon fa fa-home"></i>
                <div class="title">Housing</div>
                <div class="amount">$500</div>
                <div class="description">Total amount spent on housing this month</div>
                <div class="category">Category: Housing</div>
                <div class="actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>

            <div class="card">
                <i class="icon fa fa-briefcase"></i>
                <div class="title">Business Expenses</div>
                <div class="amount">$350</div>
                <div class="description">Total amount spent on business expenses this month</div>
                <div class="category">Category: Business Expenses</div>
                <div class="actions">
                    <button>Edit</button>
                    <button>Delete</button>
                </div>
            </div>

        </div>
    </div>

    <h1>Expense Manager Dashboard</h1>

    <h2>Monthly Expenses</h2>

    <div class="total">$1,200</div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Admin</title>
    <style>
        
        #main-content {
            display: flex;
            height: calc(100vh - 56px); 
            overflow: hidden; 
        }
        #dashboard-menu {
            width: 250px; 
            background-color: #343a40; 
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh; 
            overflow-y: auto; 
        }


        .content-area {
            flex-grow: 1;
            background-color: #f8f9fa; 
            overflow-y: auto; 
        }

        .nav-link {
            padding: 15px 25px; 
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0">Koze Cafe</h3>
        <a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
    </div>

    <div id="main-content">
        <!-- Sidebar -->
        <div id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid flex-lg-column align-items-stretch flex-column">
                    <h4 class="mt-2 text-light">Admin Panel</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                        <ul class="nav nav-pills flex-column">
                            <li class="nav-item">
                                <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="users.php">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="user_queries.php">Inventory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="rooms.php">Staffs</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="carousel.php">Reports</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

   
    </div>
</body>
</html>

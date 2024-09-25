<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/dashboardstyle.css') }}">
    <title>Admin</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
        }

        #main-content {
            display: flex;
            flex: 1;
            overflow: hidden;
        }

        /* Sidebar styling */
        #dashboard-menu {
            width: 250px;
            background: #d2a6e6;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #d04ed6, #cc99e2);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #e390e7, #d093eb); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            border-right: double rgb(0, 0, 0);
            color: #fff;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-y: auto;
        }

        .content-area {
            flex-grow: 1;
            background-color: rgb(219, 219, 219);
            overflow-y: auto;
        }

        .footer {
            background: #834d9b;
            color: #fff;
            text-align: center;
            padding: 10px;
        }
        
        .nav-link {
            padding: 10px 15px;
        }
    </style>
</head>
<body>
    <!-- Top bar -->
    <div class="container-fluid custom-bg text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0"><span style="color: rgb(255, 255, 255)">KOZE CAFE</span></h3>

        <!-- Logout Form -->
        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
            @csrf
            <button type="submit" class="btn custom-btn btn-light btn-sm">LOG OUT</button>
        </form>
        
    </div>

    <!-- Main Content Wrapper -->
    <div id="main-content">
        <!-- Sidebar -->
        <div id="dashboard-menu">
            <nav class="navbar navbar-expand-lg navbar-dark sticky-top ">
                <div class="container-fluid flex-lg-column align-items-stretch flex-column">
                    <h4 class="mt-2 text-light">Admin Panel</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                        <ul class="nav custom-nav nav-pills flex-column">
                            <li class="nav-item custom">
                                <a class="nav-link text-white" href="{{ route('overview') }}">OverView</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('transaction') }}">Transaction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('products') }}">Products</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('inventory') }}">Inventory</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('reports') }}">Reports</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('employee') }}">Employees</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            
        </div>


        
        <!-- Content Area -->
        <div class="content-area">
            @yield('content') 
            
        </div>
    </div>

    <!-- Footer -->
    
</body>
</html>
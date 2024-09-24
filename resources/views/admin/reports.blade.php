@extends('dashboard')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashboardstyle.css') }}">
    <title>Koze Cafe</title>
</head>
<body>
    <div class="wrapper">
        <div class="main p-3">
            <div class="row mb-4 align-items-center">
                <div class="col-md-9">
                    <h1>Reports</h1>
                </div>
                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-custom" id="plus-button" style="border-radius: 7px; height: 2.3rem; border: none;">
                        <i class="bi bi-printer"></i> Generate Reports
                    </button>
                </div>
            </div>
            <div class="container mt-4">
                <div class="row mb-4 align-items-center">
                    <div class="col-md-8">
                        
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_filter">Filter by Date:</label>
                            <form method="get" action="employee">
                                <div class="input-group">
                                    <select class="form-select" name="date_filter" id="dateFilter">
                                        <option value="">All Dates</option>
                                        <option value="Today">Today</option>
                                        <option value="Yesterday">Yesterday</option>
                                        <option value="Last Week">Last Week</option>
                                        <option value="Last Month">Last Month</option>
                                        <option value="Last Year">Last Year</option>
                                        <option value="Older Year">Older Year</option>
                                    </select>
                                    <button type="submit" class="btn btn-custom">Filter</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                 <div class="container">
                    <div class="card mt-3">
                        <div class="card-header" style="background-color: rgb(127, 33, 215)">
                            <h5>Reports Table</h5>
                        </div>
                    <table id="tblDepartment" class="table table-bordered" style="background-color: #e6e6fa;">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category Name</th>
                                <th>Product Name</th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Discount</th>
                                <th>Total Price</th>
                                <th>Date</th>
                                <th>Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Static data -->
                            <tr>
                                <td>1</td>
                                <td>Pasta</td>
                                <td>SpagMeat Balls</td>
                                <td>Php 185.00</td>
                                <td>1</td>
                                <td>5%</td>
                                <td>Php 175.75</td>
                                <td>09/12/24</td>
                                <td>9:00 AM</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Snacks</td>
                                <td>Nachos</td>
                                <td>Php 135.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 135.00</td>
                                <td>09/13/24</td>
                                <td>11:30 AM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Snacks</td>
                                <td>Marinara</td>
                                <td>Php 190.00</td>
                                <td>5</td>
                                <td>0%</td>
                                <td>Php 11.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Marinara</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Pasta</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Coffee</td>
                                <td>Americano Hot</td>
                                <td>Php 119.00</td>
                                <td>1</td>
                                <td>0%</td>
                                <td>Php 119.00</td>
                                <td>09/13/24</td>
                                <td>3:00 PM</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="dashboard-footer custom-footer text-white pt-3 fixed-bottom bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center">
                    <hr class="mb-4">
                    <div class="row align-items-center">
                        <div class="col-md-7 col-lg-8 text-md-left text-center">
                            <p class="mb-0">&copy; 2024 G.B.N.F. Mapping Co. All rights reserved.</p>
                        </div>
                        <div class="col-md-5 col-lg-4 text-center text-md-right">
                            <ul class="list-unstyled list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="https://www.facebook.com/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                        <i class="bi bi-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.youtube.com/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                        <i class="bi bi-youtube"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://twitter.com/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                        <i class="bi bi-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="https://www.google.com/" class="btn-floating btn-sm text-white" style="font-size: 23px;">
                                        <i class="bi bi-google"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Include JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            $('#tblDepartment').DataTable();

         // Date filter change event handler
        $('#dateFilter').change(function() {
            filterTable();
        });

        // Function to filter table based on selected date
        function filterTable() {
            var filter = $('#dateFilter').val();
            var today = new Date().toLocaleDateString();
            var yesterday = new Date(new Date().setDate(new Date().getDate() - 1)).toLocaleDateString();
            var lastWeek = new Date(new Date().setDate(new Date().getDate() - 7)).toLocaleDateString();
            var lastMonth = new Date(new Date().setMonth(new Date().getMonth() - 1)).toLocaleDateString();
            var lastYear = new Date(new Date().setFullYear(new Date().getFullYear() - 1)).toLocaleDateString();
            
            // Iterate over table rows
            table.rows().every(function() {
                var row = this.node();
                var date = $(row).find('td').eq(7).text(); // Assuming date is in the 8th column (index 7)

                var showRow = false;

                switch (filter) {
                    case 'Today':
                        showRow = date === today;
                        break;
                    case 'Yesterday':
                        showRow = date === yesterday;
                        break;
                    case 'Last Week':
                        showRow = new Date(date) >= new Date(lastWeek);
                        break;
                    case 'Last Month':
                        showRow = new Date(date) >= new Date(lastMonth);
                        break;
                    case 'Last Year':
                        showRow = new Date(date) >= new Date(lastYear);
                        break;
                    case 'Older Year':
                        showRow = new Date(date) < new Date(lastYear);
                        break;
                    default:
                        showRow = true;
                        break;
                }

                // Toggle row visibility based on the filter condition
                $(row).toggle(showRow);
            });
        }

        // Trigger filterTable on page load to apply default filter (All Dates)
        filterTable();
          
        


            // // Event delegation for dynamically added rows
            // $('#tblDepartment').on('click', '.btnDelete', function() {
            //     confirmDelete();
            // });

            // function confirmDelete() {
            //     Swal.fire({
            //         icon: "question",
            //         title: "Do you want to delete this department?",
            //         showCancelButton: true,
            //         reverseButtons: true,
            //         confirmButtonColor: "#3085d6",
            //         confirmButtonText: "Yes, Delete",
            //     }).then((result) => {
            //         if (result.isConfirmed) {
            //             deleteDepartment();
            //         }
            //     });
            // }

            // function deleteDepartment() {
            //     // Implement delete functionality here
            // }
        });
    </script>
</body>
</html>
@endsection

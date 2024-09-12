@extends('dashboard') 

@section('content')
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/chss2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.8/dist/sweetalert2.all.min.js"></script> 
        <title>Koze Cafe</title>
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> 
        <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}"> 
        <link rel="stylesheet" href="{{ asset('assets/css/dashboardstyle.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}"> 
        <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
         <link rel="stylesheet" href="{{ asset('assets/css/chart.css') }}">
    </head>
        
    <body>
    <div class="wrapper">
        <div class="main p-3">
            <div class="row mb-4 align-items-center">
                <div class="col-md-9">
                    <h1>Overview</h1>
                </div>
                <div class="col-md-3">
                    <div class="btn-group mb-3" role="group">
                        <button class="btn btn-date active" id="yearBtn">Yearly</button>
                        <button class="btn btn-date" id="monthBtn">Monthly</button>
                        <button class="btn btn-date" id="weekBtn">Weekly</button>
                        <button class="btn btn-date" id="dayBtn">Daily</button>
                    </div>
                </div>
            </div>

            <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body salesChart">
                                    <!-- Yearly Charts -->
                                    <div id="yearlyCharts" class="chart-container">
                                        <h5 class="card-title">Yearly Sales</h5>
                                        <canvas id="yearlyChart"></canvas>
                                        <h5 class="card-title mt-4">Yearly Sales Distribution</h5>
                                        <canvas id="yearlyPieChart"></canvas>
                                    </div>
                                    <!-- Monthly Charts -->
                                    <div id="monthlyCharts" class="chart-container d-none">
                                        <h5 class="card-title">Monthly Sales</h5>
                                        <canvas id="monthlyChart"></canvas>
                                        <h5 class="card-title mt-4">Monthly Sales Distribution</h5>
                                        <canvas id="monthlyPieChart"></canvas>
                                    </div>
                                    <!-- Weekly Charts -->
                                    <div id="weeklyCharts" class="chart-container d-none">
                                        <h5 class="card-title">Weekly Sales</h5>
                                        <canvas id="weeklyChart"></canvas>
                                        <h5 class="card-title mt-4">Weekly Sales Distribution</h5>
                                        <canvas id="weeklyPieChart"></canvas>
                                    </div>
                                    <!-- Daily Charts -->
                                    <div id="dailyCharts" class="chart-container d-none">
                                        <h5 class="card-title">Daily Sales</h5>
                                        <canvas id="dailyChart"></canvas>
                                        <h5 class="card-title mt-4">Daily Sales Distribution</h5>
                                        <canvas id="dailyPieChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-primary mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Daily Sales</h5>
                            <h2 class="card-text" id="dailySales">₱0.00</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-success mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Total Sales</h5>
                            <h2 class="card-text" id="totalSales">₱0.00</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="card text-white bg-info mb-3">
                        <div class="card-body">
                            <h5 class="card-title">Product Sold</h5>
                            <h2 class="card-text" id="productSold">0</h2>
                        </div>
                    </div>
                </div>
            </div>

            
            <div class="table-responsive">
                <table class="table table-striped cstm-tbl">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Userame</th>
                            <th>Email</th>
                            <th>Role</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Jude Rojas</td>
                            <td>Jude@example.com</td>
                            <td>Admin</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Uriel Chavez</td>
                            <td>Uriel@example.com</td>
                            <td>Cashier</td>
                        </tr>
                    </tbody>
                </table>
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

        <script src="{{ asset('assets/js/style.js') }}"></script>
        <script src="{{ asset('assets/js/saleschart.js') }}"></script>
        <script src="{{ asset('assets/js/graph.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Example chart initialization
                var yearlyChart = new Chart(document.getElementById('yearlyChart'), {
                    type: 'line',
                    data: {
                        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
                        datasets: [{
                            label: 'Yearly Sales',
                            data: [12000, 15000, 18000, 20000, 23000, 25000, 27000],
                            borderColor: 'rgba(75, 192, 192, 1)',
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return '₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var yearlyPieChart = new Chart(document.getElementById('yearlyPieChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Product A', 'Product B', 'Product C'],
                        datasets: [{
                            data: [30, 50, 20],
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var monthlyChart = new Chart(document.getElementById('monthlyChart'), {
                    type: 'line',
                    data: {
                        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
                        datasets: [{
                            label: 'Monthly Sales',
                            data: [3000, 4000, 3500, 4500],
                            borderColor: 'rgba(153, 102, 255, 1)',
                            backgroundColor: 'rgba(153, 102, 255, 0.2)',
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return '₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var monthlyPieChart = new Chart(document.getElementById('monthlyPieChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Category X', 'Category Y', 'Category Z'],
                        datasets: [{
                            data: [40, 30, 30],
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var weeklyChart = new Chart(document.getElementById('weeklyChart'), {
                    type: 'line',
                    data: {
                        labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
                        datasets: [{
                            label: 'Weekly Sales',
                            data: [500, 600, 700, 800, 900],
                            borderColor: 'rgba(54, 162, 235, 1)',
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return '₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var weeklyPieChart = new Chart(document.getElementById('weeklyPieChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Item 1', 'Item 2', 'Item 3'],
                        datasets: [{
                            data: [50, 25, 25],
                            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56'],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var dailyChart = new Chart(document.getElementById('dailyChart'), {
                    type: 'line',
                    data: {
                        labels: ['Today', 'Yesterday'],
                        datasets: [{
                            label: 'Daily Sales',
                            data: [200, 150],
                            borderColor: 'rgba(255, 159, 64, 1)',
                            backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return '₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                var dailyPieChart = new Chart(document.getElementById('dailyPieChart'), {
                    type: 'pie',
                    data: {
                        labels: ['Segment A', 'Segment B'],
                        datasets: [{
                            data: [60, 40],
                            backgroundColor: ['#FF6384', '#36A2EB'],
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            tooltip: {
                                callbacks: {
                                    label: function(tooltipItem) {
                                        return tooltipItem.label + ': ₱' + tooltipItem.raw;
                                    }
                                }
                            }
                        }
                    }
                });

                // Function to show selected charts
                function showCharts(period) {
                    document.querySelectorAll('.chart-container').forEach(container => {
                        container.classList.add('d-none');
                    });
                    document.getElementById(period + 'Charts').classList.remove('d-none');
                }

                // Default to Yearly charts
                showCharts('yearly');

                // Add event listeners for tab buttons
                document.getElementById('yearBtn').addEventListener('click', () => {
                    showCharts('yearly');
                });

                document.getElementById('monthBtn').addEventListener('click', () => {
                    showCharts('monthly');
                });

                document.getElementById('weekBtn').addEventListener('click', () => {
                    showCharts('weekly');
                });

                document.getElementById('dayBtn').addEventListener('click', () => {
                    showCharts('daily');
                });
            });
        </script>
    </body>
</html>
@endsection

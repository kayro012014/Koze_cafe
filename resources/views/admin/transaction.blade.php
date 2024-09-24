@extends('dashboard') <!-- Correct reference to the layout -->

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
    <title>Koze Cafe</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/sidebar.css') }}"> 
    <link rel="stylesheet" href="{{ asset('assets/css/dashboardstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/table.css') }}"> 
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>
<body>
    <div class="wrapper">
        <div class="main p-3">
            <!-- for the second table -->
            <div class="col-md-12">
                <div class="card p-4">
                    <div class="row mb-4 align-items-center">
                        <div class="col-md-8">
                            <h4>Inventory List</h4>
                        </div>
                        <div class="col-md-4 text-end">
                            <button type="button" class="btn btn-custom" id="plus-button" style="border-radius: 7px; height: 2.3rem; border: none;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <i class="bi bi-plus"></i> Add Inventory
                            </button>
                        </div>
                    </div>

                    <!-- Make table responsive and adjust its width -->
                    <div class="table-responsive">
                        <table id="tblDepartment" class="table table-bordered table-hover text-center" style="width: 100%;">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Category Name</th>
                                    <th>Ingredients</th>
                                    <th>Image</th>
                                    <th>Stocks</th>
                                    <th>Stocks Left</th>
                                    <th>Expiration Date</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody id="inventoryTableBody">
                                @foreach($inventory as $item)
                                <tr>
                                    <td>{{ $item->inventory_id }}</td>
                                    <td>{{ $item->category_name }}</td>
                                    <td>{{ $item->ingredients }}</td>
                                    <td><img src="{{ asset('path_to_image_folder/' . $item->image) }}" alt="Item Image" class="img-fluid" style="max-width: 100px;"></td> <!-- Display image with a fixed width -->
                                    <td>{{ $item->stocks }}</td>
                                    <td>{{ $item->stocks_left }}</td>
                                    <td>{{ $item->expiration_date }}</td>
                                    <td>{{ $item->date_added }}</td>
                                    <td>
                                        <button class="btn btn-success btn-sm" onclick="toggleStatus(this)">Available</button>
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm" id="btnEdit" data-id="{{ $item->id }}">
                                            EDIT
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Edit and Add Inventory Code -->

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

    <!-- Scripting -->
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/status.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#tblDepartment').DataTable({
                responsive: true, // Enable responsive behavior
                autoWidth: false   // Prevent auto width
            });

            $(document).on('click', '#btnEdit', function() {
                // Get data values from the button edit
                var id = $(this).data('id');
                var category_name = $(this).data('category_name');
                var product_name = $(this).data('product_name');
                var description = $(this).data('description');
                var stocks = $(this).data('stocks');
                var expiration_date = $(this).data('expiration_date');
                var date_added = $(this).data('date_added');

                // Populate the modal fields with the data
                $('#e_item_id').val(id);
                $('#e_categoryName').val(category_name);
                $('#e_productName').val(product_name);
                $('#e_description').val(description);
                $('#e_stocks').val(stocks);
                $('#e_expirationDate').val(expiration_date);
                $('#e_dateAdded').val(date_added);

                // Show the modal
                $('#modalEdit').modal('show');
            });
        });
    </script>

</body>
</html>
@endsection

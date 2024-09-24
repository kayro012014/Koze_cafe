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
    <link rel="stylesheet" href="{{ asset('assets/css/transaction.css') }}"> 
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    
    <style>
        .big-card {
            padding: 10px;  /* Increase padding for larger appearance */
            margin: auto; /* Space below card */
            border-radius: 10px;
        }

        .big-header {
            font-size: 2rem; /* Make header text larger */
            padding: 20px;
        }

        .big-btn {
            font-size: 1.5rem; /* Larger button text */
            padding: 10px 20px;
        }

        .big-table th, .big-table td {
            font-size: 1.2rem; /* Larger table text */
            padding: 15px;
        }

        .big-table img {
            width: 100px; /* Make images larger */
            height: 100px;
        }
    </style>
</head>
<body>
    
    <div class="container mt-5">
        <div class="card big-card">
            <div class="card-header bg-primary text-white big-header">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h4>Inventory List</h4>
                    </div>
                    <div class="col-md-4 text-end">
                        <button type="button" class="btn btn-success big-btn" id="plus-button" style="border-radius: 7px; border: none;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            <i class="bi bi-plus"></i> Add Inventory
                        </button>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="table-responsive">
                    <table id="tblDepartment" class="table table-bordered big-table">
                        <thead>
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
                                    <td>
                                        <img src="{{ asset($item->image) }}" alt="Image" />
                                    </td>
                                    <td>{{ $item->stocks }}</td>
                                    <td>{{ $item->stocks_left }}</td>
                                    <td>{{ $item->expiration_date }}</td>
                                    <td>{{ $item->date_added }}</td>
                                    <td> 
                                        <button class="btn btn-success btn-sm big-btn" onclick="toggleStatus(this)">Available</button> 
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm big-btn" id="btnEdit" data-id="{{ $item->id }}">
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

    <!-- Modal Edit -->
    <div class="modal fade" id="modalEdit" tabindex="-1" aria-labelledby="modalEditLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalEditLabel">Edit Inventory</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="e_item_id">
                    <label for="e_categoryName">Enter category name:</label>
                    <input type="text" id="e_categoryName" class="form-control">
                    <label for="e_productName">Enter product name:</label>
                    <input type="text" id="e_productName" class="form-control">
                    <label for="e_description">Enter description:</label>
                    <textarea id="e_description" class="form-control"></textarea>
                    <label for="e_stocks">Enter stocks:</label>
                    <input type="number" id="e_stocks" class="form-control">
                    <label for="e_expirationDate">Enter expiration date:</label>
                    <input type="date" id="e_expirationDate" class="form-control">
                    <label for="e_dateAdded">Enter date added:</label>
                    <input type="date" id="e_dateAdded" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="btnUpdate">Update</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Add Inventory -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Add Inventory</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   <form id="inventoryForm" action="{{ route('store_inventory') }}" method="POST" enctype="multipart/form-data">

                        @csrf
                        <div class="mb-3">
                            <label for="category_name" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" placeholder="Enter category name">
                        </div>
                        <div class="mb-3">
                            <label for="ingredients" class="form-label">Ingredients</label>
                            <input type="text" class="form-control" id="ingredients" name="ingredients" placeholder="Enter Ingredients name">
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Upload Image</label>
                            <input type="file" class="form-control" id="image" name="image" accept="image/*">
                        </div>      
                        <div class="mb-3">
                            <label for="stocks" class="form-label">Stocks</label>
                            <input type="number" class="form-control" id="stocks" name="stocks" placeholder="Enter how many stocks">
                        </div>
                        <div class="mb-3">
                            <label for="expiration_date" class="form-label">Expiration Date</label>
                            <input type="date" class="form-control" id="expiration_date" name="expiration_date" placeholder="Enter expiration date">
                        </div>
                        <div class="mb-3">
                            <label for="date_added" class="form-label">Date Added</label>
                            <input type="date" class="form-control" id="date_added" name="date_added" placeholder="Enter date added">
                        </div>
                         <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-success" id="saveInventory">Save</button>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

    <footer class="mt-5">
        <div class="container">
            <div class="row">
                <div class="col text-center py-3">
                    <p class="text-muted">&copy; 2023 Koze Cafe. All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
       $(document).ready(function() {
            $('#tblDepartment').DataTable();

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

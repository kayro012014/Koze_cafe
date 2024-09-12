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
            <div class="col-md-8">
                <div class="card p-6">
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
                    <div class="wrapper">
                        <div class="main p-3">
                            <div class="table-responsive">
                                <table id="tblDepartment" class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Ingredients</th>
                                            <th>Stocks</th>
                                            <th>Stocks Left</th>
                                            <th>Expiration Date</th>
                                            <th>Date Added</th>
                                            <th>Status</th>
                                            <th>Buttons</th>
                                        </tr>
                                    </thead>
                                    <tbody id="inventoryTableBody">
                                        <tr>
                                            <td>1</td>
                                            <td>Coffee</td>
                                            <td>Coffee Powder</td>
                                            <td>10</td>
                                            <td>8</td>
                                            <td>09/10/25</td>
                                            <td>09/13/24</td>
                                            <td> <button class="btn btn-success btn-sm" onclick="toggleStatus(this)">Available</button> </td>
                                            <td>
                                            <button 
                                                class="btn btn-info btn-sm" 
                                                id="btnEdit"
                                                data-id="1"
                                                data-category_name="Coffee"
                                                data-product_name="Coffee Powder"
                                                data-description="Ground coffee"
                                                data-stocks="10"
                                                data-expiration_date="2025-09-10"
                                                data-date_added="2024-09-13">
                                                EDIT
                                            </button>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Pasta</td>
                                            <td>Rice Noodle Stick</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>---</td>
                                            <td>---</td>
                                            <td>  <button class="btn btn-secondary btn-sm" onclick="toggleStatus(this)">Out of Stocks</button></td>
                                            <td>
                                            <button 
                                                class="btn btn-info btn-sm" 
                                                id="btnEdit"
                                                data-id="1"
                                                data-category_name="Coffee"
                                                data-product_name="Coffee Powder"
                                                data-description="Ground coffee"
                                                data-stocks="10"
                                                data-expiration_date="2025-09-10"
                                                data-date_added="2024-09-13">
                                                EDIT
                                            </button>
                                        </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Spices</td>
                                            <td>Pepper</td>
                                            <td>10</td>
                                            <td>5</td>
                                            <td>09/10/25</td>
                                            <td>09/13/24</td>
                                            <td> <button class="btn btn-warning btn-sm" onclick="toggleStatus(this)">Warning</button></td>
                                            <td>
                                            <button 
                                                class="btn btn-info btn-sm" 
                                                id="btnEdit"
                                                data-id="1"
                                                data-category_name="Coffee"
                                                data-product_name="Coffee Powder"
                                                data-description="Ground coffee"
                                                data-stocks="10"
                                                data-expiration_date="2025-09-10"
                                                data-date_added="2024-09-13">
                                                EDIT
                                            </button>
                                        </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                    <form id="inventoryForm">
                        <div class="mb-3">
                            <label for="categoryName" class="form-label">Category Name</label>
                            <input type="text" class="form-control" id="categoryName" placeholder="Enter category name">
                        </div>
                        <div class="mb-3">
                            <label for="productName" class="form-label">Product Name</label>
                            <input type="text" class="form-control" id="productName" placeholder="Enter Product name">
                        </div>
                        <div class="mb-3">
                            <label for="itemDescription" class="form-label">Description</label>
                            <textarea class="form-control" id="itemDescription" rows="3" placeholder="Enter a description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="stocks" class="form-label">Stocks</label>
                            <input type="number" class="form-control" id="stocks" placeholder="Enter how many stocks">
                        </div>
                        <div class="row mb-3">
                            <!-- Price Section -->
                            <div class="col-md-6">
                                <label for="itemPrice" class="form-label">Price</label>
                                <input type="text" class="form-control" id="itemPrice" placeholder="Enter price">
                            </div>
                            <!-- Date Section -->
                            <div class="col-md-6">
                                <label for="itemDate" class="form-label">Date Added</label>
                                <input type="date" class="form-control" id="itemDate">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="warranty" class="form-label">Warranty</label>
                            <div class="col-md-6">
                                <input type="number" class="form-control me-2" id="warrantyPeriod" placeholder="Enter warranty period">
                            </div>
                            <div class="col-md-6">
                                <select class="form-select" id="warrantyUnit">
                                    <option value="days">Days</option>
                                    <option value="months">Months</option>
                                    <option value="years">Years</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="suppName" class="form-label">Supplier Name</label>
                            <div class="col-md-8">
                                <select class="form-select" id="suppName">
                                    <option value="john">John</option>
                                    <option value="jin">Jin</option>
                                    <option value="jam">Jam</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success" id="saveInventory">Save</button>
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

    <!-- Scripting -->
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script src="{{ asset('assets/js/status.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

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

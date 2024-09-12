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
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="main p-3">
            <div class="text">
                <h1>Orders</h1>
            </div>
            <div class="container mt-4">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card p-3">
                            <div class="row mb-3 align-items-center">
                                <div class="col-md-6">
                                    <!-- Optional space for additional content -->
                                </div>
                                <div class="col-md-6">
                                    <h6>Filters</h6>
                                    <select class="form-select" id="categoryfilter">
                                        <option value="">Category</option>
                                        <option value="Coffee">Coffee</option>
                                        <option value="Pasta">Pasta</option>
                                        <option value="Rice Meal">Rice Meal</option>
                                        <option value="Combo Meals w/ Rice Drink">Combo Meals w/ Rice Drink</option>
                                        <option value="Pika-Pika">Pika-Pika</option>
                                        <option value="Snacks">Snacks</option>
                                    </select>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="tblDepartment" class="table table-bordered" style="background-color: #e6e6fa;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <th>Product Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                        </tr>
                                    </thead>
                                    <tbody id="inventoryTableBody">
                                        <tr>
                                            <td>1</td>
                                            <td>Pasta</td>
                                            <td>Marinar</td>
                                            <td>Php 190.00</td>
                                            <td>
                                                <div style="display: inline-flex; align-items: center; justify-content: center;">
                                                    <button class="btn btn-secondary me-1" onclick="changeQuantity(this, -1)">-</button>
                                                    <input type="number" class="form-control text-center" value="0" min="0" style="width: 50px; text-align: center; margin: 0;" readonly>
                                                    <button class="btn btn-secondary ms-1" onclick="changeQuantity(this, 1)">+</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Snacks</td>
                                            <td>Nachos</td>
                                            <td>Php 135.00</td>
                                            <td>
                                                <div style="display: inline-flex; align-items: center; justify-content: center;">
                                                    <button class="btn btn-secondary me-1" onclick="changeQuantity(this, -1)">-</button>
                                                    <input type="number" class="form-control text-center" value="0" min="0" style="width: 50px; text-align: center; margin: 0;" readonly>
                                                    <button class="btn btn-secondary ms-1" onclick="changeQuantity(this, 1)">+</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Coffee</td>
                                            <td>Americano Hot</td>
                                            <td>Php 119.00</td>
                                            <td>
                                                <div style="display: inline-flex; align-items: center; justify-content: center;">
                                                    <button class="btn btn-secondary me-1" onclick="changeQuantity(this, -1)">-</button>
                                                    <input type="number" class="form-control text-center" value="0" min="0" style="width: 50px; text-align: center; margin: 0;" readonly>
                                                    <button class="btn btn-secondary ms-1" onclick="changeQuantity(this, 1)">+</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <div class="row mb-4 align-items-center">
                                <h4 style="font-weight:bold">Checkout</h4>
                                    {{-- <div class="col-md-8">
                                        <h6>Customer name</h6>
                                    </div>
                                    <div class="col-md-4 text-end">
                                        <button type="button" class="btn btn-custom" id="edit-customer" style="border-radius: 7px; height: 2.3rem; border: none;" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <i class="bi bi-pencil"></i>
                                        </button>
                                    </div>
                                    <div class="order-det">
                                        <h5 class="order-item">Order * 1</h5>
                                        <h6>Php 23.00</h6>
                                    </div>
                                    <div class="order-det">
                                        <h5 class="order-item">Order * 1</h5>
                                        <h6>Php 23.00</h6>
                                    </div>
                                    <div class="order-det">
                                        <h5 class="order-item">Order * 1</h5>
                                        <h6>Php 23.00</h6>
                                    </div>
                                </div> --}}
                            <div class="card p-2">
                                <div class="row mb-4 align-items-center">
                                    <div class="order-det">
                                        <h5 class="order-item">Discount</h5>
                                        <h6>SN/PWD:</h6>
                                    </div>
                            <div class="card p-2">
                                <div class="row mb-4 align-items-center">
                                    <div class="order-det">
                                        <h5 class="order-item">Subtotal</h5>
                                        <h6>Php 69.00</h6>
                                    </div>
                                    <div class="order-det">
                                        <h5 class="order-item">TOTAL</h5>
                                        <h6>Php 69.00</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-4 align-items-center">
                                <div class="col-md-8">
                                    <button type="button" class="btn btn-success" id="checkout-button" style="border-radius: 7px; height: 2.3rem; border: none;" data-bs-toggle="modal" data-bs-target="#checkOutBackdrop">
                                        <i class="bi bi-cart"></i> Checkout
                                    </button>
                                </div>
                                <div class="col-md-4 text-end">
                                    <button type="button" class="btn btn-danger" onclick="resetQuantities()">Reset</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- <!-- MODAL FOR CUSTOMER -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Customer Information</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="inventoryForm">
                        <div class="mb-3">
                            <label for="custName" class="form-label">Customer Name</label>
                            <input type="text" class="form-control" id="custName" placeholder="Enter Customer name">
                        </div>
                        <div class="mb-3">
                            <label for="custPhone" class="form-label">Customer Phone</label>
                            <input type="text" class="form-control" id="custPhone" placeholder="Enter Customer Phone">
                        </div>
                        <div class="mb-3">
                            <label for="custAddress" class="form-label">Customer Address</label>
                            <input type="text" class="form-control" id="custAddress" placeholder="Enter Customer Address">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="saveCustomerInfo">Save</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- MODAL FOR CHECK OUT -->
    <div class="modal fade" id="checkOutBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="checkOutBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="checkOutBackdropLabel">Cash Sales Invoice</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ URL('assets/pictures/Logo.svg') }}" alt="Company Logo" class="img-fluid mb-3" style="max-width: 100px; border-radius: 50%;">
                        <h3 class="title_bod">Koze Cafe</h3>
                        <p>J BUILDING JMC COMPOUND,KM 4, MC ARTHUR HIGHWAY, BRGY MATINA CROSSING </p>
                    </div>
                    <p>---------------------------------------------------------------------------------------------------------------------------</p>
                    <div class="modal-body text-center">
                        <h3 class="title_bod">Recipt Information</h3>
                        <p>INV#:</p>
                  
                    </div>
                    <div class="modal-body">
                      
                            
                            <p><strong>Date:</strong> <span id="receiptDate">09/12/2024</span></p>
                            <hr>
                            <h3 class="title_bod">Order Details</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody id="receiptTableBody">
                                    <tr>
                                        <td>Americano Hot</td>
                                        <td>1</td>
                                        <td>Php 119.00</td>
                                        <td>0</td>
                                        <td>Php 119.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <hr>
                            <p><strong>Payment Method:</strong> <span id="payMeth"> Cash</span></p>
                            <p><strong>Total Amount:</strong> <span id="receiptTotal"> Php 119.00</span></p>
                            
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" id="printReceipt">Print Receipt</button>
                    </div>
                </div>
            </div>
        </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/style.js') }}"></script>
    <script src="{{ asset('assets/js/status.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>
    <script>
        $(document).ready(function () {
            // Initialize DataTable
            $('#tblDepartment').DataTable();

            // Save Customer Info
            $('#saveCustomerInfo').click(function () {
                var customerName = $('#custName').val();
                var customerPhone = $('#custPhone').val();
                var customerAddress = $('#custAddress').val();
                Swal.fire({
                    title: 'Customer Info Saved!',
                    text: 'Name: ' + customerName + '\nPhone: ' + customerPhone + '\nAddress: ' + customerAddress,
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
                $('#staticBackdrop').modal('hide');
            });

            // Confirm Checkout
            $('#confirmCheckout').click(function () {
                Swal.fire({
                    title: 'Checkout Confirmed!',
                    text: 'Thank you for your purchase!',
                    icon: 'success',
                    confirmButtonText: 'Ok'
                });
                $('#checkOutBackdrop').modal('hide');
            });
        });

        function changeQuantity(button, change) {
            var input = $(button).siblings('input');
            var currentValue = parseInt(input.val());
            var newValue = currentValue + change;
            if (newValue >= 0) {
                input.val(newValue);
            }
        }

        function resetQuantities() {
            $('input[type="number"]').val(0);
        }
    </script>
</body>

</html>
@endsection

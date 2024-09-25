@extends('dashboard') <!-- Correct reference to the layout -->

@section('content') 


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
  <div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Employee Management</h3>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <button class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#createEmployeeModal">Add Employee</button>

            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Position</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr>
                            <td>{{ $employee->employee_id }}</td>
                            <td>{{ $employee->employee_name }}</td>
                            <td>{{ $employee->employee_email }}</td>
                            <td>{{ $employee->employee_position }}</td>
                            <td>
                            <div class="btn-group" role="group">
                                <!-- Edit Button -->
                                <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editEmployeeModal" 
                                    data-id="{{ $employee->employee_id }}" 
                                    data-name="{{ $employee->employee_name }}" 
                                    data-email="{{ $employee->employee_email }}" 
                                    data-position="{{ $employee->employee_position }}">
                                    <i class="fas fa-edit"></i> <!-- Edit Icon -->
                                </button>

                                <!-- Delete Button -->
                                <form action="{{ route('employees.destroy', $employee) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <i class="fas fa-trash"></i> <!-- Delete Icon -->
                                    </button>
                                </form>
                            </div>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Create Employee Modal -->
<div class="modal fade" id="createEmployeeModal" tabindex="-1" aria-labelledby="createEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createEmployeeModalLabel">Add Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="createEmployeeForm" action="{{ route('employees_store') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="employee_name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="employee_name" name="employee_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="employee_email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="employee_email" name="employee_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="employee_position" class="col-form-label">Position:</label>
                        <input type="text" class="form-control" id="employee_position" name="employee_position" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Add Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Employee Modal -->
<div class="modal fade" id="editEmployeeModal" tabindex="-1" aria-labelledby="editEmployeeModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editEmployeeModalLabel">Edit Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="editEmployeeForm" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <input type="hidden" id="editEmployeeId" name="employee_id">
                    <div class="mb-3">
                        <label for="name" class="col-form-label">Name:</label>
                        <input type="text" class="form-control" id="editName" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="col-form-label">Email:</label>
                        <input type="email" class="form-control" id="editEmail" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="col-form-label">Position:</label>
                        <input type="text" class="form-control" id="editPosition" name="position" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success">Update Employee</button>
                </div>
            </form>
        </div>
    </div>
</div>


<script>
    // Populate the edit modal with employee data
    const editEmployeeModal = document.getElementById('editEmployeeModal');
    editEmployeeModal.addEventListener('show.bs.modal', function (event) {
        const button = event.relatedTarget; // Button that triggered the modal
        const id = button.getAttribute('data-id');
        const name = button.getAttribute('data-name');
        const email = button.getAttribute('data-email');
        const position = button.getAttribute('data-position');

        // Update the modal's content
        const modalBody = editEmployeeModal.querySelector('.modal-body');
        document.getElementById('editEmployeeId').value = id;
        document.getElementById('editName').value = name;
        document.getElementById('editEmail').value = email;
        document.getElementById('editPosition').value = position;

        // Update the form action
        document.getElementById('editEmployeeForm').action = `/employees/${id}`;
    });
</script>

</body>
</html>




@endsection
{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
</head>

<body>
    <div class="container">
        <h2>Patients List</h2>
        <table id="patientsTable" class="display">
            <thead>
                <tr>
                    <th>Patient Name</th>
                    <th>Patient Email</th>
                    <th>Patient Gender</th>
                    <th>Patient Address</th>
                    <th>Visit Purpose</th>
                    <th>Medicines</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->patient_name }}</td>
                    <td>{{ $patient->patient_email }}</td>
                    <td>{{ $patient->patient_gender }}</td>
                    <td>{{ $patient->patient_address }}</td>
                    <td>{{ $patient->visit_purpose }}</td>
                    <td>{{ $patient->medicines }}</td>
                    <td>
                        <a href="{{ route('doctor.viewpatient', $patient->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('doctor.editpatient', $patient->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('doctor.deletepatient', $patient->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#patientsTable').DataTable();
        });
    </script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Patients List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
    <style>
        body {
            background-color: #f4f4f4;
            color: #333;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 20px;
        }

        .table-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table.dataTable {
            border-collapse: separate;
            border-spacing: 0;
        }

        table.dataTable thead th {
            background-color: #f8f9fa;
            color: #495057;
            border-bottom: 2px solid #dee2e6;
            font-weight: bold;
            text-align: center;
        }

        table.dataTable tbody tr {
            border-bottom: 1px solid #dee2e6;
        }

        table.dataTable tbody td {
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            padding: 8px 12px;
            font-size: 0.875em;
            border-radius: 4px;
        }

        .btn-info {
            background-color: #17a2b8;
            color: #fff;
            border: none;
        }

        .btn-info:hover {
            background-color: #138496;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #212529;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button {
            padding: 6px 12px;
            margin: 0 2px;
            border-radius: 4px;
            border: 1px solid #dee2e6;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button.current {
            background-color: #17a2b8;
            color: #fff;
        }

        .dataTables_wrapper .dataTables_paginate .paginate_button:hover {
            background-color: #e9ecef;
        }


    </style>
</head>

<body>
    <div class="container">
        <div class="table-container">
            <h2 class="text-center">Patients List</h2>
            <table id="patientsTable" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Patient Name</th>
                        <th>Patient Email</th>
                        <th>Patient Gender</th>
                        <th>Patient Address</th>
                        <th>Visit Purpose</th>
                        <th>Medicines</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($patients as $patient)
                        <tr>
                            <td>{{ $patient->patient_name }}</td>
                            <td>{{ $patient->patient_email }}</td>
                            <td>{{ $patient->patient_gender }}</td>
                            <td>{{ $patient->patient_address }}</td>
                            <td>{{ $patient->visit_purpose }}</td>
                            <td>{{ $patient->medicines }}</td>
                            <td>
                                <a href="{{ route('doctor.viewpatient', $patient->id) }}" class="btn btn-info">View</a>
                                <a href="{{ route('doctor.editpatient', $patient->id) }}"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('doctor.deletepatient', $patient->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#patientsTable').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
</body>

</html>

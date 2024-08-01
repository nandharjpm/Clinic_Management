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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="{{asset('css/viewpatientlist.css')}}">
</head>

<body>
    <div class="container">
        <h2>Patients List</h2>
        <a href="{{ route('patients.export') }}" class="btn btn-success">Export to Excel</a>
        <div class="table table-striped table-bordered datatable" style="padding: 10px">
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
                        <td style="display: flex">
                            <a href="{{ route('doctor.viewpatient', $patient->id) }}" class="btn btn-info">View</a>
                            <a href="{{ route('doctor.editpatient', $patient->id) }}" class="btn btn-warning">Edit</a>
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
        $(document).ready(function () {
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            margin-top: 20px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333;
        }

        .table {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .table th,
        .table td {
            text-align: center;
            vertical-align: middle;
        }

        .btn {
            margin: 0 2px;
        }

        .btn-info {
            background-color: #5bc0de;
            border-color: #46b8da;
        }

        .btn-warning {
            background-color: #f0ad4e;
            border-color: #eea236;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d43f3a;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Patients List</h2>
        <a href="{{ route('patients.export') }}" class="btn btn-success">Export to Excel</a>
        <a href="{{ route('patients.genderchart') }}" class="btn btn-primary">Visualize Gender Categories</a>
        <div class="table table-striped table-bordered datatable" style="padding: 10px">
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
                        <td style="display: flex">
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
    </div>

    <script>
        $(document).ready(function () {
            $('#patientsTable').DataTable();
        });
    </script>
</body>

</html>

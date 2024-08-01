<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Details</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h2>Patient Details</h2>
    <table>
        <tbody>
            <tr>
                <th>Name</th>
                <td>{{ $patient->patient_name }}</td>
            </tr>
            <tr>
                <th>Age</th>
                <td>{{ $patient->patient_age }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td>{{ $patient->patient_email }}</td>
            </tr>
            <tr>
                <th>Height</th>
                <td>{{ $patient->patient_height }}</td>
            </tr>
            <tr>
                <th>Blood Pressure</th>
                <td>{{ $patient->patient_bp }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $patient->patient_dob }}</td>
            </tr>
            <tr>
                <th>Gender</th>
                <td>{{ $patient->patient_gender }}</td>
            </tr>
            <tr>
                <th>Address</th>
                <td>{{ $patient->patient_address }}</td>
            </tr>
            <tr>
                <th>Weight</th>
                <td>{{ $patient->patient_weight }}</td>
            </tr>
            <tr>
                <th>Visit Date</th>
                <td>{{ $patient->visit_date }}</td>
            </tr>
            <tr>
                <th>Visit Purpose</th>
                <td>{{ $patient->visit_purpose }}</td>
            </tr>
            <tr>
                <th>Contact Person Name</th>
                <td>{{ $patient->contact_person_name }}</td>
            </tr>
            <tr>
                <th>Contact Person Number</th>
                <td>{{ $patient->contact_person_number }}</td>
            </tr>
            <tr>
                <th>Relationship</th>
                <td>{{ $patient->relationship }}</td>
            </tr>
            <tr>
                <th>Medicines</th>
                <td>{{ $patient->medicines }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

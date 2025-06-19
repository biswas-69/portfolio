@extends('layout')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      margin: 0;
      padding: 0;
    }

    .header {
      text-align: center;
      padding: 20px;
      background-color: #007BFF;
      color: white;
    }

    table {
      width: 90%;
      margin: 30px auto;
      background: #fff;
      border-collapse: collapse;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    th, td {
      padding: 14px 16px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    th {
      background: #f2f2f2;
    }

    tr:hover {
      background-color: #f1f1f1;
    }

    .no-data {
      text-align: center;
      padding: 20px;
      color: #888;
    }
  </style>
</head>
<body>

<div class="header">
  <h2>Contact Details</h2>
</div>

<table>
  <thead>
    <tr>
      <th>S.No.</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
    </tr>
  </thead>
  <tbody>
    @forelse($contacts as $index => $contact)
      <tr>
        <td>{{ $index + 1 }}</td>
        <td>{{ $contact->name }}</td>
        <td>{{ $contact->email }}</td>
        <td>{{ $contact->message }}</td>
      </tr>
    @empty
      <tr>
        <td colspan="4" class="no-data">No contact records found.</td>
      </tr>
    @endforelse
  </tbody>
</table>

</body>
</html>
@section('content')
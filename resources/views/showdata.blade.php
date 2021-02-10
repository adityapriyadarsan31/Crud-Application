<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        	table {
        		font-family: arial, sans-serif;
        		border-collapse: collapse;
        		width: 100%;
        	}

        	td, th {
        		border: 1px solid #dddddd;
        		text-align: left;
        		padding: 8px;
        	}

        	tr:nth-child(even) {
        		background-color: #dddddd;
        	}
        </style>
    </head>
<body>
	<table>
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>City</th>
    <th>Phone</th>
    <th>Job</th>
  </tr>

 @foreach($user as $users)
    <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->city}}</td>
        <td>{{$users->phone}}</td>
        <td>{{$users->job}}</td>
    </tr>
 @endforeach
</table>
</body>
</html>
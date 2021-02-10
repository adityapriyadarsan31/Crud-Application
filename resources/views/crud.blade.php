<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crud Application</title>
        <style>
        	a:link, a:visited {
        		background-color: #f44336;
        		color: white;
        		padding: 14px 25px;
        		text-align: center;
        		text-decoration: none;
        		display: inline-block;
        	}

        	a:hover, a:active {
        		background-color: red;
        	}
        </style>
    </head>
    <body>
    	<h1 style="text-align: center;">Basic Crud Application</h1>

    	<a href="{{route('select')}}" target="_blank">Select</a>
    	<br><br><br>

    	<a href="{{route('insert')}}" target="_blank">Insert</a>
    	<br><br><br>

    	<a href="{{route('update')}}" target="_blank">Update</a>
    	<br><br><br>

    	<a href="{{route('delete')}}" target="_blank">Delete</a>
    </body>
</html>

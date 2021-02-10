<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Delete</title>
        <style>
        	
        </style>
    </head>
    <body>
    	<h1 style="text-align: center;">Delete</h1>

        <form action="{{route('delete')}}" method="post">
          @csrf
          <label for="id">Id:</label><br>
          <input type="text" id="id" name="id" required><br><br>
          <input type="submit" value="Submit">
      </form> 
    </body>
</html>
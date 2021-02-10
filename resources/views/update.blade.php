<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Update</title>
        <style>
        	
        </style>
    </head>
    <body>
    	<h1 style="text-align: center;">Update</h1>

        <form action="{{route('update')}}" method="post">
          @csrf
          <label for="id">Id:</label><br>
          <input type="text" id="id" name="id" required><br>
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name"><br>
          <label for="city">City:</label><br>
          <input type="text" id="city" name="city"><br>
          <label for="phone">Phone:</label><br>
          <input type="text" id="phone" name="phone"><br>
          <label for="job">Job:</label><br>
          <input type="text" id="job" name="job"><br><br>
          <input type="submit" value="Submit">
      </form> 
    </body>
</html>
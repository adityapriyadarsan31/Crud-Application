<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insert</title>
        <style>
        	
        </style>
    </head>
    <body>
    	<h1 style="text-align: center;">Insert</h1>

        <form action="{{route('insert')}}" method="post">
          @csrf
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" required><br>
          <label for="city">City:</label><br>
          <input type="text" id="city" name="city" required><br>
          <label for="phone">Phone:</label><br>
          <input type="text" id="phone" name="phone"><br>
          <label for="job">Job:</label><br>
          <input type="text" id="job" name="job"><br><br>
          <input type="submit" value="Submit">
      </form> 
    </body>
</html>
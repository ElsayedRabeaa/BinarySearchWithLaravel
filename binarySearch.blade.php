<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search By Binary Search Algorithms</title>
</head>
<body>
    <form action="{{url('search_student')}}" method="post">
        @csrf
    <label for="StudentName">Student Name: </label>
    <input type="text"  name="Student_Name" placeholder="Type...">
    <input type="submit" value="Search">
    </form>
</body>
</html>
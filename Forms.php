<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
    <style>
        form, label{
            padding: 10px;
            margin: 10px;
        }
    </style>
</head>
<body>
<h1> Forms</h1>
<h2>Contact Us</h2>
<form action="">
    <label for="name">Full Name</label> <br>
    <input type="text" id="name" name="Jina" placeholder="enter full Name"><br>
    <label for="dateofbirth">Date of Birth</label><br>
    <input type="date"id="dateofbirth"name="Siku ya Kuzaliwa"><br>

    <label for="email">Email Address</label><br>
    <input type="text"id="email" name="Baruapepe" placeholder="idhdhdhd@domain.com"><br>

    <label for="password">Password</label><br>
    <input type="password" id="password"name="PASSWORD"> <br>

    <label for="Phone">Mobile Number</label><br>
    <input type="text" id="Phone" name="Safaricom"><br>

    <label for="course">Course</label><br>
    <select name="Course" id="course"size="2"multiple>
        <option value="Web Dev"> Web Dev</option>
        <option value="FIA Rules Favouring Red bull">FIA Rules </option>
        <option value="Law">Law</option>
        <option value="Cloud Computing">Cloud Computing</option>
        <option value="Python">Python</option>

    </select> <br>
    <input type="Submit" value="Click to submit"><br></body>
</html>
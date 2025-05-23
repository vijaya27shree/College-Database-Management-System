<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exam Front Page</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f4f4f4;
            background-image: url(https://library.annauniv.edu/bimages/anna_front.jpg);
            background-repeat: no-repeat;
            background-size: cover; 
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .card {
            display: flex;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            max-width: 800px;
            width: 100%;
        }

        .left-side {
            flex: 1;
            text-align: center;
        }

        .left-side img {
            width: 100%;
            height: auto;
        }

        .right-side {
            flex: 1;
            padding: 20px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            margin-bottom: 10px;
            color: #555;
        }

        input {
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="left-side">
            <!-- Replace 'college-image.jpg' with the actual path to your college picture -->
            <img src="ceg_campus.jpeg" alt="College Image" height="250" width="250">
        </div>
        <div class="right-side">
            <h1>EXAMINATION</h1>
            <form action="a2.html" method="post">
                <label for="regNumber">Registration Number:</label>
                <input type="text" id="regNumber" name="regNumber" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <br>

                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
</div>

</body>
</html>

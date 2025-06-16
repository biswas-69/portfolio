<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Details</title>
</head>
<body>
    <style>
            body {
            font-family: 'Times New Roman',sans-serif;
            background-color: #dfe8f0;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 12px;
            margin-top: 5px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
            font-family: Sans Unicode;
        }

        textarea {
            resize: vertical;
            height: 120px;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #4b96e6;
            color: white;
            border: none;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #0056b3;
        }
     </style>
     
    <div class="container">
        <h1>Contact Me</h1>
        <form action="#" method="POST">
            <label for="name">Full Name</label>
            <input type="text" placeholder="Enter Your Name" id="name" name="name" required>

            <label for="email">Gmail</label>
            <input type="email" placeholder="Enter Gmail" id="email" name="email" required>

            <label for="message">Message</label>
            <textarea placeholder="Enter Message" id="message" name="message" required></textarea>

            <button type="submit">Submit</button>
        </form>
    </div>
    
</body>
</html>
<html>
    <head>
        <title>Student Profile</title>
        <style>
            body {
              background-image: url('profileback.jpg');
              background-size: cover;
              background-position: center;
              font-family: Arial, sans-serif;
              color: #fff;
            }
        
            #container {
              width: 400px;
              margin: 50px auto;
              padding: 20px;
              background-color: rgba(0, 0, 0, 0.7);
              border-radius: 10px;
              text-align: center;
            }
        
            h1 {
              margin-bottom: 20px;
            }
        
            input[type="text"],
            input[type="email"],
            input[type="password"],
            input[type="date"],
            textarea {
              width: 100%;
              padding: 10px;
              margin-bottom: 20px;
              border: none;
              border-radius: 5px;
              font-size: 16px;
            }
        
            input[type="submit"] {
              width: 100%;
              padding: 10px;
              border: none;
              border-radius: 5px;
              font-size: 16px;
              background-color: #4CAF50;
              color: #fff;
              cursor: pointer;
            }
        
            input[type="submit"]:hover {
              background-color: #45a049;
            }
          </style>
    </head>
    <body>
        <div id="container">
            <h1>Profile Information</h1>
            <form>
              <input type="text" name="name" placeholder="Full Name" required><br>
              <input type="text" name="username" placeholder="Username" required><br>
              <input type="email" name="email" placeholder="Email" required><br>
              <input type="date" name="DOB" placeholder="Date of Birth"><br>
              <input type="password" name="password" placeholder="Password" required><br>
              <input type="submit" value="Save">
            </form>
          </div>
        
    </body>
</html>
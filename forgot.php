<!DOCTYPE html>
<html>
<head>
<title>Update Password</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-color: #f4f7f6;
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
    .card {
        background: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
        width: 100%;
        max-width: 400px;
        text-align: center;
    }
    h2 {
        color: #2c3e50;
        font-size: 18px;
        margin-bottom: 8px;
    }
    p {
        color: #7f8c8d;
        font-size: 13px;
        margin-bottom: 20px;
    }
    input[type="text"], input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    button {
        width: 100%;
        padding: 10px;
        background-color: #27ae60;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }
    .btn-back {
        background-color: #3498db;
        margin-top: 10px;
    }
    .btn-back a {
        color: white;
        text-decoration: none;
        display: block;
    }
</style>
</head>
<body>

<div class="card">
    <form id="upd" action="fu.php" method="POST">
        <h2>UPDATE REGISTRATION FORM</h2>
        <p>ENTER YOUR PERSONAL DETAILS BELOW</p>
        
        <input type="text" name="name" id="name" value="" placeholder="ENTER USER NAME">
        <input type="password" id="password" name="password" value="" placeholder="Enter new PASSWORD">
        
        <button type="submit">submit</button>
    </form>
    
    <button class="btn-back"><a href="vlogin.php">back to login</a></button>
</div>

</body>
</html>
<!DOCTYPE html>
<html>
<?php //include("vlock.php");?>
<head>
<title>Search Recipe</title>
<style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
        background-image: url('sr.gif'); 
        background-repeat: no-repeat; 
        background-size: cover; 
        background-position: center; 
        background-attachment: fixed; 
        padding: 30px 15px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .search-card {
        background: rgba(255, 255, 255, 0.95);
        padding: 25px;
        border-radius: 10px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.15);
        width: 100%;
        max-width: 500px;
        text-align: center;
        margin-bottom: 25px;
    }
    h1 {
        font-size: 20px;
        color: #2c3e50;
        margin-bottom: 15px;
    }
    input[type="text"], select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 12px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        background-color: #27ae60;
        color: white;
        border: none;
        border-radius: 5px;
        font-weight: bold;
        cursor: pointer;
    }
    table {
        width: 100%;
        max-width: 700px;
        border-collapse: collapse;
        background: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 8px 24px rgba(0,0,0,0.1);
    }
    th, td {
        padding: 12px 15px;
        text-align: center;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #34495e;
        color: white;
    }
    tr:hover {
        background-color: #f1f1f1;
    }
    table button {
        padding: 6px 15px;
        background-color: #3498db;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
</style>
</head>

<body>

<div class="search-card">
    <form action="" method="POST">
        <h1>Search Students Resume as Per Marks:</h1>
        
        <label>Name:</label>
        <input type="text" name="searchname"><br>
        
        <label>Type:</label>
        <select name="searchname1" id="" required>
            <option value="" disabled selected>Select Recipe Type</option>
            <option value="veg">veg</option>
            <option value="non-veg">non-veg</option>
        </select><br>

        <input type="submit" name="search" value="Search">
    </form>
</div>

<?php
require_once("config.php");

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $search = $_POST["searchname"];
    $search1 = $_POST["searchname1"];

    $qry = mysql_query("SELECT * FROM recipe WHERE r_name Like '%$search%'
OR	r_type Like '%$search1%'");

    echo "<table>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Type</th>
				<th>View</th>
            </tr>";

    while($row = mysql_fetch_array($qry))
    {
?>
        <tr>
            <td><?php echo $row['r_name']; ?></td>
            <td><?php echo $row['r_type']; ?></td>
            <td><?php echo $row['r_recipe']; ?></td>
            <td>
                <a href="view1.php?r=<?php echo $row['r_recipe']; ?>">
                    <button>Select</button>
                </a>
            </td>
        </tr>
<?php
    }

    echo "</table>";
}
?>

</body>
</html>
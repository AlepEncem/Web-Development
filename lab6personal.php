<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title> Personal Info </title>
</head>
<body>

<!--FORM PERSONAL INFO-->
<br>
<table border="3px" bordercolor = "black">
<tr>
<td >
<table>
<form method="POST">
<tr> <th colspan="2"> Personal Info<br><br> </th> </tr>
<tr>
<td>Name:</td>
</tr>
<tr>
<td><input type = "text" name = "name" size="42"></td>
</tr>
<tr>
<td>Matric No: </td>
</tr>
<tr>
<td><input type = "text" name = "matric" size="42"></td>
</tr>
<tr>
<td>Address:</td>
</tr>
<tr>
<td><textarea name = "address" rows = "5" cols = "40"></textarea></td>
</tr>
<tr>
<td>Gender:</td>
</tr>
<tr>
<td>
    <label for="gender"></label>
  <select id="gender" name="gender">
    <option value="male">Male</option>
    <option value="female">Female</option>
  </select>
</td>
</tr>
<tr>
<td><br>
<input type = "submit" name = "save" value = "Save">
<input type = "submit" name = "reset" value = "Reset">
<input type = "submit" name = "search" value = "Search">
<input type = "submit" name = "update" value = "Update">
<input type = "submit" name = "delete" value = "Delete">
</td>
</tr>
</form>
</table>
</td>
</table>

<?php  
include "L6conn.php"; // Using database connection file here
    
/*<!--SAVE DATA--> */
if(isset($_POST['save']))
{		
    $name = $_POST['name'];
    $matric = $_POST['matric'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    $insert = "INSERT INTO personal (`name`, `matric`,`address`,`gender`) VALUES ('$name','$matric','$address','$gender')";


    if (mysqli_multi_query($conn, $insert)) {
        echo "New records created successfully";
    } else {
        echo "Error: " . $insert . "<br>" . mysqli_error($conn);
    }
$conn->close(); // Close connection
} 
    
/*RESET DATA*/
if(isset($_POST['reset']))
{		
    $name = $_POST['name'];
    $matric = $_POST['matric'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    $reset = "UPDATE personal SET address='$address',gender='$gender' WHERE name='$name'AND matric='$matric'";


    if (mysqli_multi_query($conn, $reset)) {
        echo "New records successfully reseted";
    } else {
        echo "Error: " . $reset . "<br>" . mysqli_error($conn);
    }
$conn->close(); // Close connection
} 
    
/*SEARCH DATA*/
if(isset($_POST['search']))
{		
    $name = $_POST['name'];
    $matric = $_POST['matric'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
   if($name && $matric){
        $search = "SELECT * FROM personal WHERE name='$name'AND matric='$matric'";
        $result=$conn->query($search);

            echo "<table>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>MATRIC NO</th>
                <th>ADDRESS</th>
                <th>GENDER</th>
            </tr>";
        if ($result = $conn->query($search)){
            while ($row = $result->fetch_assoc()) {
                
            echo "<tr>";
                echo    "<td>" . $row['id'] . "</td>";
                echo    "<td>" . $row['name'] . "</td>";
                echo    "<td>" . $row['matric'] . "</td>";
                echo    "<td>" . $row['address'] . "</td>";
                echo    "<td>" . $row['gender'] . "</td>";
            echo "</tr>";
            }
            echo "</table>";
        }
        else{
            echo "0 search result";
        }  
       $conn->close(); // Close connection
   }
} 
    
/*UPDATE DATA*/
if(isset($_POST['update']))
{		
    $name = $_POST['name'];
    $matric = $_POST['matric'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    $update = "UPDATE personal SET  address='$address',gender='$gender' WHERE name='$name' AND matric='$matric'";


    if (mysqli_multi_query($conn, $update)) {
        echo "New records successfully updated";
    } else {
        echo "Error: " . $update . "<br>" . mysqli_error($conn);
    }
$conn->close(); // Close connection
} 
    
/*DELETE DATA*/
if(isset($_POST['delete']))
{		
    $name = $_POST['name'];
    $matric = $_POST['matric'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    
    $delete = "DELETE FROM personal WHERE name='$name'AND matric='$matric'";


    if (mysqli_multi_query($conn, $delete)) {
        echo "New records successfully deleted";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }
$conn->close(); // Close connection
} 

?>
</body>
</html>
<!DOCTYPE html>
<html>
    
    <head>
  
    <title>Devices</title>
       
       
       <style> 
        @import url("styles.css");
       
        </style>
    
    </head>
        
   
   <body>
       <h1> Hello Welcome to the Device Inventory.</h1>
       <h2>  Here is a list of our devices. What would you like to search?</h2>
       <form method="post">
        
        <div id="layoutDiv">
            
         </div>   
            <br/>
            Select: </br>
            <select name="category" style="color:black; font-size:1.0em">
                <option value=""> -Select One </option>
                <option value="a" > List of Devices </option>
                <option value="b" > Type of Devices </option>
                <option value="c" > Price of Devices </option>
                <option value="d" > Available Devices </option>
                
            </select> </br> </br>
            Sort by: </br>
            <select name="sort" style="color:black; font-size:1.0em">
                <option value=""> -Select One </option>
                <option value="a" > Price </option>
                <option value="b" > Name</option>
                
            </select> </br> </br>
            
            
          <input type="submit" name="submit" value="Submit">  
          
          </div>   
          </form>  
       

<?php
//connect to our mysql database
$servername = "us-cdbr-iron-east-05.cleardb.net";
$username = "b910465920c218";
$password = "9bd5a61c";
$dbname = "heroku_b09823b21f68f71";
$conn = new mysqli($servername, $username, $password, $dbname);

$option= $_POST["category"];
$sort = "";
$sort = $_POST["sort"];



if ($option == ""){
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
//Make querier

$sql= "SELECT deviceName FROM `device` order by deviceName ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. "</br> </h3>";
        
    }
} else {
    echo "0 results";
}
$conn->close();
}
if ($option == "a"){
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($sort == "a"){
    $sql= "SELECT deviceName, price FROM `device` order by price ASC ";
    $result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. " Price: $". $row["price"]. "</br> </h3>";
        
    }
} else {
    echo "0 results";
}
}

if ($sort == "b"){
    $sql= "SELECT deviceName FROM `device` order by deviceName ASC ";
    $result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. "</br> </h3>";
        
    }
} else {
    echo "0 results";
}
}

if ($sort == ""){
$sql= "SELECT deviceName FROM `device`";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. "</br> </h3>";
        
    }
} else {
    echo "0 results";
}
}


$conn->close();
}



if ($option == "b"){
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}


if ($sort=="a"){
$sql= "SELECT deviceName, deviceType, price FROM `device` order by price ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. " Type: " .$row["deviceType"]. " Price: $". $row["price"].  "</br> </h3>";
        
    }
} else {
    echo "0 results";
}  
}

if ($sort=="b"){
$sql= "SELECT deviceName, deviceType FROM `device` order by deviceName ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. " Type: " .$row["deviceType"].  "</br> </h3>";
        
    }
} else {
    echo "0 results";
}   
    
}

if ($sort== ""){
    $sql= "SELECT deviceName, deviceType FROM `device`";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>". "Device: " .$row["deviceName"]. " Type: " .$row["deviceType"].  "</br> </h3>";
        
    }
} else {
    echo "0 results";
}   
    
}

$conn->close();
}


if ($option == "c"){
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

if ($sort == "a"){
$sql= "SELECT deviceName, price FROM `device` order by price ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>"."Device: " .$row["deviceName"]. "   Price: $" .$row["price"].  "</br></h3>";
        
    }
} else {
    echo "0 results";
}   
}

if ($sort == "b"){
$sql= "SELECT deviceName, price FROM `device` order by deviceName ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>"."Device: " .$row["deviceName"]. "   Price: $" .$row["price"].  "</br></h3>";
        
    }
} else {
    echo "0 results";
}
    
}

if ($sort == ""){
$sql= "SELECT deviceName, price FROM `device` ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3>"."Device: " .$row["deviceName"]. "   Price: $" .$row["price"].  "</br></h3>";
        
    }
} else {
    echo "0 results";
}   
}

$conn->close();
}
if ($option == "d"){

if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

    
if ($sort == "a"){
 $sql= "SELECT deviceName, price FROM `device` where status = 'available' order by price ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3><div class='yy'>"."Device: "."</div>" .$row["deviceName"]. "<div class='yy'>". "Price:"."</div>". "$". $row["price"]. "</h3>";
        
    }
} else {
    echo "0 results";
}  
}

if ($sort == "b"){
$sql= "SELECT deviceName FROM `device` where status = 'available' order by deviceName ASC ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3><div class='yy'>"."Device: "."</div>" .$row["deviceName"]. "</h3>";
        
    }
} else {
    echo "0 results";
}      
}

if ($sort == ""){
$sql= "SELECT deviceName FROM `device` where status = 'available' ";
$result = $conn->query($sql);
if ($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<h3><div class='yy'>"."Device: "."</div>" .$row["deviceName"]. "</h3>";
        
    }
} else {
    echo "0 results";
}     
}

$conn->close();
}
?>
</body>
</html>

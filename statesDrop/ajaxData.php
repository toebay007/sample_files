<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM local_government where states_id = ". $_POST['id'] ." ORDER BY namess ASC"; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select city</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['idss'].'">'.$row['namess'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">city not available</option>'; 
    } 
} 
?>
   
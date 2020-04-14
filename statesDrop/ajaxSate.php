<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<form action="" method="post">
    <?php 
    // Include the database config file 
    include_once 'dbConfig.php'; 
     
    // Fetch all the country data 
    $query = "SELECT * FROM states ORDER BY name ASC"; 
    $result = $db->query($query); 
?>

<!-- Country dropdown -->
<select id="state">
    <option value="">Select Country</option>
    <?php 
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id'].'">'.$row['name'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">state not available</option>'; 
    } 
    ?>
</select>

<!-- State dropdown -->
<select id="city">
    <option value="">Select state first</option>
</select>

<!-- City dropdown -->
<select id="town">
    <option value="">Select city first</option>
</select>
    <input type="submit" name="submit" value="Submit"/>
</form>
<script>
$(document).ready(function(){
    $('#state').on('change', function(){
        var countryID = $(this).val();
        if(countryID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'id='+countryID,
                success:function(html){
                    $('#city').html(html);
                    $('#town').html('<option value="">Select city first</option>'); 
                }
            }); 
        }else{
            $('#city').html('<option value="">Select state first</option>');
            $('#town').html('<option value="">Select city first</option>'); 
        }
    });
    
});
</script>
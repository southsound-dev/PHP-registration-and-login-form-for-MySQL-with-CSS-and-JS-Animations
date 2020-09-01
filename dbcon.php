<?php

// Database Connection
$con = mysqli_connect("localhost","root","1234", "login");

if($con){
    ?>
        <!-- <script>
        alert("Connection Sucessful");
    </script> -->
    <?php 
} else {
    ?>
    <script>
    alert("Connection Unsucessful");
</script>
<?php 
}


?>
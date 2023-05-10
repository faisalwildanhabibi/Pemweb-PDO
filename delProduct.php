<?php 
include('conf.php');

    delProduct($_GET["ProductCode"]);
        echo "
            <script>
            alert('selected customer data has been deleted');
            document.location.href = 'main.php';
            </script>
        ";
?>
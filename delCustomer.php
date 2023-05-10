<?php 
include('conf.php');

    delCustomer($_GET["customerNumber"]);
        echo "
            <script>
            alert('selected customer data has been deleted');
            document.location.href = 'main.php';
            </script>
        ";
?>
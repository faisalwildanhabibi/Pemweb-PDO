<?php 
$dbUser = 'root';
$dbServer = 'localhost';
$dbPassword = '';
$dbName = 'classicmodels';
    
    try{
        $conn = new PDO("mysql:host=$dbServer;dbname=$dbName",$dbUser,$dbPassword);
        $conn->query("SET FOREIGN_KEY_CHECKS=0;");
        function showData($query) {
            global $conn;
            $result = $conn->query($query);
            $rows = [];
            while($row = $result->fetch(PDO::FETCH_ASSOC)){
                $rows[] = $row;
            }
            return $rows;
        }
    }catch(PDOException $err){
        echo "Failed connect to Database Server : ".$err->getMessage();
    }

    try{
        function addCustomer($data){
            global $conn;
            
            $custNumber = $_POST["customerNumber"];
            $custName = $_POST["customerName"];
            $contactLast = $_POST["contactLastName"];
            $contactFirst = $_POST["contactFirstName"];
            $phone = $_POST["phone"];
            $address1 = $_POST["addressLine1"];
            $address2 = $_POST["addressLine2"];
            $city = $_POST["city"];
            $state = $_POST["state"];
            $postalCode = $_POST["postalCode"];
            $country = $_POST["country"];
            $salesNumber = $_POST["salesRepEmployeeNumber"];
            $creditLimit = $_POST["creditLimit"];

            $query =  "INSERT INTO customers(customerNumber, customerName, contactLastName, contactFirstName, phone, addressLine1, addressLine2, city, state, postalCode, country, salesRepEmployeeNumber, creditLimit) VALUES(
            '$custNumber','$custName','$contactLast','$contactFirst','$phone',
            '$address1','$address2','$city','$state','$postalCode','$country','$salesNumber','$creditLimit')
            ";

            $result=$conn->query($query);
        
            return $result;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }

    try{
        function addProduct($data){
            global $conn;

            $code = $_POST["productCode"];
            $name = $_POST["productName"];
            $line = $_POST["productLine"];
            $scale = $_POST["productScale"];
            $vendor = $_POST["productVendor"];
            $desc = $_POST["productDescription"];
            $quantity = $_POST["quantityInStock"];
            $price = $_POST["buyPrice"];
            $msrp = $_POST["MSRP"];

            $query = "INSERT INTO products(productCode, productName, productLine, productScale, productVendor, productDescription, quantityInStock, buyPrice, MSRP) VALUES(
            '$code', '$name','$line', '$scale', '$vendor', '$desc', '$quantity', '$price', '$msrp')";
            
            $result=$conn->query($query);
        
            return $result;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }

    try{
        function updCustomer($data){
            global $conn;
    
            $custNumber = $data["customerNumber"];
            $custName = $data["customerName"];
            $contactFirst = $data["contactFirstName"];
            $contactLast = $data["contactLastName"];
            $phone = $data["phone"];
            $address1 = $data["addressLine1"];
            $address2 = $data["addressLine2"];
            $city = $data["city"];
            $state = $data["state"];
            $postalCode =$data["postalCode"];
            $country =$data["country"];
            $salesNumber = $data["salesRepEmployeeNumber"];
            $creditLimit = $data["creditLimit"];
            $query = "UPDATE customers SET 
                        customerName = '$custName',
                        contactFirstName = '$contactFirst',
                        contactLastName = '$contactLast',
                        phone = '$phone',
                        addressLine1 = '$address1',
                        addressLine2 = '$address2',
                        city = '$city',
                        state = '$state',
                        postalCode = '$postalCode',
                        country = '$country',
                        salesRepEmployeeNumber = '$salesNumber',
                        creditLimit = '$creditLimit'
                        WHERE customerNumber = $custNumber;
                    ";
            $result = $conn->query($query);
            return $result;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }
    
    try{
        function updProduct($data){
            global $conn;
    
            $code = $data["productCode"];
            $name = $data["productName"];
            $line = $data["productLine"];
            $scale = $data["productScale"];
            $vendor = $data["productVendor"];
            $desc = $data["productDescription"];
            $quantity = $data["quantityInStock"];
            $price = $data["buyPrice"];
            $msrp = $data["MSRP"];
    
            $query = "UPDATE products SET
                        productName = '$name',
                        productLine = '$line',
                        productScale = '$scale',
                        productVendor = '$vendor',
                        productDescription = '$desc',
                        quantityInStock = '$quantity',
                        buyPrice = '$price',
                        MSRP = '$msrp'
                        WHERE productCode = '$code';";
            $result = $conn->query($query);
            return $result;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }
    
    try{
        function delCustomer($data){
            global $conn;
            $query = "DELETE FROM customers WHERE customerNumber = $data";
            $result = $conn->query($query);
    
            return $result;
        }$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }
    
    try{
        function delProduct($productCode){
            global $conn;
            $query = "DELETE FROM products WHERE productCode = '$productCode'";
            $result = $conn->query($query);
    
            return $result;
        }
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $err){
        echo "Err: ".$err->getMessage();
    }
?>
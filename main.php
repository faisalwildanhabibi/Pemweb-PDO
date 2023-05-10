<?php
include("conf.php");
$customers = showData("SELECT*FROM customers");
$products = showData("SELECT*FROM products");
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faisal Wildan Habibi - 21081010216 - Insert Data</title>
</head>

<body>
    <hr>
    <center>
    <h1 id="Customers">Customers</h1>
    <h2><a href="addCustomer.php"><button>Tambah Data Customer Baru</button></a></h2>
        <table border="2px">
            <thead align="center" bgcolor="d3d3d3">
                <tr>
                    <th>Customer Number</th>
                    <th>Customer Name</th>
                    <th>Contact Name</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Postal Code</th>
                    <th>Country</th>
                    <th>Sales Employee Number</th>
                    <th>Credit Limit</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($customers as $customerRow) : ?>
            <tr>
            <td><?= $customerRow["customerNumber"]?></td>
            <td><?= $customerRow["customerName"]?></td>
            <td><?= $customerRow["contactFirstName"]," ", $customerRow["contactLastName"]?></td>
            <td><?= $customerRow["phone"]?></td>
            <td><?= $customerRow["addressLine1"], " ", $customerRow["addressLine2"]?></td>
            <td><?= $customerRow["city"]?></td>
            <td><?= $customerRow["state"]?></td>
            <td><?= $customerRow["postalCode"]?></td>
            <td><?= $customerRow["country"]?></td>
            <td><?= $customerRow["salesRepEmployeeNumber"]?></td>
            <td><?= $customerRow["creditLimit"]?></td>
            <td>
                <a href="updCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>"><button>Update</button></a>
                <a href="delCustomer.php?customerNumber=<?= $customerRow["customerNumber"]; ?>" onclick="return confirm('Are you sure (data <?= $customerRow["customerNumber"]; ?>)?')"><button>Delete</button></a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
    <hr>
    <h1>Products</h1>
    <h2><a href="addProduct.php"><button>Tambah Data Product Baru</button></a></h2>
        <table border="2px">
            <thead align="center" bgcolor="d3d3d3">
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Stock</th>
                    <th>Price</th>
                    <th>MSRP</th>
                    <th>Option</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($products as $productRow) : ?>
            <tr>
                <td><?= $productRow["productCode"]  ?></td>
                <td><?= $productRow["productName"]  ?></td>
                <td><?= $productRow["productLine"]  ?></td>
                <td><?= $productRow["productScale"]  ?></td>
                <td><?= $productRow["productVendor"]  ?></td>
                <td><?= $productRow["productDescription"]  ?></td>
                <td><?= $productRow["quantityInStock"]  ?></td>
                <td><?= $productRow["buyPrice"]  ?></td>
                <td><?= $productRow["MSRP"]  ?></td>
                <td>
                    <a href="updProduct.php?productCode=<?= $productRow["productCode"]; ?>"><button>Update</button></a>
                    <a href="delProduct.php?productCode=<?= $productRow["productCode"]; ?>" onclick="return confirm('Are you sure (data <?= $productRow["productCode"]; ?>)?')"><button>Delete</button></a></td>
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    <hr>
    </center>
</body>
</html>
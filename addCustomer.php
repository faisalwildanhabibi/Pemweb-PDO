<?php
include("conf.php");
if(isset($_POST["submit"])){
    addCustomer($_POST);
    echo "
        <script>
        alert('new customer data has been added');
        document.location.href = 'main.php';
        </script>
    ";
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Faisal Wildan Habibi - 21081010216 - Add New Customer</title>
</head>

<body>
    <h1>Add New Customer Data</h1>

    <form action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="customerNumber">Customer Number :</label>
                </td>
                <td>
                    <input type="text" name="customerNumber" id="customerNumber">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="customerName">Customer Name :</label>
                </td>
                <td>
                    <input type="text" name="customerName" id="customerName">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="contactLastName">Contact Last Name :</label>
                </td>
                <td>
                    <input type="text" name="contactLastName" id="contactLastName">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="contactFirstName">Contact First Name :</label>
                </td>
                <td>
                    <input type="text" name="contactFirstName" id="contactFirstName">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="phone">Phone :</label>
                </td>
                <td>
                    <input type="text" name="phone" id="phone">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="addressline1">Address Line 1 :</label>
                </td>
                <td>
                    <input type="text" name="addressLine1" id="addressLine1">
                </td>
            </tr>

            <tr>
                <td>
                    <label for="addressLine2">Address Line 2 :</label>
                </td>
                <td>
                    <input type="text" name="addressLine2" id="addressLine2">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="city">City :</label>
                </td>
                <td>
                    <input type="text" name="city" id="city">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="state">State :</label>
                </td>
                <td>
                    <input type="text" name="state" id="state">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="postalCode">Postal Code :</label>
                </td>
                <td>
                    <input type="text" name="postalCode" id="postalCode">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="country">Country :</label>
                </td>
                <td>
                    <input type="text" name="country" id="country">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="salesRepEmployeeNumber">Sales Number :</label>
                </td>
                <td>
                    <select type="text" name="salesRepEmployeeNumber" id="salesRepEmployeeNumber">
                        <option>--Pilih Salah Satu--</option>
                        <?php
                            $queryEmployeeNumber = "SELECT employeeNumber FROM employees";
                            $result = $conn->query($queryEmployeeNumber);

                            while($data = $result->fetch(PDO::FETCH_BOTH)): ?>
                        <option value="<?= $data["employeeNumber"] ?>">
                            <?= $data["employeeNumber"]  ?></option>
                        <?php endwhile; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="creditLimit">Credit Limit :</label>
                </td>
                <td>
                    <input type="text" name="creditLimit" id="creditLimit">
                </td>
            </tr>
        </table>
        <br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    <br>
    <a href="main.php"><button>Back</button></a>
</body>
</html>
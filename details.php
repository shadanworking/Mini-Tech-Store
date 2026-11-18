<?php include 'db.php'; include 'header.php'; 
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<h2>Product Details</h2>
<table style="width: 50%; margin: auto;">
    <tr>
        <th>Feature</th>
        <th>Value</th>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $row['name']; ?></td>
    </tr>
    <tr>
        <td>Description</td>
        <td><?php echo $row['description']; ?></td>
    </tr>
    <tr>
        <td>Price</td>
        <td>$<?php echo $row['price']; ?></td>
    </tr>
</table>
<br>
<a href="products.php">Back to Products</a>

<?php include 'footer.php'; ?>


<?php 
include 'db.php'; 
include 'header.php'; 

$name = ""; $desc = ""; $price = ""; $id = 0;
$update = false;

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $update = true;
    $record = mysqli_query($conn, "SELECT * FROM products WHERE id=$id");
    $n = mysqli_fetch_array($record);
    $name = $n['name'];
    $desc = $n['description'];
    $price = $n['price'];
}

if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $desc = $_POST['description'];
    $price = $_POST['price'];

    if ($_POST['id'] != 0) {
      
        mysqli_query($conn, "UPDATE products SET name='$name', description='$desc', price='$price' WHERE id=".$_POST['id']);
    } else {
      
        mysqli_query($conn, "INSERT INTO products (name, description, price) VALUES ('$name', '$desc', '$price')");
    }
    header('location: Admin.php');
}
?>

<h2>Product Form</h2>
<form method="post" action="">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <label>Name</label>
    <input type="text" name="name" value="<?php echo $name; ?>" required>
    <label>Description</label>
    <input type="text" name="description" value="<?php echo $desc; ?>" required>
    <label>Price</label>
    <input type="text" name="price" value="<?php echo $price; ?>" required>
    
    <button type="submit" name="save" style="background-color: #4CAF50;">Save</button>
</form>

<?php include 'footer.php'; ?>
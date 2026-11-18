<?php 
include 'db.php'; 
include 'header.php'; 

// محرك البحث البسيط
$search = "";
if(isset($_GET['search'])) {
    $search = mysqli_real_escape_string($conn, $_GET['search']);
    $sql = "SELECT * FROM products WHERE name LIKE '%$search%'";
} else {
    $sql = "SELECT * FROM products";
}
$result = mysqli_query($conn, $sql);
?>

<div class="container">
    <h2>Our Products</h2>

    <form method="GET" action="" style="margin-bottom: 30px;">
        <input type="text" name="search" placeholder="Search for a product..." value="<?php echo htmlspecialchars($search); ?>" style="width: 80%; padding: 10px;">
        <button type="submit" class="btn">Search</button>
    </form>

    <div class="product-list-vertical">
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            
            <div class="product-item" style="background:#fff; padding:20px; border:1px solid #ddd; margin-bottom: 20px; display: flex; align-items: center; border-radius: 8px;">
                
                <div style="flex: 1;">
                    <img src="images/<?php echo $row['id']; ?>.png" alt="<?php echo $row['name']; ?>" style="width: 150px; height: 150px; object-fit: cover; border-radius: 5px;">
                </div>

                <div style="flex: 3; padding-left: 20px;">
                    <h3 style="margin-top: 0; color: #333;"><?php echo $row['name']; ?></h3>
                    <p style="color: #666;"><?php echo $row['description']; ?></p>
                    <p style="color: #4CAF50; font-weight: bold; font-size: 1.2em;">Price: $<?php echo $row['price']; ?></p>
                
                    <a href="details.php?id=<?php echo $row['id']; ?>" style="margin-left: 15px; color: #444; text-decoration: underline;">View Full Details</a>
                </div>
            </div>

        <?php endwhile; ?>
    </div>
</div>

<?php include 'footer.php'; ?>
<?php 
include 'db.php'; 
include 'header.php'; 
?>

<div class="container">
    <h2>Admin Dashboard</h2>
    <p>Manage your store products here (Insert, Update, Delete).</p>
    
    <a href="add.php" class="btn" style="background-color: #4CAF50; margin-bottom: 15px; display: inline-block;">+ Add New Product</a>

    <table id="adminTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM products";
            $result = mysqli_query($conn, $sql);
            
            if (mysqli_num_rows($result) > 0) {
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['id'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['description'] . "</td>";
                    echo "<td>$" . $row['price'] . "</td>";
                    
                 
                    echo "<td>
                            <a href='add.php?id=".$row['id']."' style='color: blue; text-decoration: none;'>Edit</a> - 
                            <a href='delete.php?id=".$row['id']."' 
                               style='color: red; text-decoration: none;' 
                               onclick=\"return confirm('Are you sure');\">
                               Delete
                            </a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5' style='text-align:center;'>No products found.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</div>


<?php include 'footer.php'; ?>
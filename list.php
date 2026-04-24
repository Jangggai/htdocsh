<?php
// ===== 1. Database Config =====
$host = "localhost";
$user = "root";
$pass = "";
$db   = "student_db";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ===== 2. Handle Add Student (POST) =====
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['add'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    $stmt = $conn->prepare("INSERT INTO students (name, email, phone) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $phone);
    $stmt->execute();
    header("Location: index.php"); // Refresh หน้า
    exit();
}

// ===== 3. Handle Delete Student (GET) =====
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];
    $conn->query("DELETE FROM students WHERE id = $id");
    header("Location: index.php"); // Refresh หน้า
    exit();
}

// ===== 4. Fetch Data =====
$sql = "SELECT id, name, email, phone FROM students ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Management</title>
</head>
<body>

    <h2>📋 Student Management</h2>

    <!-- ส่วนฟอร์มเพิ่มข้อมูล (จำลองจากหน้า add.php) -->
    <form method="POST" style="margin-bottom: 20px;">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="phone" placeholder="Phone">
        <button type="submit" name="add">+ Add Student</button>
    </form>
    
    <table border="1" cellpadding="10" style="border-collapse: collapse; width: 100%;">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>

        <?php if ($result && $result->num_rows > 0): ?>
            <?php while($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?= htmlspecialchars($row['id']) ?></td>
                    <td><?= htmlspecialchars($row['name']) ?></td>
                    <td><?= htmlspecialchars($row['email']) ?></td>
                    <td><?= htmlspecialchars($row['phone']) ?></td>
                    <td>
                        <!-- ลิงก์ลบข้อมูลในหน้าเดียวกัน -->
                        <a href="index.php?delete_id=<?= $row['id'] ?>" 
                           onclick="return confirm('Are you sure?')">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="5">No data found</td></tr>
        <?php endif; ?>
    </table>

</body>
</html>

<?php
$conn->close();
?>

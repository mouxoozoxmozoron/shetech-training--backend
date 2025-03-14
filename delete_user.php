<?php 
include('./connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        header("Location: users.php?status=success");
    } else {
        header("Location: users.php?status=error");
    }

    $stmt->close();
    $conn->close();
} else {
    header("Location: users.php?status=missing_id");
}
exit();
?>

<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // đảm bảo là số nguyên

    $stmt = $conn->prepare("DELETE FROM products WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Xóa thành công
    } else {
        echo "Lỗi khi xóa: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
header("Location: index.php");
exit();
?>

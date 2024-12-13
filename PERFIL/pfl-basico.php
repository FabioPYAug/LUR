<?php
session_start();
include 'db_connection.php';

$user_id = $_SESSION['user_id'];
$sql = "SELECT * FROM users WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$user = $stmt->get_result()->fetch_assoc();

$sql_images = "SELECT * FROM user_images WHERE user_id = ?";
$stmt_images = $conn->prepare($sql_images);
$stmt_images->bind_param("i", $user_id);
$stmt_images->execute();
$images = $stmt_images->get_result();
?>

<h1>Perfil de <?php echo htmlspecialchars($user['username']); ?></h1>
<img src="<?php echo $user['profile_image'] ?: 'default.jpg'; ?>" alt="Foto de Perfil" width="150">
<p><?php echo htmlspecialchars($user['description']); ?></p>

<h2>Galeria</h2>
<?php while ($image = $images->fetch_assoc()): ?>
    <img src="<?php echo $image['image_path']; ?>" alt="Imagem do usuário" width="100">
<?php endwhile; ?>

<a href="upload.php">Adicionar Imagem</a>
<a href="logout.php">Logout</a>

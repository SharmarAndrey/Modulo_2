<?php

if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
    $fileTmpPath = $_FILES['archivo']['tmp_name'];
    $fileName = basename($_FILES['archivo']['name']);
    $uploadFileDir = 'uploads/';
    $destPath = $uploadFileDir . $fileName;


 
    if (!is_dir($uploadFileDir)) {
        mkdir($uploadFileDir, 0755, true);
    }

 
    if (move_uploaded_file($fileTmpPath, $destPath)) {
        $imageUrl = $destPath;
    } else {
        die('Error while saving a file.');
    }
} else {
    die('The file is not uploaded.');
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Профиль пользователя</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .user-card {
      background-color: #fff;
      width: 300px;
      padding: 20px;
      border-radius: 12px;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      text-align: center;
    }

    .user-avatar {
      width: 100px;
      height: 100px;
      border-radius: 50%;
      object-fit: cover;
      margin-bottom: 15px;
    }

    .user-name {
      font-size: 24px;
      color: #333;
      margin: 10px 0 5px;
    }

    .user-title {
      font-size: 16px;
      color: #777;
      margin: 0 0 15px;
    }

    .user-info p {
      color: #555;
      font-size: 14px;
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <div class="user-card">
    <img src="<?= htmlspecialchars($imageUrl) ?>" alt="User Photo" class="user-avatar">
    <h2 class="user-name">Juan Lopez</h2>
    <p class="user-title">Frontend-developer</p>
    <div class="user-info">
      <p>📧 Juan@Lopez.com</p>
      <p>📞 +34 (632) 123-45-67</p>
    </div>
  </div>
</body>
</html>

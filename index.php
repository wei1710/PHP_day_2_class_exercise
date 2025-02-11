<?php
  define('MUSEUMS_JSON', './museums.json');

  $jsonData = file_get_contents(MUSEUMS_JSON);
  $content = json_decode($jsonData, true);

  $museums = $content['museums'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
  <title>Museums</title>
</head>
<body>
  <h1>Danske museer</h1>
  <table>
    <thead>
      <tr>
        <th>Navn</th>
        <th>By</th>
        <th>Grundl.</th>
        <th>Telefonnummer</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ((array) $museums as $data): ?>
        <tr>
          <td><?= htmlspecialchars($data['name']) ?></td>
          <td><?= htmlspecialchars($data['city']) ?></td>
          <td><?= htmlspecialchars($data['foundation']) ?></td>
          <td><?= htmlspecialchars($data['phone_number']) ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</body>
</html>
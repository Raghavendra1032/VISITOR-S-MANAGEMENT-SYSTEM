<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Visitor Details</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <h2>Visitor Information</h2>

  <p><strong>Letter No:</strong> <?= htmlspecialchars($_POST["letterNo"] ?? "Not Provided") ?></p>
  <p><strong>Firm:</strong> <?= htmlspecialchars($_POST["firm"] ?? "Not Provided") ?></p>
  <p><strong>Visitor's Name:</strong> <?= htmlspecialchars($_POST["visitorName"] ?? "Not Provided") ?></p>
  <p><strong>Designation:</strong> <?= htmlspecialchars($_POST["designation"] ?? "Not Provided") ?></p>
  <p><strong>Officer to Visit:</strong> <?= htmlspecialchars($_POST["officer"] ?? "Not Provided") ?></p>
  <p><strong>Officer's Designation:</strong> <?= htmlspecialchars($_POST["officerDesig"] ?? "Not Provided") ?></p>
  <p><strong>Section:</strong> <?= htmlspecialchars($_POST["section"] ?? "Not Provided") ?></p>
  <p><strong>Purpose:</strong> <?= htmlspecialchars($_POST["purpose"] ?? "Not Provided") ?></p>
  <p><strong>Permission From - To:</strong> <?= htmlspecialchars($_POST["fromDate"] ?? "") ?> to <?= htmlspecialchars($_POST["toDate"] ?? "") ?></p>
  
  <?php if (!empty($_POST["photo"])): ?>
    <p><strong>Photograph:</strong><br>
      <img src="<?= htmlspecialchars($_POST["photo"]) ?>" width="200" />
    </p>
  <?php endif; ?>

</body>
</html>

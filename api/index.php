<?php if (str_starts_with($_SERVER['REQUEST_URI'], '/another-page') {
  require __DIR__ . '/../another-page/index.php';
} else {
  require __DIR__ . '/../index.php';
} ?>

// <?php include __DIR__ . '/../index.php'; ?>

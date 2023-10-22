<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?php echo BASE_URL . '/assets/css/style.css'; ?>">
</head>

<body>

<header class="dashboard-header">
      <nav>
        <div class="header-nav">
          <a href="<?php echo BASE_URL . '/views/authorized/dashboard.php'; ?>" class="nav-logo">
            GRUMINRecipes
          </a>
          <button class="nav-btn btn">
            <i class="fas fa-align-justify"></i>
          </button>
        </div>
        <div class="nav-links">
          <a href="<?php echo BASE_URL . '/index.php'; ?>"  target="_blank" class="nav-link"> home </a>
          <a href="<?php echo BASE_URL . '/views/authorized/categories/index.php'; ?>" class="nav-link"> categories </a>

          <div class="nav-link login-link">
            <a href="<?php echo BASE_URL . '/index.php'; ?>" class="btn"> logout</a>
          </div>
        </div>
      </nav>
</header>

<main>
    <section class="recipes-container">
        <?php include(ROOT_PATH . '/views/includes/authorized/sidebar.php'); ?>

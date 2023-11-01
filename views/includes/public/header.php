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

    <header>
        <nav>
            <div class="header-nav">
                <a href="<?php echo BASE_URL . '/index.php'; ?>" class="nav-logo">
                    GRUMINrecipes
                </a>
                <button class="nav-btn btn">
                    <i class="fas fa-align-justify"></i>
                </button>
            </div>
            <div class="nav-links">
                <a href="<?php echo BASE_URL . '/index.php'; ?>" class="nav-link"> home </a>
                <a href="<?php echo BASE_URL . '/views/public/about.php'; ?>" class="nav-link"> about </a>
                <a href="<?php echo BASE_URL . '/views/public/categories.php'; ?>" class="nav-link"> categories </a>
                <a href="<?php echo BASE_URL . '/views/public/recipes.php'; ?>" class="nav-link"> recipes </a>
                <a href="<?php echo BASE_URL . '/views/public/contact.php'; ?>" class="nav-link"> contact </a>

                <?php if ((isset($_SESSION['id']))) : ?>
                    <div class="nav-link login-link">
                        <?php echo $_SESSION['username']; ?>
                        <?php if ($_SESSION['admin']) : ?>
                            <a href="<?php echo BASE_URL . '/views/authorized/dashboard.php' ?>"><i class="fa-solid fa-table-list btn"></i></a>
                        <?php endif; ?>
                        <a href="<?php echo BASE_URL . '/logout.php' ?>" class="logout"><i class="fa-solid fa-right-from-bracket btn"></i></a>
                    </div>
                    <?php else : ?>
                    <div class="nav-link login-link">
                        <a href="<?php echo BASE_URL . '/views/public/login.php'; ?>" class="btn"> login </a>
                        <a href="<?php echo BASE_URL . '/views/public/signup.php'; ?>" class="btn"> sign up </a>
                    </div>
                <?php endif; ?>
            </div>
        </nav>
    </header>
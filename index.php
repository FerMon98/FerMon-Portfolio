<?php
    // 1. Define nav pages
    $navPages = [
        'home'     => ['file' => 'pages/home.php',    'label' => 'Home'],
        'about'    => ['file' => 'pages/about.php',   'label' => 'About Me'],
        'projects' => ['file' => 'pages/projects.php','label' => 'Projects'],
        'contact'  => ['file' => 'pages/contact.php', 'label' => 'Contact']
    ];

    // 2. Safely get REQUEST_URI (fallback to '/')
    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';       // :contentReference[oaicite:8]{index=8}

    $path = trim(parse_url($requestUri, PHP_URL_PATH), '/');  // :contentReference[oaicite:9]{index=9}

    // 3. Determine active page
    if ($path === '' || $path === 'index.php') {
        $active = 'home';
    } elseif (isset($navPages[$path])) {
        $active = $path;
    } else {
        $active = null;
    }

    
    // 4. Alias to match template checks
    $activePage = $active; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="author" content="Fernanda Montalvan">
  <meta name="description" content="Portfolio website of Fernanda Montalvan, Full Stack Developer">
  <title>Fernanda's Portfolio</title>
  <link rel="stylesheet" href="Resources/style.css">
  <link rel="shortcut icon" href="/Resources/images/favi.png" type="image/x-icon">
</head>
<body>
  <header>
    <h1>Fernanda Montalvan</h1>
    <nav>
      <ul>
        <?php foreach ($navPages as $key => $page): ?>
          <li>
            <a
              href="index.php?page=<?= $key ?>"
              class="<?= $activePage === $key ? 'active' : '' ?>"
            >
              <?= htmlspecialchars($page['label'], ENT_QUOTES, 'UTF-8') ?>               <!-- escape labels for safety -->
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </header>

  <main>
        <section id="content">
            <?php
            // Build the file path
            if ($activePage === 'home') {
                $filePath = __DIR__ . '/pages/home.php';
            } else if ($activePage && isset($navPages[$activePage])) {
                $filePath = __DIR__ . '/' . $navPages[$activePage]['file'] ?? null;
            } else {
                $filePath = __DIR__ . '/pages/404.php'; // No valid page
            }
            // Include if valid and exists
            if ($filePath && file_exists($filePath)) {
                include $filePath;
            } 
            ?>
        </section>
    </main>
</body>
</html>
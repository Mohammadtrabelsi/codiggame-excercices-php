<?php include 'parts/headart.php'; ?>
<h1>Directory contents</h1>
<ul class="list-group list-group-flush">
    <?php
    // Define the directory path
    $dir = dirname(__FILE__);

    // Get an array of the directory contents using scandir()
    $files = scandir($dir);

    // Output the contents of the directory using print_r()
    foreach ($files as $file) {
        if (!in_array($file, ['index.php', '.', '.git', '..', '.idea', 'parts']))
            echo '<a href="' . $file . '"><li  class="list-group-item" >' . $file . '</li></a>';
    }
    ?>
</ul>
<?php include 'parts/footerPart.php'; ?>

<?php include 'parts/headart.php'; ?>

        <h1> PHP coding game exercices with solution</h1>
        <ul>
            <?php
            // Define the directory path
            $dir = dirname(__FILE__);

            // Get an array of the directory contents using scandir()
            $files = scandir($dir);

            // Output the contents of the directory using print_r()
            echo "Directory contents: \n";
            foreach ($files as $file) {
                if (!in_array($file, ['index.php', '.', '..', '.idea', 'parts']))
                    echo '<a href="' . $file . '"><li>' . $file . '</li></a>';
            }
            ?>
        </ul>
<?php include 'parts/footerPart.php'; ?>

<?php
// Basic Test for Auto Workshop Structure

echo "Starting tests...\n";

// 1. Check directory structure
$directories = ['backend', 'frontend', 'backend/config', 'backend/api', 'frontend/assets', 'frontend/layout'];
foreach ($directories as $dir) {
    if (is_dir(__DIR__ . '/../' . $dir)) {
        echo "[PASS] Directory exists: $dir\n";
    } else {
        echo "[FAIL] Directory missing: $dir\n";
    }
}

// 2. Check key files
$files = [
    'backend/config/db.php',
    'backend/api/enquiry.php',
    'frontend/index.php',
    'frontend/layout/header.php',
    'frontend/layout/footer.php'
];
foreach ($files as $file) {
    if (file_exists(__DIR__ . '/../' . $file)) {
        echo "[PASS] File exists: $file\n";
    } else {
        echo "[FAIL] File missing: $file\n";
    }
}

// 3. Check PHP syntax of crucial files
foreach ($files as $file) {
    $fullPath = __DIR__ . '/../' . $file;
    if (file_exists($fullPath)) {
        $output = [];
        $return_var = 0;
        exec("php -l $fullPath", $output, $return_var);
        if ($return_var === 0) {
            echo "[PASS] Syntax OK: $file\n";
        } else {
            echo "[FAIL] Syntax Error in $file: " . implode("\n", $output) . "\n";
        }
    }
}

echo "Tests completed.\n";
?>

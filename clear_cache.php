<?php
// Đường dẫn đến thư mục gốc của dự án Laravel
$basePath = __DIR__;

// Hàm thực thi lệnh và ghi kết quả
function execCommand($command) {
    echo "Executing: $command\n";
    exec($command, $output, $returnVar);
    echo "Output:\n" . implode("\n", $output) . "\n";
    echo "Return status: $returnVar\n";
    echo "------------------------\n";
}

// Cập nhật autoload của Composer
echo "Dumping Composer autoload...\n";
execCommand("composer dump-autoload");

// Xóa cache của Laravel
echo "Clearing Laravel caches...\n";
execCommand("php $basePath/artisan config:cache");
execCommand("php $basePath/artisan route:cache");
execCommand("php $basePath/artisan view:clear");
execCommand("php $basePath/artisan cache:clear");

echo "Caches and autoloads cleared successfully.\n";

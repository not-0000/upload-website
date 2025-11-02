<?php
$file = '../a.txt';
$content = "A";

// Tulis ke file (buat baru jika belum ada)
file_put_contents($file, $content);

echo "File berhasil ditulis: $file";
?>

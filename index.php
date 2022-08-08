<?php
$arr = ["1.pdf", "2.pdf"];
$scan = array_values(array_diff(scandir("pdf"), array('..', '.')));
foreach ($scan as $file) {
    $files[] = $file;
}
$result = array_diff($files, $arr);

if (!is_dir("copy_pdf")) {
    mkdir("copy_pdf", 0777);
}
foreach ($result as $list) {
    if (copy("pdf/$list", "copy_pdf/$list")) {
        echo "Copied";
    }
}

<?php
/*
Uploadify
Copyright (c) 2012 Reactive Apps, Ronnie Garcia
Released under the MIT License <http://www.opensource.org/licenses/mit-license.php> 
*/

// Define a destination
$targetFolder = '/public/uploads/uploadify'; // Relative to the root
//如果没有这个文件夹则创建这个文件夹
$tempFile = $_FILES['Filedata']['tmp_name'];
$targetPath = $_SERVER['DOCUMENT_ROOT'] . $targetFolder;
if(!is_dir($targetPath)){
    mkdir($targetPath, 0777);
    chmod($targetPath, 0777);
}
$targetFile = rtrim($targetPath,'/') . '/' . $_FILES['Filedata']['name'];

// Validate the file type
$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
$fileParts = pathinfo($_FILES['Filedata']['name']);

if (in_array($fileParts['extension'],$fileTypes)) {
    move_uploaded_file($tempFile,$targetFile);
    echo '1';
} else {
    echo 'Invalid file type.';
}
?>
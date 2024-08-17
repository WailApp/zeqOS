<?php
// إعداد المتغيرات
$buildNumber = isset($_GET['build']) ? $_GET['build'] : '';
$updateName = '   Repair System';
$updateChangelog = 'zeqOS will be upgraded to a newer version, and errors will be fixed.';
$updateCategory = 'Important';
//} else {
    // رقم البناء غير مدعوم
  //  $updateName = 'No new updates';
   // $updateChangelog = 'You\'re up to date! Try checking for updates later.';
   // $updateCategory = 'Up-to-date';
//}

// إرجاع البيانات كاستجابة نصية مفصولة بعلامة |
echo $updateName . '|' . $updateChangelog . '|' . $updateCategory;
?>

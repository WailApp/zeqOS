<?php
// إعداد المتغيرات
$buildNumber = isset($_GET['build']) ? $_GET['build'] : '';
$updateName = '';
$updateChangelog = '';
$updateCategory = '';

// تحقق من رقم البناء وإعداد المعلومات المناسبة
if ($buildNumber === '1.0') {
    $updateName = 'Update 1.0'; // اسم التحديث
    $updateChangelog = 'Bug fixes and improvements.'; // سجل التغييرات
    $updateCategory = 'Important'; // فئة التحديث
} elseif ($buildNumber === '2.0') {
    $updateName = 'Update 2.0'; // اسم التحديث
    $updateChangelog = 'New features added.'; // سجل التغييرات
    $updateCategory = 'Important'; // فئة التحديث
} else {
    // رقم البناء غير مدعوم
    $updateName = '  Repair Software';
    $updateChangelog = 'New features added.';
    $updateCategory = 'Important';
}

// إرجاع البيانات كاستجابة نصية مفصولة بعلامة |
echo $updateName . '|' . $updateChangelog . '|' . $updateCategory;
?>

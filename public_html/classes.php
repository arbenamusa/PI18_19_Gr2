<?php

$classId = fallback($_GET['id'], null);
$classData = null;
if ($classId) {
  $classData = $app->classes->find($classId);
}

return view('classes', [
  'classData' => $classData
]);

?>

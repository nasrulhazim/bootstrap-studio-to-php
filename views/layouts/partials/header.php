<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title><?php echo $title; ?></title>

    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">

    <?php if(!empty($css)): ?>
    	<?php foreach ($css as $key => $value): ?>
    		<link rel="stylesheet" type="text/css" href="<?php echo $value; ?>">
    	<?php endforeach; ?>
    <?php endif; ?>

</head>

<body>
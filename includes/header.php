<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://bootswatch.com/5/quartz/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?php echo $pageTitle ?></title>
    <style>
        *{margin:0};
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
          <a class="navbar-brand text-white fs-5" href="#">COVID Live - Coronavirus Statistics</a>
        </div>
    </nav>
    <?php if(!$isUserPage){ ?>
        <div class="mt-5 container border border-2 rounded-3" style="width: 40%;">
    <?php 
        } 
    ?>
       
<?php
    global $active;
    $title = 'Quinn\'s website';
?>

<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <link rel='stylesheet' href='stylesheets/style.css' />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="icon" type="image/x-icon" href="images/favicon.png">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDblyZ0b5Q_K-anpaQgLjvruG__vBjbD4E&callback=console.debug&libraries=maps,marker&v=beta"></script>
    </head>
    <body>
    <nav class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px;">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><?php echo $title ?></a>
            </div>
            <ul class="nav navbar-nav" style="margin-bottom: 0px;">
                <li <?php if ($active == 'home') { ?> class="active" <?php } ?> id="nav"><a href="index.php">Home</a></li>
                <li <?php if ($active == 'page11' || $active == 'page12' || $active == 'page13') { ?> class="active" <?php } ?> id="nav"><a class="dropdown-toggle" data-toggle="dropdown" href="/">Page 1 <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li <?php if ($active == 'page11') { ?> class="active" <?php } ?>><a href="page11.php">Page 1-1</a></li>
                        <li <?php if ($active == 'page12') { ?> class="active" <?php } ?>><a href="page12.php">Page 1-2</a></li>
                        <li <?php if ($active == 'page13') { ?> class="active" <?php } ?>><a href="page13.php">Page 1-3</a></li>
                    </ul>
                </li>
                <li <?php if ($active == 'page2') { ?> class="active" <?php } ?> id="nav"><a href="page2.php">Page 2</a></li>
                <li <?php if ($active == 'page3') { ?> class="active" <?php } ?> id="nav"><a href="page3.php">Page 3</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right" id="navpic">
                <img src="images/quinlanstevenson-whitebg.png" alt="Quinlan Stevenson" style="width: 50px;" />
            </ul>
        </div>
    </nav>
    <section>
    <br><br>

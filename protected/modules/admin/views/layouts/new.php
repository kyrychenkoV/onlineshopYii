<!DOCTYPE html>
<html lang="en">
<head>
    <title>OnlineShop</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/admin.css">
</head>

<body>

<nav class="navbar navbar-default header">

    <div class="container-fluid header">

        <div class="container">
            <div class="navbar-header">

                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div id="logo">
                    <h1><a href="{{ route('index') }} ">OnlineShops</a></h1>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="navbar-main">
                <ul class="nav nav-pills active">
                    <li class="current active"><a href="{{ route('index') }}">Головна</a></li>
                    <li class="current"><a href="{{ route('admin.index') }}">Адміністрування</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>

<?php echo $content; ?>
<h1>Footer</h1>
<footer>
    <div class="container footer">
        <p class="text-center">2017 <a href="https://github.com/kyrychenkoV/onlineshop">Gitlab</a></p>

    </div>
</footer>

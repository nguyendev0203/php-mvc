<!DOCTYPE html>
<html lang="en">

<head>
    <title>Phone store</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default rounded borders and increase the bottom margin */
        .navbar {
            margin-bottom: 50px;
            border-radius: 0;
        }

        /* Remove the jumbotron's default bottom margin */
        .jumbotron {
            margin-bottom: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="/home/index">Home</a></li>


                </ul>

            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-primary">
                    <div class="panel-heading"><?= $data->name ?></div>
                    <div class="panel-body"><img src="app/views/images/<?= $data->thumbnail ?>" class="img-responsive" style="width:100%" alt="Image"></div>
                    <div class="panel-footer">Price: <?= $data->price ?>vnđ</div>
                </div>
            </div><br>


</body>

</html>
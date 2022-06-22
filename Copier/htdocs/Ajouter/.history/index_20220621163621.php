<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="bootstrap.min.css">

    <link rel="shortcut icon" type="image/x-icon" href="update.png">
    <link rel="apple-touch-icon" sizes="76x76" href="update.png">

    <link rel="alternate" type="application/rss+xml" href="rss">
</head>

<body>
    <div class="container bootstrap snippets bootdey">
        <h1 class="text-primary">Edit Profile</h1>
        <hr>
        <div class="row">
            <!-- left column -->
            <!-- edit form column -->
            <div class="col-md-9 personal-info">
                <div class="alert alert-info alert-dismissable">
                    <a class="panel-close close" data-dismiss="alert">×</a>
                    <i class="fa fa-coffee"></i>
                </div>
                <h3>Personal info</h3>

                <form class="form-horizontal" method="post" role="form">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Matricule:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nom:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="Exemple: Mohamed" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Prenom:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" placeholder="Exemple: Hamada" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input class="form-control" type="text" value="janesemail@gmail.com" />
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <script type="text/javascript" src="popper.min.js"></script>
    <script src="bootstrap.min.js"></script>
</body>

</html>
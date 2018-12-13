<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">
    <title>Demo1</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Brand</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php">Home</a></li>

                    <li><a href="search.php">Search data</a></li>
                    <li><a href="index.php">LogOut</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <!-- End Of Navbar -->

    <!-- main body -->
    <section id="main">
        <div class="row">
            <div class="container">
                <form>
                    <div class="col-md-8">
                        <div class="form-group">

                            <input type="text" class="form-control" id="search" placeholder="Search">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <button type="submit" class="btn btn-default">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-md-6 col-md-push-3">
                    <table class="table table-responsive table-bordered">
                        <tr>
                            <th style="text-align:center">Name</th>
                            <th style="text-align:center">Age</th>
                            <th style="text-align:center">Contact</th>
                            <th style="text-align:center">Address</th>
                            <th style="text-align:center">Edit</th>
                            <th style="text-align:center">Delete</th>

                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><button class="btn btn-warning" data-toggle="modal" data-target="#myModal">Edit</button></td>
                            <td><button class="btn btn-danger">Delete</button></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h4 style="text-align:center">All data entered into the form should be displayed, and from search bar person should able to search <br> on clicking on edit all data respective to that row should be display on the Modal form and he should be able to edit it. and on clicking delete, delete the data.
                </h4>
            </div>
        </div>

    </section>
    <!-- end of main body -->


    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Edit and Update Data</h4>
                </div>
                <div class="modal-body">

                    <div class="panel panel-default" style="padding:30px">
                        <form>
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <label for="age">Age</label>
                                <input type="text" class="form-control" id="age" placeholder="Age">
                            </div>
                            <div class="form-group">
                                <label for="number">Contact Number</label>
                                <input type="tel" class="form-control" id="number" placeholder="Contact Number">
                            </div>
                            <div class="form-group">
                                <label for="addr">Address</label>
                                <input type="text" class="form-control" id="addr" placeholder="Address">
                            </div>

                        </form>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end of modal -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WayangAPI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
        </style>
    </head>
    <body>
        <nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary">
            <a class="navbar-brand" href="#">WayangAPI</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                <a class="nav-item nav-link" href="/">Home</a>
                <a class="nav-item nav-link active" href="#">Docs <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="https://github.com/muklasr/wayangapi">Github</a>
                </div>
            </div>
        </nav>
        <div class="container">
        <div class="row">
            <div class="col-4">
                <div class="list-group" id="list-tab" role="tablist">
                    <a class="list-group-item list-group-item-action active" id="list-allwayang-list" data-toggle="list" href="#allwayang" role="tab">Get All Wayang</a>
                    <a class="list-group-item list-group-item-action" id="list-onewayang-list" data-toggle="list" href="#onewayang" role="tab">Get One Wayang</a>
                    <a class="list-group-item list-group-item-action" id="list-search-list" data-toggle="list" href="#search" role="tab">Search Wayang</a>
                    <a class="list-group-item list-group-item-action" id="list-add-list" data-toggle="list" href="#add" role="tab">Add Data</a>
                    <a class="list-group-item list-group-item-action" id="list-update-list" data-toggle="list" href="#update" role="tab">Update Data</a>
                    <a class="list-group-item list-group-item-action" id="list-delete-list" data-toggle="list" href="#delete" role="tab">Delete Data</a>
                    </div>
                </div>
                <div class="col-8">
                    <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="allwayang" role="tabpanel">
                        <h3>Return all wayang</h3>
                    </div>
                    <div class="tab-pane fade" id="onewayang" role="tabpanel">
                        <h3>Return one wayang</h3>
                    </div>
                    <div class="tab-pane fade" id="search" role="tabpanel">
                        <h3>Search wayang</h3>
                        <h4>Search by name</h4>
                        <h4>Search by category</h4>
                    </div>
                    <div class="tab-pane fade" id="add" role="tabpanel">
                        <h3>Add wayang</h3>
                    </div>
                    <div class="tab-pane fade" id="update" role="tabpanel">
                        <h3>Update wayang</h3>
                    </div>
                    <div class="tab-pane fade" id="delete" role="tabpanel">
                        <h3>Delete wayang</h3>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

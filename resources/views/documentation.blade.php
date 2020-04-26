<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WayangAPI</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
        <div class="container mt-8">
        <!-- Nav tabs -->
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="allwayang-tab" data-toggle="tab" href="#allwayang" role="tab" aria-controls="allwayang" aria-selected="true">Get All Wayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="onewayang-tab" data-toggle="tab" href="#onewayang" role="tab" aria-controls="onewayang" aria-selected="false">Get One Wayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="search-tab" data-toggle="tab" href="#search" role="tab" aria-controls="search" aria-selected="false">Search Wayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="add-tab" data-toggle="tab" href="#add" role="tab" aria-controls="add" aria-selected="false">Add Wayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="update-tab" data-toggle="tab" href="#update" role="tab" aria-controls="update" aria-selected="false">Update Wayang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="delete-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="delete" aria-selected="false">Delete Wayang</a>
                </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="allwayang" role="tabpanel" aria-labelledby="allwayang-tab">
                    <h3>Return all wayang</h3>
                </div>
                <div class="tab-pane" id="onewayang" role="tabpanel" aria-labelledby="onewayang-tab">
                    <h3>Return one wayang</h3>
                </div>
                <div class="tab-pane" id="search" role="tabpanel" aria-labelledby="search-tab">
                    <h3>Search wayang</h3>
                </div>
                <div class="tab-pane" id="add" role="tabpanel" aria-labelledby="add-tab">
                    <h3>Add wayang</h3>
                </div>
                <div class="tab-pane" id="update" role="tabpanel" aria-labelledby="update-tab">
                    <h3>Update wayang</h3>
                </div>
                <div class="tab-pane" id="delete" role="tabpanel" aria-labelledby="delete-tab">
                    <h3>Delete wayang</h3>
                </div>
            </div>
        </div>
    </body>
</html>

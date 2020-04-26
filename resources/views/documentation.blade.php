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
        <div class="container mt-5">
        <!-- Nav tabs -->
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-allwayang" data-toggle="pill" href="#allwayang" role="tab" aria-controls="v-pills-allwayang" aria-selected="true">Get All Wayang</a>
                    <a class="nav-link" id="v-pills-onewayang" data-toggle="pill" href="#onewayang" role="tab" aria-controls="v-pills-onewayang" aria-selected="false">Get One Wayang</a>
                    <a class="nav-link" id="v-pills-search" data-toggle="pill" href="#search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search Wayang</a>
                    <a class="nav-link" id="v-pills-add" data-toggle="pill" href="#add" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Wayang</a>
                    <a class="nav-link" id="v-pills-update" data-toggle="pill" href="#update" role="tab" aria-controls="v-pills-update" aria-selected="false">Update Wayang</a>
                    <a class="nav-link" id="v-pills-delete" data-toggle="pill" href="#delete" role="tab" aria-controls="v-pills-delete" aria-selected="false">Delete Wayang</a>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane active" id="v-pills-allwayang" role="tabpanel" aria-labelledby="v-pills-allwayang">
                    <h3>Return all wayang</h3>
                </div>
                <div class="tab-pane" id="v-pills-onewayang" role="tabpanel" aria-labelledby="v-pills-onewayang">
                    <h3>Return one wayang</h3>
                </div>
                <div class="tab-pane" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search">
                    <h3>Search wayang</h3>
                </div>
                <div class="tab-pane" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add">
                    <h3>Add wayang</h3>
                </div>
                <div class="tab-pane" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update">
                    <h3>Update wayang</h3>
                </div>
                <div class="tab-pane" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete">
                    <h3>Delete wayang</h3>
                </div>
            </div>
        </div>
    </body>
</html>

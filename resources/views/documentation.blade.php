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
        <div class="row">
        <div class="col col-md-4">
        <!-- Nav tabs -->
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-allwayang-tab" data-toggle="pill" href="#allwayang" role="tab" aria-controls="v-pills-allwayang" aria-selected="true">Get All Wayang</a>
                <a class="nav-link" id="v-pills-onewayang-tab" data-toggle="pill" href="#onewayang" role="tab" aria-controls="v-pills-onewayang" aria-selected="false">Get One Wayang</a>
                <a class="nav-link" id="v-pills-search-tab" data-toggle="pill" href="#search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search Wayang</a>
                <a class="nav-link" id="v-pills-add-tab" data-toggle="pill" href="#add" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Wayang</a>
                <a class="nav-link" id="v-pills-update-tab" data-toggle="pill" href="#update" role="tab" aria-controls="v-pills-update" aria-selected="false">Update Wayang</a>
                <a class="nav-link" id="v-pills-delete-tab" data-toggle="pill" href="#delete" role="tab" aria-controls="v-pills-delete" aria-selected="false">Delete Wayang</a>
            </div>
            </div>
            <div class="col col-md-8">
            <!-- Tab panes -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane show active" id="v-pills-allwayang" role="tabpanel" aria-labelledby="v-pills-allwayang-tab">
                    <h3>Return all wayang</h3>
                    <h5>URL</h5>
                    <hr>
                    <pre>https://wayangapi.herokuapp.com/api/wayang</pre>
                    <h5>Response Samples</h5>
                    <hr>
                    <pre>
                        {
                            "code":200,
                            "result":[
                            {
                                "id":2,
                                "nama":"Arjuna/Janaka",
                                "golongan":"Pandawa",
                                "kasta":"Kesatria",
                                "senjata":"Panah Pasupati, Brahmastra, Busur Gandiwa\nVersi wayang: Ardedali, Sarotama, Keris Pulanggeni, Keris Kalanadah.",
                                "ayah":"Pandu (sah),\nIndra (de facto)",
                                "ibu":"Kunti",
                                "pasangan":"Dropadi,\nUlupi,\nCitrānggadā,\nSubadra,",
                                "anak":"Srutakirti (dari Dropadi),\nIrawan (dari Ulupi),\nBabruwahana (dari Citrānggadā),\nAbimanyu (dari Subadra),\nWisanggeni (dari Dresanala),",
                                "image_url":"https://i.pinimg.com/564x/e0/8c/53/e08c53f478d12e842dd2dd11a104e6b0.jpg",
                                "created_at":"2020-04-02 08:16:45",
                                "updated_at":"2020-04-02 08:16:45"
                            },
                            {
                                "id":7,
                                "nama":"Semar/SangHyang Ismaya",
                                "golongan":"Ponokawan",
                                "kasta":"N/A",
                                "senjata":"N/A",
                                "ayah":"SangHyang Tunggal",
                                "ibu":"Dewi Wirandi/Rekatawati",
                                "pasangan":"N/A",
                                "anak":"Gareng, Petruk, Bagong",
                                "image_url":"https://i.pinimg.com/564x/f3/2f/a3/f32fa30df58b67d855be580d92044d74.jpg",
                                "created_at":"2020-04-02 08:30:13",
                                "updated_at":"2020-04-02 08:30:13"
                            }
                            ]
                        }
                    </pre>
                </div>
                <div class="tab-pane fade" id="v-pills-onewayang" role="tabpanel" aria-labelledby="v-pills-onewayang-tab">
                    <h3>Return one wayang</h3>
                    <h5>URL</h5>
                    <hr>
                    <pre>https://wayangapi.herokuapp.com/api/wayang/{id}</pre>
                    <h5>Response Samples</h5>
                    <hr>
                    <pre>
                        {
                            "code":200,
                            "result":[
                            {
                                "id":2,
                                "nama":"Arjuna/Janaka",
                                "golongan":"Pandawa",
                                "kasta":"Kesatria",
                                "senjata":"Panah Pasupati, Brahmastra, Busur Gandiwa\nVersi wayang: Ardedali, Sarotama, Keris Pulanggeni, Keris Kalanadah.",
                                "ayah":"Pandu (sah),\nIndra (de facto)",
                                "ibu":"Kunti",
                                "pasangan":"Dropadi,\nUlupi,\nCitrānggadā,\nSubadra,",
                                "anak":"Srutakirti (dari Dropadi),\nIrawan (dari Ulupi),\nBabruwahana (dari Citrānggadā),\nAbimanyu (dari Subadra),\nWisanggeni (dari Dresanala),",
                                "image_url":"https://i.pinimg.com/564x/e0/8c/53/e08c53f478d12e842dd2dd11a104e6b0.jpg",
                                "created_at":"2020-04-02 08:16:45",
                                "updated_at":"2020-04-02 08:16:45"
                            }
                            ]
                        }
                    </pre>
                </div>
                <div class="tab-pane fade" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search-tab">
                    <h3>Search wayang</h3>
                    <h4>Search by name</h4>
                    <h5>URL</h5>
                    <hr>
                    <pre>https://wayangapi.herokuapp.com/api/wayang/search/{name}</pre>
                    <h5>Response Samples</h5>
                    <hr>
                    <pre>
                        {
                        "code": 200,
                        "result": [
                            {
                            "id": 1,
                            "nama": "Bagong",
                            "golongan": "Ponokawan",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "Semar",
                            "ibu": "N/A",
                            "pasangan": "N/A",
                            "anak": "N/A",
                            "image_url": "http://www.hadisukirno.co.id/images/produk/Bagong-Solo.jpg",
                            "created_at": "2020-04-02 08:07:15",
                            "updated_at": "2020-04-02 10:25:01"
                            },
                            {
                            "id": 16,
                            "nama": "Batara Narada",
                            "golongan": "Batara",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "N/A",
                            "ibu": "N/A",
                            "pasangan": "N/A",
                            "anak": "N/A",
                            "image_url": "https://i.pinimg.com/236x/6f/6a/99/6f6a99436e014ad6bfc048a7c51d8797.jpg",
                            "created_at": "2020-04-02 08:37:34",
                            "updated_at": "2020-04-02 10:26:52"
                            }
                        ]
                        }
                    </pre>

                    <h4>Search by category</h4>
                    <h5>URL</h5>
                    <hr>
                    <pre>https://wayangapi.herokuapp.com/api/wayang/category/{category}</pre>
                    <h5>Response Samples</h5>
                    <hr>
                    <pre>
                        {
                        "code": 200,
                        "result": [
                            {
                            "id": 7,
                            "nama": "Semar/SangHyang Ismaya",
                            "golongan": "Ponokawan",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "SangHyang Tunggal",
                            "ibu": "Dewi Wirandi/Rekatawati",
                            "pasangan": "N/A",
                            "anak": "Gareng, Petruk, Bagong",
                            "image_url": "https://i.pinimg.com/564x/f3/2f/a3/f32fa30df58b67d855be580d92044d74.jpg",
                            "created_at": "2020-04-02 08:30:13",
                            "updated_at": "2020-04-02 08:30:13"
                            },
                            {
                            "id": 1,
                            "nama": "Bagong",
                            "golongan": "Ponokawan",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "Semar",
                            "ibu": "N/A",
                            "pasangan": "N/A",
                            "anak": "N/A",
                            "image_url": "http://www.hadisukirno.co.id/images/produk/Bagong-Solo.jpg",
                            "created_at": "2020-04-02 08:07:15",
                            "updated_at": "2020-04-02 10:25:01"
                            },
                            {
                            "id": 9,
                            "nama": "Nala Gareng",
                            "golongan": "Ponokawan",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "Semar",
                            "ibu": "N/A",
                            "pasangan": "Dewi Sariwati",
                            "anak": "N/A",
                            "image_url": "https://i.pinimg.com/564x/3f/ff/8c/3fff8c378e76006c6eaa4bad0f03a047.jpg",
                            "created_at": "2020-04-02 08:32:52",
                            "updated_at": "2020-04-02 13:43:41"
                            },
                            {
                            "id": 8,
                            "nama": "Petruk",
                            "golongan": "Ponokawan",
                            "kasta": "N/A",
                            "senjata": "N/A",
                            "ayah": "Semar",
                            "ibu": "N/A",
                            "pasangan": "Dewi Ambarawati",
                            "anak": "Lengkungkusuma",
                            "image_url": "https://i.pinimg.com/564x/6f/f6/62/6ff6629200071bb5e3ec339cc2157c75.jpg",
                            "created_at": "2020-04-02 08:32:16",
                            "updated_at": "2020-04-02 13:52:01"
                            }
                        ]
                        }
                    </pre>
                </div>
                <div class="tab-pane fade" id="v-pills-add" role="tabpanel" aria-labelledby="v-pills-add-tab">
                    <h3>Add wayang</h3>
                </div>
                <div class="tab-pane fade" id="v-pills-update" role="tabpanel" aria-labelledby="v-pills-update-tab">
                    <h3>Update wayang</h3>
                </div>
                <div class="tab-pane fade" id="v-pills-delete" role="tabpanel" aria-labelledby="v-pills-delete-tab">
                    <h3>Delete wayang</h3>
                </div>
            </div>
            </div>
            </div>
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">a</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">b</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">c</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">d</div>
</div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>

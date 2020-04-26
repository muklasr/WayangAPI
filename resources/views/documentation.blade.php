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
        <div class="container">
        <!-- Nav tabs -->
            <div class="nav flex-column nav-pills mt-5" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-allwayang" data-toggle="pill" href="#allwayang" role="tab" aria-controls="v-pills-allwayang" aria-selected="true">Get All Wayang</a>
                <a class="nav-link" id="v-pills-onewayang" data-toggle="pill" href="#onewayang" role="tab" aria-controls="v-pills-onewayang" aria-selected="false">Get One Wayang</a>
                <a class="nav-link" id="v-pills-search" data-toggle="pill" href="#search" role="tab" aria-controls="v-pills-search" aria-selected="false">Search Wayang</a>
                <a class="nav-link" id="v-pills-add" data-toggle="pill" href="#add" role="tab" aria-controls="v-pills-add" aria-selected="false">Add Wayang</a>
                <a class="nav-link" id="v-pills-update" data-toggle="pill" href="#update" role="tab" aria-controls="v-pills-update" aria-selected="false">Update Wayang</a>
                <a class="nav-link" id="v-pills-delete" data-toggle="pill" href="#delete" role="tab" aria-controls="v-pills-delete" aria-selected="false">Delete Wayang</a>
            </div>

            <!-- Tab panes -->
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane active" id="v-pills-allwayang" role="tabpanel" aria-labelledby="v-pills-allwayang">
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
                <div class="tab-pane" id="v-pills-onewayang" role="tabpanel" aria-labelledby="v-pills-onewayang">
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
                <div class="tab-pane" id="v-pills-search" role="tabpanel" aria-labelledby="v-pills-search">
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

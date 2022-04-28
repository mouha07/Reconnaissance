<!doctype html>
<html lang="en">

<head>
    <title>Reconnaissance</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="imgbackground ">

    </div>
    <div class=" mb-5 my-0">
        <nav class="navbar   navbar-expand-sm navbar-white bg-white shadow-lg fixed-top pb-1 pt-3 mb-5  ">
            <div class="container">
                <a class="navbar-brand font-italic font-weight-bold text-success    " href="/">Résultats Raspberry</a>

                <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                    data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"> <i class="fa fa-toggle-off" aria-hidden="true"></i></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-body" href="/">En live <span
                                    class="sr-only">(current)</span></a>
                        </li>


                        <li class="nav-item">
                            <a class="nav-link text-body" href="/données sauvegardées">Données sauvegardées</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-3">
        <div class="row mt-3">
            {{-- <div class="col-8 m-2 container">
                <div>Vidéo raspberry</div>
                <img src="public/image/video.jpg" alt="">
            </div> --}}
            <div class="col-12 center-block p-3">
                <div class="row justify-content-center">

                    <div class="col-12 m-2 text-center font-weight-bold text-success">Vidéo raspberry</div>
                <div class="card" style="height:500px; width:500px">

                    <img class="card-img-top" src="image/video.jpg" alt="">
                    {{-- <div class="card-body card-img-overlay ">
                        <h5 class="card-title text-white text-center">Tomate</h5>
                    </div> --}}
                </div>

                </div>


            </div>

        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>

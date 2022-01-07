<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./src/css/style.css">
    <title>Hello, world!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">R-Gallery</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse justify-content-end navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="carousel">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://dummyimage.com/1280x720/000000/fff.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://dummyimage.com/1280x720/000000/fff.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://dummyimage.com/1280x720/000000/fff.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section id="gallery">
        <div class="d-flex flex-column gap-5 container pt-3">
            <div class="d-flex title justify-content-center">
                <h4 class="fw-bold underlined">Gallery</h4>
            </div>
            <form class="d-flex gap-4 justify-content-center flex-wrap" id="img-space">
                <a type="button" id="1" data-bs-toggle="modal" data-bs-target="#modal"><img src=" ./images/pic-1.jpg" alt="" srcset=""></a>
                <a type="button" id="2"><img src="./images/pic-2.jpg" alt="" srcset=""></a>
                <a type="button" id="3"><img src="./images/pic-3.jpg" alt="" srcset=""></a>
                <a type="button" id="4"><img src="./images/pic-4.jpg" alt="" srcset=""></a>
                <a type="button" id="5"><img src="./images/pic-5.jpg" alt="" srcset=""></a>
                <a type="button" id="5"><img src="./images/pic-5.jpg" alt="" srcset=""></a>
                <a type="button" id="5"><img src="./images/pic-5.jpg" alt="" srcset=""></a>
                <a type="button" id="5"><img src="./images/pic-5.jpg" alt="" srcset=""></a>
            </form>
            <a href="" class="btn btn-primary align-self-center">See more</a>
        </div>
    </section>
    <section id="about">
        <div class="d-flex flex-column gap-5 container pt-3">
            <div class="d-flex title justify-content-center">
                <h4 class="fw-bold underlined">About Me</h4>
            </div>
            <div class="d-flex gap-4 justify-content-center flex-wrap" id="profile">
                <div class="profile-pic text-center">
                    <img src="./images/profile.jpg" class="mb-4" alt="">
                    <h5 class="fw-bold">Razil Falih Wardiko</h5>
                </div>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi quasi perferendis voluptate minus eos ex similique ut, harum corrupti sint officiis reprehenderit repellat odio explicabo, deserunt recusandae, inventore vero magnam vel aut. Nobis, mollitia! Iusto laborum, quis amet eum nesciunt obcaecati dicta ad impedit, temporibus quod ex hic minima quas laboriosam dolor voluptatum debitis exercitationem. Nobis ea veritatis earum dolorum, eum aliquid aliquam quis fugit quaerat ut similique quo officia est ducimus accusantium quae nostrum id provident? Eaque quia porro maxime recusandae nesciunt minus, aliquam quaerat fuga vitae quos, sed nihil! Et a deleniti, error quos consequatur reprehenderit maiores dolore.
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="./images/pic-1.jpg" alt="">
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="./src/js/script.js"></script>
</body>

</html>
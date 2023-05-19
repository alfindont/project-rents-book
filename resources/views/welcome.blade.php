    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Rents Books</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    </head>
    <!--awalnavbar-->
    <body>
        <nav class="navbar navbar-dark navbar-expand-lg bg-success">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('img/buku.png.png')}}" alt="Logo" width="60" height="40" class="d-inline-block align-text-top">
                    ClaurellRents
                </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Category
                    </a>
                    <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Horor</a></li>

                    <li><a class="dropdown-item" href="#">Comedy</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-danger btn-sm" href="login">Login</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
        <!--akhirnavbar-->

        <!--carousel-->
            <div id="carouselExampleInterval" class="carousel slide"style="max-height: 300px; max width=100%" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active"data-bs-interval="3000">
    <center><img src="https://cdn.pixabay.com/photo/2016/09/05/15/03/candle-1646765__480.jpg" class="d-block w-100" alt="..."style="max-height:370px">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
    <center> <img src="https://cdn.pixabay.com/photo/2016/07/11/11/10/law-1509436__480.jpg" class="d-block w-100" alt="..."style="max-height: 370px">
        </div>
        <div class="carousel-item" data-bs-interval="2000">
    <center><img src="https://cdn.pixabay.com/photo/2020/09/03/07/15/background-5540399__480.jpg" class="d-block w-100" alt="..."style="max-height: 370px">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
    </div>
    <!--akhircarousel-->

    <!--jumbotron-->
    <div class= "container mt-4">
        <div class="row">
    <div class ="col-4">
        <br>
        <br>
        <br>
    <h3> ClaurentsBook</h3>
        <a href="register" class="btn btn-outline-primary">ayo daftar sekarang </a>
    </div>  
    <div class="col-8">
        <br>
        <br>
        <br>
        <p>
            Reading books is an activity that has many benefits in everyday life. This is because books are a source of knowledge that can add and update insights. In fact, routinely reading books is also believed to be able to increase one's concentration and empathy
        </p>
    </div>
    </div>
    </div>

    <!--akhirjumbroton-->
    <!-- Card Popular Books-->
    <section style="background-color:hsl(113, 36%, 33%)">
    <div class= "container mt-4">
        <div class="row text-center text-">
        <h3>POPULAR BOOKS</h3>
    </div>
    <div class="row ms-4">
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 20rem;">
                <img src="https://m.media-amazon.com/images/I/71SeyoWxhRL.jpg" class="card-img-top" alt="..."style="max-height: 400px">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary w-100">Read</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://pustaka.sma10pdg.sch.id/wp-content/uploads/2023/01/IPS-BS-KLS-VIII-cover.png" class="card-img-top" alt="..."style="max-height: 400px">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary w-100">Read</a>
                </div>
            </div>
        </div>
        <div class="col-lg-4 mb-3">
            <div class="card" style="width: 18rem;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfOg87sJxR8sIgumPT1EFwKNyDTP7GMbBmsg&usqp=CAU" class="card-img-top" alt="..."style="max-height: 400px">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary w-100">Read</a>
                </div>
            </div>
        </div>
    </div>
    </section>
    <!-- Akhir Card Popular Books-->

    <!-- contact-->
    <div class="container">
        <div class="row text-center" >
        <h2>message</h2>
        </div>
        <div class="row justify-content-center">
        <div class="col-md-7">
                <form action="/"  method="POST">
                    @csrf
                    <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name"name="name">
                    </div>
                    <div class="mb-3">
                    <label for="message" class="form-label">message</label>
                    <textarea name="message" class="form-control" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
     </div>
   </div>
</div>
<!-- akhir contact-->
<!-- footer-->
<footer>
    <p>
        <footer class="bg-success text-center" style="height: 40px">
      <p>  Created by <a href="https://github.com/alfindont"style="text-decoration: none; color:white;" target="_blank"> Evos Claurell</a></p>
</footer>



<!-- akhirfooter-->



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</body>
</html>
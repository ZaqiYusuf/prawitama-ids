<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Peminjaman Laptop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("/css/master.css") }}">
</head>

<body style="background-color: rgb(20, 20, 20)">
    <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
        <button class="btn btn-dark  shadow" style="" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><i class="fa-solid fa-bars ml-2"
                style="margin-right: 5px"></i> Menu</button>

        <div class="offcanvas offcanvas-start bg-dark" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1"
            id="offcanvasScrolling" aria-labelledby="offcanvasScrollingLabel" style="width: 200px">
            <div class="offcanvas-header d-flex justify-content-center">
                <li class="mb-3"><button class="btn btn-dark">
                        <h3><i class="fa-solid fa-house"></i> Dashboard</h3>
                    </button></li>
            </div>

            <div class="offcanvas-body d-flex justify-content-center">
                <ul style="margin-right:20px">
                    <li class="mb-3"><button class="btn btn-dark">Student</button></li>
                    <li class="mb-3"><button class="btn btn-dark">Attandance</button></li>
                    <li class="mb-3"><button class="btn btn-dark">Course</button></li>
                    <li class="mb-3"><button class="btn btn-dark">Sangga</button></li>
                    <li class="mb-3"><button class="btn btn-dark">Setting</button></li>
                    <div class="d-flex justify-content-center" style="margin-top: 250px">
                        <button type="button" class="btn btn-dark" data-bs-dismiss="offcanvas">Back</button>
                    </div>
                </ul>
            </div>
        </div>
        <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <input class="form-control form-control-dark rounded-0 border-0" type="text" placeholder="Search"
            aria-label="Search" style="width: 86%">
        <div class="navbar-nav">
            <div class="nav-item text-nowrap" style="margin-right: 25px; margin-left: 20px">
                <form action="/" method="POST">
                    <button type="submit" class="dropdown-item" style="color: aliceblue"><i
                            class="fa-solid fa-right-from-bracket"></i> Logout</button>
                </form>
            </div>
        </div>
    </header>

    <div class="container d-flex justify-content-between mt-3" style="">
        <img src="assets/img/avatar-1.png" class="rounded-circle" alt="" style="width: 50px;margin-left:99%;">
        <div class="dropdown mt-1" style="margin-left: 20px">
            <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" style=""></button>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </div>
    </div>

    @yield('dashboard')


    {{-- <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#staticBackdrop" aria-controls="staticBackdrop">
        Toggle static offcanvas
      </button>
      
      <div class="offcanvas offcanvas-start" data-bs-backdrop="static" tabindex="-1" id="staticBackdrop" aria-labelledby="staticBackdropLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="staticBackdropLabel">Offcanvas</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            I will not close if you click outside of me.
          </div>
        </div>
      </div> --}}


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>

</html>

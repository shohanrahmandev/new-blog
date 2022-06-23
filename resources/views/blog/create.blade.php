<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Post_Create</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand ms-5" href="#">
                <h2>Blog</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active ms-5" aria-current="page" href="/index">Home</a>
                    <a class="nav-link ms-5 " href="#">Post</a>
                    <a class="nav-link ms-5" href="#">Blog</a>
                </div>
            </div>

            <div class="btn btn-outline-success me-5">
                Create
            </div>

            <div class="d-flex justify-content-end me-5">
                @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                    <a href="{{ url('/dashboard') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-info text-decoration-none me-3 ">Dashboard</a>
                    @else
                    <a href="{{ route('login') }}"
                        class="text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success text-decoration-none me-3">Log
                        in</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}"
                        class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline btn btn-outline-success text-decoration-none me-3">Register</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
        </div>
    </nav>


    <div class="bg-success p-2 text-dark bg-opacity-25 mb-5">
        <h1 class="text-center">
            Your Post Create
        </h1>
    </div>

    <section class="d-flex justify-content-center mt-5">



        <div class="border d-flex justify-content-center p-4 shadow-lg p-3 mb-5 bg-body rounded" style="width: 40%">
            <form action="/store" style="width: 80%">
                <div class="text-center">

                    <h2>Insert From</h2>
                </div>
                <div class="mb-3">
                    <label for="date" class="form-label">Date :</label>
                    <input type="date" class="form-control" id="date" name="date">
                </div>
                <div class="mb-3">
                    <label for="title" class="form-label">Title :</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Details :</label>
                    <input type="text" class="form-control" id="details" name="details">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
</body>

</html>

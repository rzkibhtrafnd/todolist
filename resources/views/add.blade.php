<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css') }}" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .container-fluid3 {
            padding: 20px; 
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        .add-task-btn {
            background-color: #007bff; 
            color: #fff;
            padding: 10px 20px; 
            border: none; 
            border-radius: 5px; 
            margin-bottom: 10px; 
            align-self: flex-end; 
        }
        .table {
            width: 100%;
        }
    </style>
    <title>Todo List</title>
    </head>
    <body>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary ml-3 mr-3 " >
                <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active">To Do List Project</a>
                    </li>
                    </ul>
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn bg-light" type="submit">Search</button>
                    </form>
                </div>
                </div>
            </nav>
            <div class="content-wrapper">
                <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-sm-6">
                        <h3>Tambah Task</h3>
                    </div>
                    </div>
                </div>
                </section>
                <section class="content">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-md-12">
                        <div class="card card-primary">
                        <form method="post" action="">
                            {{ csrf_field() }}
                            <div class="card-body">
                            <div class="form-group">
                                <label >Task</label>
                                <input type="text" class="form-control" value="{{ old('text') }}" name="text" required placeholder="Masukkan Task">
                            </div>
                            <div class="form-group">
                                <label>Tanggal Selesai</label>
                                <input type="datetime-local" class="form-control" name="tglselesai" required>
                            </div>                            
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
                </section>
            </div>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    </body>
</html>

<!-- /.content-wrapper -->
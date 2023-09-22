<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Todo List</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary ml-3 mr-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="{{ asset('images/logo.png') }}" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active font-weight-bold" href="#">To Do List Project</a>
                    </li>                    
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-6">
                <a href="{{ asset('add') }}" class="btn btn-info text-white">Tambah</a>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-12">
                @include('_message')
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Task</th>
                            <th scope="col">Status</th>
                            <th scope="col">Deadline</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($getRecord as $v)
                        <tr>
                            <td>{{ $v->text }}</td>
                            <td>
                                @if($v->status==0)
                                Belum selesai
                                @else
                                Selesai
                                @endif
                            </td>
                            <td>{{ date('d-m-Y H:i A',strtotime($v->tglselesai)) }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <form action="{{ route('finish', $v->id) }}" method="GET">
                                        @csrf
                                        <button type="submit" class="btn btn-success">Selesai</button>
                                    </form>                                    
                                    <span style="margin: 0 5px;"></span>
                                    <form action="{{ route('destroy', $v->id) }}" method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>                                    
                                </div>                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>

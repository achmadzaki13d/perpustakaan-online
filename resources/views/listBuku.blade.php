@extends('layout.app')
@section('title', 'List Buku')
@section('page-title', 'List Buku')
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card d-block">
            <img class="img-fluid" src="{{ asset('template/img/book.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5>Judul Buku</h5>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card d-block">
            <img class="img-fluid" src="{{ asset('template/img/book.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5>Judul Buku</h5>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card d-block">
            <img class="img-fluid" src="{{ asset('template/img/book.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5>Judul Buku</h5>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card d-block">
            <img class="img-fluid" src="{{ asset('template/img/book.jpg') }}" alt="Card image cap">
            <div class="card-body">
                <h5>Judul Buku</h5>
                <p class="card-text">Some quick example text to build on the card title and make
                    up the bulk of the card's content.</p>
                <a href="#" class="btn btn-primary btn-sm">Pinjam</a>
            </div> <!-- end card-body-->
        </div> <!-- end card-->
    </div>
</div>

<!-- pagination -->
<div class="position-relative">
    <div class="position-absolute top-0 start-50 translate-middle-x">
        <nav>
            <ul class="pagination pagination-rounded mb-0">
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>
                <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>    
                <li class="page-item">
                    <a class="page-link" href="javascript: void(0);" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>
@endsection
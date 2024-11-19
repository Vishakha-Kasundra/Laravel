@extends('template.layout')
@section('content')
<body>
    @section('nav')
    {{ Auth::user()->name }}
    @endsection
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h1 class="display-4 text-dark shadow-sm p-3 mb-5 bg-white rounded">Welcome, {{ Auth::user()->name }}</h1>
            {{-- <p class="lead animate__animated animate__fadeInUp">{{ $patient->patient_name }}</p> --}}
        </div>
        <hr class="my-4">

        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm px-5" href="{{ route('mynote.index') }}">Back</a>
        </div>

        <div class="card shadow-lg ">
            <div class="card-body">
                <h3 class="card-title  text-center text-primary">{{ $mynote->Title}}</h3>
                <div class="row mt-4">
                    <div class="">
                        <p><strong>Title: </strong> {{ $mynote->Title }}</p>
                        <p><strong>Subtitle: </strong> {{ $mynote->Subtitle }}</p>
                        <p><strong>Note Content: </strong> {{ $mynote->note_content }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
@endsection

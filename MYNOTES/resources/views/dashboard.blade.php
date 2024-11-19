@extends('template.layout')
@section('content')
<body>
    <div class="container mt-5">
        <h1>Welcome {{ Auth::user()->name }}</h1>
        <hr>
        <h3 class="font-weight-bold">This Is A Dashboard</h3>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm" href="{{ route('mynote.create') }}">Create New Note</a>
        </div>

        <div class="row">
            @forelse($data as $b)
                @forelse($b->note as $d)
                    <div class="col-md-4 mb-4 animate__animated animate__fadeInUp">
                        <div class="card shadow-sm h-100 position-relative">
                            <div class="card-body text-center">
                                <div class="position-absolute" style="top: -10px; right: -10px;">
                                    <i class="fas fa-thumbtack text-warning"></i>
                                </div>
                                <h5 class="card-title">{{ $d->Title }}</h5>
                                <p class="card-text" style="opacity: 70%"><strong>Subtitle:</strong> {{ $d->Subtitle }}</p>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-outline-primary rounded mx-2 shadow-sm" style="width: 80%" href="{{ route('mynote.show', $d->id) }}">More Info</a>
                                </div>
                                <div class="d-flex justify-content-center mb-2">
                                    <a class="btn btn-outline-info rounded mx-2 shadow-sm" style="width: 80%" href="{{ route('mynote.edit', $d->id) }}">Edit</a>
                                </div>
                                <form action="{{ route('mynote.destroy', $d->id) }}" method="post" class="d-flex justify-content-center mb-4">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-danger rounded mx-2 shadow-sm" style="width: 80%">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center">
                        <p>No Notes Available</p>
                    </div>
                @endforelse
            @empty
                <div class="col-12 text-center">
                    <p>No Notes Available</p>
                </div>
            @endforelse
        </div>
    </div>
</body>
@endsection


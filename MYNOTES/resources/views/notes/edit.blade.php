@extends('template.layout')
@section('content')
<body>
    <h1>Welcome {{Auth::user()->name}}</h1>
    <hr>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <div class="d-flex justify-content-end mb-4">
            <a class="btn btn-outline-primary rounded-pill mx-2 shadow-sm px-5" href="{{ route('mynote.index') }}">Back</a>
        </div>
            <form action="{{route('mynote.update',$mynote->id)}}" method="post" enctype="multipart/form-data" class="shadow p-4 rounded bg-light">
                @csrf
                @method('patch')
                <div class="row mt-2">
                    <div class="form-group animate__animated animate__fadeInLeft">
                        <label class="control-label">Title</label>
                        <input type="text" value="{{$mynote->Title}}" name="Title" class="form-control" placeholder="title">
                    </div>
                    <div class="form-group animate__animated animate__fadeInLeft">
                        <label class="control-label">Subtitle</label>
                        <input type="text" value="{{$mynote->Subtitle}}" name="Subtitle" class="form-control" placeholder="subtitle">
                    </div>
                    <div class="form-group mt-2 animate__animated animate__fadeInUp">
                        <label class="control-label">Note Content</label>
                        <textarea name="note_content"  class="form-control" rows="3" placeholder="note_content">{{$mynote->Subtitle}}</textarea>
                    </div>
                    <div class="form-group row mt-4">
                        <div class="col text-center">
                            <button type="submit" class="btn btn-success btn-lg shadow-sm">Submit</button>
                        </div>
                    </div>
                </div>
        </form>
    </body>
    </html>
</body>
@endsection

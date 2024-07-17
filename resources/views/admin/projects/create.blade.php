@extends('layouts.dash')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Aggiungi un Progetto</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-12">

                <form method="POST" action="{{ route('admin.projects.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Titolo</label>
                        <input type="text" class="form-control" name="titolo" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Descrizione</label>
                        <textarea type="text" class="form-control" name="descrizione" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Categoria</label>
                        <input type="number" class="form-control" name="category_id" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Percorso immagione</label>
                        <input type="file" name="immagine" id="">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection

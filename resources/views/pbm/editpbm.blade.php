@extends('layouts.master')

@section('content')
    @include('layout.errors')
    <div class="row">
        <div class="col-md-8">
            <form action="" method="post">
                <div class="form-group">
                    <label for="title">Titel:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="titel"
                            name="titel"
                            value="{{ $pbm['titel'] }}">
                </div>
                <div class="form-group">
                    <label for="title">Type:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="type"
                            name="type"
                            value="{{ $pbm['type'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Merk:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="merk"
                            name="merk"
                            value="{{ $pbm['merk'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Leverancier:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="leverancier"
                            name="leverancier"
                            value="{{ $pbm['leverancier'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Levensduur:</label>
                    <input
                            type="number"
                            class="form-control"
                            id="levensduur"
                            name="levensduur"
                            value="{{ $pbm['levensduur'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Maxwasbeurten:</label>
                    <input
                            type="number"
                            class="form-control"
                            id="maxwasbeurten"
                            name="maxwasbeurten"
                            value="{{ $pbm['maxwasbeurten'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Description:</label>
                    <input
                            type="text"
                            class="form-control"
                            id="description"
                            name="description"
                            value="{{ $pbm['description'] }}">
                </div>
                <div class="form-group">
                    <label for="content">Image:</label>
                    <input
                            type="number"
                            class="form-control"
                            id="imagePath"
                            name="imagePath"
                            value="{{ $pbm['imagePath'] }}">
                </div>
                Select a file: <input type="file" name="img">
                
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $pbmId }}">
                <button type="submit" class="btn btn-primary">Klaar</button>
            </form>
        </div>
    </div>
@endsection
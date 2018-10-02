@extends('layout.master')


@section('title')
    PBM-Detail
@endsection


@section('content')

<div class="row" style="text-align:center;margin-bottom:20px;">
        <div class="col-md-6 col-md-offset-3">
                <h2>{{ $data->title }}</h2>
        </div>  
</div>  
        
<div class="row" style="font-size: 1.2em">   
        <div class="col-md-3 col-md-offset-3">
            <img src="{{ $data->imagePath }}" style="max-height:300px;border:solid black 1px" class="img-responsive">
        </div>
        <div class="col-md-3">
            <b>Merk:</b> {{ $data ->merk}}                        </br>
            <b>type:</b>   {{ $data ->type}}                       </br>
            <b>leverancier:</b>   {{ $data ->leverancier }}        </br>
            <b>Levensduur:</b>  {{ $data ->levensduur }}           </br>
            <b>Max wasbeurten:</b>  {{ $data ->maxwasbeurten }}    </br>
            <b>Description:</b>
            <p>{{ $data ->description }}</p>
        </div>
</div>
@endsection



@extends('layout.master')


@section('title')
    PBM
@endsection


@section('content')
<br>
    <h1> List PBM's </h1>
    <hr>
    <h1>Boots</h1>
    @foreach($boots->chunk(3) as $botChunk)
    <div class="row">
        @foreach($botChunk as $bot)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $bot->imagePath }}" style="max-height: 200px" class="img-responsive">
                    <div class="caption">
                        <h3>{{ $bot->title }}</h3>
                        <p>{{ $bot->description }}</p>
                        <div class="clearfix"><a href="#" class="btn btn-primary pull-right" role="button" >Details</a></div>
                    </div>
        
            </div>
        </div>
         @endforeach
    </div>
    @endforeach
<hr>
    <h1>Jassen</h1>
    @foreach($jassen->chunk(3) as $jasChunk)
    <div class="row">
        @foreach($jasChunk as $jas)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $jas->imagePath }}" style="max-height: 200px" class="img-responsive">
                    <div class="caption">
                        <h3>{{ $jas->title }}</h3>
                        <p>{{ $jas->description }}</p>
                        <div class="clearfix"><a href="#" class="btn btn-primary pull-right" role="button" >Details</a></div>
                    </div>
        
            </div>
        </div>
         @endforeach
    </div>
    @endforeach
    <hr>

    <h1>Broeken</h1>
    @foreach($broeken->chunk(3) as $broekChunk)
    <div class="row">
        @foreach($broekChunk as $broek)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $broek->imagePath }}" style="max-height: 200px" class="img-responsive">
                    <div class="caption">
                        <h3>{{ $broek->title }}</h3>
                        <p>{{ $broek->description }}</p>
                        <div class="clearfix"><a href="#" class="btn btn-primary pull-right" role="button" >Details</a></div>
                    </div>
        
            </div>
        </div>
         @endforeach
    </div>
    @endforeach
<hr>



    <h1>Handschoenen</h1>
    @foreach($handschoenen->chunk(3) as $handschoenChunk)
    <div class="row">
        @foreach($handschoenChunk as $handschoen)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $handschoen->imagePath }}" style="max-height: 200px" class="img-responsive">
                    <div class="caption">
                        <h3>{{ $handschoen->title }}</h3>
                        <p>{{ $handschoen->description }}</p>
                        <div class="clearfix"><a href="#" class="btn btn-primary pull-right" role="button" >Details</a></div>
                    </div>
        
            </div>
        </div>
         @endforeach
    </div>
    @endforeach
<hr>



@endsection
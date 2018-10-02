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
            <div class="card">
            <img class="card-img-top img-thumbnail rounded mx-auto d-block" src="{{ $bot->imagePath }}" style="width:200px;align:center;margin-top:15px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $bot->title }}</h5>
                        <p class="card-text">{{ $bot->description }}</p>
                        <a href="#" data-toggle="modal" data-target="#showModal" class="btn btn-primary">Detail</a>
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
            <div class="card">
                <img class="card-img-top img-thumbnail rounded mx-auto d-block" src="{{ $jas->imagePath }}" style="width:200px;align:center;margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $jas->title }}</h5>
                        <p class="card-text">{{ $jas->description }}</p>
                        <a href="#" data-toggle="modal" data-target="#showModal" class="btn btn-primary">Detail</a>
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
            <div class="card">
                <img class="card-img-top img-thumbnail rounded mx-auto d-block" src="{{ $broek->imagePath }}" style="width:200px;align:center;margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $broek->title }}</h5>
                        <p class="card-text">{{ $broek->description }}</p>
                        <a href="#" data-toggle="modal" data-target="#showModal" class="btn btn-primary">Detail</a>
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
            <div class="card">
                <img class="card-img-top img-thumbnail rounded mx-auto d-block" src="{{ $handschoen->imagePath }}" style="width:200px;align:center;margin-top:15px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $handschoen->title }}</h5>
                        <p class="card-text">{{ $handschoen->description }}</p>
                        <a href="#" data-toggle="modal" data-target="#showModal" class="btn btn-primary">Detail</a>
                    </div>
        
            </div>
        </div>
         @endforeach
    </div>
    @endforeach
<hr>

<!-- SHOW Modal -->

<div class="modal fade"  class:"bg-light" id="showModal" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
  
  <div class="vertical-alignment-helper">
          
    
    <div class="modal-dialog vertical-align-center" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Show User</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
        <img src="{{ URL('storage/PBM_Detail.jpg') }}" alt="..." class="img-thumbnail">
        </div>
        
      </div>
    </div>
    </div>
  </div>
  <!--End SHOW Modal -->   

@endsection
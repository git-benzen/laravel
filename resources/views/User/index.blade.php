@extends('layout.master')


@section('title')
    Users
@endsection


@section('content')

<div class="row" style="font-size: 1.2em;margin-top:20px;">
<div class="col align-self-center">
<div class="card">
            <div class="card-header">Users:
            <span class="float-md-right"><button class="btn btn-primary" data-toggle="modal" data-target="#newModal">New User</button></span>
            </div>
            <div class="card-body">

            
                <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{ $user->name }}  |  {{ $user->email }}  |  {{ $user->post }}  |  {{ $user->role }} 
                        <span class="float-md-right"> 
                        <a href="#" data-toggle="modal" data-target="#showModalUser"><span class="badge badge-info">show</span></a>
                        <a href="#" data-toggle="modal" data-target="#editModalUser"><span class="badge badge-success">edit</span></a>
                        </span>
                    </li>
                @endforeach
                    
                </ul>
               </br>
  
 
                {{ $users->links() }}
 
</div>
</div>
</div>

<!-- SHOW Modal -->

<div class="modal fade"  class:"bg-light" id="showModalUser" tabindex="-1" role="dialog" aria-labelledby="showModalLabel" aria-hidden="true">
  
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
      <img src="{{ URL('storage/User_Detail.jpg') }}" alt="..." class="img-thumbnail">
      </div>
      
    </div>
  </div>
  </div>
</div>
<!--End SHOW Modal -->  

<!-- EDIT Modal -->
<div class="modal fade" id="editModalUser" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="vertical-alignment-helper-newuser">  
  <div class="modal-dialog vertical-align-center" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
    <h2>name</h2>
    <h4>post</h4>
    <h4>email</h4>
    <h4>role</h4>
    <h4>maten kledij</h4>
    <h4>status kledij</h4>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
  </div>
</div>
<!--End EDIT Modal --> 

<!--NEW USER Modal -->
<div class="modal fade" id="newModal" tabindex="-1" role="dialog" aria-labelledby="newModalLabel" aria-hidden="true">
<div class="vertical-alignment-helper-newuser"> 
  <div class="modal-dialog vertical-align-center" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
<form>
<!--Start Input Name/Email --> 
  <div class="form-group">
      <div class="row">
        <div class="col">
          <input type="text" class="form-control" placeholder="First name" require>
        </div>
        <div class="col">
          <input type="text" class="form-control" placeholder="Last name" require>
        </div>
      </div>
  </div>
  <div class="form-group">
      <div class="row">
          <div class="col">
            <input type="email" class="form-control" placeholder="Email" require>
          </div>
          <div class="col">
            <input type="password" class="form-control" placeholder="Password" require>
          </div>
      </div>
  </div>
  <hr>
<!--END Input Name/Email --> 


<!--Start Select Post/Role --> 
  <div class="form-group">
      <div class="row">
        <div class="col">
            <select class="form-control" id="exampleFormControlSelect1">
              <option class="disabled">Select Post</option>
              <option>Brecht</option>
              <option>Brasschaat</option>
              <option>Edegem</option>
              <option>Malle</option>
              <option>Schoten</option>
              <option>Zandhoven</option>
              <option>Zonekantoor</option>
            </select>
  	    </div>
      
        <div class="col">
            <select class="form-control" id="exampleFormControlSelect1">
              <option class="disabled">Select Role</option>
              <option>user</option>
              <option>wasserij</option>
              <option>Postdelegé</option>
              <option>admin</option>
            </select>
  	      </div>
        </div>
      </div>
      
  </div>
  <hr>
<!--END Select Post/Role --> 
</form>
      
        <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save</button>
        </div>
    </div>
  </div>
  
  
  </div>
</div>
<!--End NEW USER Modal -->  

@endsection
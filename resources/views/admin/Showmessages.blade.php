
@extends('admin.sidebar')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
  
              <li>
                
                @if (Session::has('message') || Session::has('modifier') )
                <div class="card card-success">
                  <div class="card-header">
                    <h3 class="card-title">Succes</h3>
    
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i>
                      </button>
                    </div>
                    <!-- /.card-tools -->
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    {{Session::get('message') }}
                  </div>
             
                  </div>
                  @endif
              </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    
  
  <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Listes des Messages</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>Nom Client </th>
                      <th>Prenom Client</th>
                      <th>date de Message</th>
                      <th>Num Tele</th>
                      <th>Email</th>
                      <th>Message</th>
                      <th>Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                      @foreach ($messages as $message ) 
                    <tr>
                      
                      <td>{{$message->nom}}</td>
                      <td>{{$message->prenom}}</td>
                      <td>{{$message->created_at}}</td>
                      <td>{{$message->phone}}</td>
                      <td>{{$message->email}}</td>
                      <td>{{$message->message}}</td>
                      <td style="text-align: center;" ><a href="supprimermessage/{{$message->id}}"><i class="fas fa-trash-alt" style="color: red;text-align: center;" ></i></a> </td>
                    </tr>
                    @endforeach
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



@endsection


@extends('admin.sidebar')

@section('content')

<!-- Content Wrapper. Contains page content -->
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
                <h3 class="card-title">Listes des Servies</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Nom du Service </th>
                    <th>Prix</th>
                    <th>date de creation</th>
                    <th>Option 1</th>
                    <th>Option 2</th>
                    <th>Option 3</th>
                    <th>Option 4</th>
                    <th>Option 5</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $service ) 
                  <tr>
                    <td>{{$service->nom}}</td>
                    <td>{{$service->prix}} € </td>
                    <td>{{$service->created_at}}</td>
                    <td>{{$service->option1}}</td>
                    <td>{{$service->option2}}</td>
                    <td>{{$service->option3}}</td>
                    <td>{{$service->option4}}</td>
                    <td>{{$service->option5}}</td>
                    <td style="text-align: center;"> <a href="/modifier/{{$service->id}}" class="button delete-confirm"> <i class="far fa-edit" style="color: royalblue; "></i></a></td>
                    <td style="text-align: center;" ><a href="supprimer/{{$service->id}}"><i class="fas fa-trash-alt" style="color: red;text-align: center;" ></i></a> </td>
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
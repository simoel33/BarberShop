
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
             
              <li class="breadcrumb-item active">Service</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    

 <!-- SELECT2 EXAMPLE -->
 <div class="card card-default">
    <div class="card-header">
      <h3 class="card-title">Ajouter un Service</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse">
          <i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove">
          <i class="fas fa-times"></i>
        </button>
      </div>
    </div>
    <!-- /.card-header -->
    <form method="POST" action="{{route('post.service')}}">
        @csrf
        <div class="card-body">
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nom du Service</label>
    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" name="nom" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
            
              <!-- /.form-group -->
              <div class="form-group">
                <label>Prix</label>
    
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="number" name="prix" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
            </div>
            
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Option 3</label>
    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" name="option3" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>Option 4</label>
    
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" name="option4" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              
              <!-- /.form-group -->
              <script>

              </script>

           
            </div>
            <!-- /.col -->
          </div>
    
          <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label>Option 1</label>
    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" name="option1" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
            
              <!-- /.form-group -->
              <div class="form-group">
                <label>Option 2</label>
    
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                  <input type="text" name="option2" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form-group -->
            </div>
            
            <!-- /.col -->
            <div class="col-md-6">
                <div class="form-group">
                    <label>Option 5</label>
    
                    <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                      </div>
                      <input type="text" name="option5" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                    </div>
                    <!-- /.input group -->
                  </div>
              <!-- /.form-group -->
              <div class="form-group">
                <label>
                    Ajouter
                </label>
    
                <div class="input-group">
                  <div class="input-group-prepend">
                   
                  </div>
                  <button type="submit" class="btn btn-primary col start">
                    <i class="fas fa-upload"></i>
                    <span>Ajouter Le Service</span>            </div>
                <!-- /.input group -->
              </div>
              
              <!-- /.form-group -->
              
           
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
    
      </form>
        <!-- /.card-body -->
        <div class="card-footer">
         Ajouter Un Service
        </div>
      </div>
      <!-- /.card -->
    
    @endsection
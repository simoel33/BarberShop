
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<form method="POST" action="{{ route('add.service')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">nom</label>
      <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Prix</label>
      <input type="number" name="prix" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
  
    <div class="form-group">
        <label for="exampleInputPassword1">accecoires</label>
        <input type="text" name="accesoires" class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
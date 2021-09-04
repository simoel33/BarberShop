@extends('master')

@section('content')

<section class="ftco-section ftco-pricing " style="background-image: url({{asset('front/images/bg-1.jpg')}} );  background-size: cover;  background-repeat: no-repeat;">
 
    <div class="container">
        <div class="row justify-content-center pb-3">
  <div class="col-md-10 heading-section text-center ftco-animate">
 
    <h2 class="mb-4" style="color: white;">CONTACT </h2>
  </div>
</div>
<div class="row">

</div>
    </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
          <div class="col-md-6 text-center d-flex align-items-stretch">
            <div class="text-about py-5 px-4" >
              
               
<iframe name="FRAMENAME" src="{{asset('mp.html')}}" width="1000" style="z-index:10000" height="600" frameborder="0" scrolling="no" allowautotransparency=true></iframe>                </div>
        </div>
  
        <div class="col-md-3 text-center d-flex ">
            <div class="text-about py-5 px-4">
                <h1 class="logo">
                    <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BARBIER COIFFEUR</a>
                </h1>
                <h2>COORDONNÉES</h2>
                <p style="font-size: 15px; color: black; text-align: left;"> 
                    <ul style="color: peru;">
                    <span class="icon icon-map-marker"></span><br><span class="text" style="font-size: 15px; color: black; text-align: center;font-weight: bold;">117 Avenue de St Médard 115, 33320 Eysines, France. </span><br>
                    <span class="icon icon-phone"></span><br><span class="text" style="font-size: 15px; color: black; text-align: center;font-weight: bold;">	+33 6 13 92 39 34</span><br>
                    <span class="icon icon-envelope"></span><span class="text" style="font-size: 15px; color: black; text-align: center;font-weight: bold;">	Barbiercoiffeureysines@gmail.com</span><br>
                         <span class="icon icon-globe"></span><br><span class="text" style="font-size: 15px; color: black; text-align: center;font-weight: bold;">barbiercoiffeureysines.com</span><br>
                    </p>
                </ul>
                </div>
                </div>
                <div class="col-md-3 text-center d-flex ">
                    <div class="text-about py-5 px-4">
                        <h1 class="logo">
                            <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BARBIER COIFFEUR</a>
                        </h1>
                        <h2>HORAIRES</h2>
                        <p style="font-size: 15px; color: black; text-align: center;font-weight: bold;">

                          Nous vous accueillons tous les jours de la semaine sauf dimanche
                          
                            <br>
                             <strong style="color: peru;"">10h a 19h sans arrêt</strong>                                
                            </p>
                        </ul>
                        </div>
                        </div>
            
            </div>
        </div>
           
        </div>
    </div>
  </section>


  <section class="ftco-section ftco-booking bg-light">
    <div class="container ftco-relative">
        <div class="row justify-content-center pb-3">
      <div class="col-md-10 heading-section text-center ftco-animate">
          <span class="subheading">Contact</span>
        <h2 class="mb-4">Contacter Nous</h2>
        <p>Pour vos questions et reservations contacter Nous</p>
      </div>
    </div>
    <h3 class="vr">Call Us: 	+33 6 13 92 39 34</h3>
        <div class="row justify-content-center">
            <div class="col-md-10 ftco-animate">
                <form method="POST"  action="{{route('get.message')}}" >
                    @csrf
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                      <input type="text" class="form-control" name="nom" id="appointment_name" placeholder="Nom">
                      @error('nom')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
                    </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                      <input type="text" class="form-control" name="prenom" id="appointment_email" placeholder="Prenom">
                      @error('prenom')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    </div>
              </div>
             
              
              <div class="col-sm-6">
                <div class="form-group">
                      <div class="select-wrap">
                        <input type="text" class="form-control"  name="email" id="appointment_email" placeholder="Email">
                        @error('email')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                    </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
                  @error('phone')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
                </div>
              </div>
              <div class="col-md-12">
                  <div class="form-group">
                    <textarea name="message" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
                    @error('message')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror 
                </div>
              </div>
              </div>
              <div class="form-group">
              <input type="submit" value="Contacter Nous" class="btn btn-primary">
            </div>
          </form>
            </div>
        </div>
    </div>
</section>
    

@endsection
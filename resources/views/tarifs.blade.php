@extends('master')

@section('content')

<section class="ftco-section ftco-pricing " style="background-image: url({{asset('front/images/barbregauche.jpg')}} );  background-size: cover;  background-repeat: no-repeat;">
 
    <div class="container">
        <div class="row justify-content-center pb-3">
  <div class="col-md-10 heading-section text-center ftco-animate">
 
    <h2 class="mb-4" style="color: blanchedalmond">Tarifs Barbe</h2>
  </div>
</div>
<div class="row">
    @foreach ($forfaits as $forfait)
        
    
    <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
            <div>
                <h2 style="color: #340E0E; font-weight: bold;  background-color: lightgrey;" class="mb-4" style="color: white; font-weight: bold;">{{$forfait->nom}}</h2>
                <p><span class="price" style="color: cornsilk">{{$forfait->prix}}€</span> <span class="per"></span></p>
            </div>
            <ul style="color:black; font-weight: bold; size: 7px; ">
              

                        <li>{{$forfait->option1}}</li>
                        <li>{{$forfait->option2}}</li>
                        <li>{{$forfait->option3}}</li>
                        <li>{{$forfait->option4}}</li>
                        <li>{{$forfait->option5}}</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        </div>
    </div>
    @endforeach
</div>
    </div>
</section>

<section class="ftco-section ftco-pricing">
    <div class="container">
        <div class="row justify-content-center pb-3">
  <div class="col-md-10 heading-section text-center ftco-animate">
      <span class="subheading">Tarifs</span>
    <h2 class="mb-4">Tarifs Coupe</h2>
  </div>
</div>
<div class="row">
    @foreach ($services as $value)
    <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
            <div>
                <h3  class="mb-4">{{$value->nom}}</h3>
                <p><span class="price">{{$value->prix}}€</span> <span class="per"></span></p>
            </div>
            <ul>             
                        <li>{{$value->option1}}</li>
                        <li>{{$value->option2}}</li>
                        <li>{{$value->option3}}</li>
                        <li>{{$value->option4}}</li>
                        <li>{{$value->option5}}</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        </div>
    </div>
    @endforeach
        </div>
    </div>
</div>
    </div>
</section>

<section class="ftco-section ftco-pricing " style="background-image: url({{asset('front/images/barbregauche.jpg')}} );  background-size: cover;  background-repeat: no-repeat;">
 
    <div class="container">
        <div class="row justify-content-center pb-3">
  <div class="col-md-10 heading-section text-center ftco-animate">
 
    <h2 class="mb-4" style="color: blanchedalmond">Nos Forfaits</h2>
  </div>
</div>
<div class="row">
    @foreach ($collections as $collection)
        
    
    <div class="col-md-3 ftco-animate">
        <div class="pricing-entry pb-5 text-center">
            <div >
                <h2 class="mb-4" style="color: #340E0E; background-color: lightgrey; font-weight: bold;">{{$collection->nom}}</h2>
                <p ><span style="color: cornsilk" class="price">{{$collection->prix}}€</span> <span class="per"></span></p>
            </div>
            <ul style="color:black; font-weight: bold; size: 7px; ">
              

                        <li style="color: black;">{{$collection->option1}}</li>
                        <li>{{$collection->option2}}</li>
                        <li>{{$collection->option3}}</li>
                        <li>{{$collection->option4}}</li>
                        <li>{{$collection->option5}}</li>
            </ul>
            <p class="button text-center"><a href="#" class="btn btn-primary px-4 py-3">Get Offer</a></p>
        </div>
    </div>
    @endforeach
</div>
    </div>
</section>


 
    

@endsection
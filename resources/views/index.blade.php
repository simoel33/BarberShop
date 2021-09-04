@extends('master')

@section('content')



<section class="hero-wrap js-fullheight" style="background-image: url({{asset('front/images/bg-2.jpg')}});" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text js-fullheight justify-content-center align-items-center">
        <div class="col-lg-12 ftco-animate d-flex align-items-center">
            <div class="text text-center">
                <span class="subheading">BIENVENUE To BARBIER COIFFEUR</span>
                        <h1 class="mb-4">VOTRE SALON DE COIFFURE HOMME & BARBIER <br>
                        ACCUEIL sans rendez-vous
                        </h1>
                <p><a href="#" class="btn btn-primary btn-outline-primary px-4 py-2">BARBIER COIFFEUR </a></p>
           </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container-fluid px-0">
        <div class="row no-gutters">
            <div class="col-md text-center d-flex align-items-stretch">
                <div class="services-wrap d-flex align-items-center img" style="background-image: url({{asset('front/images/formen.jpg')}} );">
                    <div class="text">
                        <h3>COIFFURE</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-3 text-center d-flex align-items-stretch">
                <div class="text-about py-5 px-4">
                    <h1 class="logo">
                        <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BARBIER COIFFEUR</a>
                    </h1>
                    <h2>Bienvenue a Notre Salon</h2>
                    <p style="font-size: 15px; color: black;">
                      <strong><span style="text-decoration: underline">BARBIER COIFFEUR MASCULIN</span> </strong> est un nouveau <strong> salon de coiffure  </strong> situé à <strong> Eysines proche à Mérignac ,caudéran,le haillan,Bordeaux</strong> </strong>. Nous sommes qualifiés et <strong> experts</strong> dans <strong> la coiffure homme</strong>  et taille de barbe.
                      Nous vous accueillons tous les jours de la semaine sauf le dimanche. Pour faciliter votre accès, un parking gratuit devant la boutique, pas loin de l'arrêt de <strong>bus la forêt</strong>  de 100 mètres.
                    </p>
                    <p class="mt-3"><a href="#" class="btn btn-primary btn-outline-primary">COIFFEUR</a></p>
                </div>
            </div>
            <div class="col-md text-center d-flex align-items-stretch">
                <div class="services-wrap d-flex align-items-center img" style="background-image: url( {{asset('front/images/barberie.jpg')}}">
                    <div class="text">
                        <h3>UN BARBIER PROFESSIONNEL </h3>

                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="services-section ftco-section">
<div class="container">
  <div class="row justify-content-center pb-3">
  <div class="col-md-10 heading-section text-center ftco-animate">
      <span class="subheading">Services</span>
    <h2 class="mb-4">Services Menu</h2>
    <p>Nous vous proposons des diffèrntes Services une coupe de cheveux personnalisée, Coupe jeunne , Coupe classique ...<br>
         de  haute sgamme et nous vous apportons tous les conseils d’un professionnel pour une prestation de qualité.
    </p>
    <p>Notre Salon possède un style boisé et chaleureux qui donne a notre chèr clients un source de confort . </p>
  </div>
</div>

</div>
</div>
</section>






<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container-fluid px-0">
      <div class="row no-gutters">
          <div class="col-md-6 text-center d-flex align-items-stretch">
              <div class="services-wrap d-flex align-items-center img" style="background-image: url({{asset('front/images/barbregauche.jpg')}} );">
                 
              </div>
          </div>
          <div class="col-md-6 text-center d-flex align-items-stretch">
              <div class="text-about py-5 px-4">
                  <h1 class="logo">
                      <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BARBIER COIFFEUR</a>
                  </h1>
                  <h2>Les Tarifs Coiffure Masculin</h2>
                  <p style="font-size: 20px; color: black;">
                    Nous proposons une gamme complète de services ainsi que des produits hauts de gamme, sélectionnés ! 
                   <a href="/tarifs"> Découvrez nos tarifs </a> </p>
                  <p class="mt-3"><a href="/tarifs" class="btn btn-primary btn-outline-primary">Nos Tarifs</a></p>
              </div>
          </div>
         
      </div>
  </div>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
  <div class="container-fluid px-0">
      <div class="row no-gutters">
        <div class="col-md-6 text-center d-flex align-items-stretch">
          <div class="text-about py-5 px-4" >
              <h1 class="logo">
                  <a href="#"><span class="flaticon-scissors-in-a-hair-salon-badge"></span>BARBIER COIFFEUR</a>
              </h1>
              <h2>Le Salon en Images</h2>
              <p style="font-size: 20px; color: black;">
                Nous vous proposons de découvrir votre  <strong> salon de coiffure </strong> en images, nous mettrons régulièrement à jour cette galerie !  </p>
              <p class="mt-3"><a href="/gellry" class="btn btn-primary btn-outline-primary">Galery</a></p>
          </div>
      </div>

          <div class="col-md-6 text-center d-flex align-items-stretch">
              <div class="services-wrap d-flex align-items-center img" style="background-image: url({{asset('front/images/formen.jpg')}} );">
                
              </div>
          </div>
         
         
      </div>
  </div>
</section>




@endsection
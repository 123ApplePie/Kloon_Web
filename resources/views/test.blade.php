<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kloon WEB</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    {{-- NAVBAR --}}
        <x-navbar/>
    {{-- END NAVBAR --}}

    {{-- HERO --}}
        <x-hero/>
    {{-- END HERO --}}

    {{-- FEEDBACK --}}
        <x-feedback/>
    {{-- END FEEDBACK --}}

    {{-- BANNER --}}
    <section class="bg-dark" style="background-image: url('https://cdn.brocacef.nl/-/media/project/corporate/brocacef/header-_hero-visuals/ict-dienstverlening-01.png?h=600&la=nl-NL&w=1800&rev=45c9a4066e9443c4a3c7b115b8c73748&hash=5DC530462C55EC7D15E141F9AD3BC174')">
    <div class="container" style="padding-top:2%;padding-bottom:2%">
        <div class="row">
          <div class="col-md-6" style="visibility:hidden">
            <div class="card">
              <div class="card-body">
                <!-- Content for the left column -->
                <h5 class="card-title">Left Column</h5>
                <p class="card-text">This is some content for the left column.</p>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <!-- Content for the right column -->
                <h5 class="card-title" style="font-size: 40px;font-weight:700">Laat je website maken door Experts</h5>
                <p class="card-text" style="font-size: 22px;">
                    <br>
                    Onze professionals gaan geen uitdaging uit de weg. De afgelopen jaren hebben wij al meer dan 2500 websites gebouwd voor ruim 1800 tevreden klanten. Wil je ook door ons je website laten maken of wil je gewoon vrijblijvend advies? Wij informeren je graag.
                    <br><br>
                    Wij maken de website die bij jou past.
                </p>

                <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary btn-block" data-mdb-ripple-init>
                    Offerte aanvragen
                    <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END BANNER --}}


    {{-- PROS --}}
    <div class="container">
        <div class="row" style="padding-top: 5%;padding-bottom:5%">
          <div class="col-md-7">
            <div class="">
              <div class="card-body">
                <!-- Content for the left column -->
                <h3 class="" style="font-size: 50px;font-weight:700">Waarom een website laten maken bij Kloon Web?</h3>
                {{-- <p class="card-text">This is some content for the left column.</p> --}}
              </div>
            </div>
          </div>
          <div class="col-md-5">
            <div class="">
              <div class="card-body">
                <!-- Content for the right column -->
                {{-- <h5 class="card-title">Right Column</h5> --}}
                <p class="card-text" >
                    <ul style="font-size: 22px;list-style: none;">
                      <li>
                        <svg class="" style="width: 25px; color: #A74AC7;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        Van een basis website tot maatwerk inclusief strategisch advies
                    </li>                        
                    <li>
                          <svg class="" style="width: 25px;color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          Met ruim 15 jaar ervaring zijn we specialist in ons vakgebied
                        </li>
                        <li>
                          <svg class="" style="width: 25px;color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          Je website werkt perfect op mobiel, tablet én PC
                        </li>
                        <li>
                          <svg class="" style="width: 25px;color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          Wij zijn transparant over prijzen: geen verrassingen achteraf
                        </li>
                        <li>
                          <svg class="" style="width: 25px;color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          Je bent 100% baas over je eigen eenvoudig te beheren website
                        </li>
                        <li>
                          <svg class="" style="width: 25px;color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                          </svg>
                          Onze vriendelijke helpdesk staat voor je klaar
                        </li>
                    </ul>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    {{-- END PROS --}}


    {{-- PROMO --}}
    <section style="background-color: #DBE9FA">
    <div class="container" style="background-color: #DBE9FA;padding-top:5%;padding-bottom:5%">
        <div class="d-flex justify-content-center align-items-center">
          <div class="col-md-7">
            <div class="">
              <div class="card-body text-center">
                <h3 class="font-weight-bold" style="font-size: 50px;font-weight:700">Je website laten maken door professionals? Ons team staat dagelijks voor je klaar</h3>
                {{-- <p class="card-text">This is some content for the left column.</p> --}}
                <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2);margin-top:20px" class="btn btn-primary" data-mdb-ripple-init>
                    Offerte aanvragen
                    <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </button>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    {{-- END PROMO --}}


    {{-- PLAN --}}
    <section>
        <div class="container">
            <div class="row" style="padding-top: 5%;padding-bottom:5%">
              <div class="col-md-7">
                <div class="">
                  <div class="card-body">
                    <!-- Content for the left column -->
                    <h3 class="" style="font-size: 40px;font-weight:700">Van basis tot maatwerk met strategisch advies</h3>
                    <p class="card-text" style="font-size: 22px;">
                        Wat een goede website is, dat is voor ieder bedrijf anders. Bij Mooi Online delen wij de websites die wij maken grofweg in de categorieën Basis website, Premium website  en Maatwerk website. Wij denken met je mee en komen met een oplossing voor ieder budget, met een goede prijs-kwaliteitverhouding. Zodat jij uit je website haalt wat voor jou van belang is. Van een informatieve website tot een maatwerk website inclusief strategisch advies.
                    </p>
                    <br>
                    <h3 class="" style="font-size: 40px;font-weight:700">De basis is altijd goed</h3>
                    <p class="card-text" style="font-size: 22px;">
                        Hoe uitgebreid of juist eenvoudig je website of webshop ook wordt, de basis moet altijd op orde zijn. Bij ons ben je zeker van een website die technisch goed in elkaar zit, snel laadt, technisch geoptimaliseerd is voor Google en er ook nog eens mooi uitziet. We heten niet voor niets Mooi Online.                     
                    </p>

                  </div>
                </div>
              </div>
              <div class="col-md-5">
                <div class="">
                  <div class="card-body bg-dark p-5">
                    <!-- Content for the right column -->
                    <h5 class="card-title text-light" style="font-size: 30px">Bestel je website <span style="font-weight: 700">VANDAAG</span>  en <span style="font-weight: 700">PROFITEER</span>  van vele extra’s</h5>
                    <p class="card-text" >
                      <ul class="text-light" style="font-size: 22px; list-style: none; padding-left: 0;">
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Hosting
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> SSL Certificaat
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Support (telefonisch & per mail)
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Backups
                        </li>
                        <li style="position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Beveiligingsupdates
                        </li>
                    </ul>                        
                    <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary" data-mdb-ripple-init>
                            Offerte aanvragen
                            <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>    
    </section>
    {{-- END PLAN --}}


    {{-- SERVICE --}}
    <section style="background-color: #DBE9FA">
        <div class="container" style="background-color: #DBE9FA;padding-top:5%;padding-bottom:5%">
            <div class="d-flex justify-content-center align-items-start">
              <div class="col-md-9">
                <div class="">
                  <div class="card-body text-center">
                    <h3 class="font-weight-bold" style="font-size: 40px;font-weight:700">Je nieuwe website zelf eenvoudig beheren</h3>
                    <p class="card-text" style="font-size: 22px;">Bij ons ben je 100% baas over je eigen website. Hij staat op je eigen domeinnaam en we bouwen hem met WordPress, een systeem waarmee je eenvoudig zelf je website kunt beheren. Zodat je ons niet voor ieder wissewasje nodig hebt.

                        Laat je het toch liever aan ons over? Ga dan voor onze Mooi Makkelijk Strippenkaart. Zo weet je vooraf al waar je aan toe bent.</p>    
                  
                    <br>
                    <h3 class="font-weight-bold" style="font-size: 40px;font-weight:700">Transparant over prijzen</h3>
                    <p class="card-text" style="font-size: 22px;">Niets is zo vervelend als een factuur die achteraf veel hoger uitkomt dan verwacht. Bij ons weet je altijd waar je aan toe bent. Van tevoren maken we goede afspraken, zodat je nooit achteraf voor verrassingen komt te staan. Wel zo eerlijk.</p>    
                    <br>
                    <h3 class="font-weight-bold" style="font-size: 40px;font-weight:700">Onze helpdesk staat voor je klaar</h3>
                    <p class="card-text" style="font-size: 22px;">Wij staan bekend om onze vriendelijke en goed te bereiken helpdesk. Je kunt ons gewoon bellen of mailen als je ergens niet uit komt. Dan helpen we je, in begrijpelijke taal. Ook krijg je duidelijke uitlegvideo’s, die je nog eens rustig terug kunt kijken op het moment dat het jou uitkomt.</p>    
                    <br>
                    <h3 class="font-weight-bold" style="font-size: 40px;font-weight:700">Wij helpen je ook met online marketing</h3>
                    <p class="card-text" style="font-size: 22px;">Je website staat als een huis. En nu? Als ervaren marketeers kunnen wij je ook helpen op het gebied van online marketing. Zodat je website nog beter vindbaar is in Google en je conversies door het dak gaan dankzij conversieoptimalisatie, e-mailmarketing en/of online adverteren (SEA).
                        <br><br>
                        Nieuwsgierig naar de mogelijkheden? <span style="color:#A74AC7">Neem contact op</span> </p>    

                  </div>
                </div>
              </div>
            </div>
          </div>
    </section>    
    {{-- END SERVICE --}}


    {{-- PARTNERS --}}
    <section>
        <div class="container">
            <div class="row" style="padding-top: 5%;padding-bottom:5%">
                <h3 style="font-weight: 700">Partners en samenwerkingen:</h3>
              <div class="col-md-3">
                <div class="">
                  <div class="card-body p-5">
                    <img src="https://s29814.pcdn.co/wp-content/uploads/2021/07/MBO-Logo-Red.svg" style="width: 100%" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="">
                  <div class="card-body p-5">
                    <img src="https://www.partnersbhm.org/wp-content/uploads/2016/08/Partners-logo-horizonal.jpg" style="width: 100%" alt="">
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="">
                  <div class="card-body p-5">
                    <img src="https://bgl.nl/wp-content/uploads/2023/04/bgl-logo.png" style="width: 100%" alt="">
                </div>
                </div>
              </div>
              <div class="col-md-3">
                <div class="">
                  <div class="card-body p-5">
                    <img src="https://www.cmpartners.nl/wp-content/themes/cm-partners/images/logo-2021-full.png" style="width: 100%" alt="">
                </div>
                </div>
              </div>
            </div>
          </div>    
    </section>
    {{-- END PARTNERS --}}


    {{-- OUTRO --}}
    <section class="bg-dark" style="background-image: url('https://www.losning.nl/cache/243282222167993f2189adbc47434afd/6redenomictuittebestedenweb.jpg');background-repeat:no-repeat;background-size:cover;background-position:center">
        <div class="container" style="padding-top:2%;padding-bottom:2%">
            <div class="row">
              <div class="col-md-6" style="visibility:hidden">
                <div class="card">
                  <div class="card-body">
                    <!-- Content for the left column -->
                    <h5 class="card-title">Left Column</h5>
                    <p class="card-text">This is some content for the left column.</p>
                  </div>
                </div>
              </div>
              <div class="col-md-6" style="visibility:hidden">
                <div class="card">
                  <div class="card-body">
                    <!-- Content for the right column -->
                    <h5 class="card-title" style="font-size: 40px;font-weight:700">Laat je website maken door Experts</h5>
                    <p class="card-text" style="font-size: 22px;">
                        <br>
                        Onze professionals gaan geen uitdaging uit de weg. De afgelopen jaren hebben wij al meer dan 2500 websites gebouwd voor ruim 1800 tevreden klanten. Wil je ook door ons je website laten maken of wil je gewoon vrijblijvend advies? Wij informeren je graag.
                        <br><br>
                        Wij maken de website die bij jou past.
                    </p>
    
                    <button type="button" class="btn btn-warning d-flex">Offerte aanvragen
                        <svg class="text-gray-800 dark:text-white" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                          </svg>
                    </button>
    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        {{-- END OUTRO --}}


    {{-- FOOTER --}}
      <x-footer/>
    {{-- END FOOTER --}}

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
@extends('layouts.guest')

@section('title', 'Kloon Web - Websites')

@section('content')
<div class="bg-dark" style="margin-top: 3%; padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card bg-dark">
                    <div class="card-body bg-dark">
                        <div class="d-sm-flex align-items-center justify-content-between bg-dark">
                            <div style="width: 120%">
                                <h1 class="text-light" style="font-weight: 700; font-size: 50px">Kies je website.</h1>
                                {{-- <h3 class="text-light my-4" style="font-size: 30px">Wij maken de website waarmee jij jouw doelen bereikt.</h3> --}}
                                <p class="text-light lead my-4">
                                    Hoe uitgebreid of hoe simpel je website ook moet zijn, bij Mooi Online hebben we alle kennis en tools in huis om van jouw website een online succes te maken.
                                </p>
                                <button class="btn btn-primary btn-lg rounded-4" style="font-weight: 500; font-size: 20px; background: linear-gradient(to right, #A74AC7, #45aaf2)">OFFERTE AANVRAGEN</button>
                                {{-- <button class="btn text-white btn-lg fs-6" style="font-weight:500;">Lees Meer -></button> --}}
                            </div>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="col-md-5">
                <div class="card rounded-circle" style="width: 600px; height: 600px; overflow: hidden;">
                  <div class="card-body d-flex flex-column justify-content-center align-items-center">
                    <img src="https://www.hu.nl/-/media/hu/afbeeldingen/opleidingen/features/voltijd/media-communicatie-en-it/hbo-ict-vt/20211112-hbo-ict-voltijd-t8a3915.ashx" alt="Circle Image" class="img-fluid" style="width: 600px; height: 600px;">
                </div>              
              </div>
            </div>
        </div>
    </div>
  
    <div class="d-flex align-items-center justify-content-center text-slate-600" style="background-color: white; margin-top: -150px;">
        <section class="container pt-5 pb-4" style="visibility: hidden">
            <ul class="gap-3 d-flex flex-column flex-sm-row relative overflow-hidden mb-10" style="background-color: #DBE9FA">
                <li class="pr-sm-4 overflow-hidden grow">
                    <h3 class="mb-3 text-xl mt-3" style="font-size: 30px; font-weight: 700">"Een website kun je overal laten maken,
                        <br>  een succesvolle website laat je maken door Kloon Web!"</h3>
                    <p class="max-w-md" style="font-size: 20px;">Laat je nieuwe website maken door ons. Meer dan 1500 klanten gingen je voor.</p>
                </li>
            </ul>
        </section>
    </div>
</div>
  

  <div class="container mb-5">
    <div class="row">
        <div class="col-md-4">
            <h1 style="font-weight: 700">Basis</h1>
            <div class="card h-100 ">
                <div class="card-body px-4 py-5 shadow border border-primary rounded " style="">
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">
                        vanaf 899,-
                    </h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">Een succesvolle website hoeft niet ingewikkeld te zijn. Onze basiswebsite heeft al heel veel mogelijkheden. Jij levert je materialen aan en wij zetten het professioneel in jouw website.</p>
                
                    <div class="" style="margin-top: 50px">
                        <button type="button" class="my-4 btn btn-outline-primary btn-block" data-mdb-ripple-init>
                            Meer over dit pakket
                            <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                        <br>
                        <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary btn-block" data-mdb-ripple-init>
                            Offerte aanvragen
                            <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </div>
    
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <h1 style="font-weight: 700">Premium</h1>
            <div class="card h-100">
                <div class="card-body px-4 py-5 shadow border border-primary rounded " >
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">vanaf 1450,-</h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">Stel je hogere eisen aan je website? Wil je graag dat wij meedenken hoe je jouw website het beste voor je laat werken, zodat je meer conversie uit je website haalt? Onze premiumwebsite biedt alles wat jij zoekt in een website.</p>
                
                    <div class="mt-auto">
                        <button type="button" class="my-4 btn btn-outline-primary btn-block" data-mdb-ripple-init>
                            Meer over dit pakket
                            <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                        <br>
                        <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary btn-block" data-mdb-ripple-init>
                            Offerte aanvragen
                            <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>
                    </div>
    
                </div>

            </div>
        </div>
        <div class="col-md-4">
            <h1 style="font-weight: 700">Maatwerk</h1>
            <div class="card h-100">
                <div class="card-body px-4 py-5 shadow border border-primary rounded" >
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">vanaf 2250,-</h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">De maatwerkwebsite is dé oplossing voor professionele bedrijven die maximaal resultaat uit hun website willen halen. Onze creatieve medewerkers zetten alles op alles om jouw website tot een absoluut succes te maken.</p>
                    <div class="mt-auto">
                    <button type="button" class="my-4 btn btn-outline-primary btn-block" data-mdb-ripple-init>
                        Meer over dit pakket
                        <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                    <br>
                    <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary btn-block" data-mdb-ripple-init>
                        Offerte aanvragen
                        <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="padding-top: 10%; padding-bottom: 5%">
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="" style="font-size: 50px; font-weight: 700">Wij maken ook van jouw bedrijf een online succes</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p class="card-text">
                    <ul style="font-size: 22px; list-style: none;">
                        <li>
                            <svg class="" style="width: 25px; color: #A74AC7;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="ms-3" style="font-weight: 700">Zoekmachineoptimalisatie (SEO)</span>  <br>
                           <span class="ms-5">Kloon Web zorgt dat je website gevonden wordt.</span> 
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="ms-3" style="font-weight: 700">Online adverteren (SEA)</span>  <br>
                           <span class="ms-5">Wist je dat we Google Partner zijn?</span> 
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="ms-3" style="font-weight: 700">Conversieoptimalisatie</span> <br>
                            <span class="ms-5">Haal het maximale uit je website.</span> 
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="ms-3" style="font-weight: 700">Het ontwerpen en vormgeven van offline diensten</span>  <br>
                           <span class="ms-5">Laat Kloon Web je logo of flyer ontwerpen.</span> 
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            <span class="ms-3" style="font-weight: 700">Sociale media</span>  <br>
                           <span class="ms-5">Kloon Web traint en ondersteunt je op al je kanalen.</span> 
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>

<div class="bg-dark">
<div class="container mt-4">
    <div class="row">
        <div class="col-md-6">
            <div class="">
                <div class="card-body bg-dark" style="padding-top: 10%">
                    <h3 class="text-light" style="font-size: 40px; font-weight: 700">Meer weten over onze websitepakketten?</h3>
                    <span style="color: #A74AC7;font-size:25px">Neem vrijblijvend contact op</span>
                    <br><br>
                    <p class="text-light" style="font-size: 20px">Wil je weten welk pakket voor jou geschikt is of heb je andere <br> vragen? Bel of mail ons gerust, we helpen je graag</p>
                    
                    <svg class="" style="width: 4%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                        <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
                    </svg>
                   <span class="text-light" style="margin-left:10px;font-size:20px">1122334455</span> 

                   <svg class="ms-5" style="width: 4%;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                    <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
                    </svg>
                    <span class="text-light" style="margin-left:10px;font-size:20px">sales@kloonweb.com</span> 
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="">
                <img src="https://ictteamwork.nl/wp-content/uploads/2023/10/DSC01393-scaled.jpg" class="card-img-top" alt="Card Image">
            </div>
        </div>
    </div>
</div>
</div>

<div class="container">
    <div class="row" style="padding-top: 10%; padding-bottom: 5%">
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="" style="font-size: 50px; font-weight: 700">De teksten en beelden op je website</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p class="card-text" style="font-size:22px">
                    In principe gaan we er bij Mooi Online altijd van uit dat jij zelf je teksten en beeldmateriaal aanlevert. Maar we realiseren ons ook dat het schrijven van goede, converterende teksten een vak apart is.
                    <br><br>
                    Wil jij zeker weten dat je op jouw website de taal van de bezoeker spreekt en wil je dat je bezoeker direct overgaat tot actie? Laat Mooi Online dan je teksten verzorgen. Wij zorgen ervoor dat de teksten op je website converteren én dat je bovendien goed gevonden wordt in zoekmachines.
                    <br><br>
                    Ook voor het verzamelen van passend beeldmateriaal kun je bij Mooi Online terecht. Uiteraard gaat alles in overleg met jou en geven we je vooraf een duidelijke prijsindicatie.
                </p>
            </div>
        </div>
    </div>
</div>


<div>
    <div class="container">
        <div class="row" style="padding-top: 10%; padding-bottom: 5%">
            <div class="col-md-4">
                <div class="card-body">
                    <h3 class="" style="font-size: 50px; font-weight: 700">Voorbeelden van recent geleverde websites</h3>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://ontwerpvanwouter.nl/wp-content/uploads/2018/06/Webdesign_Huisartsenpraktijk_Lichtenberch_Utrecht_Ontwerp_Van_Wouter_Barneveld.jpg" class="d-block w-100" alt="Image 1">
                          </div>
                          <div class="carousel-item">
                            <img src="https://ontwerpvanwouter.nl/wp-content/uploads/2017/09/Webdesign_Onderweegs_en_de_Groot_Ontwerp_Van_Wouter_Barneveld.jpg" class="d-block w-100" alt="Image 2">
                          </div>
                          <div class="carousel-item">
                            <img src="https://ontwerpvanwouter.nl/wp-content/uploads/2017/09/Webdesign_De_Valk_Wekerom_Ontwerp_Van_Wouter_Barneveld.jpg" class="d-block w-100" alt="Image 3">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-body">
                    <div id="carouselExample" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="https://ontwerpvanwouter.nl/wp-content/uploads/2017/09/Webdesign_Nautasign_Ontwerp_Van_Wouter_Barneveld.jpg" class="d-block w-100" alt="Image 1">
                          </div>
                          <div class="carousel-item">
                            <img src="https://ckwebsitedesign.ie/wp-content/uploads/2021/09/ck-website-design-project-of-custom-website-design-homeschool-ireland.jpg" class="d-block w-100" alt="Image 2">
                          </div>
                          <div class="carousel-item">
                            <img src="https://creativeteam.nl/wp-content/uploads/2019/02/kegcoah_transparant_2.png" class="d-block w-100" alt="Image 3">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExample" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExample" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #DBE9FA">
<div class="container">
    <div class="row" style="padding-top: 10%; padding-bottom: 5%">
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="" style="font-size: 40px; font-weight: 700">Welk website pakket je ook <br> kiest, je krijgt altijd:</h3>
                <p>
                    <ul class="text-dark" style="font-size: 22px; list-style: none; padding-left: 0;">
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Professionele Hosting
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> SSL Certificaat
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Support via telefoon & mail
                        </li>
                        <li style="margin-bottom: 10px; position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Backups
                        </li>
                        <li style="position: relative;">
                            <span style="color: #A74AC7;">&#8226;</span> Beveiligingsupdates
                        </li>
                    </ul>
              </p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="" style="font-size: 40px; font-weight: 700">Persoonlijke offerte ontvangen?</h3>

                <form method="POST" action="" style="padding-top:5%">
                    @csrf
                    <div data-mdb-input-init class="form-outline mb-4">
                        <input id="" name="bericht" class="form-control">
                        <label class="form-label" for="">Bedrijfsnaam</label>
                    </div>
  
                    <div class="row mb-4">
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="" name="naam" class="form-control" />
                          <label class="form-label" for="">Voornaam</label>
                        </div>
                      </div>
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="" name="telefoon" class="form-control" />
                          <label class="form-label" for="">Achternaam</label>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="" name="email" class="form-control" />
                            <label class="form-label" for="">Telefoon</label>
                          </div>
                        </div>
                        <div class="col">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="" name="onderwerp" class="form-control" />
                            <label class="form-label" for="">E-mailadres</label>
                          </div>
                        </div>
                    </div>
  
                  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <textarea id="" name="bericht" class="form-control"></textarea>
                      <label class="form-label" for="">Vertel iets over je wensen</label>
                    </div>
                  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="file" id="form3Example4" class="form-control" />
                      <label class="form-label" for="form3Example4">Bijlage</label>
                    </div>
                                    
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-block mb-4 text-light" style="background: linear-gradient(to right, #A74AC7, #45aaf2)">Aanvragen</button>
                  
                  </form>            

            </div>
        </div>
    </div>
</div>
</div>

<div class="bg-dark" style="background-image: url('https://www.losning.nl/cache/243282222167993f2189adbc47434afd/6redenomictuittebestedenweb.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;"></div>


@endsection
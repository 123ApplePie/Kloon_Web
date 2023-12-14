@extends('layouts.guest')

@section('title', 'Kloon Web - Webshops')

@section('content')
<div class="bg-dark" style="margin-top: 3%; padding-top: 5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="card bg-dark">
                    <div class="card-body bg-dark">
                        <div class="d-sm-flex align-items-center justify-content-between bg-dark">
                            <div style="width: 120%">
                                <h1 class="text-light" style="font-weight: 700; font-size: 50px">Professionele webshop laten maken?</h1>
                                {{-- <h3 class="text-light my-4" style="font-size: 30px">Wij maken de website waarmee jij jouw doelen bereikt.</h3> --}}
                                <p class="text-light lead my-4">
                                    Wil jij een webshop laten maken? Of heb je al een webshop, maar zoek je een partij om een nieuwe webshop te laten maken? Bij Mooi Online vind je de webshop die bij jou past.                                
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
                    <img src="/img/programmer.jpg" alt="Circle Image" class="img-fluid" style="width: 600px; height: 600px;">
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
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">
                        vanaf 950,-
                    </h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">Onze BASIS-webshop is al meer dan compleet. De BASIS-webshop is een degelijke webshop waar je op professionele manier je producten online kunt verkopen. Uiteraard behoren betalingen met iDEAL en PayPal tot de standaardmogelijkheden.</p>
                    <button type="button" class="my-4 btn btn-outline-primary btn-block" data-mdb-ripple-init>
                        Meer over dit pakket
                        <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                    <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2)" class="btn btn-primary btn-block" data-mdb-ripple-init>
                        Offerte aanvragen
                        <svg class="text-gray-800 dark:text-white ml-4" style="width: 5%;visibility:hidden" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h1 style="font-weight: 700">Premium</h1>
            <div class="card h-100">
                <div class="card-body" >
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">vanaf 1750,-</h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">Wil je meer met je webshop dan alleen producten tonen en verkopen? Wil je jouw webshop uitbreiden met diverse modules, of wil je een website met daarin een webshop? Dan is ons PREMIUM-pakket voor jou een geschikte optie.</p>
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
        <div class="col-md-4">
            <h1 style="font-weight: 700">Maatwerk</h1>
            <div class="card h-100">
                <div class="card-body" >
                    <h5 class="card-title" style="font-size: 30px;font-weight:500">vanaf 2750,-</h5>
                    <br>
                    <p class="card-text" style="font-size: 22px;">Dit pakket is er voor de ondernemer die hoge eisen stelt aan zijn webshop. Of je nu speciale wensen hebt op het gebied van design, mogelijkheden of performance: met onze MAATWERK-webshops komen we graag aan jouw wensen tegemoet. Samen bepalen we de optimale flow voor jouw onderneming.</p>
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



<div class="container">
    <div class="row" style="padding-top: 10%; padding-bottom: 5%">
        <div class="col-md-6">
            <div class="card-body">
                <h3 class="" style="font-size: 50px; font-weight: 700">Wij maken ook van jouw webshop een online <br> succes</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p style="font-size: 22px;">
                    Je webshop wordt gemaakt in WooCommerce. Dit is een uitbreiding op het WordPress beheersysteem. Wereldwijd is WooCommerce het meest gebruikte webshop softwaresysteem. Het staat vooral bekend om zijn gebruiksvriendelijkheid.
                    <br><br>
                    Wil je ons jouw webshop laten maken? Dan ontvang je toegang tot exclusieve video’s met uitleg hoe je jouw webshop zelf beheert. En kom je er even niet uit, dan kun je altijd rekenen op support van onze experts. Dat kan per mail of telefoon.
                    <br><br>
                    Alle webshops die we bouwen zijn flexibel in te delen. Ze zijn dus volledig aan te passen aan jouw huisstijl.
                </p>
                <br><br>
                <h3 class="" style="font-size: 40px; font-weight: 700">5 redenen om je webshop te laten maken door Kloon Web</h3>

                <p class="card-text">
                    <ul style="font-size: 22px; list-style: none;">
                        <li>
                            <svg class="" style="width: 25px; color: #A74AC7;" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            Je webshop staat op je eigen domeinnaam
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            Je webshop is Google-vriendelijk                        
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            Je kunt je webshop makkelijk aanpassen (WordPress beheersysteem)                        
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            Jouw webshop wordt gebouwd door professionals                        
                        </li>
                        <li>
                            <svg class="" style="width: 25px; color:#A74AC7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m7 10 2 2 4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                            Support door een uitstekende helpdesk
                        </li>
                    </ul>
                </p>
            </div>
        </div>
    </div>
</div>



<div class="container bg-light">
    <div class="row">
        <div class="col-md-6" style="padding-top: 10%; padding-bottom: 10%; background-color: white">
            <div class="" style="background-color: white">
                <div class="card-body" style="background-color: white">
                    <h3 class="" style="font-size: 50px; font-weight:700">Veel tevreden klanten gingen je voor</h3>
                    <h3 class="" style="font-size: 50px; font-weight:700;color:#A74AC7">Ben jij onze volgende klant?</h3>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-top: 10%; background-color: white">
            <div class="card" style="background-color: white">
                <div class="card-body" style="background-color: #DBE9FA">
                    <h5 class="card-title">John Doe</h5>
                    <p class="card-text">
                        <div class="d-flex items-center justify-content-center w-50">
                            <svg class="w-25" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </p>
                    <p class="" style="font-size: 20px;">
                        Kloon Web werd mij aangeraden door een goede vriend.
                    </p>
                    <br>
                    <p class="" style="font-size: 16px;">
                        Geplaatst op
                    </p>
                    <div>
                        <img src="img/google.png" alt="" style="width:30%">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3" style="padding-top: 10%; background-color: white">
            <div class="card" style="background-color: white">
                <div class="card-body" style="background-color: #DBE9FA">
                    <h5 class="card-title">Jane Doe</h5>
                    <p class="">
                        <div class="d-flex items-center justify-content-center w-50">
                            <svg class="w-25" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                            <svg class="w-25 text-yellow-400" fill="orange" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                </path>
                            </svg>
                        </div>
                    </p>
                    <p class="" style="font-size: 20px;">
                        Kloon Web heeft voor mij een geweldige website weten te maken.
                    </p>
                    <br>
                    <p class="" style="font-size: 16px;">
                        Geplaatst op
                    </p>
                    <div>
                        <img src="img/google.png" alt="" style="width:30%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <div class="card-body bg-dark">
                        <h3 class="text-light" style="font-size: 40px; font-weight: 700">Meer weten over onze websitepakketten?</h3>
                        <span style="color: #A74AC7;font-size:25px">Neem vrijblijvend contact op</span>
                        <br><br>
                        <p class="text-light" style="font-size: 20px">Wil je weten welk pakket voor jou geschikt is of heb je andere vragen? Bel of mail ons gerust, we helpen je graag</p>
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
                <h3 class="" style="font-size: 50px; font-weight: 700">Een professionele webshop laten bouwen</h3>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card-body">
                <p style="font-size: 22px;">
                    Of je nu een webshop wilt laten bouwen waarin je maar één product verkoopt of juist honderden: bij Mooi Online kunnen wij iedere gewenste webshop voor je bouwen. Als je jouw webshop door ons laat bouwen, dan krijg je een professionele webshop die direct up and running is.
                    <br><br>
                    Bovendien verzekeren wij je dat het daarna eenvoudig is om je webshop zelf te onderhouden. Met video’s leggen we je duidelijk uit hoe je jouw webshop kunt beheren. Heb je daarna nog vragen, dan helpen onze experts je daar graag bij.
                </p>
                <br><br>
                <h3 class="" style="font-size: 40px; font-weight: 700">Een website laten maken met een webshop?</h3>

                <p class="card-text">
                    <p style="font-size: 22px;">
                        Heb jij vooral een tekstuele website nodig waar je jouw diensten kunt aanbieden, maar wil je ook een product verkopen? Dan kun je bij ons een website laten maken met een shopgedeelte.
                        <br><br>
                        Bij Mooi Online heb je dus geen aparte webshop nodig, maar houd je alles binnen dezelfde website.                    
                    </p>
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
                    <div class="card-body bg-dark">
                        <h3 class="text-light" style="font-size: 40px; font-weight: 700">Meer weten over onze websitepakketten?</h3>
                        <span style="color: #A74AC7;font-size:25px">Neem vrijblijvend contact op</span>
                        <br><br>
                        <p class="text-light" style="font-size: 20px">Wil je weten welk pakket voor jou geschikt is of heb je andere vragen? Bel of mail ons gerust, we helpen je graag</p>
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



<div style="">
    <div class="container" style="padding-top: 5%; padding-bottom: 5%;">
        <div class="d-flex justify-content-center align-items-start">
            <div class="col-md-9">
                <div class="card-body text-center">
                    <h3 class="font-weight-bold" style="font-size: 40px; font-weight: 700">Waarom zou ik mijn webwinkel door Mooi Online laten bouwen?</h3>
                    <p class="card-text" style="font-size: 22px;">
                        Onze experts bouwen alle webshops in WooCommerce. Dit systeem is de winkelomgeving binnen WordPress en wereldwijd het systeem dat het meest gebruikt wordt voor webwinkels. Het staat bovendien bekend om zijn gebruiksvriendelijkheid.
                        <br><br>
                        Als je jouw webwinkel door Mooi Online laat maken, betekent dit dat je jouw webshop eenvoudig zelf kunt onderhouden en beheren. Ook als je een webwinkel hebt laten maken met maar enkele producten, dan voeg je daar op een later tijdstip eenvoudig zelf producten aan toe.                    
                    </p>

                    <br>

                    <h3 class="font-weight-bold" style="font-size: 40px; font-weight: 700">Laat je webshop door ons ontwerpen</h3>
                    <p class="card-text" style="font-size: 22px;">
                        Net als met het bouwen van een website, zijn er ook voor het laten ontwerpen van een WooCommerce-webshop veel aanbieders. Bij Mooi Online vinden we het belangrijk dat je niet alleen een mooie en functionele WordPress-webshop laat ontwerpen, maar dat je deze webshop op een later moment ook zelf eenvoudig kunt beheren en onderhouden.
                        <br><br>
                        Wil je een webshop laten ontwerpen waarin je een beperkt aantal producten verkoopt, dan krijg je van ons alle noodzakelijke uitleg om de webwinkel op een later tijdstip verder te vullen met nieuwe producten, zonder dat je daar extra kosten voor hoeft te maken.
                        <br><br>
                        Ben je blij met de website die je door ons hebt laten ontwerpen en wil je eigenlijk niets aanpassen, dan ben je natuurlijk ook vrij om hem zo te laten als we hem opleveren.                    
                    </p>

                    <br>

                    <h3 class="font-weight-bold" style="font-size: 40px; font-weight: 700">Een WooCommerce webshop laten maken door specialisten</h3>
                    <p class="card-text" >
                        <ul style="font-size: 22px;">
                            <li>Onze webshops worden gebouwd in WooCommerce, wereldwijd de meest gebruikte webshop software, die bovendien bekend staat om zijn gebruiksvriendelijkheid.</li>
                            <li>Een WooCommerce webshop is op ieder moment uit te breiden met extra modules. Zo kun je jouw webshop steeds verder laten aansluiten op je wensen.</li>
                            <li>WooCommerce is een uitbreiding op het gebruiksvriendelijke WordPress beheersysteem.</li>
                            <li>Bij Mooi Online staan onze WooCommerce specialisten klaar om je te adviseren over alle mogelijkheden die het beste passen bij jouw webshopwensen.</li>
                        </ul>
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>



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

                <form method="POST" action="/contact" style="padding-top:5%">
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

<div class="bg-dark" style="background-image: url('https://www.losning.nl/cache/243282222167993f2189adbc47434afd/6redenomictuittebestedenweb.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;"></div>

@endsection
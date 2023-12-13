@extends('layouts.guest')

@section('title', 'Kloon Web - Contact')

@section('content')
<div style="margin-top: 3%;padding-top:5%;padding-bottom:5%;">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <!-- Left Div -->
                <h2 style="font-weight:700">Contactgegevens</h2>
                <div class="">
                    <div class="card-body shadow-lg border border-primary rounded" style="background-color: #DBE9FA">
                        <p>
                            <ul style="list-style: none;font-size:22px;">
                                <li>Kloon Web BV</li>
                                <li>Exampleweg 3</li>
                                <li>1234 KW Test</li>
                            </ul>
                            <br>
                            <ul style="list-style: none;font-size:22px;">
                                <li>
                                    <svg class="" style="width: 5%; aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
                                    </svg>
                                   <span style="margin-left:20px">sales@kloonweb.com</span> 
                                </li>
                                <li>
                                    <svg class="" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
                                    </svg>
                                    <span style="margin-left:20px">123456789</span> 
                                </li>
                            </ul>
                            <br>
                            <ul style="list-style: none;font-size:22px;">
                                <li>K.v.K: 1122334455</li>
                                <li>BTW: KW0000000</li>
                            </ul>
                        </p>

                        <button type="button" style="background: linear-gradient(to right, #A74AC7, #45aaf2); margin-top: 20px" class="btn btn-primary w-100" data-mdb-ripple-init>
                            Vertel ons je wensen
                            <svg class="text-gray-800 dark:text-white ms-2" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </button>        
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Right Div -->
                <h2 style="font-weight:700">Service & Support</h2>
                <div class=" mb-4" style="background-color: #DBE9FA;">
                    <div class="card-body shadow-lg border border-primary rounded">
                        <p style="">
                            <ul style="list-style: none;font-size:22px;">
                                <li>
                                    <svg class="" style="width: 5%; aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 2-8.4 7.05a1 1 0 0 1-1.2 0L1 2m18 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1m18 0v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2"/>
                                    </svg>
                                   <span style="margin-left:20px">support@kloonweb.com</span> 
                                </li>
                                <li>
                                    <svg class="" style="width: 5%" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m16.344 12.168-1.4-1.4a1.98 1.98 0 0 0-2.8 0l-.7.7a1.98 1.98 0 0 1-2.8 0l-2.1-2.1a1.98 1.98 0 0 1 0-2.8l.7-.7a1.981 1.981 0 0 0 0-2.8l-1.4-1.4a1.828 1.828 0 0 0-2.8 0C-.638 5.323 1.1 9.542 4.78 13.22c3.68 3.678 7.9 5.418 11.564 1.752a1.828 1.828 0 0 0 0-2.804Z"/>
                                    </svg>
                                   <span style="margin-left:20px">1122334455</span> 
                                </li>
                            </ul>
                        </p>
                    </div>
                </div>
                
                <h2 style="font-weight:700">Openingstijden</h2>
                <div class="" style="background-color: #DBE9FA">
                    <div class="card-body shadow-lg border border-primary rounded">
                        <p style="font-size:22px;padding:5%">werkdagen 09.00 tot 17.00 uur</p>
                        <!-- Add more content as needed -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div style="background-color: #DBE9FA">
    <div class="container">
        <div class="row justify-content-center align-items-center" style="">
            <div class="col-md-6" style="padding-top:5%;padding-bottom:5%">
                <!-- Your content goes here -->
                <h1 style="font-weight:700">Contactformulier</h1>
                <span style="font-size:20px;">Laat hier je bericht achter, we nemen binnen 1 werkdag contact met je op.</span>
                <form method="POST" action="/contact" style="padding-top:5%">
                    @csrf
                    <div class="row mb-4">
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="" name="naam" class="form-control" />
                          <label class="form-label" for="">Naam</label>
                        </div>
                      </div>
                      <div class="col">
                        <div data-mdb-input-init class="form-outline">
                          <input type="text" id="" name="telefoon" class="form-control" />
                          <label class="form-label" for="">Telefoon</label>
                        </div>
                      </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="" name="email" class="form-control" />
                            <label class="form-label" for="">E-mail</label>
                          </div>
                        </div>
                        <div class="col">
                          <div data-mdb-input-init class="form-outline">
                            <input type="text" id="" name="onderwerp" class="form-control" />
                            <label class="form-label" for="">Onderwerp</label>
                          </div>
                        </div>
                    </div>
  
                  
                    <div data-mdb-input-init class="form-outline mb-4">
                      <textarea id="" name="bericht" class="form-control"></textarea>
                      <label class="form-label" for="">Bericht</label>
                    </div>
                  
                    <!-- Password input -->
                    <div data-mdb-input-init class="form-outline mb-4">
                      <input type="file" id="form3Example4" class="form-control" />
                      <label class="form-label" for="form3Example4">Bijlage</label>
                    </div>
                                    
                    <!-- Submit button -->
                    <button data-mdb-ripple-init type="submit" class="btn btn-block mb-4 text-light" style="background: linear-gradient(to right, #A74AC7, #45aaf2)">Verzenden</button>
                  
                  </form>            
                </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row" style="padding-top:10%;padding-bottom:5%">
        <div class="col-md-4" >
            <!-- Left Div -->
            <div class=" shadow border border-primary rounded py-3">
                <img src="https://www.biowritingservice.com/wp-content/themes/tuborg/images/Executive%20Bio%20Sample%20Photo.png" class="card-img-top rounded-circle mx-auto d-block" style="width: 150px; height: 150px;" alt="Left Image">
                <div class="card-body text-center">
                    <h2 class="card-title">Persoon A</h2>
                    <p class="card-text">CEO</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <!-- Middle Div -->
            <div class=" shadow border border-primary rounded py-3">
                <img src="https://www.kieranjameswalker.com/wp-content/uploads/2016/07/person_sample_2-1.jpg" class="card-img-top rounded-circle mx-auto d-block" style="width: 150px; height: 150px;" alt="Middle Image">
                <div class="card-body text-center">
                    <h2 class="card-title">Persoon B</h2>
                    <p class="card-text">CFO</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <!-- Right Div -->
            <div class=" shadow border border-primary rounded py-3">
                <img src="https://uploads.themler.io/lp/images/07cd45756da79ba8cf3033fa3a6f017b_teamimg1.png" class="card-img-top rounded-circle mx-auto d-block" style="width: 150px; height: 150px;" alt="Right Image">
                <div class="card-body text-center">
                    <h2 class="card-title">Persoon C</h2>
                    <p class="card-text">Designer</p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-4" style="padding-top: 5%;padding-bottom: 10%">
            <!-- Left Div -->
            <div class="">
                <div class="card-body">
                    <h2 class="card-title">Alle expertise in huis</h2>
                    {{-- <p class="card-text">This is the content for the left div.</p> --}}
                </div>
            </div>
        </div>
        <div class="col-md-8" style="padding-top: 5%;padding-bottom: 10%">
            <!-- Right Div -->
            <div class="">
                <div class="card-body">
                    {{-- <h2 class="card-title">Right Content</h2> --}}
                    <p class="card-text" style="font-size: 20px;">
                        Naast deze medewerkers maken we ook gebruik van onze vaste tekstschrijvers, fotograaf en syteembeheerder. Zo hebben we alle expertise in huis om jou een professionele website te kunnen leveren.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="bg-dark" style="background-image: url('https://www.losning.nl/cache/243282222167993f2189adbc47434afd/6redenomictuittebestedenweb.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center; height: 500px;"></div>

@endsection
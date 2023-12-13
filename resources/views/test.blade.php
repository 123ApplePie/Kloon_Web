<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css" />
    <title>Kloon Online</title>
    

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body{
    background: url();
}

@media (max-width: 767px) {
        #nav {
            padding-left: 0;
            padding-right: 0;
        }
    }

@media(max-width: 991px) {
    .sidebar{
        background-color: rgba(255, 255, 255,0.15);
        backdrop-filter: blur(10px);
    }
}

    #offerte_btn:hover {
        animation: gradientChange 2s infinite;
    }

    @keyframes gradientChange {
        0% {
            background: linear-gradient(to right, #A74AC7, #45aaf2);
        }
        50% {
            background: linear-gradient(to right, #A74AC7, #A74AC7);
        }
        100% {
            background: linear-gradient(to right, #A74AC7, #45aaf2);
        }
    }
    </style>
</head>
<body>
    {{-- Navbar --}}
    <x-navbar/>
    {{-- End Navbar --}}


    {{-- HERO --}}
    <section class="text-light text-center text-sm-start" style="background-color: #000000;padding-top:2%;" id="home">
        <div class="container-fluid py-5" style="padding-left:15%;padding-right:15%">
            <div class="d-sm-flex align-items-center justify-content-between py-5">
                <div style="width:120%">
                    <h1 class="" style="font-weight:700;font-size:50px">Website laten maken ?</h1>
                    <h3 class="my-4" style="font-size: 30px">Wij maken de website waarmee jij jouw doelen bereikt.</h3>
                    <p class="lead my-4">
                        Een website laten maken is geen hogere wiskunde. Een professionele website laten maken waarmee je jouw doelen bereikt, dát is een vak apart.
                    </p>
                    <button class="btn btn-primary btn-lg rounded-4 fs-6" style="font-weight:500;background: linear-gradient(to right, #A74AC7, #45aaf2)">OFFERTE AANVRAGEN</button>
                    <button class="btn text-white btn-lg fs-6" style="font-weight:500;">Lees Meer -></button>
                </div>
                <a href="">
                    <img src="/img/programmer.jpg" class="rounded-circle" style="width: 80%;height:auto;margin-left:20%" alt="">
                </a>
            </div>
        </div>
    </section>
    {{-- END HERO --}}


    {{-- PROMO --}}
    <div class="d-flex align-items-center justify-content-center text-slate-600" style="background-color: #DBE9FA">
        <section class="container-fluid " style="padding-left:13%;padding-right:15%">    
            <ul class=" gap-3 d-flex flex-column flex-sm-row relative overflow-hidden mb-10" style="background-color: #DBE9FA">
                <li class="pr-sm-4 overflow-hidden grow">
                    {{-- <span class="absolute slide-in-top bg-gradient-to-r from-blue to-indigo text-white px-24 py-1 rounded-br-lg left-0 top-0 text-sm">Most Popular</span> --}}
                    <h3 class="mb-3 text-xl mt-3" style="font-size: 30px;font-weight:700">"Een website kun je overal laten maken,
                      <br>  een succesvolle website laat je maken door Kloon Web!"</h3>
                    <p class="max-w-md" style="font-size: 20px;">Laat je nieuwe website maken door ons. Meer dan 1500 klanten gingen je voor..</p>
                </li>
            </ul>
        </section>
    </div>
    {{-- END PROMO --}}


    {{-- FEEDBACK --}}
    <section class="relative" style="margin-top: 5%">
        <div class="container-fluid" style="padding-left: 15%">
          <div class="row align-items-center">
            <div class="col-md-5 ml-auto mr-auto">
              <div class="md-pr-4">
                {{-- <div class="text-danger p-3 text-center d-flex align-items-center justify-content-center w-16 h-16 mb-6 shadow-lg rounded-circle bg-pink mt-8">
                  <i class="fas fa-rocket text-xl"></i>
                </div> --}}
                <h3 class="" style="font-size: 50px;font-weight:700">Wij bouwen een website die scoort</h3>
                <p class="mt-4 leading-relaxed text-dark" style="font-size: 20px;">
                    Een goede website scoort. Maar wat dit scoren precies is, dát is afhankelijk van je doel. Soms is een eenvoudig online visitekaartje voldoende, soms gaat het om een maatwerk webshop waarbij we eerst de behoefte van jouw klant onder de loep nemen.
                    <br><br>
                    Wat je doel ook is: met ruim 20 jaar ervaring hebben wij de kennis in huis voor een website die scoort. En dat met een goede prijs-kwaliteitverhouding.
                </p>
              </div>
            </div>
            <div class="col-md-4 ml-auto mr-auto">
                {{-- <img alt="..." class="img-fluid rounded-lg shadow-lg" src="https://images.unsplash.com/photo-1555212697-194d092e3b8f?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=634&amp;q=80"> --}}
              </div>  
          </div>
        </div>
      </section>
    {{-- END FEEDBACK --}}

    
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @livewireStyles

</head>
<style>
     h1 {
        color: #8B4513;
        font-size: 28px;
        margin-bottom: 20px;
        text-align: center;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 10px;
        text-align: center;
        border: 1px solid #8B4513;
    }

    th {
        background-color: #8B4513;
        color: #0a0909;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #F5F5DC;
    }

    tr:hover {
        background-color: #FFE4C4;
    }

    .success-button {
        background-color: #8B4513;
        color: #FFF;
        border: none;
        padding: 6px 12px;
        border-radius: 4px;
    }

    .success-button:disabled {
        opacity: 0.6;
        cursor: not-allowed;
    }

    .alert {
        margin-bottom: 20px;
        padding: 15px;
        border: 1px solid transparent;
        border-radius: 4px;
    }

    .alert-success {
        color: #3C763D;
        background-color: #DFF0D8;
        border-color: #D6E9C6;
    }

    .record-not-found {
        text-align: center;
        color: #8B4513;
        font-weight: bold;
        margin-top: 20px;
    }
    
    .bg-image {
        background: rgba(0, 0, 0, 0.5) url('https://nrcm.salsalabs.org/vote2020/367dc1ed-0ca7-45c4-b7d7-b8cabdd85713.jpg');
        background-blend-mode: darken;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 50vh;
    }
    .titre-marron {
  color: rgb(139, 69, 19);
  
  font-weight: bold;
}
.fcolor {
  background-color: rgb(65, 39, 21);
  
  /* Styles pour la div conteneur */
.container {
  padding: 20px;
}

/* Styles pour la div de la rangée */
.row {
  display: flex;
  justify-content: center;
}

/* Styles pour les colonnes */
.col-xl-5, .col-lg-5, .col-sm-12 {
  width: 100%;
}

/* Styles pour la carte */
.card {
  margin-top: 20px;
  background-color: #f0f0f0;
  border-radius: 5px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

/* Styles pour le corps de la carte */
.card-body {
  padding: 20px;
}

/* Styles pour le titre */
h3 {
  font-size: 24px;
  font-weight: bold;
  text-align: center;
}

/* Styles pour les emplacements de slot */
x-slot {
  display: none;
}


}
</style>

<body>
    <nav class="container-fluid fcolor">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h3 class="nav-link text-light">Voting App</h3>
                <div class="d-flex text-white align-items-center">
                    @auth
                        <h5>{{ Auth::user()->name }}</h5>
                        @livewire('frontend.logout')
                    @endauth
                    @guest
                        <a href="{{ route('front.login') }}" class="nav-link text-light">Login</a>
                    @endguest
                </div>
            </div>
        </div>
    </nav>
    <!-- hero section -->
    <div class="container-fluid bg-image" style="">
        <div class="container">
            <div class="d-flex justify-content-center align-items-center flex-col" style="height:30vh;">
                
            </div>
            @auth
                <h4>Total Votes : {{ Auth::user()->vote_limit }}</h4>

            @endauth

        </div>
    </div>

    {{ $slot }}
    <div class="footer py-4 text-center text-light fcolor">
        <div class="container">
            <small>&copy; EIDIA 2023</small>
        </div>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src=" {{ asset('js/bootstrap.min.css') }}">
    </script>

    @livewireScripts
</body>

</html>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link href="{{ asset('/css/style.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - VotingApp')</title>
</head>
<style>
    .container {
    max-width: 900px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f5f5f5;
    border-radius: 5px;
}

h1 {
    text-align: center;
    color: #706b6b;
    margin-bottom: 20px;
}

.card {
    background-color: #c7c1c1;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    margin-bottom: 20px;
}

.card-header {
    background-color: #09115a;
    padding: 10px 20px;
    border-bottom: 1px solid #ddd;
}

.card-header h3 {
    color: #ffffff;
    margin: 0;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #ddd;
}

.table th {
    background-color: #f5f5f5;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f5f5f5;
}

.table td:last-child {
    text-align: center;
}

.alert {
    padding: 10px;
    margin-bottom: 20px;
    border-radius: 5px;
}

.alert-danger {
    color: #721c24;
    background-color: #f8d7da;
    border-color: #f5c6cb;
}

.alert-danger strong {
    color: #721c24;
}

.alert-success {
    color: #155724;
    background-color: #d4edda;
    border-color: #c3e6cb;
}

.alert-success strong {
    color: #155724;
}
.nav-link i {
        color: #000080; 
        margin-right: 5px;
    }
    .text{
      color: #4e4e57; 
    }
    
</style>
<body>

    <div >
        <div class="row g-0">
            <!-- sidebar -->
            <div class="p-3 col-md-3 text-white bg-light">
                <a href="{{ route('admin.dashboard') }}" class="text-dark text-decoration-none">
                    <span class="fs-4"> <i class="fas fa-cogs"></i>  Admin Panel</span>
                </a>
                <hr class='text-primary '/>
                <ul>
                    <li><a href="{{ route('admin.dashboard') }}" class="nav-link text"> <i class="fas fa-home"></i> Home</a></li>
                    <li><a href="{{ route('admin.votes') }}" class="nav-link text"> <i class="fas fa-poll"></i> Votes</a></li>
                    <li><a href="{{ route('admin.positions') }}" class="nav-link text"> <i class="fas fa-users"></i> Positions</a></li>
                    <li><a href="{{ route('admin.condidates') }}" class="nav-link text"> <i class="fas fa-users"></i> Candidates</a></li>
                    <li><a href="{{ route('admin.voters') }}" class="nav-link text"> <i class="fas fa-vote-yea"></i> Voters</a></li>
                </ul>
            </div>
            <!-- sidebar -->

            <div class="col-md-9">
                <div class="container">
                    <nav class="p-3 shadow text-end">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="dropdown">
                                <button type="button" class="btn card-header text-light dropdown-toggle" data-bs-toggle="dropdown">
                                    {{ Auth::guard('admin')->user()->username }}
                                </button>
                                <ul class="dropdown-menu">
                                    
                                        @livewire('admin.logout')

                                    </li>
                                </ul>
<img class="img-profile rounded-circle" src="{{ asset('/img/profile.png') }}" width='60' height="60">
                            </nav>
                            </div>
                            {{ $slot }}
                    </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>

    <!-- footer -->
    <div class="footer py-4 text-center text-dark bg-light">
        <div class="container">
            <small>&copy; EIDIA 2023</small>
        </div>
    </div>

    <!-- Latest compiled JavaScript -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    @livewireScripts
</body>

</html>

<div>
    <x-slot:title>
        Change password
    </x-slot>
    <div class="container">
        <div class="row">
            @foreach ($candidates as $candidate)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 my-3">
                    <div class="card">
                        <img src="{{ asset('storage') }}/{{ $candidate->image }}" style="width: 100%;" alt="">
                        <div class="card-body">
                            <h5 class="my-2" >{{ $candidate->fname }} {{ $candidate->lname }} </h5>
                        </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary" style="width: 100%;color:#c2c4d4;">
                                    <i class="fas fa-star"></i> Points ({{ $candidate->points }})
                                </button>
                            
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

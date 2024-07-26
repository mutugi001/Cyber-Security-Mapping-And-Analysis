@extends('admin/layouts/app')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="col-md-6 col-lg-4">
                <h6 class="mt-2 text-muted">Event Information</h6>
                <div class="card">
                  <img class="card-img-top" src="#" alt="Card image cap" />
                  <div class="card-body">
                    <h5 class="card-title">{{$article->title}}</h5>
                    <p class="card-text">{{$article->description}}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$article->link}}</li>
                    <li class="list-group-item">{{$article->source}}</li>
                  </ul>
                
                </div>
              </div>
            </div>
              <!--/ Layout Demo -->
            </div>
            
@endsection
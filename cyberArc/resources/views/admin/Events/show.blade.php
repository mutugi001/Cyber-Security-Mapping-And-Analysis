
@extends('admin/layouts/app')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <!-- Layout Demo -->
              <div class="col-md-6 col-lg-4">
                <h6 class="mt-2 text-muted">Event Information</h6>
                <div class="card">
                  <img class="card-img-top" src="{{ asset('eventImages/' . $event->image_name) }}" alt="{{$event->Name}}" />
                  <div class="card-body">
                    <h5 class="card-title">{{$event->Name}}</h5>
                    <p class="card-text">{{$event->description}}</p>
                  </div>
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$event->date}}</li>
                    <li class="list-group-item">{{$event->time}}</li>
                    <li class="list-group-item">{{$event->GuestSpeaker}}</li>
                  </ul>
                
                </div>
              </div>
            </div>
              <!--/ Layout Demo -->
@endsection

            


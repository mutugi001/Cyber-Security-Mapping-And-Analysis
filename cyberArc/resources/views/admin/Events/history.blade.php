
@extends('admin/layouts/app')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light"></span> History</h4>
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Event history</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Name</th>
                        <th>Location</th>
                        <th>date</th>
                        <th>time</th>
                        <th>Guest Speaker</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    
                    <tbody class="table-border-bottom-0">
                      <tr>
                        @foreach($events as $event)
                        <td>{{ $event->Name }}</td>
                        <td>{{ $event->location }}</td>
                        <td>{{ $event->date }}</td>
                        <td>{{ $event->time }}</td>
                        <td>{{ $event->GuestSpeaker }}</td>
                        <td><span class="badge bg-label-primary me-1">Ended</span></td>
                        <td>
                          <div class="dropdown">
                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                              <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="{{route('admin.events.show', $event)}}"
                                ><i class="bx bx-trash me-1"></i> show</a
                              >
                            </div>
                          </div>
                        </td>
                        
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
@endsection
     
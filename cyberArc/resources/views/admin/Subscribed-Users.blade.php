@extends('admin/layouts/app')

@section('content')

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Basic Tables</h4>
              
              <!-- Basic Bootstrap Table -->
              <div class="card">
                <h5 class="card-header">Users</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>id</th>
                        <th>email</th>   
                      </tr>
                    </thead>
                    
                    <tbody class="table-border-bottom-0">
                      @foreach($users as  $user)
                      <tr>
                        <td style="width: 50px;">{{ $user->id }}</td>
                        <td style="width: 150px;">{{ $user->email }}</td>
                        
                        <td style="width: 150px;"><span class="badge bg-label-primary me-1">Active</span></td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>

              
              <!--/ Basic Bootstrap Table -->

              <hr class="my-5" />
              
              
@endsection
             
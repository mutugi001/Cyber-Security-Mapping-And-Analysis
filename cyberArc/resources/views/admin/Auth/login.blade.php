@extends('admin/layouts/guest')
@section('auth')
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>

              <form id="formAuthentication" class="mb-3" method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control"@error('username') is-invalid @enderror name="username" value= "{{old('username')}}" placeholder="Enter your username" autofocus />
                    @error('username')
                      <div>{{$message}}</div>
                    @enderror 
                </div>
                
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" @error('password') is-invalid @enderror for="password">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="password"
                      class="form-control"
                      value="{{old('password')}}"
                      name="password"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password" />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    @error('password')
                      <div>{{$message}}</div>
                    @enderror 
                  </div>
                </div>

                <button type="submit" class="btn btn-primary d-grid w-100">{{ __('login') }}</button>
              </form>

              {{-- <p class="text-center">
                <span>don't have an account?</span>
                <a href="{{route('register')}}">
                  <span>Sign up instead</span>
                </a>
              </p> --}}
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
@endsection
    <!-- / Content -->

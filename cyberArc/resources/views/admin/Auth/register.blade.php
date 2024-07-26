@extends('admin/layouts/guest')
@section('auth')
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>
              <p class="mb-4">Make your app management easy and fun!</p>

              <form id="formAuthentication" class="mb-3" method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control"@error('username') is-invalid @enderror name="username" value= "{{old('username')}}" placeholder="Enter your username" autofocus />
                    @error('username')
                      <div>{{$message}}</div>
                    @enderror 
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control" @error('email') is-invalid @enderror  name="email" value= "{{old('email')}}" placeholder="Email" />
                  @error('email')
                      <div >{{$message}}</div>
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

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid w-100">{{ __('Register') }}</button>
              </form>

              <p class="text-center">
                <span>Already have an account?</span>
                <a href="{{route('login')}}">
                  <span>Sign in instead</span>
                </a>
              </p>
            </div>
          </div>
          <!-- Register Card -->
        </div>
      </div>
    </div>
@endsection
    <!-- / Content -->

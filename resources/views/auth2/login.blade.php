<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.meta')
    @include('includes.style')
</head>
<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-body">
                <form method="post" action="{{ route('login.post') }}" class="needs-validation">
                  @csrf
                  {{-- <div class="form-group">
                    <label for="email">Email</label>
                    <input 
                        id="email" 
                        type="email" 
                        class="form-control @error('email') is-invalid @enderror" 
                        name="email" 
                        tabindex="1" 
                        autofocus
                        value="{{ old('email') }}">
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div> --}}

                  <div class="form-group">
                    <label for="username">Username/Email</label>
                    <input 
                        id="username" 
                        type="text" 
                        class="form-control @error('username') is-invalid @enderror" 
                        name="username" 
                        tabindex="1" 
                        autofocus
                        value="{{ old('username') }}">
                    @error('username')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="auth-forgot-password.html" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input 
                        id="password" 
                        type="password" 
                        class="form-control @error('password') is-invalid @enderror" 
                        name="password" 
                        tabindex="2"
                        >
                        @error('password')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                  </div>

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
                <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                </div>
                <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-google">
                      <span class="fab fa-google"></span> Google
                    </a>
                  </div>
                </div>

              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              Don't have an account? <a href="auth-register.html">Create One</a>
            </div>
            <div class="simple-footer">
              Nursyafriady
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  @include('includes.script')
</body>
</html>

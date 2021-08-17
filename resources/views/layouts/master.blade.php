<!DOCTYPE html>
<html lang="en">
<head>
  @include('includes.meta')
  @include('includes.style')
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      @include('includes.navbar')
      @include('includes.sidebar')

      <!-- Main Content -->
      @yield('content')
      @include('includes.footer')
    </div>
  </div>
  @include('includes.script')
  @stack('after-script')
</body>
</html>

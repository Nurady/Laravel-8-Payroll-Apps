{{-- <div class="alert alert-{{ $type }}">
    <div class="alert-title">{{ $title }}</div>
    {{ $slot }}
</div> --}}

<div class="alert alert-{{ $type }} alert-dismissible show fade">
    <div class="alert-body">
      <button class="close" data-dismiss="alert">
        <span>&times;</span>
      </button>
      <h4>{{ $title }}</h4>
      <p>{{ $slot }}</p>
    </div>
  </div>
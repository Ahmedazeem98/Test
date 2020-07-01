@include('layouts.header')

<main role="main" class="container">
  <div class="row">
    @yield('content')

  </div><!-- /.row -->
  @if(count($errors))
  @foreach($errors->all() as $error)
  
  <div class="alert alert-danger">
    {{$error}}
  </div>
  @endforeach
@endif
@include('layouts.footer')
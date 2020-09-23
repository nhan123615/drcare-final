<!DOCTYPE html>
<html lang="en">
  <head>
    @include('user.layouts.head')
  </head>
  <body>
   @include('user.layouts.header')

@if(App::environment() === 'local')
          @section('main-content')
              @show
      @else

          @section('title')
            @show

          @section('sub-title')
            @show

            

          @section('main-content')
            @show
 @endif       

    @include('user.layouts..footer')
  </body>
</html>
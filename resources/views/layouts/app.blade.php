<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.7">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Europalete</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js?v=').time() }}" defer></script>
    <script src="{{ asset('js/search.js?v=').time() }}" defer></script>
    <script src="{{ asset('js/toggle_show_hide.js?v=').time() }}" defer></script>
    
    <script src="{{ asset('js/select_file.js?v=').time() }}" defer></script>
    <script src="{{ asset('js/check_box.js?v=').time() }}" defer></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- Styles -->
    <link rel="icon" href="/img/europalete-logo-black_teal.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link href="{{ asset('css/app.css?v=').time() }}" rel="stylesheet">
  </head>
  <body class="h-screen antialiased leading-none font-sans bg-blue_gray-900">
    <div id="app" class="flex flex-col h-screen justify-between">
      @include('menu_parts.nav')
      <div class="flex">
        @include('menu_parts.side_nav')
        <div id="content" class="flex-1 lg:ml-56 px-4 py-4">
          
          <div class="mt-24 mx-auto md:px-4 lg:px-4">
            @include('messages.message_success')
            @include('messages.message_warning')
            @include('messages.message_welcome')
            @include('errors.modal_errors')
            @include('messages.message_warning_delete')

            @if(Request::segment(1) === 'mail')
            @include('menu_parts.nav_mail')

            @endif
            @yield('content')
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
@include('layouts.header')
@include('layouts.nav')

<div class="container py-4">

    {{-- content will go here --}}
    @yield('content')

</div>

@include('layouts.footer')

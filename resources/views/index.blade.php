<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

    <head>

        @include('partials.head')

    </head>

    <body>

        <div class="top-content">
        	<div class="container">
                	
                @yield('contents')
                    
        	</div>
        </div>

        <!-- Footer -->
        <footer>

            @include('partials.footer')
        	
        </footer>

        @include('partials.scripts')

    </body>

</html>
<footer>
    <p class="text-gray-400">
        &copy; copyright {{date('Y')}}
        @if(! Route::is('app_about'))
            &middot; 
            <a href="{{route('app_about')}}" 
            class="text-indigo-500 hover:text-indigo-600 underline">About us</a>
        @endif
        @if(! Route::is('app_help'))
            &middot; 
            <a href="{{route('app_help')}}" 
            class="text-indigo-500 hover:text-indigo-600 underline">Help</a>
        @endif  
    </p>
</footer>
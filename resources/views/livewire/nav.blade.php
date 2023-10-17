<div class="flex justify-between text-white bg-black p-8">
    <div>
        <p>title</p>
    </div>

    @if( Route::has('login'))
    <div>
        @auth
          <a href="{{url('/dashboard')}}"></a>
        @else
            <a href="{{ route('register') }}">Signup</a>
            <a href="{{ route('login') }}">Login</a>
        @endauth
    </div>
    @endif
    <div>
        wap
    </div>
</div>

@auth
    <form action="{{ route('follow') }}" method="post">
        @csrf
        <input type="number" hidden value="{{ $follower->id }}" name="follower_id">
        <input type="number" hidden value="{{ $followed->id }}" name="followed_id">
        <button class="follow-btn" type="submit">
            {{ __('Follow') }}
        </button>
    </form>
@else    
    <a href="{{ route('login') }}" class="link-btn"> {{ __('Sign in to follow this user') }}</a>
    or <a href="{{ route('register') }}" class="link-btn"> {{ __('Sign up') }}</a>
@endauth
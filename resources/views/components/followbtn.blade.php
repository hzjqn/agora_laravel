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
<span class="d-block mb-2 mt-5">{{ __('To follow this user') }}</span>
    <a href="{{ route('login') }}" class="btn objective"> {{ __('Sign in') }}</a>
    or <a href="{{ route('register') }}" class="btn sidequest"> {{ __('Sign up') }}</a>
@endauth

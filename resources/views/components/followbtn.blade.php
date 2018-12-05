@auth
@php 
    $notSameUser = Auth::user()->id !== $followed->id;
    $alreadyFollowing = Auth::user()->following->contains($followed) ? true : false;
@endphp
    @if($notSameUser)
        <form class="follow-form" action="{{ $alreadyFollowing ? route('unfollow') : route('follow') }}" method="{{ Auth::user()->following->find($followed->id) ? 'delete' : 'post' }}">
            @csrf
            <input type="number" hidden value="{{ $followed->id }}" name="followed_id">
            @if(!$alreadyFollowing)
                <button class="btn follow-btn follow" type="submit">
                    {{ __('Follow') }}
                </button>
            @elseif($alreadyFollowing)
                <button class="btn follow-btn unfollow" type="submit">
                    {{ __('Unfollow') }}
                </button>
            @endif
        </form>

    @else 

    @endif
@else
<span class="d-block mb-2 mt-5">{{ __('To follow this user') }}</span>
    <a href="{{ route('login') }}" class="btn objective"> {{ __('Sign in') }}</a>
    or <a href="{{ route('register') }}" class="btn sidequest"> {{ __('Sign up') }}</a>
@endauth

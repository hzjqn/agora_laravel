@if($action instanceof App\Article)
    <article class="card article">
    <a href="{{ route('articles') }}/{{ $action->id }}"></a><h3>{{ $action->title }}</h3>
    </article>
@elseif($action instanceof App\Follow)

@php
    dd($action->follower, $action->followed)
@endphp

<a href="/users/{{ $action->follower_id }}">{{ $action->follower->username }}</a> {{ __('just started following') }} <a href="{{ route('users') }}/{{ $action->followed_id }}">{{ $action->followed->username }}</a>

@elseif($action instanceof App\Like)

@endif

@if($action instanceof App\Article)
    <article class="card article">
    <a href="{{ route('article.index') }}/{{ $action->id }}"></a><h3>{{ $action->title }}</h3>
    </article>
@elseif($action instanceof App\Follow)
    <a href="/users/{{ $action->follower->id }}">
        {{ $action->follower->username }}</a> {{ __('just started following') }} <a href="{{ route('users') }}/{{ $action->followed->id }}">{{ $action->followed->username }}
    </a>
@elseif($action instanceof App\Like)

@endif

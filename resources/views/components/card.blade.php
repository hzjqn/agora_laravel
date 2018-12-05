@if($type == 'article')
    <article class="card article {{ $classes ?? '' }}">
        <div class="cover" style="background-image:url('{{ asset($action->cover) }}')">
        <header>
        <a href="{{ route('article.index') }}/{{ $action->id }}"><h3 class="card-title">{{ $action->title }}</h3></a>
            <div class="author-reference">
                {{ __('By') }}&nbsp;<img class="inline-icon-pp" src="{{ $action->user->profile_picture ? URL::asset($action->user->profile_picture) : URL::asset('img/pp.png') }}" alt="asdf">&nbsp;<a href="{{ route('user.show', ['id' => $action->user->id]) }}">{{ $action->user->username }}</a>
            </div>
        </header>
        <summary>
            <div class="info">
               {{ __(":mins min. read", ['mins' => $action->length]) }}
            </div>
            <div class="action-bar">
                <button><i class="fas fa-share"></i></button>
                <button><i class="fas fa-bookmark"></i></button>
                <button><i class="fas fa-ellipsis-v"></i></button>
            </div>
        </summary>
    </article>
@elseif($type == 'pop')
    <article class="card pop {{ $classes ?? '' }}">
        <a href="{{ route('article.index') }}/{{ $action->id }}"><h3 class="card-title">{{ $action->title }}</h3></a>
        <summary>
            <div class="author-reference">
                {{ __('By') }}&nbsp;<img class="inline-icon-pp" src="{{ $action->user->profile_picture ? URL::asset($action->user->profile_picture) : URL::asset('img/pp.png') }}" alt="asdf">&nbsp;<a href="{{ route('user.show', ['id' => $action->user->id]) }}">{{ $action->user->username }}</a>&nbsp;&mdash;&nbsp;{{ __(":mins min. read", ['mins' => $action->length]) }}
            </div>
        </summary>
    </article>
@elseif($type == 'comment')
    <article class="card comment {{ $classes ?? '' }}">
        @php
            $comment = $action;
        @endphp
        <div>
            {{$comment->user->profile_picture}}
        </div>
        <div> 
            <h4>{{ $comment->user->name }}</h4>
        </div>
        <div>
            {{$comment->content}}
        </div>
       
    </article>

@elseif($action instanceof App\Like)

@endif

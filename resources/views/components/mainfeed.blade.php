<main class="col-12 col-md-8">
    <h2 class="feed-title">{{ $title }}</h2>
    <div class="feed mainfeed" id="mainFeed">
    @forelse ($articles as $article)
        @if($loop->first)
            @component('components.card', ['action' => $article, 'type' => 'article', 'classes' => 'main-card'])
            @endcomponent
        @else
            @component('components.card', ['action' => $article, 'type' => 'article'])
            @endcomponent
        @endif
    @empty
        <span class="empty-message">
        {{ __("There are no articles published yet. Be the first")." "}} <a href="{{ route('article.new') }}"></a>
        </span>
    @endforelse    
    </div>
</main>
<main class="feed mainfeed" id="mainFeed">
    @forelse ($allArticles as $article)
        @component('components.card', ['action' => $article])
        @endcomponent
    @empty
        <span class="empty-message">
        {{ __("There are no articles published yet. Be the first")." "}} <a href="{{ route('article.new') }}"></a>
        </span>
    @endforelse
</main>

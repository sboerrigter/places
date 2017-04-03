<article class="review">
    <p class="review_date">
        {{ $review->created_at->diffForHumans() }}
    </p>

    <p class="review__username">
        {{ $review->user->name }}
    </p>

    <p class="review__body">
        {{ $review->body }}
    </p>

    <p class="review__rating">
        {{ $review->rating }}
    </p>
</article>

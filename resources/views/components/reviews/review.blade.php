<article class="review">
    <p class="review_date">
        {{ $review->created_at->diffForHumans() }}
    </p>

    <p class="review__body">
        {{ $review->body }}
    </p>

    <p class="review__rating">
        {{ $review->rating }}
    </p>
</article>

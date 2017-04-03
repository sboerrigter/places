@include('components.errors')

<form class="create-review form" method="POST" action="/companies/{{ $company->id }}/reviews">
    {{ csrf_field() }}

    <p class="form__field">
        <label for="body">
            Review
        </label>
        <textarea name="body" placeholder="Add your review"></textarea>
    </p>

    <p class="form__number">
        <label for="rating">
            Rating
        </label>
        <input type="number" name="rating" placeholder="Your rating" min="1" max="5">
    </p>

    <p class="form__submit">
        <button type="submit">
            Add review
        </button>
    </p>
</form>

@include('components.errors')

<form class="form create-company" method="POST" action="/companies">
    {{ csrf_field() }}

    <p class="form__field">
        <label for="name">
            Company name
        </label>
        <input type="text" name="name">
    </p>

    <p class="form__field">
        <label for="address">
            Address
        </label>
        <input type="text" name="address">
    </p>

    <p class="form__submit">
        <button type="submit">
            Add company
        </button>
    </p>
</form>

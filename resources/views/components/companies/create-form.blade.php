@include('components.forms.errors')

<form class="create-form" method="POST" action="/companies">
    {{ csrf_field() }}

    <p class="name">
        <label for="name">
            Company name
        </label>
        <input type="text" name="name">
    </p>

    <p class="address">
        <label for="address">
            Address
        </label>
        <input type="text" name="address">
    </p>

    <p class="submit">
        <button type="submit">
            Add company
        </button>
    </p>
</form>

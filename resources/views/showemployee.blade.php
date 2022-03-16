<form action="update-employee" method="post">
    @csrf
    <input type="hidden" value="{{ $employees->id }}" name="employees_id">
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name" value="{{ $employees->name }}">
        <br>
    </p>
    <p>
        <label for=""> Varos: </label>
        <input type="text" name="city" value="{{ $employees->city }}">
        <br>
    </p>
    <p>
        <label for=""> Szuletesi ido: </label>
        <input type="text" name="borndate" value="{{ $employees->borndate}}">
    </p>
    <p>
        <label for=""> Fizetes </label>
        <input type="text" name="salary" value="{{ $employees->salary}}">
    </p>
    <p>
        <button type="submit">Frissítés</button>
    </p>
</form>
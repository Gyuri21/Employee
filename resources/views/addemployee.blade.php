<h1>Tölts ki a mezőket</h1>

<form action="save-employee" method="post">
    @csrf
    <p>
        <label for=""> Név: </label>
        <input type="text" name="name">
        <br>
    </p>
    <p>
        <label for=""> Varos: </label>
        <input type="text" name="city">
        <br>
    </p>
    <p>
        <label for=""> Szuletesi ido: </label>
        <input type="text" name="borndate">
    </p>
    <p>
        <label for=""> Fizetes: </label>
        <input type="text" name="salary">
    </p>
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
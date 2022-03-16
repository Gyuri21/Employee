<!DOCTYPE html>
<html lang="en">
<head>
  <title>Szerkesztes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <h1>Dolgozó adatainak szerkesztese</h1>
    <form action="/employees/{{$employees->id}}/edit" method="post">
        @csrf
        @method('put')
        <p><label for="name">Név</label>
        <input name="name" type="text" value="{{$employees->name}}"></p>
        <p>
        <label for="city">Város</label>
        <input name="city" type="text" value="{{$employees->city}}">
        </p>
        <p>
        <label for="borndate">Születés</label>
        <input name="borndate" type="text" value="{{$employees->borndate}}">
        </p>
        <p>
        <label for="salary">Fizetés</label>
        <input name="salary" type="text" value="{{$employees->salary}}">
        </p>
        <button type="submit">Beküldés</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>View Klas Records</title>
</head>
<body>
<table>
    <tr>
        <td>Id</td>
        <td>Klas</td>
    </tr>

    @foreach ($klas as $k)
        <tr>
            <td>{{ $k->id }}</td>
            <td>{{ $k->klas }}</td>
        </tr>
    @endforeach
</table>
</body>
</html>


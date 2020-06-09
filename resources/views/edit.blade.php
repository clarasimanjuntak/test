<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit</title>

    <h1> Edit Data Buku </h1>

</head>
<body>
    <form action="{buku}/buku" method="post">
    @method('patch')
    @csrf

    <label for="id">id</label>
    <input type="text" name="id" value="{{$buku -> id}}"> </br></br>

    <label for="judul">judul</label>
    <input type="text" name="judul"value="{{$buku -> judul}}"> </br></br>

    <label for="penulis">penulis</label>
    <input type="text" name="penulis" value="{{$buku -> penulis}}"> </br></br>

    <label for="penerbit">penerbit</label> 
    <input type="text" name="penerbit" value="{{$buku -> penerbit}}"> </br></br>


    <button type="submit">Ubah Data!</button>



</body>
</html>




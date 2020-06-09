<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create</title>

    <h1> Tambah Data Buku </h1>

</head>
<body>
    <form action="/buku" method="post">
    @csrf

    <label for="id">id</label>
    <input type="text" name="id"> </br></br>

    <label for="judul">judul</label>
    <input type="text" name="judul"> </br></br>

    <label for="penulis">penulis</label>
    <input type="text" name="penulis"> </br></br>

    <label for="penerbit">penerbit</label> 
    <input type="text" name="penerbit"> </br></br>


    <button type="submit">Tambah Data!</button>



</body>
</html>

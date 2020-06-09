<!DOCTYPE html>
<html>
<head>
	<title>Perpustakaan Clara</title>
</head>
<body>

<h1>Perpustakaan Clara</h1>
<h3>Data Buku</h3>

<a href ="/buku/create">Tambah Data Buku</a>

<ul>
	@foreach($buku as $p)
		<li>{{ "Judul : ". $p->judul . ' | Penulis : ' . $p->penulis . ' | Penerbit : ' . $p->penerbit }}</li>
        
        <td>
        <a href="{{ $p->id }}/edit">Edit</a>


        <form action="/buku/hapus/{{ $p->id }}" method="post">
            @method('delete')
            @csrf
            <button type="submit">Hapus</button>
        </form>
           
        

        </td>

	@endforeach
</ul>

</body>
</html>
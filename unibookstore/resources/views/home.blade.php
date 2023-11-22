@foreach($daftarbuku as $p)
<tr>
	<td>{{ $p->ID_Buku }}</td>
	<td>{{ $p->Nama_Buku }}</td>
	<td>{{ $p->Id_Penerbit }}</td>
	<td>{{ $p->Stok }}</td>
    <td>{{ $p->Harga }}</td>
    <td>{{ $p->Kategori }}</td>
	<td>
		<a href="/pegawai/edit/{{ $p->pegawai_id }}">Edit</a>
		|
		<a href="/pegawai/hapus/{{ $p->pegawai_id }}">Hapus</a>
	</td>
</tr>
@endforeach
<table>
    <thead>
       <tr>
          <th>ID</th>
          <th>Nama Barang</th>
          <th>Jenis Barang</th>
          <th>Harga</th>
       </tr>
    </thead>
    <tbody>
       @foreach ($barang as $brg)
          <tr>
             <td>{{ $brg->id }}</td>
             <td>{{ $brg->nama_barang }}</td>
             <td>{{ $brg->jenis_barang }}</td>
             <td>{{ $brg->harga_barang }}</td>
          </tr>
       @endforeach
    </tbody>
 </table>
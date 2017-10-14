  <div class="container">
      <section class="content-header">
        <h1>
        <b>Buku</b>
        </h1>
      </section>
    </div>

<table border="1">
    
    
        <thead>
        <th>id buku</th>
        <th>judul</th>
        <th>noisbn</th>
        <th>penulis</th>
        <th>penerbit</th>
        <th>tahun</th>
        <th>stok</th>
        <th>harga_pokok</th>
        <th>harga_jual</th>
        <th>ppn</th>
        <th>diskon</th>

        </thead>
    
    <tbody>
    <tr>
        
    <td> {{ $buku->id_buku }} </td>
    <td> {{ $buku->judul }} </td>  
    <td> {{ $buku->noisbn }} </td> 
    <td> {{ $buku->penulis }} </td> 
    <td> {{ $buku->penerbit }} </td> 
    <td> {{ $buku->tahun }} </td> 
    <td> {{ $buku->stok }} </td> 
    <td> {{ $buku->harga_pokok }} </td> 
    <td> {{ $buku->harga_jual }} </td> 
    <td> {{ $buku->ppn }} </td> 
    <td> {{ $buku->diskon }} </td> 
        
    
        
    </tr>
    </tbody>


</table>
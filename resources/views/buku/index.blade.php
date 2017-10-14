  <div class="container">
      <section class="content-header">
        <h1>
        <b>Buku</b>
        </h1>
      </section>
    </div>
<a href="buku/create">create</a>

<table border="1">
    
    
        <thead>
        <th>Id Buku</th>
        <th>Judul</th>     
        <th>No ISBN</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Tahun</th>
        <th>Stok</th>
        <th>Harga Pokok</th>
        <th>Harga Jual</th>
        <th>PPN</th>
        <th>Diskon</th>
        <th>Detail</th>
        <th>Edit</th>
        <th>Delete</th>
            
            @foreach ($buku as $buk)
        </thead>
    
    <tbody>
    <tr>
        
    <td> {{ $buk->id_buku}} </td>
    <td> {{ $buk->judul }} </td>  
    <td> {{ $buk->noisbn }} </td>
    <td> {{ $buk->penulis }} </td>    
    <td> {{ $buk->penerbit }} </td>  
    <td> {{ $buk->tahun }} </td>  
    <td> {{ $buk->stok }} </td>  
    <td> {{ $buk->harga_pokok }} </td>  
    <td> {{ $buk->harga_jual }} </td>  
    <td> {{ $buk->ppn }} </td>  
    <td> {{ $buk->diskon }} </td>  

      
    <td><a href="/buku/{{$buk->id_buku}}"> Detail </a></td>    
        
    <td><a href="/buku/{{$buk->id_buku}}/edit"> Edit </a></td>
        
    <td>
    
    <form class="" action="/buku/{{$buk->id_buku}}" method="post">

    <input type="hidden" name="_method" value="delete">
    <input type="hidden" name="_token" value="{{csrf_token() }}">
    <input type="submit" name="name" value="delete" >
    
    </form>
        
    </td>
        
    </tr>
    </tbody>
    @endforeach

</table>
<h1>Edit Pinjaman</h1>

<form class="" action="/buku/{{$buku->id_buku}}" method="post">
    
    
     <input type="text" name="judul" value="{{$buku->judul}}" placeholder="judul"> <br>
       
    <input type="text" name="noisbn" value="{{$buku->noisbn}}" placeholder="noisbn"> <br>

    <input type="text" name="penulis" value="{{$buku->penulis}}" placeholder="penulis"> <br>

    <input type="text" name="penerbit" value="{{$buku->penerbit}}" placeholder="penerbit"> <br>

    <input type="text" name="tahun" value="{{$buku->tahun}}" placeholder="tahun"> <br>

    <input type="text" name="stok" value="{{$buku->stok}}" placeholder="stok"> <br>

    <input type="text" name="harga_pokok" value="{{$buku->harga_pokok}}" placeholder="harga_pokok"> <br>

    <input type="text" name="harga_jual" value="{{$buku->harga_jual}}" placeholder="harga_jual"> <br>

    <input type="text" name="ppn" value="{{$buku->ppn}}" placeholder="ppn"> <br>

    <input type="text" name="diskon" value="{{$buku->diskon}}" placeholder="diskon"> <br>
    
    <input type="hidden" name="_method" value="put"> 
    
    <input type="hidden" name="_token" value="{{ csrf_token() }}"> <br>
    
    <input type="submit" name="name" value="Edit"> <br>


</form>
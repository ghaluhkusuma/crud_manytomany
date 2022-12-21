<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>

    <div class="container">
        <div class="row">
            <div class="col">

                <h2>Edit Artikel</h2>
                <form action="{{ route('artikels.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
                   
                    @csrf  
                    @method('PUT')                 
                    <div class="form-group mt-4">
                        <label class="font-weight-bold">JUDUL</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ $artikel->judul }}" placeholder="Masukkan Judul Artikel">
                    
                        <!-- error message untuk title -->
                        @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label class="font-weight-bold">KONTEN ARTIKEL</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="5" placeholder="Masukkan Konten Artikel">{{ $artikel->isi }}</textarea>
                    
                        <!-- error message untuk content -->
                        @error('isi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <label>Tag</label>
        <select id="inputState" multiple  class="form-select" name="tag_id" >
          <option selected>Silakan Pilih Tag</option>
         
          @foreach ($tags as $tag)
    
          <option value="{{$tag->id}}" > {{$tag->name}}</option>
          @endforeach
          
        </select>
        @error('tag_id')
                <div class="alert alert-danger mt-2">
                    {{ $message }}
                </div>
            @enderror
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </form>
            </div>

        </div>

    </div>

    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'content' );
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
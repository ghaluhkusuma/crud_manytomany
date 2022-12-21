<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
  
    <div class="container">
        <div class="row">
            <div class="col mt-4">

                <h2>Form Input Artikel</h2>
                <form action="{{ route('artikels.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf                   
                    <div class="form-group mt-4">
                        <label class="font-weight-bold">JUDUL</label>
                        <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" value="{{ old('judul') }}" placeholder="Masukkan Judul Artikel">
                    
                        <!-- error message untuk title -->
                        @error('judul')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mt-4">
                        <label class="font-weight-bold">KONTEN ARTIKEL</label>
                        <textarea class="form-control @error('isi') is-invalid @enderror" name="isi" rows="5" placeholder="Masukkan Konten Artikel">{{ old('isi') }}</textarea>
                    
                        <!-- error message untuk content -->
                        @error('isi')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="mb-3 mt-4">
                      <label for="tag_id" class="form-label">TAG ARTIKEL</label>
                      <select multiple class="form-control" name="tag_id[]" id="tag_id">
                        @foreach ($tag as $tg)
                            
                        <option value= "{{ $tg->id }}">-{{ $tg->name }} </option>
                        
                        @endforeach    
                            
                        
                      </select>
                      
                      @error('tag_id')
                      <div class="alert alert-danger mt-2">
                      {{ $message }}
                      </div>
                      @enderror


                    <div class="mb-3 form-check">
                     
                    </div>
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
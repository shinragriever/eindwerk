@extends('layouts.admin')
@section('head')
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection
@section('content')

            <h1>Create Product</h1>

            <form method="POST" action="{{Route('products.store')}}" enctype="multipart/form-data">
                <div>
                <label for="name">Name:</label>
                <div class="form-group">
                    <input type="text" name="name" value="{{ old('name') ?? $product->name}}" class="form-control"> 
                    <div>{{ $errors->first('name')}}</div>
                </div>
                <label for="description">Description:</label>
                <div class="form-group">
                    <textarea name="description" value="{{ old('description') ?? $product->description}}" cols="30" rows="10" class="form-control">{{ old('description') ?? $product->description}}</textarea>
                </div>
                <label for="price">Price:</label>
                <div class="form-group">
                    <input type="text" name="price" value="{{ old('price') ?? $product->price}}" class="form-control"> 
                    <div>{{ $errors->first('price')}}</div>
                </div>
                <label for="category_id">Category:</label>
                <div class="form-group">
                    <select class="custom-select my-1 mr-sm-2" name="category_id">
                        <option value="0" selected disabled>Choose Category</option>
                        @foreach($categories as $category)
                        
                        <option value="{{$category->id}}" {{(old('category_id') == $category->id) ? 'selected':""}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                    <div>{{ $errors->first('category_id')}}</div>
                </div>
                    <label>Product primary image:</label>
                    <div class="form-group">
                        
                            <div>
                            <input type="file" name="images[]" multiple>
                            </div>
                            <div>{{ $errors->first('images')}}</div>
                    </div>
                  
                     
                @csrf
          
                    <div class="form-group">
                        <select class="js-select2-genres form-control" name="genres[]" multiple="multiple">
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->name}}</option>


                            @endforeach
                          </select>
                    </div>
                <div>{{ $errors}}</div>
                          
                    </div>
        <div>
        <button class="btn btn-primary" type="submit">SUBMIT</button>
        </div>
    </form>

@endsection


@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
$(document).ready(function() {
    $('.js-select2-genres').select2();
});
</script>
<script>
        Dropzone.autoDiscover = false;
        var myDropzone = new Dropzone("#dropzone",{
            url: "{{Route('products.store')}}",
            uploadMultiple: true,
            parallelUploads: 25,
            maxFiles: 25,
            autoProcessQueue: false,
            addRemoveLinks: true,
            paramName: "images", // The name that will be used to transfer the file
            acceptedFiles: ".jpeg,.jpg,.png,.gif, .svg", 
            maxFilesize: 10, // MB
            sending: function(file, xhr, formData) {
                
                formData.append("_token", "{{ csrf_token() }}");
            }
        });
        
        $("button[type=submit]").click(function(formData) {
            
            myDropzone.processQueue();
        });
        </script>



@endsection
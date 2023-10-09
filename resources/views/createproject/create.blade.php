@extends('layout.main')
@section('content')
<br>
<br><br>
<div class="container" style="border: 1px solid #000; padding: 10px;">
<br>
    <div class="container">
    <h1>Create Project</h1>
    <form method="POST" action="{{ route('createproject.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name">Project Name</label>
            <input type="text" class="form-control" id="projectname" name="projectname" required>
        </div>

        <div class="form-group">
            <label>Add Image</label>
            <img src="" alt="" class="img-product" id="file-preview" />
            <input type="file" id="image" name="image" accept="image/*" onchange="showFile(event)">
        </div>

        <button type="submit" class="btn" style="background-color: #4139ad; color: #fff;">Create Project</button>
    </form>
</div>

<script>
        function showFile(event) {
            var input = event.target;
            var reader = new FileReader();
            reader.onload = function() {
                var dataURL = reader.result;
                var output = document.getElementById('file-preview');
                output.src = dataURL;
            };
            reader.readAsDataURL(input.files[0]);
        }
    </script>
    <br>
</div>    
<br>
<br><br>
@endsection
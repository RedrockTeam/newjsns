<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
@if($errors)
    @foreach ($errors->all() as $error)
        <p class="alert alert-warning">{{ $error }}</p>

    @endforeach
@endif

<form action="upload" method="post" enctype="multipart/form-data">
    <input type="text" name="text" value="{{Input::old('text')}}"/>
    <input type="file" name="photo[]" />
    <input type="file" name="photo[]"/>
    <input type="file" name="photo[]"/>
    <input type="submit"/>
</form>
</body>
</html>
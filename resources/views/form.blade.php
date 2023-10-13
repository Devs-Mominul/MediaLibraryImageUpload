<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('store.data') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="file" name="image" id="name">
        </div>
        <div class="mb-3">

            <input type="submit" value="submit">
        </div>

    </form>
    @foreach ($images as $img)
    <img src="{{ $img->getFirstMediaUrl() }}" alt="{{ $img->caption }}" width="400" height="400">

    @endforeach

</body>
</html>

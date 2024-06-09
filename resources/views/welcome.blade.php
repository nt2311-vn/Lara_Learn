<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Hello World</h1>
    <form action="/" method="post">
        @csrf
        <input type="text" name="username" id="">
        <button type="submit">Submit</button>
    </form>
    <form action="/" method="post">
        @csrf
        <input type="hidden" name="_method" value="put">
        <input type="text" name="username" id="">
        <button type="submit">Submit put</button>
    </form>

</body>

</html>

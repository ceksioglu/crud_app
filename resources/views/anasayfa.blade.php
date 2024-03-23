<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div style="border: 2px solid black;">
        <h2>Kayıt Ol</h2>
        <form action="/kayit" method="POST">
            @csrf
            <input name="name" type="text" placeholder="İsim">
            <input name="email" type="text" placeholder="E-mail">
            <input name="password" type="password" placeholder="Şifre">
            <button>Kayıt Ol!</button>
        </form>
            <div>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @auth
    <p>Hesap açık.</p>
    <form action="/cikis" method="POST">
        @csrf
     <button>Çıkış Yap</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Yeni Gönderi Oluştur</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Başlık">
            <textarea name="body" placeholder="İçerik"></textarea>
            <button>Kaydet</button>
        </form>
    </div>

    @else
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
    <div style="border: 2px solid black;">
        <h2>Giriş Yap</h2>
        <form action="/giris" method="POST">
            @csrf
            <input name="loginname" type="text" placeholder="İsim">
            <input name="loginpassword" type="password" placeholder="Şifre">
            <button>Giriş</button>
        </form>
    <div>

    @endauth


</body>
</html>
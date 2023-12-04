<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UYELER</title>
    <style>
        body {
            background: #cbd5e0;
            font-family: sans-serif;
            font-size: 10px;


        }


        button[class="btn danger"] {
            box-shadow: 0 3px 0 0;
            border: none;
            color:red;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            font-size: 15px;
            margin: 2px;
            padding: 2px;
            outline: none;
            text-shadow: 0 1px #68B25B;
        }
        button[class="btn danger"]:hover {
            background-color: red;
            text-shadow:0 1px 3px;
            color:white;
        }
        button[class="btn danger"]:hover {

        }
        button[class="btn edit"] {
            box-shadow: 0 3px 0 0;
            border: none;
            color:blue;
            cursor: pointer;
            border-radius: 5px;
            display: block;
            font-size: 15px;
            margin: 2px;
            padding: 2px;
            outline: none;
            text-shadow: 0 1px #68B25B;
        }
        button[class="btn edit"]:hover {
            background-color: blue;
            text-shadow:0 1px 3px;
            color:white;
        }
        button[class="btn edit"]:hover {

        }
        div[class=alertMessage]{
            background-color: #68B25B;
            padding: 20px;
            width: 75%;
            font-size: 20px;
            margin: auto;
            border-radius: 5px;
            box-shadow: rgb(0 0 0 / 25%) 0px 5px 10px 2px;
        }
        div[class=alertMessage2]{
            background-color: red;
            padding: 20px;
            width: 75%;
            font-size: 20px;
            margin: auto;
            border-radius: 5px;
            box-shadow: rgb(0 0 0 / 25%) 0px 5px 10px 2px;
        }
        span[class=closeBtn]{
            float: right;
            margin-left: 18px;
            font-size: 30px;
            line-height: 20px;
            cursor: pointer;
            transition: 0.4s;
        }
        .mainmenubtn {
            position: fixed;
            background: #cbd5e0;
            font-family: sans-serif;
            border: none;
            cursor: pointer;
            padding:20px;
            margin-top:20px;
            z-index:2;
            right: 10px;
            top: 10px;
        }
        .dropdown {
            position: fixed;
            display: inline-block;
            z-index:2;
            right: 10px;
            top: 10px;
        }
        .dropdown-child {
            display: none;
            background-color: black;
            min-width: 200px;
            z-index:2;
        }
        .dropdown-child a {
            color: white;
            padding: 20px;
            text-decoration: none;
            display: block;
            z-index:2;
        }
        .dropdown:hover .dropdown-child {
            display: block;
            z-index:2;
        }

    </style>


</head>

<body>
<header><div class="dropdown" >
        <button class="mainmenubtn" style="position:fixed"><a href="#"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/337815530_774045714337615_7233180917662706212_n.jpg?stp=dst-jpg_p206x206&_nc_cat=110&ccb=1-7&_nc_sid=aee45a&_nc_ohc=k36EVAxDlVYAX-8du18&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQbstRQ0PHDLgldTIWhohvs05Bv-tg7f9IGX1TlnY97DA&oe=645D2A31" alt="Admin" width="60" height="60" style="border-radius: 50%;object-fit: cover;"></a>
        </button>
        <div class="dropdown-child">
            <a href="uyeler/create">Uye Ekle</a>
            <a href="/uyeler">Uyeler</a>
            <div class="dropdown-divider"></div>
            <a href="adminler/create">Admin Ekle</a>
            <a href="/adminler">Adminler</a>
            <div class="dropdown-divider"></div>
            <a href="/">Çıkış</a>

        </div>
    </div>
</header>

<div class="index">
    @if(session()->get('basarili'))
        <div class="alertMessage">
            <span class="closeBtn" onclick="this.parentElement.style.display='none';">×</span>
            <strong>{{session()->get('basarili')}}</strong>
        </div>
    @elseif(session()->get('silindi'))
        <div class="alertMessage2">
            <span class="closeBtn" onclick="this.parentElement.style.display='none';">×</span>
            <strong>{{session()->get('silindi')}}</strong>
        </div>
    @endif


    <table table border="1" cellpadding="10">
        <caption> SİSTEM ADMİNLERİ</caption>
        <thead>
        <tr>
            <th>KULLANICI ADI</th>
            <th>ŞİFRE</th>
            <th colspan="2">İŞLEMLER</th>
        </tr>
        </thead>

        <tbody>
        @foreach($veriler as $veri)
            <tr>
                <td>{{$veri->kullaniciAdi}}</td>
                <td>{{$veri->sifre}}</td>
                <td>
                    <form action="{{route('adminler.edit',$veri->id)}}" method="get">
                        @csrf
                        <button class="btn edit" type="submit">DÜZENLE</button>
                    </form>
                </td>
                <td>
                    <form action="{{route('adminler.destroy',$veri->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn danger" type="submit">SİL</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
        <tfoot>

        <tr>

            <td colspan="7"> <center>Uyelerin telif hakları saklıdır.</center></td>

        </tr>

        </tfoot>
    </table>

</div>



</body>
</html>

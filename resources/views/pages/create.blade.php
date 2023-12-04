<html>
    <head>
        <title>Uye Ekle</title>

        <style>
            input[type=text] {
                width: 70%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color:lightgrey;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                margin:5px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.8s ease-in-out;
            }
            input[type=number] {
                width: 70%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: lightgrey;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                margin:5px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.8s ease-in-out;
            }

            input[type=email] {
                width: 70%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: lightgrey;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                margin:5px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.8s ease-in-out;
            }
            input[type=password] {
                width: 70%;
                box-sizing: border-box;
                border: 2px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
                background-color: lightgrey;
                background-position: 10px 10px;
                background-repeat: no-repeat;
                padding: 12px 20px 12px 40px;
                margin:5px;
                -webkit-transition: width 0.4s ease-in-out;
                transition: width 0.8s ease-in-out;
            }
            label{
                font-size: 20px;
                margin:2px;
                text-align: left;
                padding: 12px 20px 12px 10px;


            }
            div[class=card-header]{
                font-size: 40px;
                color: black;

            }

            div[class=card]{

                width: 100%;
                height: 100%;
                border: 2px solid #ccc;
                border-radius: 40px;
                padding: 20px 20px 20px 20px;
                background-color:lightslategrey;
                color: black;
                box-shadow: 0 5px 0 5px;





            }
            button[type="submit"] {
                box-shadow: 0 3px 0 0;
                border: none;
                color:lightslategrey;
                cursor: pointer;
                border-radius: 40px;
                display: block;
                font-size: 2em;
                line-height: 1.6em;
                margin: 2em 0 0;
                outline: none;
                padding: .8em 0;
                text-shadow: 0 1px #68B25B;
            }
            button[type="submit"]:hover {
                background: rgba(148,175,101,1);
                text-shadow:0 1px 3px;
                color:black;
            }
            button[type="submit"]:hover {

            }
            body {
                background: #384047;
                font-family: sans-serif;
                font-size: 10px;
                z-index: 1;

            }
            div[class=container]{
                width: 60%;
                height: 75%;
                position: relative;
                margin: auto;
            }
            .mainmenubtn {
                position: fixed;
                background: #384047;
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
            <button class="mainmenubtn" style="position:fixed"><a href="#"><img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/337815530_774045714337615_7233180917662706212_n.jpg?stp=dst-jpg_p206x206&_nc_cat=110&ccb=1-7&_nc_sid=aee45a&_nc_ohc=k36EVAxDlVYAX-8du18&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&oh=03_AdQbstRQ0PHDLgldTIWhohvs05Bv-tg7f9IGX1TlnY97DA&oe=645D2A31" alt="ENES" width="60" height="60" style="border-radius: 50%;object-fit: cover;"></a>
            </button>
            <div class="dropdown-child">
                <a href="/uyeler">Uyeler</a>
                <div class="dropdown-divider"></div>
                <a href="/adminler">Adminler</a>
                <a href="/adminler/create">Admin Ekle</a>
                <div class="dropdown-divider"></div>
                <a href="/">Çıkış</a>

            </div>
        </div>
    </header>

            <div class="container">
                <div class="card">
                    <div class="card-header">
                        Uye Oluştur
                        <hr>
                    </div>

                    <div class="card-body">
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li> {{$error}} </li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form method="post" action="{{route('uyeler.store')}}">
                            <div class="form-group">
                                @csrf
                                <label for="adSoyad">Ad Soyad</label><br>
                                <input type="text" name="adSoyad" class="form-control">
                            </div>

                            <div class="form-group">
                                @csrf
                                <label for="tc">TC kimlik numaranız: <comm>(zorunlu değildir)</comm></label><br>
                                <input type="number" name="tc" class="form-control">
                            </div>

                            <div class="form-group">
                                @csrf
                                <label for="kullaniciAdi">Kullanıcı Adı</label><br>
                                <input type="text" name="kullaniciAdi" class="form-control">
                            </div>

                            <div class="form-group">
                                @csrf
                                <label for="email">E-mail</label><br>
                                <input type="email" name="email" class="form-control">
                            </div>

                            <div class="form-group">
                                @csrf
                                <label for="sifre">Sifre</label><br>
                                <input type="password" name="sifre" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary"> Uye Ekle </button>

                        </form>



                    </div>
                </div>
            </div>





    </body>

</html>


























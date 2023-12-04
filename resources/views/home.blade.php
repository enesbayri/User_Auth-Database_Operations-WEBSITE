<html>
<head>
    <title>HOSGELDİN!</title>
    <style>
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

    </style>
</head>

<body>
<div class="container">
    @if(session()->get('Sifre Hatali'))
        <div class="alertMessage2">
            <span class="closeBtn" onclick="this.parentElement.style.display='none';">×</span>
            <strong>{{session()->get('Sifre Hatali')}}</strong>
        </div>

    @elseif(session()->get('Admin yok'))
        <div class="alertMessage2">
            <span class="closeBtn" onclick="this.parentElement.style.display='none';">×</span>
            <strong>{{session()->get('Admin yok')}}</strong>
        </div>
    @endif




        <div class="container">
            <div class="card">
                <div class="card-header">
                    Hoşgeldin Admin!
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

                        <form method="get" action="{{route('giris.index')}}">
                            @csrf
                            <div class="form-group">
                                @csrf
                                <label for="k">Kullanıcı Adı:</label><br>
                                <input type="text" class="form-control" name="k">
                            </div>
                            <div class="form-group">
                                @csrf
                                <label for="s">Şifre:</label><br>
                                <input type="password" class="form-control" name="s">
                            </div>
                            <button type="submit" class="btn btn-primary">Giriş Yap</button>
                        </form>
                </div>
            </div>
        </div>





</div>

</body>

</html>


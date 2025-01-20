@extends('layouts.app')

@section('content')
    <section class="vh-100 d-flex align-items-center justify-content-center">
        <div class="form">
            <img src="https://autopistaatlacomulcomaravatio.com/atmv/wordpress/wp-content/uploads/2021/03/mro.png" alt="Logo de la empresa" width="60px" height="60px">
            <div class="title">MRO Atlacomulco-Maravatío,<br><span>Acceso solo a personal autorizado</span></div>
            <form method="post" action="#">
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                

                <input type="text" placeholder="Usuario" name="username" class="input" value="{{ old('username') }}"
                    required="required" autofocus>
                @if ($errors->has('username'))
                    <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                @endif

                <input type="password" placeholder="Contraseña" name="password" class="input" value="{{ old('password') }}"
                    required="required">
                @if ($errors->has('password'))
                    <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                @endif

                <button class="button-confirm" type="submit">Acceder</button>
            </form>
        </div>
    </section>

    <style>
        .form {
            --input-focus: #2d8cf0;
            --font-color: #323232;
            --font-color-sub: #666;
            --bg-color: #fff;
            --main-color: #323232;
            padding: 20px;
            background: lightgrey;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 20px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            box-shadow: 4px 4px var(--main-color);
        }

        form {
            display: flex;
            flex-direction: column;
            gap: 20px;
            width: 100%;
            align-items: center;
            
        }

        .title {
            color: var(--font-color);
            font-weight: 900;
            font-size: 20px;
            margin-bottom: 25px;
            text-align: center;
        }

        .title span {
            color: var(--font-color-sub);
            font-weight: 600;
            font-size: 17px;
        }

        .input {
            width: 250px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 15px;
            font-weight: 600;
            color: var(--font-color);
            padding: 5px 10px;
            outline: none;
        }

        .input::placeholder {
            color: var(--font-color-sub);
            opacity: 0.8;
        }

        .input:focus {
            border: 2px solid var(--input-focus);
        }

        .button-confirm {
            width: 120px;
            height: 40px;
            border-radius: 5px;
            border: 2px solid var(--main-color);
            background-color: var(--bg-color);
            box-shadow: 4px 4px var(--main-color);
            font-size: 17px;
            font-weight: 600;
            color: var(--font-color);
            cursor: pointer;
        }
    </style>
@endsection
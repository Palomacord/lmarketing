@extends('site.layouts.template')
@section('content')
    <div class="container-content">
        <div class="container-title">
            <h1>Contact</h1>
        </div>
        <div class="content-form">
            <form action="{{route('site.contact')}}" method="post">
                @csrf
                <div>
                    <label for="fname">Name:</label><br>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="fname">Telefone:</label><br>
                    <input type="text" name="phone">
                </div>
                <div>
                    <label for="fname">E-mail:</label><br>
                    <input type="text" name="email">
                </div>
                <div>
                    <label for="fname">Mensagem:</label><br>
                    <textarea id="msg" name= "mensage"></textarea>
                </div>
                <div class="button">
                    <button class = "btn-submit" type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </div>
@endsection



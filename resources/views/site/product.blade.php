@extends('site.layouts.template')
@section('content')
    <div class="container-title">
        <h1>Products</h1>
    </div>
    <div class="container-content">
        <div class="content-form">
            <form action="{{route('site.product')}}" method="post">
                @csrf
                <div class="input-group">
                    <div class="input-box">
                        <label for="fname">Name:</label><br>
                        <input type="text" name="name">
                    </div>
                    <div class="input-box">
                        <label for="fname">Descrição:</label><br>
                        <input type="text" name="description">
                    </div>
                    <div class="input-box">
                        <label for="fname">Peso:</label><br>
                        <input type="text" name="weight">
                        <label for="fname">Preço:</label><br>
                        <input type="text" name="price">
                        <label for="fname">Estoque Min.:</label><br>
                        <input type="text" name="min_stock">
                        <label for="fname">Estoque Max.:</label><br>
                        <input type="text" name="max_stock">
                    </div>
                    <div class="input-box">
                        <label for="fname">Quantidade:</label><br>
                        <input type="text" name="quantity">
                    </div>
                    <div class="button">
                        <button class = "btn-submit" type="submit">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection


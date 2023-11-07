@extends('site.layouts.template')
@section('content')
    @include('site.layouts._partials.nav-new')
    <div class="container-title">
        <h1>Product</h1>
    </div>
    <div class="content-form-product">
        <form action="{{route('site.product')}}" method="post">
            @csrf
            <div>
                <label for="fname">Name:</label><br>
                <input type="text" name="name">
            </div>
            <div>
                <label for="fname">Descrição:</label><br>
                <input type="text" name="description">
            </div>
            <div>
                <label for="fname">Peso:</label><br>
                <input type="text" name="weight">
                <label for="fname">Preço:</label><br>
                <input type="text" name="price">
                <label for="fname">Estoque Min.:</label><br>
                <input type="text" name="min_stock">
                <label for="fname">Estoque Max.:</label><br>
                <input type="text" name="max_stock">
            </div>
            <div>
                <label for="fname">Quantidade:</label><br>
                <input type="text" name="quantity">
            </div>
            <div class="button">
                 <button class = "btn-submit" type="submit">Enviar</button>
            </div>
        </form>
    </div>
    @include('site.layouts._partials.nav-new')
@endsection


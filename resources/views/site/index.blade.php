
 @extends('site.layouts.template')
 @section('content')

    <section class="home">
        <div class="home-img">
            <img id= "menu-img" class = "one" src="https://www.imagensempng.com.br/wp-content/uploads/2021/10/750-1.png" alt="tecnology">
        </div>
        <div class="home-text">
            <h1>Notebook <br>   Lmarketing</h1>
            <h5> Intel Core i5</h5>
            <h3>$199.00</h3>
            <a href="#" class="btn-shop">Shop now</a>
        </div>
    </section>

    <div class= "home-main">
        <div class="row">
            <li><img src="https://www.imagensempng.com.br/wp-content/uploads/2021/10/750-1.png" alt="" onclick= "slider('{{asset('https://www.imagensempng.com.br/wp-content/uploads/2021/10/750-1.png')}}')" srcset=""></li>
        </div>
        <div class="row2">
            <li><img src="{{asset('laptop1.png')}}" alt="" onclick= "slider('{{asset('laptop1.png')}}')" srcset=""></li>
        </div>
        <div class="row3">
            <li><img src="{{asset('laptop2.png')}}" alt="" onclick= "slider('{{asset('laptop2.png')}}')" srcset=""></li>
        </div>

    </div>

    <div class="card">
        <div class="card-content">
            <div class="card-title">
                <h5>Sinta a Música como Nunca Antes com o Novo Fone Power Ear!</h5>
                <p>Descubra uma experiência sonora revolucionária com o nosso mais recente lançamento: o Power Ear.
                    Este não é apenas um fone de ouvido, é uma porta de entrada para um universo de áudio imersivo e qualidade sonora incomparável.</p>
            </div>
            <div class="card-img">
                <img src="https://supreo.com.br/wp-content/uploads/2023/03/1-ATUALIZADA-Fone-de-Ouvido-Bluetooth-Capa-2.png" alt="">
            </div>
        </div>


    </div>

    <script>
        function slider (anything){
            console.log(anything);
            document.querySelector ('.one') .src = anything;
        };

       let menu = document.querySelector ('#menu-img');
       let navbar = document.querySelector ('.navbar');

       menu.onclick = () => {
        menu.classList.toggle ('bx-x');
        navbar.classList.toggle ('open');
       }
    </script>
@endsection

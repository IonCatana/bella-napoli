<div class="container">
  <a href=" {{route('pizzas.index')}} ">Lista Pizze</a>
  <figure>
    <img src=" {{$pizza->img}} " alt="">
  </figure>
  <p> {{$pizza->name}} </p>
  <p> {{$pizza->description}} </p>
  <p> {{$pizza->price}} &euro; </p>
</div>
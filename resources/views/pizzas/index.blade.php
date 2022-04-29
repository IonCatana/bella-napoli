<div class="container">
  <table>
    <thead>
      <tr>
        <th>id</th>
        <th>nome</th>
        <th>ingredienti</th>
        <th>prezzo</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($pizzas as $pizza)
        <tr>
          <td> {{$pizza->id}} </td>
          <td> {{$pizza->name}} </td>
          <td> {{$pizza->description}} </td>
          <td> {{$pizza->price}} &euro;</td>
          <td>
            <a href=" {{route('pizzas.show', $pizza)}} ">Vedi</a>
          </td>
          <td>
            <a href=" {{route('pizzas.edit', $pizza)}} ">Modifica</a>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</div>
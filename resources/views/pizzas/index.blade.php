@extends('layout.layout')


@section('section')
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
            <td></td>
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection
<form action=" {{route('pizzas.update', $pizza)}} " method="POST">
  @csrf
  @method('PUT')
  <div>
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{old('name') ?: $pizza->name}}">
  </div>
  <div>
    <label for="price">Prezzo:</label>
    <input type="text" name="price" id="price" value="{{old('price') ?: $pizza->price}}">
  </div>
  <div>
    ingredienti: 
    <textarea name="description" id="description" cols="30" rows="10"> {{$pizza->description}} </textarea>
  </div>
  <button type="submit">
    Aggiorna
  </button>
</form>
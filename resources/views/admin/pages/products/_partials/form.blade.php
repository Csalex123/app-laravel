@include('admin.includes.alerts')

@csrf

<div class="row">
    <div class="col-6">
        <div class="form-group">
            <input class="form-control" type="text" name="name" placeholder="name" value="{{ $product->name ?? old('name') }}">
        </div>
    </div>
    <div class="col-6">
        <div class="form-group">
            <input class="form-control" type="text" name="price" placeholder="Preço" value="{{ $product->price ?? old('price') }}">
        </div>
    </div>
</div>

<div class="form-group">
    <textarea class="form-control" name="description" cols="30" rows="10" placeholder="Descrição">
        {{ $product->description ?? old('description') }}
    </textarea>
</div>

<div class="form-group">
    <input type="file" name="foto">
</div>

<div class="form-group">
    <button class="btn btn-info" type="submit">Enviar</button>
</div>
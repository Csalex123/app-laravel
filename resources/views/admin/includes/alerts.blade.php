{{-- Mensagens de validações --}}
@if ($errors->any())
<div class="alert alert-warning">
    <ul>
        @foreach ($errors->all() as $erro)
        <li>{{$erro}}</li>
        @endforeach
    </ul>
</div>
@endif
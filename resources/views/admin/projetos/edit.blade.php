<div class='container'>
    <h1>Editar Projeto {{$projeto->title}}</h1>
    <form class='row' action="{{route('projeto.update',$projeto->id)}}" method="post">
        @csrf
        @method('put')
        <div class='col-6'>
            <input type="text" class="form-control" value='{{$projeto->title}}' name="title" placeholder="Titulo">
            <input type="text" class="form-control" value='{{$projeto->description}}' name="description" placeholder="Descricao">
        </div>
        <div class='col-6'>
            <input type="text" class="form-control" value='{{$projeto->date_start}}' name="date_start" placeholder="Data incial">
            <input type="text" class="form-control" value='{{$projeto->date_end}}' name="date_end" placeholder="Data limite">
        </div>
        <button type="submit" class="form-control">Enviar</button>
    </form>
</div>

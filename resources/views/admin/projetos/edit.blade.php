<div class='container'>
    <div class='row'>
        <div class='col-2'> </div>
        <div class='col-8'>
            <h1>Editar Projeto {{$projeto->title}}</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            <form class='row' action="{{route('projeto.update',$projeto->id)}}" method="post">
                @csrf
                @method('put')
                <div class='col-6'>
                    <input type="text" class="form-control" value='{{$projeto->title}}' name="title" placeholder="Titulo">
                    <input type="text" class="form-control" value='{{$projeto->description}}' name="description" placeholder="Descricao">
                </div>
                <div class='col-6'>
                    <input type="text" class="form-control datepicker" value='{{$projeto->date_start}}' name="date_start" placeholder="Data incial">
                    <input type="text" class="form-control datepicker" value='{{$projeto->date_end}}' name="date_end" placeholder="Data limite">
                </div>
                <button type="submit" class="form-control btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>

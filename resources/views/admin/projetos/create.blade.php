<div class='container'>
    <div class='row'>
        <div class='col-2'> </div>
        <div class='col-8'>
                <h1>Cadastrar Projeto</h1>
                @if ($errors->any())
                    <div>
                        <ul>
                            @foreach ($errors->all() as $err)
                            <li>{{$err}}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form  class='row' action="{{route('projeto.store')}}" method="post">
                    @csrf
                    <div class='col-6'>
                        <input type="text"  value="{{old('title')}}" class="form-control" name="title" placeholder="Titulo">
                        <input type="text"  value="{{old('description')}}" class="form-control" name="description" placeholder="Descricao">
                    </div>
                    <div class='col-6'>
                        <input type="text"  value="{{old('date_start')}}" class="datepicker form-control" name="date_start" placeholder="Data incial">
                        <input type="text"  value="{{old('date_end')}}" class="datepicker form-control" name="date_end" placeholder="Data limite">
                    </div>
                    <button type="submit"  class="form-control btn btn-success">Enviar</button>
                </form>
        </div>
    </div>
</div>
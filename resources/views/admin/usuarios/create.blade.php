<div class='container'>
    <div class='row'>
        <div class='col-2'> </div>
        <div class='col-8'>
            <h1>Cadastrar Funcionário</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='row' action="{{route('users.store')}}" method="post">
                @csrf
                <div class='col-6'>
                    <label>Nome</label>
                    <input type="text" class="form-control " name="name" placeholder="Nome" value="{{old('name')}}">
                    <label>Email</label>
                    <input type="text" class="form-control " name="email" value="{{old('email')}}" placeholder="Email">
                    <label>Senha</label>
                    <input type="text" class="form-control " name="password" value="{{old('password')}}" placeholder="Senha">
                </div>
                <div class='col-6'>
                    <label>Projeto</label>
                    <select name='project' required class="form-control">
                    @foreach ($projeto as $proj)
                        <option value='{{ $proj->id }}'>{{ $proj->title }}</option>
                        @endforeach
                    </select>
                    <label>Gerente</label>
                    <select name='manager' class="form-control ">
                        <option value='0'>Nenhum</option>
                        @foreach ($gerentes as $gerente)
                        <option value='{{ $gerente->id }}'>{{ $gerente->name }}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                    <select name='type' required class="form-control">
                        <option value='1'>Funcionario</option>
                        <option value='2'>Gerente</option>
                    </select>
                </div>
                <button type="submit"  class="form-control btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>  
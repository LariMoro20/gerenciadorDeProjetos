<div class='container'>
    <div class='row'>
        <div class='col-2'> </div>
        <div class='col-8'>
            <h1>Editar funcionário {{ $user->name }}</h1>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $err)
                        <li>{{$err}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class='row' action="{{route('users.update',$user->id)}}" method="post">
                @csrf
                @method('put')
                <div class='col-6'>
                    <label>Nome</label>
                    <input type="text" class="form-control" name='name' value="{{$user->name}}" placeholder="Nome">
                    <label>Email</label>
                    <input type="text" class="form-control" name='email' value="{{$user->email}}" placeholder="Email">
                    <label>Senha</label>
                    <input type="text" class="form-control" name='password'  value="{{$user->password}}" placeholder="Senha">
                </div>
                <div class='col-6'>
                    <label>Projeto</label>
                    <select name='project' required class="form-control">
                    <option value='{{$user->project}}'>{{$projeto->title}}</option>
                    @foreach ($projetos as $proj)
                        <option value='{{ $proj->id }}'>{{ $proj->title }}</option>
                        @endforeach
                    </select>
                    <label>Gerente</label>
                    <select name='manager' class="form-control">
                    <option value='{{$user->manager}}'>{{@$manager->name}}</option>

                        @foreach ($gerentes as $gerente)
                        <option value='{{ $gerente->id }}'>{{ $gerente->name }}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                    <select name='type' required class="form-control ">
                    <option value='{{$user->type}}'>{{$type->type}}</option>
                        <option value='1'>Funcionario</option>
                        <option value='2'>Gerente</option>
                    </select>
                </div>
                <button type="submit"  class="form-control btn btn-success">Enviar</button>
            </form>
        </div>
    </div>
</div>

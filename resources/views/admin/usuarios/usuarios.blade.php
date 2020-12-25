<div class='container'>
    <h1>Lista de Funcionários</h1>
    <div class="col-md-12">
        <table class="table" id='clitable'>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Projeto</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Gerente</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr idPac='{{ $user->id }}'>
                    <td class='td-nome'>{{ $user->id }}</td>
                    <td class='td-nome'>{{ $user->name }}</td>
                    <td class='td-email'>{{ $user->email }}</td>
                    <td class='td-projeto'>{{ $user->title }}</td>
                    <td class='td-projeto'>{{ $user->type }}</td>
                    <td class='td-projeto'>{{ $user->manager }}</td>
                    <td><a class='btneditpac' href="{{ route('users.edit',['id'=>$user->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a class='btnremoveuser' iduser='{{ $user->id }}' href="#."><i
                                class="fa fa-window-close"></i></a></td>

                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('users.create')}}" class='btn btn-success'>Criar novo usuario</a>
</div>
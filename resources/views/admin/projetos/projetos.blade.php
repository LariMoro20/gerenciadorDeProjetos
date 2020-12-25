<div class='container'>
    <h1>Projetos</h1>
    <div class="col-md-12">
        <table class="table" id='clitable'>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Data inicial</th>
                    <th scope="col">Data final</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Remover</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projeto as $proj)
                <tr idProj='{{ $proj->id }}'>
                    <td class='td-nome'>{{ $proj->id }}</td>
                    <td class='td-title'>{{ $proj->title }}</td>
                    <td class='td-description'>{{ $proj->description }}</td>
                    <td class='td-date_start '>{{ $proj->date_start }}</td>
                    <td class='td-date_end'>{{ $proj->date_end }}</td>
                    <td><a class='btneditproj' href="{{ route('projeto.edit',['id'=>$proj->id])}}"><i class="fa fa-pencil-square-o"></i></a></td>
                    <td><a class='btnremoveproj' idproj='{{ $proj->id }}' href="#."><i class="fa fa-window-close"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <a href="{{ route('projeto.create')}}" class='btn btn-success'>Criar novo projeto</a>
</div>

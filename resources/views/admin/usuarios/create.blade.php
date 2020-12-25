    <div class='container'>
            <h1>Cadastrar Funcionário</h1>
        
            <form class='row' action="{{route('users.store')}}" method="post">
                @csrf
                <div class='col-6'>
                    <label>Nome</label>
                    <input type="text" class="form-control " name="name" placeholder="Nome">
                    <label>Email</label>
                    <input type="text" class="form-control " name="email" placeholder="Email">
                    <label>Senha</label>
                    <input type="text" class="form-control " name="password" placeholder="Senha">
                </div>
                <div class='col-6'>
                    <label>Projeto</label>
                    <select name='project' required class="form-control col-6">
                    @foreach ($projeto as $proj)
                        <option value='{{ $proj->id }}'>{{ $proj->title }}</option>
                        @endforeach
                    </select>
                    <label>Gerente</label>
                    <select name='manager' class="form-control col-6">
                        <option value='0'>Nenhum</option>
                        @foreach ($gerentes as $gerente)
                        <option value='{{ $gerente->id }}'>{{ $gerente->name }}</option>
                        @endforeach
                    </select>
                    <label>Tipo</label>
                    <select name='type' required class="form-control col-6">
                        <option value='1'>Funcionario</option>
                        <option value='2'>Gerente</option>
                    </select>
                </div>
                <button type="submit"  class="form-control">Enviar</button>
            </form>
        </div>
    </body>
</html>

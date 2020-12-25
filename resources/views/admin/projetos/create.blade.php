            <div class='container'>
                <h1>Cadastrar Projeto</h1>
                <form  class='row' action="{{route('projeto.store')}}" method="post">
                    @csrf
                    <div class='col-6'>
                        <input type="text" class="form-control" name="title" placeholder="Titulo">
                        <input type="text" class="form-control" name="description" placeholder="Descricao">
                    </div>
                    <div class='col-6'>
                        <input type="text" class="form-control" name="date_start" placeholder="Data incial">
                        <input type="text" class="form-control" name="date_end" placeholder="Data limite">
                    </div>
                    <button type="submit"  class="form-control">Enviar</button>
            </div>
        </form>
    </body>
</html>

<div class="card">
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <td>Grupo</td>
                    <td>Número de lista</td>
                    <td>Aula</td>
                    <td>Ordenador</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($alumnos as $alumno)
                    <tr>
                        <td>{{$alumno->idGrupo}}</td>
                        <td>{{$alumno->numLista}}</td>
                        <td>{{$alumno->idAula}}</td>
                        <td>{{$alumno->idOrdenador}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>

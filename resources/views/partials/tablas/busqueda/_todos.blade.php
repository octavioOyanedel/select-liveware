@if ($coleccion->count() > 0)
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Tipo</th>
                <th scope="col">Nombre</th>
                <th scope="col">Fecha Creación</th>
                <th scope="col" colspan="3" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($coleccion as $objeto)                
                    @if (tipoObjeto($objeto) != 'TIPO DESCONOCIDO')
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ tipoObjeto($objeto) }}</td>
                            <td>{!! destacarTexto($objeto->name, $nombre) !!}</td>                            
                            <td>{{ $objeto->created_at }}</td>
                            <td><a href="#" class="text-success"><i class="fas fa-eye"></i></a></td>
                            <td><a href="#" class="text-primary"><i class="fas fa-edit"></i></a></td>
                            <td><a href="#" class="text-danger"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@else
    <div class="alert alert-warning" role="alert">
        No existen registros.
    </div>
@endif

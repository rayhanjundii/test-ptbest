<div class="table-responsive">
    <table class="table" id="cruds-table">
        <thead>
        <tr>
            <th>Pegawai Nama</th>
        <th>Pegawai Jabatan</th>
        <th>Pegawai Umur</th>
        <th>Pegawai Alamat</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($cruds as $crud)
            <tr>
                <td>{{ $crud->pegawai_nama }}</td>
            <td>{{ $crud->pegawai_jabatan }}</td>
            <td>{{ $crud->pegawai_umur }}</td>
            <td>{{ $crud->pegawai_alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['cruds.destroy', $crud->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cruds.show', [$crud->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('cruds.edit', [$crud->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

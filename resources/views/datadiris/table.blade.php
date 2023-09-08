<div class="table-responsive">
    <table class="table" id="datadiris-table">
        <thead>
        <tr>
            <th>Nama Lengkap</th>
        <th>Tempat Tgl Lahir</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Jenis Kelamin</th>
        <th>Agama</th>
        <th>Hobi</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datadiris as $datadiri)
            <tr>
                <td>{{ $datadiri->nama_lengkap }}</td>
            <td>{{ $datadiri->tempat_tgl_lahir }}</td>
            <td>{{ $datadiri->alamat }}</td>
            <td>{{ $datadiri->no_telp }}</td>
            <td>{{ $datadiri->jenis_kelamin }}</td>
            <td>{{ $datadiri->agama }}</td>
            <td>{{ $datadiri->hobi }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['datadiris.destroy', $datadiri->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('datadiris.show', [$datadiri->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('datadiris.edit', [$datadiri->id]) }}"
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

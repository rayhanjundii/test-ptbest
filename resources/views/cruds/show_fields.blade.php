<!-- Pegawai Nama Field -->
<div class="col-sm-12">
    {!! Form::label('pegawai_nama', 'Pegawai Nama:') !!}
    <p>{{ $crud->pegawai_nama }}</p>
</div>

<!-- Pegawai Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('pegawai_jabatan', 'Pegawai Jabatan:') !!}
    <p>{{ $crud->pegawai_jabatan }}</p>
</div>

<!-- Pegawai Umur Field -->
<div class="col-sm-12">
    {!! Form::label('pegawai_umur', 'Pegawai Umur:') !!}
    <p>{{ $crud->pegawai_umur }}</p>
</div>

<!-- Pegawai Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('pegawai_alamat', 'Pegawai Alamat:') !!}
    <p>{{ $crud->pegawai_alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $crud->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $crud->updated_at }}</p>
</div>


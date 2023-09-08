<!-- Pegawai Nama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pegawai_nama', 'Pegawai Nama:') !!}
    {!! Form::text('pegawai_nama', null, ['class' => 'form-control']) !!}
</div>

<!-- Pegawai Jabatan Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pegawai_jabatan', 'Pegawai Jabatan:') !!}
    {!! Form::text('pegawai_jabatan', null, ['class' => 'form-control']) !!}
</div>

<!-- Pegawai Umur Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pegawai_umur', 'Pegawai Umur:') !!}
    {!! Form::number('pegawai_umur', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('pegawai_alamat', 'Pegawai Alamat:') !!}
    {!! Form::text('pegawai_alamat', null, ['class' => 'form-control']) !!}
</div>
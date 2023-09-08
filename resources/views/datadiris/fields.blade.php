<!-- Nama Lengkap Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nama_lengkap', 'Nama Lengkap:') !!}
    {!! Form::text('nama_lengkap', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempat Tgl Lahir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempat_tgl_lahir', 'Tempat Tgl Lahir:') !!}
    {!! Form::text('tempat_tgl_lahir', null, ['class' => 'form-control']) !!}
</div>

<!-- Alamat Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alamat', 'Alamat:') !!}
    {!! Form::textarea('alamat', null, ['class' => 'form-control']) !!}
</div>

<!-- No Telp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('no_telp', 'No Telp:') !!}
    {!! Form::number('no_telp', null, ['class' => 'form-control']) !!}
</div>

<!-- Jenis Kelamin Field -->
<div class="form-group col-sm-12">
    {!! Form::label('jenis_kelamin', 'Jenis Kelamin', ['class' => 'form-check-label']) !!}
    <input type="radio" id="html" name="jenis_kelamin" value="Laki-Laki">
    <label for="Laki-Laki">Laki-Laki</label><br>
    <input type="radio" id="css" name="jenis_kelamin" value="Perempuan">
    <label for="Perempuan">Perempuan</label><br>
</div>


<!-- Agama Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agama', 'Agama:') !!}
    <div class="col-sm-5">
        <select class="form-control form-control-lg" name="agama">

            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Budga">Budha</option>
            <option value="Konghucu">Konghucu</option>


        </select>

    </div>
</div>


<div class="form-group col-sm-6">
    {!! Form::label('hobi', 'hobi:') !!}
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Baca Buku" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Baca Buku
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Olah Raga" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Olah Raga
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Main Game" id="flexCheckDefault">
        <label class="form-check-label" for="flexCheckDefault">
            Main Game
        </label>
    </div>
    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="Hiking" id="flexCheckChecked" checked>
        <label class="form-check-label" for="flexCheckChecked">
            Hiking
        </label>
    </div>
</div>

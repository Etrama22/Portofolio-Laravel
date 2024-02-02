<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            {{ Form::label('skill') }}
            {{ Form::text('skill', $Portofolio->skill, [
                'class' => 'form-control' . ($errors->has('skill') ? ' is-invalid' : ''),
                'placeholder' => 'Skill Name',
            ]) }}
            {!! $errors->first('skill', '<div class="invalid-feedback">:message</p>') !!}
        </div>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</div>

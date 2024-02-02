{!! Form::open([
    'method' => 'GET',
    'url' => $url,
    'class' => 'navbar-form navbar
left',
    'role' => 'search',
]) !!}
<div class="input-group custom-search-form">
    <a href="{{ url($link . '/create') }}" class="btn btn-primary btn
sm"><span class="glyphicon glyphicon-plus"></span>
        Tambah</a>
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <span class="input-group-btn">
        <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"></i>
        </button>
    </span>
</div>
{!! Form::close() !!}

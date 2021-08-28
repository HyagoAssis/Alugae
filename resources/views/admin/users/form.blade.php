<div class="row">

    @can('adm', Auth::user())
        <div class="form-group col-sm-12">
            <input type="checkbox" id="adm", name="adm">
            <label for="adm">Administrador? </label>
        </div>
    @endcan

    <div class="form-group col-sm-6">
        <label for="name" class="required">Nome </label>
        <input type="text" name="name" id="name" class="form-control" required autofocus value="{{ old('name',$user->name) }}">
    </div>
    <div class="form-group col-sm-6">
        <label for="email" class="required">E-mail </label>
        <input type="email" name="email" id="email" class="form-control" required value="{{ old('email',$user->email) }}">
    </div>

    <div class="form-group col-sm-6">
        <label for="password" class="required">Senha </label>
        <input type="password" name="password" id="password" class="form-control" required value="{{ old('password') }}">
    </div>
</div>

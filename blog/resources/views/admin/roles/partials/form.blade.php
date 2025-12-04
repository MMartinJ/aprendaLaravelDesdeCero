<div class="form-group">
    <label for="Rol">Rol</label>
    <input type="text" class="form-control" name="name" id="name" value="
    @if ($routeName == 'admin.roles.edit') {{ $role->name }} @endif">
    @error('name')
        <small class="text-danger">{{  $message }}</small>
    @enderror
</div>

<div class="form-group">
    <label for="permisos" class="form-label">lista de Permisos</label>
    <br>
    @foreach ($permissions as $key => $permission)
        <div class="form-check form-check-inline">
            <input type="checkbox" class="form-check-input" name="permissions[]" id="permission" value="{{ $permission->id }}"
            @if ($routeName == 'admin.roles.edit')
                @foreach ($role_permissions as $item)
                    {{ ($item->id == $permission->id) ? 'checked' : '' }}
                @endforeach
            @endif
            >
            <label for="permiso" class="form-check-label">{{ $permission->description }}</label>
        </div>
    @endforeach

</div>

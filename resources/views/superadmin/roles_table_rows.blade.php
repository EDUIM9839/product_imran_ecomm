@foreach ($roles as $role)
    <tr>
        <td>
            <div class="form-check form-check-md">
                <input class="form-check-input role-checkbox" type="checkbox" name="selected_roles[]"
                    value="{{ $role->id }}">
            </div>
        </td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->created_at->format('d M Y') }} </td>
        <td>
            @if ($role->status)
                <span class="badge badge-success d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Active
                </span>
            @else
                <span class="badge badge-danger d-inline-flex align-items-center badge-xs">
                    <i class="ti ti-point-filled me-1"></i>Inactive
                </span>
            @endif

        </td>
        <td>
            <div class="action-icon d-inline-flex">
                <a href="{{ route('permissions') }}" class="me-2 d-flex align-items-center p-2 border rounded"><i
                        class="ti ti-shield"></i></a>
                <a href="#" class="me-2 d-flex align-items-center p-2 border rounded" data-bs-toggle="modal"
                    data-bs-target="#editRoleModal{{ $role->id }}"><i class="ti ti-edit"></i></a>
                <a href="#" data-bs-toggle="modal" data-bs-target="#deleteRoleModal{{ $role->id }}"
                    class=" d-flex align-items-center p-2 border rounded"><i class="ti ti-trash"></i></a>
            </div>
        </td>
    </tr>
@endforeach

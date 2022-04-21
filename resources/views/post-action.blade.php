@can('post-edit')
    <a href="oist-edit/{{ $id }}" data-toggle="tooltip" data-original-title="Edit"
        class="edit btn btn-success edit">
        Edit
    </a>
@endcan
@can('post-delete')
    <a href="javascript:void(0)" onClick="deleteFunc({{ $id }})" data-toggle="tooltip"
        data-original-title="Delete" class="delete btn btn-danger deleteFunc">
        Delete
    </a>
@endcan

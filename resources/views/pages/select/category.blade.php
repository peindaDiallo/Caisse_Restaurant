

<div class="card">
    <div class="card-body table-responsive mt-3">
        <table class="table  table-bordered mt-2" id="categoryTableSelect1{{ $field }}">
            <thead>
            <tr>
                <th scope="col">{{ __('category.name') }}</th>
                <th scope="col">{{__('button.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($categorys as $category)
                <tr>
                    <td>{{ $category->name }}</td>

                    <td class="d-flex justify-content-between gap-1">
                        <a href="#" onclick="selectPersoModal('{{ $field }}','{{ $category }}',['id','name'], 'select{{ $field }}')"
                           class="btn btn-sm btn-outline-primary">{{ __('button.select') }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


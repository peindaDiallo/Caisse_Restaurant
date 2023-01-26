

<div class="card">
    <div class="card-body table-responsive mt-3">
        <table class="table  table-bordered mt-2" id="productTableSelect1{{ $field }}">
            <thead>
            <tr>
                <th scope="col">{{ __('product.name') }}</th>
                <th scope="col">{{ __('product.description') }}</th>
                <th scope="col">{{__('button.actions')}}</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>

                    <td class="d-flex justify-content-between gap-1">
                        <a href="#" onclick="selectPersoModal('{{ $field }}','{{ $product }}',['id','name','description'], 'select{{ $field }}')"
                           class="btn btn-sm btn-outline-primary">{{ __('button.select') }}</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>


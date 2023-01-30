
<x-main>

    <div class="adminx-content">
        <div class="adminx-main-content">
            <div class="container-fluid">
                <!-- BreadCrumb -->
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb adminx-page-breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Tables</a></li>
                        <li class="breadcrumb-item active  aria-current="page">Regular Tables</li>
                    </ol>
                </nav>

                <div class="pb-3">
                    <h1>Data Tables</h1>
                    <div class="col-12 d-flex justify-content-between">
                        <h5 class="card-title text-primary">{{ __('sale.sale_list') }}</h5>
                        <a href="{{ route('sales.create')}}" class="btn btn-success"><i class='bx bx-plus'></i>{{ __('sale.create') }}</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-grid">
                            <div class="table-responsive-md">
                                <table class="table table-actions table-striped table-hover mb-0" data-table>
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Discount</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Code</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Products</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($sales as $sale)
                                        <tr>
                                            <th scope="row">
                                                <label class="custom-control custom-checkbox m-0 p-0">
                                                    <input type="checkbox" class="custom-control-input table-select-row">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                            </th>
                                            <td>{{$sale->discount}}</td>
                                            <td>{{$sale->price}}</td>
                                            <td>{{$sale->code}}</td>
                                            <td>{{$sale->code}}</td>
                                            <td>{{$sale->quantity}}</td>
                                            <td>{{$sale->product}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-secondary">Show</button>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger"
                                                type="button" onclick='showModel("sales/{{$sale->id}}")'>&nbsp{{__('button.delete')}}
                                                </button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <x-delete-modal  message="{{ __('message.confirm_delete') }}"
                            cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel">
                            </x-delete-modal>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-main>

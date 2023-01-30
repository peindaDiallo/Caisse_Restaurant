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
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card mb-grid">
                            <div class="table-responsive-md">
                                <div class="col-12 d-flex justify-content-between">
                                    <h5 class="card-title text-primary">{{ __('catego.catego_list') }}</h5>
                                    <a href="{{ route('products.create')}}" class="btn btn-success"><i class='bx bx-plus'></i>{{ __('product.create') }}</a>
                                </div>
                                <table class="table table-actions table-striped table-hover mb-0" data-table>
                                    <thead>
                                    <tr>
                                        <th scope="col">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Image</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th scope="row">
                                                <label class="custom-control custom-checkbox m-0 p-0">
                                                    <input type="checkbox" class="custom-control-input table-select-row">
                                                    <span class="custom-control-indicator"></span>
                                                </label>
                                            </th>
                                            <td>{{$product->name}}</td>
                                            <td>{{$product->description}}</td>
                                            <td>{{$product->category}}</td>

                                            <td>
                                                <img src="{{ asset($product->image) }}" width='50' height='50'
                                                     class="img img-responsive" alt=""/>
                                            </td>
                                            <td>{{$product->price}}</td>
                                            <td>
                                                <button class="btn btn-sm btn-secondary">Show</button>
                                                <button class="btn btn-sm btn-primary">Edit</button>
                                                <button class="btn btn-sm btn-danger"
                                                    type="button" onclick='showModel("products/{{$product->id}}")'>&nbsp{{__('button.delete')}}
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

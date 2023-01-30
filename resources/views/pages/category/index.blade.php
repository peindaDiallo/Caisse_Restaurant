<x-main>

    <div class="adminx-content">
        <div class="adminx-main-content">
            <div class="container-fluid">

                <div class="pb-3">
                    <div class="col-12 d-flex justify-content-between">
                        <h1 class="card-title text-primary">{{ __('category.categ_list') }}</h1>
                        <a href="{{ route('categories.create')}}" class="btn btn-success"><i class='bx bx-plus'></i>{{ __('category.create') }}</a>
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
                                                <input type="checkbox" class="custom-control-input table-select-all">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($categories as $categorie)
                                        <tr>
                                            <th scope="row">
                                            <label class="custom-control custom-checkbox m-0 p-0">
                                                <input type="checkbox" class="custom-control-input table-select-row">
                                                <span class="custom-control-indicator"></span>
                                            </label>
                                        </th>
                                        <td>{{$categorie->name}}</td>
                                        <td>
                                            <button class="btn btn-sm btn-secondary">Show</button>
                                            <button class="btn btn-sm btn-primary">Edit</button>
                                            <button class="btn btn-sm btn-danger"
                                                    type="button" onclick='showModel("categories/{{$categorie->id}}")'>&nbsp{{__('button.delete')}}
                                            </button>
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



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
                                            <td class="d-flex justify-content-between gap-1">
                                                <a href="#" onclick="selectPersoModal('{{ $field }}','{{ $categories }}',['id','name'], 'select{{ $field }}')"
                                                   class="btn btn-sm btn-outline-primary">{{ __('button.select') }}</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>





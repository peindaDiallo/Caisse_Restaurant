<x-main>

    <div class="adminx-content">
        <div class="adminx-main-content">
            <div class="container-fluid">
                <!-- BreadCrumb -->
                <div class="pb-3">
                    <h1>Create Product</h1>
                </div>

                <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <div class="card-body">
                        <div class="card-body">
                            <div class="form-group">
                                {{-- <label class="form-label">Categories</label>
                                 <select name="select" class="form-control js-choice">
                                     <option value="1">Sample value</option>
                                     <option value="2">Sample value 2</option>
                                     <option value="3">Sample value 3</option>
                                 </select>--}}
                                <x-custom-select
                                    label="{{ __('product.categories') }}"
                                    name="categories"
                                    route="{{ route('categories.selectlist','categories')}}"
                                    method="selectcategories"
                                    :options="[]">
                                </x-custom-select>
                            </div>

                            <div class="form-row">
                                <div class="col mb-3">
                                    <label class="form-label">Name</label>
                                    <input class="form-control" name="name" id="name" type="text"
                                           placeholder="Enter name">
                                </div>
                            </div>

                            <div class="form-row">
                                <div class="col mb-3">
                                    <label class="form-label">Description</label>
                                    <input class="form-control" name="description" id="description" type="text"
                                           placeholder="Enter description">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3">
                                    <label class="form-label">Price</label>
                                    <input class="form-control " name="price" id="price" type="text"
                                           placeholder="Enter price">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col mb-3">
                                    <label class="form-label">Image</label>
                                    <input class="form-control " name="image" type="file" id="fileInput"
                                           onchange="loadFile(event)">
                                    <img id="output" width="100" height="100"/>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">{{ __('Button.reate') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>

    <x-custom-modal id="selectcategories" size="modal-xl" name="{{ __('product.categories') }}"></x-custom-modal>

    <script>
        var loadFile = function (event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</x-main>



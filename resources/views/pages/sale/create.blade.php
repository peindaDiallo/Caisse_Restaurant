<x-main>

    <div class="adminx-content">
        <div class="adminx-main-content">
            <div class="container-fluid">
                <!-- BreadCrumb -->
                <div class="pb-3">
                    <h1>Create Sale</h1>
                </div>

                <form method="POST" action="{{ route('categories.store') }}" id="needs-validation" novalidate>
                    @csrf
                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label" >discount</label>
                            <input type="text" class="form-control" placeholder="discount" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label" >price</label>
                            <input type="text" class="form-control" placeholder="price" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label" >code</label>
                            <input type="text" class="form-control" placeholder="code" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label" >quantity</label>
                            <input type="text" class="form-control" placeholder="quantity" required>
                        </div>
                    </div>

                    <div class="col-12 d-flex justify-content-between">
                        <h5 class="card-title text-primary"></h5>
                        <a href="" class="btn btn-success"><i class='bx bx-plus'></i>{{ __('sale.create') }}</a>
                    </div>
                    <div class="col-12 d-flex justify-content-between">
                        <h5 class="card-title ">{{__('sale.product')}}</h5>
                        <a href="#" class="btn btn-primary" id="btn-modal" data-bs-toggle="modal" data-bs-target="#modal-coloris" tabindex="3"><i class='bx bx-plus'></i>&nbsp;{{__('button.new')}}</a>
                    </div>

                    <button class="btn btn-primary mr-2" type="submit">Create</button>
                </form>
            </div>
        </div>
        {{-- <div class="card mb-grid">
             <div class="card-header">
                 File upload
             </div>
             <div class="card-body">
                 <div class="custom-file">
                     <input type="file" class="custom-file-input" id="customFile">
                     <label class="custom-file-label" for="customFile">Choose file</label>
                 </div>
             </div>
         </div>--}}
    </div>
    </div>
    </div>
    </div>

     <!-- Modal -->
     <div class="modal fade" id="modal-coloris" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" >
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">{{__('colori.colori')}}</h5>
            <button type="button" class="btn-close" id="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="coloriForm">
                <div class="modal-body">
                        <div class="row mb-3">
                            <div class="row d-flex justify-content-between gap-2">
                                <div class="col">
                                    <label class="form-label" for="colore">{{ __('colori.colore') }}</label>
                                    @error('colore')
                                    <div  class="text-danger"> {{ $message }} </div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    {{--     <button
                        class="btn btn-primary mt-2" tabindex="6">Close
                    </button> --}}
                        <button type="button"
                        class="btn btn-primary mt-2" id="btn-save" tabindex="7" onclick="saveData('coloris', '#coloriForm',2)">{{ __('button.save') }}
                    </button>
                    </div>
              </div>
    </div>


</x-main>



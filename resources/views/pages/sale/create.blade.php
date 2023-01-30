<x-main>
    <script>
        localStorage.clear();
    </script>

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
                            <label class="form-label">discount</label>
                            <input type="text" class="form-control" placeholder="discount" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label">price</label>
                            <input type="text" class="form-control" placeholder="price" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label">code</label>
                            <input type="text" class="form-control" placeholder="code" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label">quantity</label>
                            <input type="text" class="form-control" placeholder="quantity" required>
                        </div>
                    </div>


                    <div class="col-12 d-flex justify-content-between">
                        <h5 class="card-title ">{{ __('sale.product') }}</h5>
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                        {{ __('sale.product') }}
                      </button>
                    </div>

                    <button class="btn btn-primary mr-2" type="submit">Create</button>

                </form>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form>
                <div class="mb-3">

                    <select name="carte_id" id="carte_id" class="form-control @error('carte_id') is-invalid @enderror" aria-describedby="inputGroupPrepend" required>

                        @foreach ($products as $product)
                            <option value="{{$sales-> $product->id }}">{{ $product->name}}
                            </option>
                        @endforeach

                    </select>

                    {{-- <label  class="form-label">{{__('sale.product')}}</label>
                    <input type="select" class="form-control" value="" required><br>
                    <label  class="form-label">{{__('sale.quantity')}}</label>
                    <input type="number" class="form-control" name="quantity" min="1"  required> --}}

                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button"
              class="btn btn-primary mt-2" id="btn-save" tabindex="7" onclick="saveData('coloris', '#coloriForm',2)">{{ __('button.save') }}
          </button>
          </div>
            </div>
          </div>
     </div>

        </form>
        </div>
      </div>

</x-main>

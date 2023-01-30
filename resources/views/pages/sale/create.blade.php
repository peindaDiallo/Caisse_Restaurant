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
                            <label class="form-label" >Products</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label" >quantity</label>
                            <input type="text" class="form-control" placeholder="quantity" required>
                        </div>
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
</x-main>



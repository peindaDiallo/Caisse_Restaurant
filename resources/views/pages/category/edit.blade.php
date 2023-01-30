<x-main>

    <div class="adminx-content">
        <div class="adminx-main-content">
            <div class="container-fluid">
                <!-- BreadCrumb -->
                <div class="pb-3">
                    <h1>Create Category</h1>
                </div>

                <form method="POST" action="{{ route('categories.update', $categories) }}" id="needs-validation" novalidate>
                        @method('Put')
                        @csrf
                    <div class="form-row">
                        <div class="col mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" value=""
                                required>
                        </div>

                    </div>
                    <button class="btn btn-primary mr-2" type="submit">Update</button>

                </form>
            </div>
        </div>


    </div>
    </div>
    </div>
    </div>
</x-main>

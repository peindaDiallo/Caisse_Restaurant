<x-main>

    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        <b>{{__('permission.permission')}}</b>
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('admin.permissions.update', $permission->id) }}">                        @method('Put')
                        @csrf
                        @method('PUT')
                        <hr>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control ">
                                        <input type="text" name="name" class="input" value="{{ $permission->name }}" required id="name">
                                        @error('name')
                                        <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group-prepend">
                                    <button type="submit" class="button green">{{__('button.update')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-main>

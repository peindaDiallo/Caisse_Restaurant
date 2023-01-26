<x-main>

    <section class="section main-section">
        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2 mb-6">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        <b>{{__('role.role')}}</b>
                    </p>
                </header>
                <div class="card-content">
                    <form method="POST" action="{{ route('admin.roles.store') }}">
                        @csrf

                        <hr>
                        <div class="field">
                            <label class="label">Name</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control ">
                                        <input type="text" name="name" class="input" placeholder="role name" required id="name" aria-describedby="emailHelp">
                                        @error('name')
                                        <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group-prepend">
                                    <button type="submit" class="button green">{{__('button.create')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>
                        <hr>
                        <div class="field">
                            <span class="icon"><i class="mdi mdi-buffer"></i></span>
                            <b>{{__('role.roles_list')}}</b>
                            <br>
                            <br>
                        </div>
                        <div class="field">
                            <table>
                                <thead>
                                <tr>

                                    <th class="image-cell"></th>
                                    <th>{{__('role.name')}}</th>
                                    <th>{{__('button.actions')}}</th>

                                </tr>
                                </thead>
                                @foreach ($roles as $role)
                                    <tr>
                                        <td class="checkbox-cell">
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </td>

                                        <td data-label="Name">{{ $role->name }}</td>
                                        <td class="actions-cell">
                                            <div class="buttons right nowrap">

                                                <button class="button small blue --jb-modal" id="roleForm" data-target="sample-modal-2" type="button">
                                                    <a href="{{route('admin.roles.edit',$role->id)}}" class="btn btn-warning">
                                                    <span class="icon"><i class="mdi mdi-account-edit"></i></span></a>
                                                </button>

                                                <button class="button small red --jb-modal"
                                                        type="button"  onclick='showModel("roles/{{$role->id }}")'>
                                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                </button>
                                                {{--   <form action="{{route('admin.roles.destroy', $role->id)}}" method="POST">
                                                       @csrf
                                                       @method('DELETE')
                                                       <button class="button small red --jb-modal"
                                                               type="submit">
                                                           <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                       </button>
                                                   </form>--}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                            </table>
                        </div>

                    <x-delete-modal  message="{{ __('message.confirm_delete') }}"
                                     cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel">
                    </x-delete-modal>
                    {{$roles->links()}}



                </div>
            </div>

            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        <span class="icon"><i class="mdi mdi-account-circle"></i></span>
                        <b>{{__('permission.permission')}}</b>
                    </p>
                </header>

                <div class="card-content">
                    <form method="POST" action="{{ route('admin.permissions.store') }}">
                        @csrf
                        <hr>
                        <div class="field">
                            <label class="label">{{__('permission.name')}}</label>
                            <div class="field-body">
                                <div class="field">
                                    <div class="control ">
                                        <input type="text" name="name" class="input" placeholder="role name" required id="name" aria-describedby="emailHelp">
                                        @error('name')
                                        <div id="emailHelp" class="form-text text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="input-group-prepend">
                                    <button type="submit" class="button green">{{__('button.create')}}</button>
                                </div>
                            </div>
                        </div>
                    </form>

                        <hr>
                        <div class="field">
                            <span class="icon"><i class="mdi mdi-buffer"></i></span>
                            <b>{{__('permission.permissions_list')}}</b>
                            <br><br>
                        </div>
                        <div class="field">
                            <table>
                                <thead>
                                <tr>

                                    <th class="image-cell"></th>
                                    <th>{{__('permission.name')}}</th>
                                    <th>{{__('button.actions')}}</th>

                                </tr>
                                </thead>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td class="checkbox-cell">
                                            <label class="checkbox">
                                                <input type="checkbox">
                                                <span class="check"></span>
                                            </label>
                                        </td>
                                        <td data-label="Name">{{ $permission->name }}</td>
                                        <td class="actions-cell">
                                            <div class="buttons right nowrap">
                                                <form>
                                                    <button class="button small green --jb-modal" id="roleForm" data-target="sample-modal-2" type="button">
                                                        <a href="{{route('admin.permissions.edit',$permission->id)}}" class="btn btn-warning">
                                                            <span class="icon"><i class="mdi mdi-account-edit"></i></span></a>
                                                    </button>
                                                </form>
                                                <button class="button small red --jb-modal"
                                                        type="button"  onclick='showModel("permissions/{{$permission->id }}")'>
                                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                </button><i class='bx bxs-trash' ></i>&nbsp{{__('button.delete')}}</a>

                                                {{--  <form action="{{route('admin.permissions.destroy', $permission->id)}}" method="POST">
                                                      @csrf
                                                      @method('DELETE')
                                                      <button class="button small red --jb-modal"
                                                              type="submit">
                                                          <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                      </button>
                                                  </form>--}}

                                                {{--<button class="button small red --jb-modal" data-target="sample-modal-2" onClick='showModel("permissions/{!! encrypt($permission->id) !!}")'>
                                                    <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                                </button>--}}
                                            </div>
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

    </section>



</x-main>








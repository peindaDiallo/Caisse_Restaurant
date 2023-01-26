<x-main>
    <section class="section main-section">
        <div class="notification blue">
            <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0">
                <div>
                    <span class="icon"><i class="mdi mdi-buffer"></i></span>
                    <b>{{__('user.list')}}</b>
                </div>
                <a  href="{{ route('admin.users.create')}}" class="button large textual --jb-notification-dismiss"><i class='bx bx-plus'></i>&nbsp;{{__('button.create')}}</a>
            </div>
        </div>
        <div class="card has-table">
            <div class="card-content">
                <table>
                    <thead>
                    <tr>
                        <th class="checkbox-cell">
                            <label class="checkbox">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </th>
                        <th class="image-cell"></th>
                        <th>{{__('user.name')}}</th>
                        <th>{{__('user.email')}}</th>
                        <th>{{__('button.actions')}}</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="checkbox-cell">
                          <label class="checkbox">
                                <input type="checkbox">
                                <span class="check"></span>
                            </label>
                        </td>
                        <th>

                        <td data-label="Name">{{ $user->name }}</td>
                        <td data-label="Company">{{ $user->email }}</td>
                        </th>
                        <td class="actions-cell">
                            <div class="buttons right nowrap">

                                    <button class="button small green --jb-modal" id="roleForm" data-target="sample-modal-2" type="button">
                                        <a href="{{route('admin.users.edit', $user->id)}}" class="btn btn-warning">
                                            <span class="icon"><i class="mdi mdi-account-edit"></i></span></a>
                                    </button>

                                @if ($user->id !== auth()->user()->id )

                                    <button class="button small red --jb-modal"
                                            type="button"  onclick='showModel("users/{{$user->id }}")'>
                                        <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                    </button>
                                   {{-- <form action="{{route('admin.users.destroy', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="button small red --jb-modal"
                                                type="submit">
                                            <span class="icon"><i class="mdi mdi-trash-can"></i></span>
                                        </button>
                                    </form>--}}
                                @endif
                            </div>

                        </td>
                    </tr>
                    </tr>
                    @endforeach
                    </tbody>
                    <x-delete-modal  message="{{ __('message.confirm_delete') }}"
                                     cancel="{{ __('button.cancel') }}" confirm="{{ __('button.delete') }}" id="deleteConfirmationModel">
                    </x-delete-modal>
                </table>
                </div>

              {{$users->links()}}
        </div>
    </section>
    <x-custom-modal id="selectcodval" size="modal-xl" name="{{ __('scadenze.valut') }}"></x-custom-modal>

    <br><br><br><br><br>
</x-main>

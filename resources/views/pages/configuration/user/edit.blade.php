<x-main>

    <section class="section main-section">
        <div class="card mb-6">
            <header class="card-header">
                <p class="card-header-title">
                    <span class="icon"><i class="mdi mdi-ballot"></i></span>
                    {{__('user.edit_user')}}
                </p>
            </header>
            <div class="card-content">
                <form method="post" action="{{ route('admin.users.update', $user->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="field">
                        <label  class="form-label">{{__('user.name')}}</label>
                        {!! Form::text('name', $user->name, [ 'class'=>'form-control input input']) !!}
                        @error('name')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="field">
                        <label  class="form-label">{{__('user.email')}}</label>
                        {!! Form::email('email', $user->email, ['placeholder'=> "email" ,  'class'=>'form-control input']) !!}
                        @error('email')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="field">
                        <label  class="form-label">{{__('user.roles')}}</label>
                        {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control input','multiple')) !!}
                        @error('roles')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="field">
                        <label  class="form-label">{{__('user.authorization')}}</label>
                        {!! Form::select('permissions[]', $permissions,$userPermission, array('class' => 'form-control input','multiple')) !!}
                        @error('permissions')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>

                 {{--   <div class="field">
                        <label  class="form-label">Email</label>
                        {!! Form::password('password', $user->password, [ 'class'=>'form-control input']) !!}
                        @error('password')
                        <div  class="form-text"> {{ $message }} </div>
                        @enderror
                    </div>--}}
                    <button type="submit" class="button green">{{__('button.update')}}</button>
                </form>
            </div>
        </div>
    </section>
    </div>
    </body>
    </html>

</x-main>

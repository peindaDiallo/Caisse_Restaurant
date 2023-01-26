<label  class="form-label"> {{ $label }} </label>
<div class="input-group">
    <select name="{{$name}}" id="{{$name}}" disabled class="form-control select-perso">
        @if(count($options)>0)
            <option value="{{$options[0]}}">{{$options[1]}}  @if (isset($options[2])) {{ ' | '.$options[2] }} @endif</option>
        @endif
    </select>
    <input type="hidden" name="{{$name}}" id="{{$name}}_val" value="{{$options[0]??''}}" />
    <span  class="btn btn-primary" id="b{{$name}}" onclick="openModal('{{ $route}}', '{{ $method }}')" ><i class='bx bxs-search' ></i></span>
</div>

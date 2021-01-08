<x-header></x-header>
<link href="{{ asset('styles/todo.css') }}" rel="stylesheet">
<form action="/edit"  method="POST" class="form-horizontal" style="margin-top: 20px;width: 61%;" >
    @csrf
    <input type="hidden" name="id" value="{{$data['id']}}">
    <span class="error"></span>
    <input type="text" id="toDoList" name="name"  placeholder="enter toDoList" value="{{$data['name']}}">
    <div>
        <button type="submit"  class="btn" >Update</button>
    </div>
        

        
</form>
       
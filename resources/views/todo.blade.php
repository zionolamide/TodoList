<x-header></x-header>
<link href="{{ asset('styles/todo.css') }}" rel="stylesheet">

<div class="table">
   
       
            <table id="myTable" >
                <thead class="tableHead">
                    <tr class="tableHeader">
                        <th>#</th>
                        <th>My List</th>
                        <th>Marks</th>
                        <th>Delete</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody class="tableBody">
                   @foreach ($todos as $item)
                    <tr>
                        <td>{{$item['id']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>
                            <label class="container">
                                <input type="checkbox">
                                <span class="checkmark"></span>
                            </label>
                        </td>
                        <td>
                            <a href={{"delete/".$item['id']}}  class="gradient-button gradient-button-delete">delete</a>
                        </td>
                        <td>
                            <a href={{"edit/".$item['id']}} class="gradient-button gradient-button-edit">Edit</a>
                        </td>
                
                    </tr>
                    @endforeach
                  
                                        
                </tbody>
            </table>
</div>
    <div class="form-container">
        <form action="todo"  method="POST" class="form-horizontal" style="margin-top: 20px;width: 61%;" >
            <span class="error"></span>
            <input type="text" id="toDoList" name="name"  placeholder="enter toDoList">
            @csrf
            <div>
                <button type="submit"  class="btn" >Add</button>
            </div>
        

        
        </form>
       
    </div>



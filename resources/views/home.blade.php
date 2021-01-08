
<x-header></x-header> 
<link href="{{ asset('styles/todo.css') }}" rel="stylesheet">

<div class="table">
    <div class="row">
        <div class="column1">
            
        </div>

        <div class="column2">
            <table id="myTable" >
                <thead class="tableHead">
                    <tr class="tableHeader">
                        <th>#</th>
                        <th>My List</th>
                        <th>Marks</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody class="tableBody">
                @foreach($todos as $todo)
                    <tr>
                        <td>{{$todo['id']}}</td>
                        <td>{{$todo['todo']}}</td>
                        
                        <td>
                                            <label class="container">
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td>
                                        
                                        </td>	
                    </tr>
                    @endforeach
                                        
                </tbody>
            </table>
            
        </div>

        <div class="column3"></div>
    </div>
  

</div>
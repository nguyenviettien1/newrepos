<div class="col-md-2 ">
                <ul class="list-group" id="menu">
                    <li href="#" class="list-group-item menu1 active">
                    	<b>Menu</b>
                    </li>
                    @foreach($loaitailieu as $ltl)
                    <li href="#" class="list-group-item menu1">
                    	<a href="xemtailieu/{{$ltl->id}}">{{$ltl->DocumentType}}</a>
                    </li>      
                    @endforeach              
                </ul>
</div>
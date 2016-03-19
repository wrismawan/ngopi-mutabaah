<div id="home" class="tab-pane tabs-up fade in active panel panel-default">
    <div class="panel-body">
        <ul class="list-group no-margn nicescroll todo-list" style="height:230px; overflow:auto;">
            @foreach($items as $item)
            <li class="list-group-item">
                <label class="cr-styled">
                    <input type="checkbox"><i class="fa"></i></label>
                    <span>{{$item->name}}</span>
            </li>
            @endforeach
        </ul>
        <button class="btn-flat btn-danger full-width"><i class="fa fa-paper-plane"></i> LAPOR!</button>
    </div>
</div>
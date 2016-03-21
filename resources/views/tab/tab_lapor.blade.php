<div id="laporan" class="tab-pane tabs-up fade in active panel panel-default">
    <div class="panel-body">
        <form action="{{route('report.update')}}" method="POST">
            {!! csrf_field() !!}
            <ul class="list-group no-margn nicescroll todo-list" style="height:230px; overflow:auto;">
                @foreach($userReports as $item)
                <li class="list-group-item">
                    <label class="cr-styled">
                        <input type="checkbox"
                               name="item[{{$item->id}}]"
                               @if ($item->value) checked @endif
                        ><i class="fa"></i></label>
                        <span>{{$item->ibadahItem->name}}</span>
                </li>
                @endforeach
            </ul>
            <button class="btn-flat btn-danger full-width"><i class="fa fa-paper-plane"></i> LAPOR!</button>
        </form>
    </div>
</div>
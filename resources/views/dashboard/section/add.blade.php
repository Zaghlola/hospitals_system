<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="1" role="dialog" aria-labelledby="exampleModalLabe0l" aria-hidden="true">

    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">{{ trans('dashboard/sections_trans.add_sections') }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <label for="exampleInputPassword1">{{trans('dashboard/sections_trans.name_sections')}}</label>
                <input type="text" name="name" class="form-control">
            </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" >Close </button>
        <button type="button" class="btn btn-primary" >{{ trans('dashboard/sections_trans.submit') }} </button>
    </div>
        </div>

    </div>
</div>
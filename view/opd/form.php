<div class="modal fade form_<?echo $pageID;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" id="addform_<?echo $pageID;?>">
    <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeForm_<?echo $pageID;?>"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="form_header">Add New Data</h4>
      </div>
      <form class="form-horizontal" action="<?echo $_SERVER['SCRIPT_NAME'];?>" method="post" role="form" id="validation-form" target="iframer" data-parsley-validate>
        <input type="hidden" name="<?echo $pageID;?>_id" value="<?echo $edit->{$pageID.'_id'}?>" id="form_<?echo $pageID;?>_id">
        <input type="hidden" name="no" id="form_no" value="">
      <div class="modal-body">

        <div class="form-group">
          <label for="nama" class="col-md-2 control-label">Nama</label>
          <div class="col-md-10">
            <input required type="text" name="nama" class="form-control" id="form_nama" value="">
          </div>
        </div>

        <div class="form-group">
          <label for="singkatan" class="col-md-2 control-label">Singkatan</label>
          <div class="col-md-10">
            <input type="text" name="singkatan" class="form-control" id="form_singkatan" value="">
          </div>
        </div>

        <div class="form-group">
          <label for="kode" class="col-md-2 control-label">Kode</label>
          <div class="col-md-10">
            <input type="text" name="kode" class="form-control" id="form_kode" value="">
          </div>
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="form_reset" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-primary" value="add" name="cmd" id="button_<?echo $pageID;?>">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php echo form_open_multipart('upload/do_upload');?>
<div class="card-body">
    <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <div class="input-group">
        <div class="custom-file">
        <input type="file" name="upload1" class="custom-file-input" id="exampleInputFile">
        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
        </div>
    </div>
    </div>
</div>
<!-- /.card-body -->

<div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
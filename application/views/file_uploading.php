<div class="container">
	<div class="row">
		<div class="col-md-3">
			
		</div>
		<div class="col-md-6">
			<div class="text-danger"><?php if(isset($error)){ echo $error; } ?></div>
			<?php echo form_open_multipart('upload/file_uploading',['class' => 'jumbotron']); ?>
				<legend>File Upload</legend>
				<div class="form-group">
					<div class="col-md-3">
						<label>Notes :</label>
					</div>
					<div class="col-md-9">
						<label class="text-danger">* Maximum file size 100kb.</label>
						<label class="text-danger">* Maximum file width 1024.</label>
						<label class="text-danger">* Maximum file height 768.</label>
						<label class="text-danger">* Allowed type jpg, png, gif.</label>
					</div>
				</div>
				<div class="form-group">
					<input type="file" name="u_file" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" name="btn_submit" value="Upload" class="btn btn-success form-control">
				</div>
			</form>
		</div>
		<div class="col-md-3">
			
		</div>
	</div>
</div>
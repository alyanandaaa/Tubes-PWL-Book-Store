<br>
<div  class="container-fluid">
  <h1 class="mb-3 text-black">Point 4</h1>
  <hr>
  <br>

  <div class="row">
    <div class="col-md">
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." autofocus autocomplete="off" name="keyword">
        <div class="input-group-append">
          <input class="btn btn-primary" type="submit" name="submit">
        </div>
      </div>
    </div>

  </div>
	<table class="table table-hover table-striped table-bordered">
		<tr class="text-black">
			<th>ID</th>
			<th>title</th>
			<th>Post</th>
		</tr>

    <?php
    /*if(!empty($point))
    {*/
    foreach ($point as $key) {
        echo "<tr>
        <td>$key->post_id</td>
        <td>$key->post_title</td>
        <td>$key->post</td>
        </tr>";
      }
      /*}
      else {
          echo"<tr><td>Data Tidak Ada</td></tr>";
        }	*/
        ?>
	</table>

  <?php echo $this->pagination->create_links(); ?>

</div>


      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

    </div>
  </div>
</div>
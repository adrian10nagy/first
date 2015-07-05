<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header" id="bg">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" >Sign Up</h4>
      </div>
      <div class="modal-body" id="bg">

        <form method="post" action="prelucrareProiect.php">
            <!-- Project name -->
            <div class="form-group">
                <label for="inputProjectName">Project name </label>
                <input type="text" class="form-control" id="inputProjectName" placeholder="Username" name="inputProjectName">
            </div>
            
            <!-- Project description -->
            <div class="form-group">
                <label for="inputDescription">Description </label>
                <input type="text" class="form-control" id="inputDescription" placeholder="description" name="inputDescription">
            </div>
            <!--
            <div class="form-group">
                <label for="examoleInputType">Type</label>
                    <select id="target" class="size form-control" name="selectType">
                        <option value="default" selected="selected">SELECT</option>
                        <option value="User">User</option>
                        <option value="Admin">Admin</option>    
                    </select>
            </div>
            -->

            <!-- Modal Buttons -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary"  name="addProiect">Save changes</button>
            </div>
        </form>
      </div>

    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
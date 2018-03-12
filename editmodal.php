<!-- ========= YEARLEVEL MODAL ======== -->
<?php echo '<div id="editModal'.$row['ID'].'" class="modal fade">
<form method="post" action="editfunction.php">
  <div class="modal-dialog modal-sm" style="width:300px !important;">
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Edit Subject</h4>
        </div>
        <div class="modal-body">
        <div class="row">
            <div class="col-md-12">
            <input type="hidden" value="'.$row['ID'].'" name="hidden_id" id="hidden_id"/>
                <div class="form-group">
            <label>Call Number</label>
            <input type="text" class="form-control" name="Call_Numbers" placeholder="" value="'.$row['Call_Numbers'].'">
          </div>
          <div class="form-group">
            <label>Authors</label>
            <input type="text" class="form-control" name="Authors" placeholder="" value="'.$row['Authors'].'">
          </div>
          <div class="form-group">
            <label>Title</label>
            <input type="text" class="form-control" name="Title" placeholder="" value="'.$row['Title'].'">
          </div>
          <div class="form-group">
            <label>Editor</label>
            <input type="text" class="form-control" name="Editor" placeholder="" value="'.$row['Editor'].'">
          </div>
          <div class="form-group">
            <label>Edition</label>
            <input type="text" class="form-control" name="Edition" placeholder="" value="'.$row['Edition'].'">
          </div>
          <div class="form-group">
            <label>Place Of Publ</label>
            <input type="text" class="form-control" name="Place_Of_Publ" placeholder="" value="'.$row['Place_Of_Publ'].'">
          </div>
          <div class="form-group">
            <label>Publisher</label>
            <input type="text" class="form-control" name="Publisher" placeholder="" value="'.$row['Publisher'].'">
          </div>
          <div class="form-group">
            <label>Date Of Publ</label>
            <input type="text" class="form-control" name="Date_Of_Publ" placeholder="" value="'.$row['Date_Of_Publ'].'">
          </div>
          <div class="form-group">
            <label>Page No</label>
            <input type="text" class="form-control" name="Page_No" placeholder="" value="'.$row['Page_No'].'">
          </div>
          <div class="form-group">
            <label>Series</label>
            <input type="text" class="form-control" name="Series" placeholder="" value="'.$row['Series'].'">
          </div>
          <div class="form-group">
            <label>Notation1</label>
            <input type="text" class="form-control" name="Notation1" placeholder="" value="'.$row['Notation1'].'">
          </div>
          <div class="form-group">
            <label>Notation2</label>
            <input type="text" class="form-control" name="Notation2" placeholder="" value="'.$row['Notation2'].'">
          </div>
          <div class="form-group">
            <label>ISBN No</label>
            <input type="text" class="form-control" name="ISBN_No" placeholder="" value="'.$row['ISBN_No'].'">
          </div>
          <div class="form-group">
            <label>ISSN No</label>
            <input type="text" class="form-control" name="ISSN_No" placeholder="" value="'.$row['ISSN_No'].'">
          </div>
          <div class="form-group">
            <label>Accession No</label>
            <input type="text" class="form-control" name="Accession_No" placeholder="" value="'.$row['Accession_No'].'">
          </div>
          <div class="form-group">
            <label>Subject</label>
            <input type="text" class="form-control" name="Subject" placeholder="" value="'.$row['Subject'].'">
          </div>
          <div class="form-group">
            <label>Quantities</label>
            <input type="text" class="form-control" name="Quantities" placeholder="" value="'.$row['Quantities'].'">
          </div>
          <div class="form-group">
            <label>Total Remaining Books</label>
            <input type="text" class="form-control" name="Total_remaining_books" placeholder="" value="'.$row['Total_remaining_books'].'">
          </div>
          <div class="form-group">
            <label>Abstract</label>
            <input type="text" class="form-control" name="Abstractt" placeholder="" value="'.$row['Abstractt'].'">
          </div>
            </div>
        </div>
        </div>
        <div class="modal-footer">
            <input type="button" class="btn btn-default btn-sm" data-dismiss="modal" value="Cancel"/>
            <input type="submit" class="btn btn-primary btn-sm" name="btn_save" value="Save"/>
        </div>
    </div>
  </div>
</form>
</div>';
?>
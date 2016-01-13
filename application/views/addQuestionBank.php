<!DOCTYPE html>
<?=$head?>

<div class="container">
    <div class="row" style="padding: 20px;">

            <!-- Sidebar Column -->
            <div class="col-md-3">
                <?php echo $left; ?>
            </div>
            <!-- Content Column -->
            <div class="col-md-9">

                <h3>ADD QUESTION BANK</h3>

                <form method="post" action="/home/addSubjectToBatch">


                <div class="col-md-12">
                    <div class="form-group">
                        <label>Question Bank Name</label>
                        <input class="form-control" name="name">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Type of Questions</label>
                        <select class="form-control" name="name">
                          <option value="1">Multiple Type Questions-2 Options</option>
                          <option value="1">Multiple Type Questions-3 Options</option>
                          <option value="1">Multiple Type Questions-4 Options</option>
                          <option value="1">Multiple Type Questions-5 Options</option>
                          <option value="1">Matching with Correct Option</option>
                          <option value="1">Single Word Answer</option>
                          <option value="1">Fill in the Blanks</option>
                          <option value="1">Textual Answer</option>
                        </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">

                         <input type="hidden" name="<?php echo $csrf_token_name ?>" value="<?php echo $csrf_token ?>">
                        <button type="submit" class="btn" style="background: #C80237; color: #fff; float: right;">Add Question Bank</button>
                    </div>
                </div>

                </form>

            </div>


    </div>
</div>


<?=$foot?>

<script src="/assets/js/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>

     <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/dataTables.bootstrap.min.js"></script>

<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="/assets/js/classie.js"></script>
<script src="/assets/js/cbpAnimatedHeader.js"></script>
<script src="/assets/js/jqBootstrapValidation.js"></script>
<script src="/assets/js/contact_me.js"></script>
<script src="/assets/js/agency.js"></script>

<script src="/assets/js/custom.js"></script>
<script>
$(document).ready(function() {
$('#dataTables-example').DataTable({
      responsive: true
});
});
</script>

</body>
</html>

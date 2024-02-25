<!-- start: Footer -->
<div class="wrapper wrapper-content">
      
        <div class="footer">
         
          <div>
              <strong>Copyright</strong> Example Company &copy; 2014-2019
          </div>
        </div>
  </div>
  <!-- end: Footer -->

  <!-- Start: Generic javascript -->
    <!-- Mainly scripts -->
    <script src="<?php echo base_url('js/jquery-2.1.1.js')?>"></script>
    <script src="<?php echo base_url('js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('js/plugins/metisMenu/jquery.metisMenu.js')?>"></script>
    <script src="<?php echo base_url('js/plugins/slimscroll/jquery.slimscroll.min.js')?>"></script>


    <!-- Custom and plugin javascript -->
    <script src="<?php echo base_url('js/inspinia.js')?>"></script>
    <script src="<?php echo base_url('js/plugins/pace/pace.min.js')?>"></script>

    <!-- Steps -->
    <script src="<?php echo base_url('js/plugins/staps/jquery.steps.min.js')?>"></script>
   

    <!-- Jquery Validate -->
    <script src="<?php echo base_url('js/plugins/validate/jquery.validate.min.js')?>"></script>
<!-- End: Generic script -->

<!-- Start: Specific javascript -->
    <script>
        $(document).ready(function(){
            $("#wizard").steps();
            $("#form").steps({
                bodyTag: "fieldset",
                onStepChanging: function (event, currentIndex, newIndex)
                {
                    // Always allow going backward even if the current step contains invalid fields!
                    if (currentIndex > newIndex)
                    {
                        return true;
                    }

                    // Forbid suppressing "Warning" step if the user is to young
                    if (newIndex === 3 && Number($("#age").val()) < 18)
                    {
                        return false;
                    }

                    var form = $(this);

                    // Clean up if user went backward before
                    if (currentIndex < newIndex)
                    {
                        // To remove error styles
                        $(".body:eq(" + newIndex + ") label.error", form).remove();
                        $(".body:eq(" + newIndex + ") .error", form).removeClass("error");
                    }

                    // Disable validation on fields that are disabled or hidden.
                    form.validate().settings.ignore = ":disabled,:hidden";

                    // Start validation; Prevent going forward if false
                    return form.valid();
                },
                onStepChanged: function (event, currentIndex, priorIndex)
                {
                    // Suppress (skip) "Warning" step if the user is old enough.
                    if (currentIndex === 2 && Number($("#age").val()) >= 18)
                    {
                        $(this).steps("next");
                    }

                    // Suppress (skip) "Warning" step if the user is old enough and wants to the previous step.
                    if (currentIndex === 2 && priorIndex === 3)
                    {
                        $(this).steps("previous");
                    }
                },
                onFinishing: function (event, currentIndex)
                {
                    var form = $(this);

                    // Disable validation on fields that are disabled.
                    // At this point it's recommended to do an overall check (mean ignoring only disabled fields)
                    form.validate().settings.ignore = ":disabled";

                    // Start validation; Prevent form submission if false
                    return form.valid();
                },
                onFinished: function (event, currentIndex)
                {
                    var form = $(this);

                    // Submit form input
                    form.submit();
                }
            }).validate({
                        errorPlacement: function (error, element)
                        {
                            element.before(error);
                        },
                        rules: {
                            confirm: {
                                equalTo: "#password"
                            }
                        }
                    });
       });
    </script>
<!-- End: Specific javascript -->

</body>

</html>
  
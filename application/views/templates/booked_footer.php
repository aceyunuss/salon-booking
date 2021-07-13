<footer class="footer text-center">
           <a href=""></a>
            </footer>
        </div>
    </div>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="<?= base_url();?>assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="<?= base_url();?>assets/dist/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="<?= base_url();?>assets/dist/js/jquery-ui.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="<?= base_url();?>assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?= base_url();?>assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="<?= base_url();?>assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?= base_url();?>assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Menu sidebar -->
    <script src="<?= base_url();?>assets/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="<?= base_url();?>assets/dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="<?= base_url();?>assets/libs/moment/min/moment.min.js"></script>
     <!-- this page js -->
     <script src="<?= base_url();?>assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="<?= base_url();?>assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="<?= base_url();?>assets/extra-libs/DataTables/datatables.min.js"></script>

    <!--Wave Effects -->
    <script src="<?= base_url();?>assets/dist/js/waves.js"></script>
    <!-- This Page JS -->
    <script src="<?= base_url();?>assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="<?= base_url();?>assets/dist/js/pages/mask/mask.init.js"></script>
    <script src="<?= base_url();?>assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= base_url();?>assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="<?= base_url();?>assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="<?= base_url();?>assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="<?= base_url();?>assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="<?= base_url();?>assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="<?= base_url();?>assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url();?>assets/libs/quill/dist/quill.min.js"></script>

    <script>
        /****************************************
         *       Basic Table                   *
         ****************************************/
        $('#zero_config').DataTable();
    </script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
      

        /*colorpicker*/
        $('.demo').each(function() {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
                control: $(this).attr('data-control') || 'hue',
                position: $(this).attr('data-position') || 'bottom left',

                change: function(value, opacity) {
                    if (!value) return;
                    if (opacity) value += ', ' + opacity;
                    if (typeof console === 'object') {
                        console.log(value);
                    }
                },
                theme: 'bootstrap'
            });

        });
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>

<script type="text/javascript" src="<?php echo base_url().'assets/dist/js/jquery-3.3.1.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('#category').change(function(){ 
            var id=$(this).val();
                $.ajax({
                    url : "<?php echo site_url('booking/get_service');?>",
                    method : "POST",
                    data : {id: id},
                    async : true,
                    dataType : 'json',
                    success: function(data){
                         
                        var html = '';
                        var i;
                        for(i=0; i<data.length; i++){
                            html += '<option value='+data[i].service_id+'>'+data[i].service_name+'</option>';
                        }
                        $('#service').html(html);
 
                    }
                });
                return false;
            }); 
             
        });
        
    $('html, body').animate({
        scrollTop: $("#zero_config").offset().top
    }, 2000);
</script>

</body>

</html>

@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>

    @elseif(session('success'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'DC Cancelado com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif
</div> <!-- .wrapper -->
</div> <!-- .main-panel -->
<!-- plugins:js -->
<script src="/new-template/vendors/js/vendor.bundle.base.js"></script>
<script src="/new-template/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->

<!-- inject:js -->
<script src="/new-template/js/shared/off-canvas.js"></script>
<script src="/new-template/js/shared/misc.js"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="/new-template/vendors/datatables.net/jquery.dataTables.js"></script>
<script src="/new-template/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
<script src="/new-template/vendors/datatables.net-fixedcolumns/dataTables.fixedColumns.min.js"></script>

<script src="/new-template/js/shared/data-table.js"></script>
<script src="/new-template/js/demo_1/dashboard.js"></script>

<!-- End custom js for this page -->

<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [8, 16, 32, 64, -1],
            [8, 16, 32, 64, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>

<script src="/js/sweetalert2.all.min.js"></script>


<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    CKEDITOR.replace('editor2');
    CKEDITOR.replace('negotiatedPrices');
    CKEDITOR.replace('negotiatedPrices');
    CKEDITOR.replace('contacts');
    CKEDITOR.replace('beneficiaries');
    CKEDITOR.replace('location');
    CKEDITOR.replace('designationProject');
</script>



<script>
    $('.select2').select2({
        theme: 'bootstrap4',
    });
    $('.select2-multi').select2({
        multiple: true,
        theme: 'bootstrap4',
    });
    $('.drgpicker').daterangepicker({
        singleDatePicker: true,
        timePicker: false,
        showDropdowns: true,
        locale: {
            format: 'MM/DD/YYYY'
        }
    });
    $('.time-input').timepicker({
        'scrollDefault': 'now',
        'zindex': '9999' /* fix modal open */
    });
    /** date range picker */
    if ($('.datetimes').length) {
        $('.datetimes').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(32, 'hour'),
            locale: {
                format: 'M/DD hh:mm A'
            }
        });
    }
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf(
                'month')]
        }
    }, cb);
    cb(start, end);
    $('.input-placeholder').mask("00/00/0000", {
        placeholder: "__/__/____"
    });
    $('.input-zip').mask('00000-000', {
        placeholder: "____-___"
    });
    $('.input-money').mask("#.##0,00", {
        reverse: true
    });
    $('.input-phoneus').mask('(000) 000-0000');
    $('.input-mixed').mask('AAA 000-S0S');
    $('.input-ip').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
        translation: {
            'Z': {
                pattern: /[0-9]/,
                optional: true
            }
        },
        placeholder: "___.___.___.___"
    });

    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();
</script>




<style>
    /* style a mexer */
    .select2-container .select2-selection--single {
        box-sizing: border-box;
        cursor: pointer;
        display: block;
        height: 35px;
        user-select: none;
        -webkit-user-select: none;

    }
</style>



<script>
    $("#img-input").click(function() {
        $("#image_visible").hide();
    });
</script>


<script src="/dashboard/js/apps.js"></script>
@yield('JS')
</body>

</html>

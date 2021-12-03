  <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="{{ asset('dashboard/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
      <!-- DataTables -->
      <script src="{{ asset('dashboard/plugins/datatables/jquery.dataTables.js')}}"></script>
      <script src="{{ asset('dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('dashboard/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
    {{-- convert to arabic --}}
    <script src="{{ asset('dashboard/plugins/persianNum.jquery-2.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('dashboard/dist/js/adminlte.js')}}"></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src="{{ asset('dashboard/dist/js/demo.js')}}"></script>

    <script>
          $(document).ready(function () {
            $('#file-upload').change(function() {
  var i = $(this).prev('label').clone();
  var file = $('#file-upload')[0].files[0].name;
  $(this).prev('label').text(file);
});

        });
    </script>

    @yield('scripts')
</body>

</html>

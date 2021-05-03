  <!-- BEGIN: Vendor JS-->
  <script src="/assets/vendors/js/vendors.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/axios@0.21.1/dist/axios.min.js"></script>
  <script>
      $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
  </script>

  <script>
      async function getDesa(e) {
            try {
                let res = await axios.get(`http://localhost:8000/api/desa?id_kecamatan=${e.value}`);
                let desa = '';
                res.data.data.forEach(e => {
                    desa+=`<option value="${e.id_kelurahan}">${e.nama_kelurahan}</option>`
                });
                let selectDesa = document.getElementById("desa");
                selectDesa.innerHTML = desa
            } catch (error) {
                throw error;
            }
      }
  </script>
  <!-- BEGIN Vendor JS-->

  <!-- BEGIN: Page Vendor JS-->
  {{-- <script src="/assets/vendors/js/charts/apexcharts.min.js"></script>
  <script src="/assets/vendors/js/extensions/tether.min.js"></script>
  <script src="/assets/vendors/js/extensions/shepherd.min.js"></script> --}}
  <!-- END: Page Vendor JS-->

  {{-- Data Table --}}
  @stack('table-vendor')
  {{-- Data Table --}}

  <!-- BEGIN: Theme JS-->
  <script src="/assets/js/core/app-menu.js"></script>
  <script src="/assets/js/core/app.js"></script>
  <script src="/assets/js/scripts/components.js"></script>
  <!-- END: Theme JS-->

  <!-- BEGIN: Page JS-->
  @stack('table-init-js')
  {{-- <script src="/assets/js/scripts/pages/dashboard-analytics.js"></script> --}}
  <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>

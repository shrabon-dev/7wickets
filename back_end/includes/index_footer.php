
          <!-- Script links -->
          <script src="./front_end/js/jquery-1.12.4.min.js"></script>
    <script src="./front_end/js/bootstrap.bundle.min.js"></script>
    <script src="./front_end/js/aos.js"></script>
    <script src="./front_end/js/slick.min.js"></script>
    <script src="./front_end/js/venobox.min.js"></script>
    <script src="./front_end/js/script.js"></script>

    <script>
      function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
          td = tr[i].getElementsByTagName("td")[0];
          if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            } else {
              tr[i].style.display = "none";
            }
          }       
        }
      }
      </script>

</body>
</html>
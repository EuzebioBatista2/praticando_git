</body>
<script>
  $(document).ready(function() {
    $('#phone').inputmask(["(99) 9999-9999", "(99) 99999-9999"]);

    $('#name').on('input', function() {
      $(this).val($(this).val().replace(/[0-9]/g, '').replace(/^\w/, function(char) {
        return char.toUpperCase();
      }));
    });
  });
</script>
</html>
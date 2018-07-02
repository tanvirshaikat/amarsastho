<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script>
    $(document).ready(function() {
    $('#example').DataTable();
	} );
	</script>
<script>


$(document).ready(function(){
 $('#submit').click(function(){
 var insert = [];
 $('.get_value').each(function(){
 if($(this).is(":checked"))
 {
 insert.push($(this).val());
 }
 });
 insert = insert.toString();
 $.ajax({
 url: "insert.php",
 method: "POST",
 data:{insert:insert},
 success:function(data){
 $('#result').html(data);
 }
 });
 });
});
</script>


    <script type="text/javascript">
        
            function ask_for_delete() {
                var chk = confirm('Are you sure you want to delete?');
                if (chk) {
                    return true;
                    
                } else {
                    return false;
                }

            }
        
    </script>
</body>

</html>

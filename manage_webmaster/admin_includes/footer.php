      <div class="site-footer"> Design & Developed By Lancius IT Solutions 
      </div>
    </div>
    <script src="js/vendor.min.js"></script>
    <script src="js/cosmos.min.js"></script>
    <script src="js/application.min.js"></script>
    <script src="js/index.min.js"></script>
    <script>
	function isNumberKey(evt){
	    var charCode = (evt.which) ? evt.which : event.keyCode
	    if (charCode > 31 && (charCode < 48 || charCode > 57))
	        return false;
	    return true;
	}
	</script>
	<script>
      var loadFile = function(event) {
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
      };
          
    </script>
  </body>
<style>
.modal-body{
  font-size:15px;
  text-align:justify;
  padding-left:110px;
  padding-top:30px;
  font-family:Roboto,sans-serif;
}
</style>
</html>
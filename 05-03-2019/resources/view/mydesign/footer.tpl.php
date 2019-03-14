<?php
echo $data["footerMenu"];
?>
<footer>
	
</footer>
<?php if (isset($data['error'])) {
	echo '<div class="alert alert-danger" role="alert">' . $data ['error'] . '</div>';
}?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>


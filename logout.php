<?php
session_start();
session_destroy();
?>
<script type="text/javascript">
    alert('Selamat, anda berhasil logout.');
    location.href = "Home.php";
</script>
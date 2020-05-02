<?php
/* 
@license MIT
@author  R Midhun Suresh <rmidhunsuresh@gmail.com>
 */
?>

<?PHP function addLog($log_message){ ?>
    <script>addLog("<?php echo $log_message ?>");</script>
<?php } ?>


<?PHP function setLogContainer($identifier){ ?>
    <script>setLogContainer("<?php echo $identifier ?>");</script>
<?php } ?>
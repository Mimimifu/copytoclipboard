<?php
error_reporting(0);
if($_GET){
    foreach($_GET as $key => $value){
        $get[$key] = $value;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CopyToClipboard CopiaECola</title>

</head>
<body>
    <div style="text-align: center;">
    <?php 
      
      if($get['cp'] || $get['clipboard']){
        echo '<h1>Your text copy to clipboard is :'.($get['cp']?$get['cp']:$get['clipboard']).'</h1>';
      }else{
        echo '<h1>Example: '.($_SERVER['https'] == 'on'? 'https': 'http').'://'.$_SERVER['SERVER_NAME'].'/?cp=YOURTEXTHERE</h1>';
      }
      
    ?>
    
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    

        <input type="text" value="<?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?>" id="copyMe" disabled>
        <button onclick="copyMyText()"><i>&#xf24d;</i> | Copy To Clipboard (Copiar)</button>
  

    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <br/>
    <h2><?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?></h2>
    <button onclick="copyToClipboard('<?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?>');"><i>&#xf24d;</i>Copy to Clip To Clipboard (Copiar)</button>
    </div>
    <script type="application/javascript">
            
            function copyMyText() {
                var textToCopy = document.getElementById("copyMe");
                textToCopy.select();
                document.execCommand("copy");
            }
            copyMyText();

            function copyToClipboard(text) {
                navigator.clipboard.writeText(text).then(function() {
                console.log("Copied to clipboard successfully!");
                }, function() {
                console.error("Unable to write to clipboard.");
                });
            }
            copyToClipboard('<?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?>');

    </script>
</body>
</html>

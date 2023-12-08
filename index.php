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
    <title></title>

</head>
<body>
    <?php 
      
      if($get['cp'] || $get['clipboard']){
        echo 'Your text copy to clipboard is :'.($get['cp']?$get['cp']:$get['clipboard']);
      }else{
        echo 'Paramenter type GET cp not found Example: '.$_SERVER['https'].'://'.$_SERVER['SERVER_NAME'].'/?cp=YOURTEXTHERE';
      }
      
    ?>
    
    <hr/>
    <div>
        <input type="text" value="<?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?>" id="copyMe">
        <button onclick="copyMyText()">Copy To Clipboard</button>
    </div>

    <hr/>
    <button onclick="copyToClipboard('<?php echo ($get['cp']?$get['cp']:$get['clipboard']); ?>');">Copy to Clip To Clipboard</button>
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

<link href="<?php echo base_url();?>css/tableau_bord.css" rel="stylesheet">
</head>
<body id="launchFade">

  <div id="recentBuy">
    <ul>
      <?php for($i=0;$i<=10;$i++){
        if(isset($depenses[$i])){
          echo("<li>".$depenses[$i]["libelle"]."</li>");
        }
      }?>
    </ul>

  </div>

</body>

</html>

<script>
function sleep(ms) {
  return new Promise(resolve => setTimeout(resolve, ms));
}

document.onreadystatechange = async function () {
  if (document.readyState == "complete") {
    document.getElementById('launchFade').style.opacity = 1;
  };
};

</script>

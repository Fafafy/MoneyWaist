  <link href="<?php echo base_url();?>css/entree.css" rel="stylesheet">
</head>
<body>

  <div id="title" class="proneToFade">
    <h1>Fortune</h1>
  </div>

  <p class="proneToFade">Veuillez renseigner vos informations de connexion</p>

  <img id="bjr" src="assets/logo.png">

  <form method="post" class="proneToFade">

    <input type="text" placeholder="Login" name="id" value="<?php if (isset($id)) {echo $id;} ?>" >
    <input type="password" placeholder="Mot de passe" name="pwd" <?php if (isset($pwd)) {echo 'value="'.$pwd.'"';} ?> >
    <button value="Connexion">Connexion</button>

  </form>


</body>

</html>

<script>
  function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  }

  document.onreadystatechange = async function () {
    if (document.readyState == "complete") {
      document.getElementsByClassName('proneToFade')[0].style.opacity = 0;
      document.getElementsByClassName('proneToFade')[1].style.opacity = 0;
      document.getElementsByClassName('proneToFade')[2].style.opacity = 0;
      await sleep(2000);
      document.getElementById('bjr').style.display = 'block';
      await sleep(1000);
      document.getElementById('bjr').style.opacity = 1;
      await sleep(2000);
      document.getElementById('bjr').style.opacity = 0;
      await sleep(2000);
      window.location.href = "<?php echo base_url()?>gestion";
    };
  };

</script>

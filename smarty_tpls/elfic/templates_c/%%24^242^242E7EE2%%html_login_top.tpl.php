<?php /* Smarty version 2.6.26, created on 2012-04-20 09:42:44
         compiled from html_login_top.tpl */ ?>
<html>
<head>
  <title><?php echo $this->_tpl_vars['title']; ?>
</title>
  <link rel="stylesheet" href="css/login_styles.css" type="text/css" />
  <link rel="stylesheet" href="css/styles.css" type="text/css" />
  <?php echo '
  <script language="javascript" type="text/javascript">
  function setFocus() {
      document.loginForm.handle.select();
      document.loginForm.handle.focus();
  }

  function submitbutton(pressbutton) {
      var form = document.loginForm;

      // do field validation
      if (form.handle.value == "") {
          alert( "Debe ingresar el Nombre de Usuario" );
      } else if (form.passwd.value == "") {
          alert( "Debe ingresar el Password" );
      } else {
          submitform( pressbutton );
      }
  }
  </script>
  '; ?>

</head>
<body onload="setFocus();">
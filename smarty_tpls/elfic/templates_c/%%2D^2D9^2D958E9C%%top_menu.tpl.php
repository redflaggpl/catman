<?php /* Smarty version 2.6.26, created on 2012-05-11 12:22:40
         compiled from top_menu.tpl */ ?>
<table width="100%" class="menubar" cellpadding="0" cellspacing="0">
<tr>
  <td class="menubg" style="padding-left:5px">
    <div id="myMenuID"></div>
    <SCRIPT LANGUAGE="JavaScript"><!--
      var myMenu =
      [
        [null, 'Home', 'index2.php', null, 'Panel de Control'],  // a menu item
        [null, 'Asistencia', '', null, null,   // a folder item
            ['<img src="images/topmenu_allprocs.png" />', 'Tutores', 'index2.php?com=asistencia&do=list_tut', null, 'description'],  // a menu item
	        ['<img src="images/topmenu_allprocs.png" />', 'Funcionarios', 'index2.php?com=asistencia&do=list_fun', null, 'description']
        ],
        [null, 'Cursos', 'index2.php?com=cursos', null, null,   // a folder item
        ],
        [null, 'Evaluación', 'index2.php?com=evaluacion', null, null,   // a folder item
         ],
        [null, 'Reportes', 'index2.php?com=reportes', null, null,   
         ],
        [null, 'Usuarios', 'index2.php?com=usuarios', null, null,   
         ]
      ];
      cmDraw ('myMenuID', myMenu, 'hbr', cmThemeOffice, 'ThemeOffice');
    --></SCRIPT>
  </td>
  <td class="menubg" align="right" style="padding-right:5px">
    <strong><a href="index.php?action=logout">Finalizar</a> &nbsp; <?php echo $this->_tpl_vars['login']; ?>
</strong>
  </td>
</tr>
</table>
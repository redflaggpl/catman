<?php /* Smarty version 2.6.26, created on 2012-06-05 22:53:36
         compiled from featCpanel.tpl */ ?>
<div align="center" class="centermain"> 
	<div class="main">
	<table class="adminheading">
    <tr>
      <th class="cpanel">
        Panel de Control
      </th>

    </tr>
    </table>
   <table class="adminform">
    <tr>
      <td width="45%" valign="top"> 
    <div id="cpanel">
    	<?php if ($this->_tpl_vars['asistencia'] == 1): ?>
        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=asistencia">
                    <img src="images/iconos/asistencia_tut.png"  alt="Asistencia" align="middle" border="0" />  
                    <span>Asistencia Tutores</span>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['asistencia'] == 1): ?>
        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=asistencia&do=list_fun">
                    <img src="images/iconos/xclock.png"  alt="Asistencia" align="middle" border="0" />  
                    <span>Asistencia Funcionarios</span>
                </a>
            </div>
        </div>
       <?php endif; ?>
        <?php if ($this->_tpl_vars['cursos'] == 1): ?>
       <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=cursos">
                    <img src="images/iconos/cursos.png"  alt="Cursos" align="middle" border="0" />  
                    <span>Cursos</span>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['evaluacion'] == 1): ?>
        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=evaluacion">
                    <img src="images/iconos/evaluacion.png"  alt="Encuestas" align="middle" border="0" />  
                    <span>Evaluación Tutores</span>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['reportes'] == 1): ?>
        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=reportes">
                    <img src="images/iconos/reportes.png"  alt="Reportes" align="middle" border="0" />  
                    <span>Reportes</span>
                </a>
            </div>
        </div>
        <?php endif; ?>
        <?php if ($this->_tpl_vars['usuarios'] == 1): ?>
        <div style="float:left;">
            <div class="icon">
                <a href="index2.php?com=usuarios">
                    <img src="images/iconos/user.png"  alt="Usuarios" align="middle" border="0" />  
                    <span>Usuarios</span>
                </a>
            </div>
        </div>
        <?php endif; ?>
</div>
<td width="10%">&nbsp;</td>

      <td width="45%" valign="top">
	<div style="width: 100%;">
	  <form action="index2.php" method="post" name="adminForm">
	  <div class="tab-page" id="modules-cpanel">
	  
	  <script type="text/javascript">
	    var tabPane1 = new WebFXTabPane( document.getElementById( "modules-cpanel" ), 1 )
	  </script>
	  
	    <div class="tab-page" id="module1">
	      <h2 class="tab">Inicio</h2>
	      <script type="text/javascript">
	        tabPane1.addTabPage( document.getElementById( "module1" ) );
	      </script>

	      <table class="adminlist">
	      <tr>
	        <th>!Hola <?php echo $this->_tpl_vars['usuario']; ?>
!</th>
	      </tr>
	       <tr>
	       <td>
	           Bienvenido a CATMAN, el sistema de gestión y control de asistencia de CAT. Dependiendo de tu rol, aquí puedes realizar diferentes tareas:
	           <ul>
	            <li>Consultas de registros de asistencia de Tutores y Funcionarios (Coordinadores)</li>
	            <li>Gestión de cursos y agendas (Coordinadores - Tutores)</li>
	            <li>Evaluación de Tutores (Estudiantes)</li>
	            <li>Seguimiento a evaluaciones de tutores (Coordinadores)</li>
	           </ul>
	       <td>
	       </tr>
	       </tr>
	      </table>
	    </div>
	  </div>
	  </form>

	</div>
      </td>
    </tr>
    </table>
    </div>
    </div>
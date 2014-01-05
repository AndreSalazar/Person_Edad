<HTML>
<HEAD>
 <TITLE>New Document</TITLE>
</HEAD>
<BODY>
<?
  $nombres = $_REQUEST["nombres"];
  $anio_nacimiento = $_REQUEST["año_nacimiento"];
  $mes_nacimiento = $_REQUEST["mes_nacimiento"];
  $dia_nacimiento = $_REQUEST["dia_nacimiento"];
  
  $anio_actual = $_REQUEST["año_actual"];
  $mes_actual = $_REQUEST["mes_actual"];
  $dia_actual = $_REQUEST["dia_actual"];


  if($dia_actual >= $dia_nacimiento && $mes_actual >= $mes_nacimiento && $anio_actual >= $anio_nacimiento)
  {
         $resul_dia = $dia_actual - $dia_nacimiento;
         $resul_mes = $mes_actual - $mes_nacimiento;
         $resul_anio = $anio_actual - $anio_nacimiento;
  }

  else

  if($dia_nacimiento > $dia_actual && $mes_nacimiento <= $mes_actual && $anio_nacimiento <= $anio_actual)
  {
         $resul_dia= 30 + $dia_actual - $dia_nacimiento;
         $resul_mes= $mes_actual - 01 - $mes_nacimiento;
         $resul_anio= $anio_actual - $anio_nacimiento;
  }

  else

  if($dia_nacimiento > $dia_actual && $mes_nacimiento > $mes_actual && $anio_nacimiento <= $anio_actual)
  {
         $resul_dia= (30 + $dia_actual) - $dia_nacimiento;
         $resul_mes= ($mes_actual - $mes_nacimiento - 1) + 12;
         $resul_anio= ($anio_actual - $anio_nacimiento) - 1;
  }


  else

  if($dia_nacimiento <= $dia_actual && $mes_nacimiento > $mes_actual && $anio_nacimiento <= $anio_actual)
  {
        $resul_dia= $dia_actual - $dia_nacimiento;
        $resul_mes= ($mes_actual - $mes_nacimiento) + 12;
        $resul_anio = ($anio_actual - $anio_nacimiento) - 1;
  }
  
  echo "<center> <h1> $nombres </h1>";
  echo "TIENE: $resul_anio AÑOS $resul_mes MESES $resul_dia DIAS";
  
  echo "<form method='post' action='Formulario01.htm'>";
  echo "<input type='submit' name='regresar' value='Volver al inicio'> </center>";
  echo "</form>";

?>
</BODY>
</HTML>

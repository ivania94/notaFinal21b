<?php
class VotanteControlador extends Votante{
   
    public function guardarDatos($con,$objVotante){
        $variableSql = "INSERT INTO inscrip_votante ";
        $variableSql .= "(id,apellidos,nombres,foto,id_sexo,";
        $variableSql .= "n_dui,fecha_expedicion,residencia,id_depto,id_municipio)";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objVotante[0]."',";
        $variableSql.="'".$objVotante[1]."',";
        $variableSql.="'".$objVotante[2]."',";
        $variableSql.="'".$objVotante[3]."',";
        $variableSql.="'".$objVotante[4]."',";
        $variableSql.="'".$objVotante[5]."',";
        $variableSql.="'".$objVotante[6]."',";
        $variableSql.="'".$objVotante[7]."',";
        $variableSql.="'".$objVotante[8]."',";
        $variableSql.="'".$objVotante[9]."');";        
        return consultaA($con, $variableSql);
        }
        
        public function modificarDatos($con,$objVotante) {
        $variableSql = "UPDATE inscrip_votante SET  ";
        $variableSql .= "apellidos = '".$objVotante[1]."'";
        $variableSql .= ",nombres = '".$objVotante[2]."'";
        $variableSql .= ",foto = '".$objVotante[3]."'";
        $variableSql .= ",id_sexo = '".$objVotante[4]."'";
        $variableSql .= ",n_dui = '".$objVotante[5]."'";
        $variableSql .= ",fecha_expedicion = '".$objVotante[6]."'";
        $variableSql .= ",residencia = '".$objVotante[7]."'";
        $variableSql .= "id_depto = '".$objVotante[8]."'";
        $variableSql .= ",id_municipio = '".$objVotante[9]."'";
        $variableSql .= " WHERE id = ".$objVotante[0].";";                
        return consultaA($con, $variableSql);
        
        }
}
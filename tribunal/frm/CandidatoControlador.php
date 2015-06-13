<?php
class CandidatoControlador extends Candidato{
   
    public function guardarDatos($con,$objCandidato) {
        $variableSql = "INSERT INTO inscrip_candidato";
        $variableSql .= "(id,apellidos,nombres,dui,foto,id_candidatura,";
        $variableSql .= "id_partido,id_depto,id_municipio,id_eleccion) ";
        $variableSql .= "VALUES (";
        $variableSql.="'".$objCandidato[0]."',";
        $variableSql.="'".$objCandidato[1]."',";
        $variableSql.="'".$objCandidato[2]."',";
        $variableSql.="'".$objCandidato[3]."',";
        $variableSql.="'".$objCandidato[4]."',";
        $variableSql.="'".$objCandidato[5]."',";
        $variableSql.="'".$objCandidato[6]."',";
        $variableSql.="'".$objCandidato[7]."',";
        $variableSql.="'".$objCandidato[8]."',";
        $variableSql.="'".$objCandidato[9]."');";        
        return consultaA($con, $variableSql);
        
        }

        public function modificarDatos($con,$objCandidato) {
        $variableSql = "UPDATE inscrip_candidato SET  ";
        $variableSql .= "apellidos = '".$objCandidato[1]."'";
        $variableSql .= ",nombres = '".$objCandidato[2]."'";
        $variableSql .= ",dui = '".$objCandidato[3]."'";
        $variableSql .= ",foto = '".$objCandidato[4]."'";
        $variableSql .= " ,id_candidatura = '".$objCandidato[5]."'";
        $variableSql .= " ,id_partido = '".$objCandidato[6]."'";
        $variableSql .= " ,id_depto = '".$objCandidato[7]."'";
        $variableSql .= " ,id_municipio = '".$objCandidato[8]."'";
        $variableSql .= " ,id_eleccion = '".$objCandidato[9]."'";
        $variableSql .= " WHERE id = ".$objCandidato[0].";";                
        return consultaA($con, $variableSql);
        
        }
}

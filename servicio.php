<?php

require_once('modelo.php');

class servicio extends modelo{
	protected $id;
	protected $nombre;	
	protected $precio;
        protected $desc;
        protected $nombre_img;
	
	public function _construct(){
		parent::_construct();
	}

	public function registro($id, $nombre, $precio, $desc, $nombre_img){
		$sql="INSERT INTO pt_tbservicio (id_serv, nomb_serv, prec_serv, desc_serv, ruta_imagen) VALUES ('$id','$nombre','$precio','$desc', '$nombre_img')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}
        
        public function modificar($id, $nombre, $precio, $desc, $nombre_img){
		$sql="UPDATE pt_tbservicio SET nomb_serv='$nombre', prec_serv='$precio', desc_serv='$desc', ruta_imagen='$nombre_img' WHERE id_serv='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}
        
        public function buscar($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbservicio WHERE $tipo like '%$buscar%' ORDER BY id_serv DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
        
        public function eliminar($id){
		$sql="DELETE FROM pt_tbservicio WHERE id_serv='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	}
        
        public function listar(){
            $sql="SELECT * FROM pt_tbservicio";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }
}

class producto extends modelo{
    
    protected $id;
    protected $nombre;
    protected $tipop;
    protected $marca;
    protected $desc;
    protected $pc;
    protected $pv;
    protected $fecha;
    protected $imagen;
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregaproducto($id, $nombre, $tipop, $marca, $desc, $pc, $pv, $fecha, $nombre_img){
		$sql="INSERT INTO pt_tbproducto (id_prod, nom_pro, tip_pro, mar_pro, des_pro, prc_pro, prv_pro, fecha_compra, ruta_imagen) "
                        . "VALUES ('$id','$nombre','$tipop','$marca','$desc','$pc','$pv', '$fecha', '$nombre_img')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificaproducto($id, $nombre, $tipop, $marca, $desc, $pc, $pv, $fecha, $nombre_img){
		$sql="UPDATE pt_tbproducto SET nom_pro='$nombre', tip_pro='$tipop', mar_pro='$marca', des_pro='$desc'"
                        . ", prc_pro='$pc', prv_pro='$pv', fecha_compra='$fecha', ruta_imagen='$nombre_img' WHERE id_prod='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminaproducto($id){
		$sql="DELETE FROM pt_tbproducto WHERE id_prod='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarproducto($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbproducto WHERE $tipo like '%$buscar%' ORDER BY id_prod DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listarproducto(){
            $sql="SELECT * FROM pt_tbproducto";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
          
}

class jaula extends modelo{
    
    protected $id;
    protected $medida;
    protected $disponible;
    protected $descripcion;
    
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregajaula($medida, $disponible, $descripcion){
		$sql="INSERT INTO pt_tbjaula (med_jaula, dis_jaula, des_jaula) "
                        . "VALUES ('$medida','$disponible','$descripcion')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificajaula($id, $medida, $disponible, $descripcion){
		$sql="UPDATE pt_tbjaula SET med_jaula='$medida', dis_jaula='$disponible', des_jaula='$descripcion' WHERE id_jaula='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminajaula($id){
		$sql="DELETE FROM pt_tbjaula WHERE id_jaula='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscajaula($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbjaula WHERE $tipo like '%$buscar%' ORDER BY id_jaula DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listajaula(){
            $sql="SELECT * FROM pt_tbjaula";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
}

class especie extends modelo{
    
    protected $id;
    protected $nombre;
    protected $descripcion;    
    
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregaespecie($nombre, $descripcion){
		$sql="INSERT INTO pt_tbespecie (nom_especie, des_especie) "
                        . "VALUES ('$nombre','$descripcion')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificaespecie($id, $nombre, $descripcion){
		$sql="UPDATE pt_tbespecie SET nom_especie='$nombre', des_especie='$descripcion' WHERE id_especie = '$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminaespecie($id){
		$sql="DELETE FROM pt_tbespecie WHERE id_especie = '$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarespecie($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbespecie WHERE $tipo like '%$buscar%' ORDER BY id_especie DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listaespecie(){
            $sql="SELECT * FROM pt_tbespecie";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
}

class razas extends modelo{
    
    protected $id;
    protected $nombre;
    protected $tamano;
    protected $especie;    
    
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregaraza($nombre, $tamano, $especie){
		$sql="INSERT INTO pt_tbrazas (nom_raza, tam_raza, id_especie) "
                        . "VALUES ('$nombre', '$tamano', '$especie')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificaraza($id,$nombre, $tamano, $especie){
		$sql="UPDATE pt_tbrazas SET nom_raza='$nombre', tam_raza='$tamano', id_especie='$especie' WHERE id_raza='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminaraza($id){
		$sql="DELETE FROM pt_tbrazas WHERE id_raza='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarraza($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbrazas WHERE $tipo like '%$buscar%' ORDER BY id_raza DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listaraza(){
            $sql="SELECT * FROM pt_tbrazas ORDER BY id_especie DESC";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
    public function llenarselect(){
            $sql="SELECT * FROM pt_tbrazas";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }        
}

class cliente extends modelo{
    
    protected $id;
    protected $nombre;
    protected $apellido;
    protected $dir;
    protected $comuna;
    protected $ciudad;
    protected $fono;
    protected $mail;
    protected $fechar;
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregacl($id, $nombre, $apellido, $dir, $comuna, $ciudad, $fono, $mail, $fechar){
		$sql="INSERT INTO pt_tbcliente (id_cl, no_cl, ap_cl, di_cl, co_cl, ci_cl, fo_cl, ma_cl,fe_cl) "
                        . "VALUES ('$id','$nombre','$apellido','$dir','$comuna','$ciudad','$fono', '$mail','$fechar')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificacl($id, $nombre, $apellido, $dir, $comuna, $ciudad, $fono, $mail, $fechar){
		$sql="UPDATE pt_tbcliente SET no_cl='$nombre', ap_cl='$apellido', di_cl='$dir', co_cl='$comuna'"
                        . ", ci_cl='$ciudad', fo_cl='$fono', ma_cl='$mail', fe_cl='$fechar' WHERE id_cl='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminacl($id){
		$sql="DELETE FROM pt_tbcliente WHERE id_cl='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarrut($buscar){
            $sql= "SELECT * FROM pt_tbcliente WHERE id_cl='$buscar'";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
        
    public function buscarrut2($buscar){
            $sql= "SELECT c.*, m.id_cl, m.id_mas, m.no_mas FROM pt_tbcliente c INNER JOIN pt_tbpaciente m ON  c.id_cl=m.id_cl WHERE c.id_cl='$buscar'";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }    
    public function buscacl($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbcliente WHERE $tipo like '%$buscar%' ORDER BY id_cl DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
        
     public function listarcl(){
            $sql="SELECT * FROM pt_tbcliente";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        } 
    
     public function llenaratencion($buscar){
            $sql= "SELECT c.*, m.id_cl, m.id_mas, m.no_mas FROM pt_tbcliente c INNER JOIN pt_tbpaciente m ON  c.id_cl=m.id_cl WHERE c.id_cl=$buscar;";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
        
}

class paciente extends modelo{
    
    protected $id;
    protected $id_cl;
    protected $nombre;
    protected $especie;
    protected $raza;
    protected $color;
    protected $chip;
    protected $edad;
    protected $peso;
    protected $genero;
    protected $obs;
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregapac($id_cl, $nombre, $especie, $raza, $color, $chip, $edad, $peso, $genero, $obs){
		$sql="INSERT INTO pt_tbpaciente (id_cl, no_mas, id_especie, id_raza, co_mas, nc_mas, ed_mas, pe_mas, ge_mas, ob_mas)"
                        . "VALUES ('$id_cl','$nombre','$especie','$raza','$color','$chip','$edad','$peso','$genero','$obs')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo el ingreso de datos";
                    echo $id_cl, $nombre, $especie, $raza, $color, $chip, $edad, $peso, $genero, $obs ;
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificapac($id, $id_cl, $nombre, $especie, $raza, $color, $chip, $edad, $peso, $genero, $obs){
		$sql="UPDATE pt_tbpaciente SET id_cl='$id_cl', no_mas='$nombre', id_especie='$especie', id_raza='$raza', co_mas='$color'"
                        . ", nc_mas='$chip', ed_mas='$edad', pe_mas='$peso', ge_mas='$genero', ob_mas='$obs' WHERE id_mas='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function eliminapac($id){
		$sql="DELETE FROM pt_tbpaciente WHERE id_mas='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarrut($buscar){
            $sql= "SELECT * FROM pt_tbpaciente WHERE id_mas='$buscar'";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    public function buscapac($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbpaciente WHERE $tipo like '%$buscar%' ORDER BY id_mas DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
        
     public function listarpac(){
            $sql="SELECT * FROM pt_tbpaciente";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
    
        public function listarpac2(){
            $sql="SELECT p.*, r.*, e.* FROM pt_tbpaciente p INNER JOIN pt_tbrazas r ON p.id_raza = r.id_raza INNER JOIN pt_tbespecie e ON r.id_especie = e.id_especie";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
}

class ticket extends modelo{
    
    protected $id;
    protected $id_cl;
    protected $id_mas;
    protected $nombre;
    protected $hora;
    protected $fecha;
    protected $modo;
    protected $desc;
    
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregaticket($id_cl, $id_mas, $nombre, $hora, $fecha, $modo, $desc){
		$sql="INSERT INTO pt_tbticket (id_cl, id_mas, nom_cl, ho_ticket, fe_ticket, modo_ticket, de_ticket)"
                        . "VALUES ('$id_cl', '$id_mas', '$nombre', '$hora', '$fecha', '$modo', '$desc')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la creacion del ticket";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificaticket($id, $id_cl, $id_mas, $nombre, $hora, $fecha, $modo, $desc){
		$sql="UPDATE pt_tbticket SET id_cl='$id_cl', id_mas='$id_mas', nom_cl='$nombre', ho_ticket='$hora', fe_ticket='$fecha', modo_ticket='$modo', de_ticket='$desc' "
                        . "WHERE id_ticket='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
       
    public function modificamodo($id,$modo){
		$sql="UPDATE pt_tbticket SET modo_ticket='$modo'"
                        . "WHERE id_ticket='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}     
    
    public function eliminaticket($id){
		$sql="DELETE FROM pt_tbticket WHERE id_ticket='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarticket($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbticket WHERE $tipo like '%$buscar%' ORDER BY id_ticket DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listaticket(){
            $sql="SELECT * FROM pt_tbticket ORDER BY modo_ticket ASC";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
     public function buscarrut($buscar){
            $sql= "SELECT * FROM pt_tbticket WHERE id_cl='$buscar'";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        } 
       
}

class ficha extends modelo{
    
    protected $id;
    protected $id_cl;
    protected $id_mas;
    protected $nombre;
    protected $hora;
    protected $fecha;    
    protected $desc;
    protected $problema;
    protected $diagnostico;
    protected $tratamiento; 
    protected $obs;
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregaficha($id_cl, $no_mas, $nombre, $hora, $fecha, $problema, $diagnostico, $tratamiento, $obs){
		$sql="INSERT INTO pt_tbficha (id_cl, no_mas, nom_cl, ho_ticket, fe_ticket, pro_ficha, dia_ficha, tra_ficha, obs_ficha)"
                        . "VALUES ('$id_cl', '$no_mas', '$nombre', '$hora', '$fecha', '$problema', '$diagnostico', '$tratamiento', '$obs')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la creacion del ticket";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificaficha($id, $id_cl, $no_mas, $nombre, $hora, $fecha, $problema, $diagnostico, $tratamiento, $obs){
		$sql="UPDATE pt_tbficha SET id_cl='$id_cl', no_mas='$no_mas', nom_cl='$nombre', ho_ticket='$hora', fe_ticket='$fecha', pro_ficha='$problema', dia_ficha='$diagnostico', tra_ficha='$tratamiento', obs_ficha='$obs' "
                        . "WHERE id_ficha='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
        public function eliminaficha($id){
		$sql="DELETE FROM pt_tbficha WHERE id_ficha='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarficha($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbficha WHERE $tipo like '%$buscar%' ORDER BY id_ficha DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listaficha(){
            $sql="SELECT * FROM pt_tbficha";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
       
}

class hospital extends modelo{
    
    protected $id;
    protected $id_cl;
    protected $id_ficha;
    protected $no_mas;
    protected $fechai;
    protected $fechas;    
    protected $obs;
 
    
    public function _construct(){
		parent::_construct();
    }
     
    public function agregahospital($id_cl, $id_ficha, $no_mas, $fechai, $fechas, $obs){
		$sql="INSERT INTO pt_tbhospital (id_cl, id_ficha, no_mas, fein_hospital, fesa_hospital, obs_hospital)"
                        . "VALUES ('$id_cl', '$id_ficha', '$no_mas', '$fechai', '$fechas', '$obs')";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la creacion del ticket";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	}    
    
     public function modificahospital($id, $id_cl, $id_ficha, $no_mas, $fechai, $fechas, $obs){
		$sql="UPDATE pt_tbhospital SET id_cl='$id_cl', no_mas='$no_mas', id_ficha='$id_ficha', fein_hospital='$fechai', fesa_hospital='$fechas', obs_hospital='$obs' "
                        . "WHERE id_ficha='$id'";                
		$resultado=$this->_db->query($sql);
                if (!$resultado){
                    echo "Fallo la modificacion de datos";
                }else{
                    return $resultado;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
        public function eliminahospital($id){
		$sql="DELETE FROM pt_tbhospital WHERE id_hospital='$id'";
		$elimina=$this->_db->query($sql);
                if (!$elimina){
                    echo "Fallo la eliminacion de datos";
                }else{
                    return $elimina;
                    $resultado->close();
                    $this->_db->close();
                }
	} 
    
    public function buscarhospital($tipo,$buscar){
            $sql= "SELECT * FROM pt_tbhospital WHERE $tipo like '%$buscar%' ORDER BY id_hospital DESC";
            $busca=$this->_db->query($sql);
            $respuesta=$busca->fetch_all(MYSQLI_ASSOC);
            if ($respuesta){
                return $respuesta;
                $respuesta->close();
                $this->_db->close();
            }
        }
    
     public function listahospital(){
            $sql="SELECT * FROM pt_tbhospital";
            $resultado=$this->_db->query($sql);
            $usuarios=$resultado->fetch_all(MYSQLI_ASSOC);
            if ($usuarios){
                return $usuarios;
                $usuarios->close();
            }
        }    
       
}
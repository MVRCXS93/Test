<?php 
class UserModel extends CI_Model {
        public function getUser($email,$password)
        {
                $presente = false;
                /* Obtenemos la base conexión */
                $this->load->database();
                $sql = "SELECT * FROM Usuario WHERE Mail = ? AND Password = ?";
                $result = $this->db->query($sql,array($email,md5($password)))->row();
                if($result!=null){
                        $presente=true;
                }
                return $presente;
        }
        public function getData($Email){
                $this->load->database();
                $data=null;
                $sql = "SELECT * FROM Perfil WHERE Mail = ? ";
                $query = $this->db->query($sql,array($Email));
                foreach ($query->result_array() as $row)
                {
                        $data['Mail']      = $row['Mail'];
                        $data['Nombre']    = $row['Nombre'];
                        $data['Apellidos'] = $row['Apellidos'];
                        $data['Calle']     = $row['Calle'];
                        $data['Portal']    = $row['Portal'];
                        $data['Piso']      = $row['Piso'];
                        $data['Letra']     = $row['Letra'];
                        $data['Ciudad']    = $row['Ciudad'];
                        $data['Provincia'] = $row['Provincia'];
                        $data['Pais']      = $row['País'];
                        $data['Foto']      = $row['Foto'];
                }

                return $data;
        }
        public function editarData($Nombre,$Apellidos,$Calle,$Portal,$Piso,$Letra,$Ciudad,$Provincia,$Url,$Usuario){
                $this->load->database();
                $data = array(
                        'Nombre' => $Nombre,
                        'Apellidos' => $Apellidos,
                        'Calle' => $Calle,
                        'Portal' => $Portal,
                        'Piso' => $Piso,
                        'Letra' => $Letra,
                        'Ciudad' => $Ciudad,
                        'Provincia' => $Provincia,
                        'Foto' => $Url,
                );
                $this->db->where('Mail', $Usuario);
                $this->db->update('Perfil', $data);
        }
        public function registrarDataUsuario($Email,$Password){
                $this->load->database();
                try{
                        if($this->getData($Email)==null){
                                /*SQL para tabla Usuario*/
                                $data = array(
                                        'Mail' => $Email,
                                        'Password' => MD5($Password)
                                );

                                $this->db->insert('Usuario', $data);
                                /*SQL para tabla Perfil*/
                                $data = array(
                                        'Mail' => $Email
                                );

                                $this->db->insert('Usuario', $data);
                        }
                        else{
                                $error='Este correo ya se está utilizando.';
                        }
                        
                }catch(Exception $e){
                        $error=$e->getMessage();
                }
                if(isset($error)){
                        return $error;
                }
                else{
                        return 'registrado';
                }

        }
}
?>
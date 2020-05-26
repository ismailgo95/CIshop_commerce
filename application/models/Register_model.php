<?php  

defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends MY_Model {

  protected $table = 'user';
  public function getDefaultValues()
  {
      return [
        'name'      => '',
        'email'     => '',
        'password'  => '',
        'role'      => '',
        'is_active' => '' 
      ];
  }
  public function getValidationRulese()
  {
      $validationRules =[
        [
          'field'   => 'name',
          'label'   => 'Nama',
          'rules'   => 'trim|required',
        ],
        [
          'field'   => 'email',
          'label'   => 'E-mail',
          'rules'   => 'trim|required|valid_email|is_unique[user.email]',
          'errors'  => [
            'is_unique' => 'This %s Already exists e'
          ]  
        ],
        [
          'field'   => 'password',
          'label'   => 'Password',
          'rules'   => 'required|min_length[8]',
        ],
        [
          'field'   => 'password_confirmation',
          'label'   => 'Konfirmasi Password',
          'rules'   => 'required|matches[password]',
        ],
      ];
      return $validationRules;
  }
  public function run($input)
  {
      $data = [
        'name'      => $input->name,
        'email'     => strtolower($input->email),
        'password'  => hashEncrypt($input->$password),
        'role'      => 'member' 
      ];
      // Simpan data ke Controller Core MY_Model Dengan function Create
      $user = $this->create($data);

      // Ketika Berhasi Register maka Status akan Berubah Login sesuai Usernya masing Masing
      $sess_data = [
        'id'        => $user,
        'name'      => $data['name'],
        'email'     => $data['email'],
        'role'      => $data['role'],
        'is_login'  => true
      ];
      $this->session->set_userdata($sess_data);
      return true;
  }

}

/* End of file Register_model.php */

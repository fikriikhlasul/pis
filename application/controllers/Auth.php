<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }


    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => '',
            'smtp_pass' => '.',
            'smtp_port' => 465,
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
            'newline'   => "\r\n"
        ];

        $fromemail= '';
        $toemail = $this->input->post('email');
        $emtitle = 'Predatech Data Center Information';
        $subject = 'Account Verification';
        //=== reset ===//
        $data['user_email'] = $this->input->post('email');
        $data['token'] = $token;
        $data['reset'] = 'auth/resetpassword?email=';
        $data['respas'] = 'Reset Password';
        //=== verify === //
        $datas['user_email'] = $this->input->post('email');
        $datas['token'] = $token;
        $datas['reset'] = 'auth/verify?email=';
        $datas['respas'] = 'Activate';
        $this->email->initialize($config);

        $this->email->from($fromemail,$emtitle );
        $this->email->to($toemail);

        if ($type == 'verify') {
            $this->email->subject($subject);
           // $this->email->message('Click this link to verify you account : <a href="' . base_url() .  $reset . $user_email . '&token=' . urlencode($token) . '">Activate</a>');
           $mesg = $this->load->view('auth/email-verify-account',$datas,true);
           $this->email->message($mesg);
        } else if ($type == 'forgot') {
            $this->email->subject('Reset Password');
           // $this->email->message('Click this link to reset your password : <a href="' . base_url() . $reset . $user_email . '&token=' . urlencode($token) . '">$respas</a>');
           $mesg = $this->load->view('auth/email-reset-password',$data,true);
           $this->email->message($mesg);
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }


    
    public function forgotPassword()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Forgot Password';
            $this->load->view('auth/forgot-password');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('user', ['email' => $email, 'is_active' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('user_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'success',
                        title: 'Selamat!',
                        text: 'Silahkan check email untuk reset password!'
                      })";
               redirect('forgot-password');
            } else {
                $_SESSION['message'] = "
                        Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Email belum terdaftar diakun manapun,silahkan cek kembali!'
                      })";
                redirect('forgot-password');
            }
        }
    }


    public function resetPassword()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('user', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('user_token', ['token' => $token])->row_array();

            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->changePassword();
            } else {
                $_SESSION['message'] = "
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Reset Password gagal, token salah!'
              })";
              redirect('login');
            }
        } else {
            $_SESSION['message'] = "
            Swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Reset Password gagal, email salah!'
          })";
          redirect('login');
        }
    }

    public function changePassword()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('login');
        }

        $this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]');
        $this->form_validation->set_rules('password2', 'Repeat Password', 'trim|required|min_length[3]|matches[password1]');

        if ($this->form_validation->run() == false) {
            $data['title'] = 'Change Password';
            $this->load->view('auth/change-password');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->unset_userdata('reset_email');

            $this->db->delete('user_token', ['email' => $email]);

            $_SESSION['message'] = "
            Swal.fire({
            icon: 'success',
            title: 'Selamat!',
            text: 'Password berhasil diubah!'
          })";
          redirect('login');
        }
    }
    
}

<?php
// Proses login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    // Periksa CAPTCHA
    $captcha_response = $_POST["g-recaptcha-response"];
    $secret_key = "6Ld_gDsoAAAAAK2yDq1nWYHq4nEA3purt1zdPnPx"; // Ganti dengan kunci rahasia reCAPTCHA Anda
    $url = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secret_key,
        'response' => $captcha_response,
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data),
        ],
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    $response = json_decode($result, true);

    if ($response["success"] == true) {
       

		$username = $this->input->post('username');
        $password = $this->input->post('password');

		if (empty($username) || empty($password) ) {
            $data['error'] = 'Isi semua field!';
            $this->load->view('login', $data);
            redirect('pasien');
        }
        
        $admin = $this->Admin_model->login($username, $password);
        
        if ($admin) {
            $this->session->set_userdata('admin_id', $admin->id_admin);
            if ($admin->role == 'admin') {
				redirect('admin');
			} elseif ($admin->role == 'dokter') {
				redirect('pasien');
			} elseif ($admin->role == 'resepsionis') {
				redirect('pasien');
			}else {
				$data['error'] = 'Peran pengguna tidak valid.';
				$this->load->view('login', $data);
			}
    	} else {
    	    $data['error'] = 'Cek kembaliUsername, password Anda.';
    	    $this->load->view('login', $data);
    	}


    } else {
        // CAPTCHA tidak benar, beri pesan kesalahan kepada pengguna
        $data['error'] = 'Captcha harus dicentang!!';
		$this->load->view('login', $data);
    }
}
?>

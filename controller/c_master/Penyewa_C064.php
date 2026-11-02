
<?php
class Penyewa_C064 extends Controller
{
    public function index()
    {
        $cekdata = $this->load->model('m_master/Penyewa_M064');
        $dt['datapenyewa'] = $cekdata->datapenyewa();
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('v_master/penyewaview064', $dt);
        $this->load->view('layout/footer');
    }

    public function create_penyewa()
    {
        $info['nm_user'] = explode('@', $this->session->userdata('emailuser'))[0];
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar', $info);
        $this->load->view('v_master/create_penyewaview064');
        $this->load->view('layout/footer');
    }

    public function simpan()
    {
        $penyewa = $this->load->model('m_master/Penyewa_M064');

        if ($penyewa->cekpenyewa($this->load->post('user_plg064'))) {
            echo "<script>
            alert('Username sudah terdaftar!');
            window.history.back();
            </script>";
            exit;
        }

        $ft_ktp = 'ktp' . $this->load->post('user_plg064');
        $ft_sim_a = 'sim_a' . $this->load->post('user_plg064');

        $folder = dirname(__DIR__, 2) . '/img/';

        if (!is_dir($folder)) {
            mkdir($folder, 0777, true);
        }

        if (isset($_FILES['ft_ktp']) && $_FILES['ft_ktp']['error'] == 0) {
            $file = $_FILES['ft_ktp'];
            $info = getimagesize($file['tmp_name']);
            $ext = ['image/jpeg' => 'jpg', 'image/png' => 'png'];

            if ($info && isset($ext[$info['mime']]) && $file['size'] <= 2 * 1024 * 1024) {
                $namaFilektp = $ft_ktp . '.' . $ext[$info['mime']];

                if (move_uploaded_file($file['tmp_name'], $folder . $namaFilektp)) {
                    $ft_ktp = $namaFilektp;
                } else {
                    die("Gagal upload foto KTP: " . $_FILES['ft_ktp']['error']);
                }
            } else {
                die("Format foto KTP harus JPG/PNG dan maksimal 2 MB.");
            }
        } else {
            die("Foto KTP wajib diupload.");
        }

        if (isset($_FILES['ft_sim_a']) && $_FILES['ft_sim_a']['error'] == 0) {
            $file = $_FILES['ft_sim_a'];
            $info = getimagesize($file['tmp_name']);
            $ext = ['image/jpeg' => 'jpg', 'image/png' => 'png'];

            if ($info && isset($ext[$info['mime']]) && $file['size'] <= 2 * 1024 * 1024) {
                $namaFilesim_a = $ft_sim_a . '.' . $ext[$info['mime']];

                if (move_uploaded_file($file['tmp_name'], $folder . $namaFilesim_a)) {
                    $ft_sim_a = $namaFilesim_a;
                } else {
                    die("Gagal upload foto SIM A: " . $_FILES['ft_sim_a']['error']);
                }
            } else {
                die("Format foto SIM A harus JPG/PNG dan maksimal 2 MB.");
            }
        } else {
            die("Foto SIM A wajib diupload.");
        }

        $data = [
            'user_plg064' => $this->load->post('user_plg064'),
            'Sandi064' => $this->load->post('Sandi064'),
            'Nik064' => $this->load->post('Nik064'),
            'nm_lngkp064' => $this->load->post('nm_lngkp064'),
            'no_hp064' => $this->load->post('no_hp064'),
            'almt_lngkp064' => $this->load->post('almt_lngkp064'),
            'ft_ktp' => $ft_ktp,
            'ft_sim_a' => $ft_sim_a
        ];

        $simpan = $penyewa->simpan($data);

        if ($simpan) {
            echo "<script>
            alert('Data penyewa berhasil disimpan!');
            window.location.href = '" . base_url('Penyewa_C064/index') . "';
            </script>";
        } else {
            echo "<script>
            alert('Data penyewa gagal disimpan!');
            window.history.back();
            </script>";
        }
    }

    public function edit($user_plg064)
    {
        $info['nm_user'] = explode('@', $this->session->userdata('emailuser'))[0];
        $penyewa = $this->load->model('m_master/Penyewa_M064');
        $dt['penyewa'] = $penyewa->detailpenyewa($user_plg064);
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar', $info);
        $this->load->view('v_master/update_penyewaview064', $dt);
        $this->load->view('layout/footer');
    }

    public function UpdatePenyewa()
    {
        $penyewa = $this->load->model('m_master/Penyewa_M064');

        $ft_ktp = 'KTP' . $this->load->post('user_plg064');
        $ft_ktp_asli = $this->load->post('ft_ktp_asli');

        $folder = dirname(__DIR__, 2) . '/img/';

        if (isset($_FILES['ft_ktp']) && $_FILES['ft_ktp']['error'] != 4) {
            $nmgambar = $_FILES['ft_ktp']['tmp_name'];
            $ekstensi = strtolower(pathinfo($_FILES['ft_ktp']['name'], PATHINFO_EXTENSION));

            $ft_ktp = $ft_ktp . '.' . $ekstensi;
            $target_dir = $folder . $ft_ktp;

            if ($ekstensi != "jpg" && $ekstensi != "png" && $ekstensi != "jpeg") {
                echo "<script>alert('Format gambar KTP harus jpg, png, atau jpeg!');window.history.back();</script>";
                exit;
            } else {
                if (move_uploaded_file($nmgambar, $target_dir)) {
                    $ft_ktp = $ft_ktp;
                } else {
                    echo "<script>alert('Gagal upload gambar KTP!');window.history.back();</script>";
                    exit;
                }
            }
        } else {
            $ft_ktp = $ft_ktp_asli;
        }

        $ft_sim_a = 'sim_a' . $this->load->post('user_plg064');
        $ft_sim_a_asli = $this->load->post('ft_sim_a_asli');

        if (isset($_FILES['ft_sim_a']) && $_FILES['ft_sim_a']['error'] != 4) {
            $nmgambar = $_FILES['ft_sim_a']['tmp_name'];
            $ekstensi = strtolower(pathinfo($_FILES['ft_sim_a']['name'], PATHINFO_EXTENSION));

            $ft_sim_a = $ft_sim_a . '.' . $ekstensi;
            $target_dir = $folder . $ft_sim_a;

            if ($ekstensi != "jpg" && $ekstensi != "png" && $ekstensi != "jpeg") {
                echo "<script>alert('Format gambar SIM A harus jpg, png, atau jpeg!');window.history.back();</script>";
                exit;
            } else {
                if (move_uploaded_file($nmgambar, $target_dir)) {
                    $ft_sim_a = $ft_sim_a;
                } else {
                    echo "<script>alert('Gagal upload gambar SIM A!');window.history.back();</script>";
                    exit;
                }
            }
        } else {
            $ft_sim_a = $ft_sim_a_asli;
        }

        $data = [
            'user_plg064' => $this->load->post('user_plg064'),
            'Sandi064' => $this->load->post('Sandi064'),
            'Nik064' => $this->load->post('Nik064'),
            'nm_lngkp064' => $this->load->post('nm_lngkp064'),
            'no_hp064' => $this->load->post('no_hp064'),
            'almt_lngkp064' => $this->load->post('almt_lngkp064'),
            'ft_ktp' => $ft_ktp,
            'ft_sim_a' => $ft_sim_a
        ];

        $simpan = $penyewa->UbahDtPenyewa($data);

        if ($simpan) {
            echo "<script>alert('Data penyewa berhasil diubah!');";
            echo "window.location.href = '" . base_url('Penyewa_C064/index') . "';";
            echo "</script>";
        } else {
            echo "<script>alert('Data penyewa gagal diubah!');";
            echo "window.history.back();";
            echo "</script>";
        }
    }

    public function hapus($user_plg064)
    {
        $penyewa = $this->load->model('m_master/Penyewa_M064');
        $dt['Gambar_Penyewa'] = $penyewa->detailpenyewa($user_plg064);
        $ft_ktp = $dt['Gambar_Penyewa']['ft_ktp'];
        $ft_sim_a = $dt['Gambar_Penyewa']['ft_sim_a'];

        $hapus = $penyewa->HapusDtpenyewa($user_plg064);

        if ($hapus) {
            $folder = dirname(__DIR__, 2) . '/img/';
            $gambar = [$ft_ktp, $ft_sim_a];

            foreach ($gambar as $file) {
                if (!empty($file) && file_exists($folder . $file)) {
                    unlink($folder . $file);
                }
            }

            echo "<script>alert('Data penyewa berhasil dihapus!');
            window.location.href = '" . base_url('Penyewa_C064/index') . "';
            </script>";
        } else {
            echo "<script>alert('Data penyewa gagal dihapus!');window.history.back();</script>";
        }
    }

    public function keluar()
    {
        $this->session->unset_userdata('emailuser');
        $this->session->set_flashdata('pesan', 'Berhasil Logout');
        redirect('login_C/index');
        exit;
    }
}

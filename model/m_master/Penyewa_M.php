
<?php
class Penyewa_M extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("SELECT user_plg, sandi, nik, nm_lngkp, no_hp, almt_lngkp,
        ft_ktp, ft_sim_a FROM penyewa");

        if (!$dtpenyewa) {
            die("Query gagal: " . $this->db->error);
        }

        $dtpenyewa->execute();
        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function cekpenyewa($user_plg)
    {
        $sql = $this->db->prepare("SELECT user_plg FROM penyewa WHERE user_plg = ?");

        if (!$sql) {
            die("Query cek gagal: " . $this->db->error);
        }

        $sql->bind_param("s", $user_plg);
        $sql->execute();
        $hasil = $sql->get_result();

        return $hasil->num_rows > 0;
    }

    public function simpan($data)
    {
        $sql = $this->db->prepare("INSERT INTO penyewa
        (user_plg, sandi, nik, nm_lngkp, no_hp, almt_lngkp, ft_ktp, ft_sim_a)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        if (!$sql) {
            die("Prepare gagal: " . $this->db->error);
        }

        $sql->bind_param(
            "ssssssss",
            $data['user_plg'],
            $data['sandi'],
            $data['nik'],
            $data['nm_lngkp'],
            $data['no_hp'],
            $data['almt_lngkp'],
            $data['ft_ktp'],
            $data['ft_sim_a']
        );

        if (!$sql->execute()) {
            die("Insert gagal: " . $sql->error);
        }

        return true;
    }

    public function detailpenyewa($user_plg)
    {
        $sql = $this->db->prepare(
            "SELECT user_plg, sandi, nik, nm_lngkp, no_hp,
            almt_lngkp, ft_ktp, ft_sim_a
            FROM penyewa
            WHERE user_plg = ?"
        );

        if (!$sql) {
            die("Prepare detail gagal: " . $this->db->error);
        }

        $sql->bind_param("s", $user_plg);
        $sql->execute();

        return $sql->get_result()->fetch_assoc();
    }

    public function UbahDtPenyewa($data)
    {
        $sql = $this->db->prepare(
            "UPDATE penyewa SET sandi = ?, nik = ?, nm_lngkp = ?,
            no_hp = ?, almt_lngkp = ?, ft_ktp = ?, ft_sim_a = ?
            WHERE user_plg = ?"
        );

        if (!$sql) {
            die("Prepare update gagal: " . $this->db->error);
        }

        $sql->bind_param(
            "ssssssss",
            $data['sandi'],
            $data['nik'],
            $data['nm_lngkp'],
            $data['no_hp'],
            $data['almt_lngkp'],
            $data['ft_ktp'],
            $data['ft_sim_a'],
            $data['user_plg']
        );

        return $sql->execute();
    }

    public function HapusDtpenyewa($user_plg)
    {
        $dtpenyewa = $this->db->prepare(
            "DELETE FROM penyewa WHERE user_plg = ?"
        );

        if (!$dtpenyewa) {
            die("Prepare hapus gagal: " . $this->db->error);
        }

        $dtpenyewa->bind_param("s", $user_plg);
        $hasil = $dtpenyewa->execute();
        $dtpenyewa->close();

        return $hasil;
    }
}

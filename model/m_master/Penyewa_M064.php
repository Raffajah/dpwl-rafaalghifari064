<?php
class Penyewa_M064 extends Model
{
    function datapenyewa()
    {
        $dtpenyewa = $this->db->prepare("SELECT user_plg064064, Sandi064, Nik064, nm_lngkp064, no_hp064, almt_lngkp064,  
        ft_ktp, ft_sim_a FROM penyewa");
        $dtpenyewa->execute();
        return $dtpenyewa->get_result()->fetch_all(MYSQLI_ASSOC);
    }

    public function cekpenyewa($user_plg064)
{
    $sql = $this->db->prepare("SELECT user_plg064064 FROM penyewa WHERE user_plg064064 = ? ");
    $sql->bind_param("s", $user_plg064);
    $sql->execute();
    $hasil = $sql->get_result();
    return $hasil->num_rows > 0;
}

public function simpan($data)
{
    $sql = $this->db->prepare("INSERT INTO penyewa (user_plg064064,Sandi064,Nik064,nm_lngkp064,
    no_hp064,almt_lngkp064,ft_ktp,ft_sim_a) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

    $sql->bind_param("ssssssss", $data['user_plg064064'], $data['Sandi064'], $data['Nik064'], 
    $data['nm_lngkp064'], $data['no_hp064'], $data['almt_lngkp064'], $data['ft_ktp'], 
    $data['ft_sim_a']);
    return $sql->execute();
}

public function detailpenyewa($user_plg064)
{
    $sql = $this->db->prepare(
        "SELECT user_plg064064, Sandi064, Nik064, nm_lngkp064, no_hp064,
            almt_lngkp064, ft_ktp, ft_sim_a
        FROM penyewa
        WHERE user_plg064064 = ?"
    );

    $sql->bind_param("s", $user_plg064);
    $sql->execute();

    return $sql->get_result()->fetch_assoc();
}
public function UbahDtPenyewa($data)
{
    $sql = $this->db->prepare(
        "UPDATE penyewa SET Sandi064 = ?, Nik064 = ?, nm_lngkp064 = ?, no_hp064 = ?, 
        almt_lngkp064 = ?, ft_ktp = ?, ft_sim_a = ? WHERE user_plg064064 = ?"
    );

    $sql->bind_param(
        "sssssssss",
        $data['Sandi064'],
        $data['Nik064'],
        $data['nm_lngkp064'],
        $data['no_hp064'],
        $data['almt_lngkp064'],
        $data['ft_ktp'],
        $data['ft_sim_a'],
        $data['user_plg064064']
    );

    return $sql->execute();
}
public function HapusDtpenyewa($user_plg064064)
{
    $dtpenyewa = $this->db->prepare("DELETE FROM penyewa WHERE user_plg064064 = ?");
    $dtpenyewa->bind_param("s", $user_plg064064);
    $hasil = $dtpenyewa->execute();
    $dtpenyewa->close();
    return $hasil;
}
}
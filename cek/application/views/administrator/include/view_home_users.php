<?php

    echo "<div class='row'>
        <div class='col-md-12'>
          <div class='card'>
            <div class='card-header'>
              <h3 class='card-title'>Selamat Datang di Halaman $users[nama_lengkap]</h3>
            </div>
            <div class='card-body'>
              <p>Silahkan klik menu pilihan yang berada di sebelah kiri , berikut informasi akun anda saat ini : </p>
              <table class='table table-sm table-borderless'>
                <tr><th width='120px'>Username</th> <td>$users[username]</td></tr>
                <tr><th>Password</th> <td>***********</td></tr>
                <tr><th>Nama Lengkap</th> <td>$users[nama_lengkap]</td></tr>
                <tr><th>Alamat Email</th> <td>$users[email]</td></tr>
                <tr><th>No. Telpon</th> <td>$users[no_telp]</td></tr>
                <tr><th>Level</th> <td>$users[level]</td></tr>
                "; 
                echo "
              </table>
              <div class='alert alert-success alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                <h4><i class='icon fa fa-info'></i> Info Penting!</h4>
                Diharapkan informasi akun sesuai dengan identitas pada Kartu Pengenal anda, Edit Profile klik <a href='".base_url().$this->uri->segment(1)."/edit_manajemenuser/".$this->session->username."'>disini</a>.
              </div>
            </div>
          </div>
        </div>

       
    </div>";
<?php
  include('koneksi.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Tambah Data</title>
    <style type="text/css">
      * {
        font-family: "Courier New";
      }
      h1 {
        text-transform: uppercase;
        color: #3CB371;
      }
    button {
          background-color: #3CB371;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
          border: 0px;
          margin-top: 20px;
    }
    label {
      margin-top: 10px;
      float: left;
      text-align: left;
      width: 100%;
    }
    input {
      padding: 6px;
      width: 100%;
      box-sizing: border-box;
      background: #f8f8f8;
      border: 2px solid #3CB371;
      outline-color: #3CB371;
    }
    div {
      width: 100%;
      height: auto;
    }
    .base {
      width: 400px;
      height: auto;
      padding: 20px;
      margin-left: auto;
      margin-right: auto;
      background: #ededed;
    }
    </style>
  </head>
  <body>
      <center>
        <h1>Tambah Data Mahasiswa</h1>
      <center>
      <form method="POST" action="proses_tambah.php" enctype="multipart/form-data" >
      <section class="base">
        <div>
          <label>Nama Mahasiswa</label>
          <input type="text" name="nama" autofocus="" required="" />
        </div>
        <div>
          <label>NIM</label>
         <input type="number" name="nim" />
        </div>
        <div>
          <label>E-Mail</label>
         <input type="text" name="email" required="" />
        </div>
        <div>
          <label>Jurusan</label>
         <input type="text" name="jurusan" required="" />
        </div>
        <div>
          <label>Gambar</label>
         <input type="file" name="gambar" required="" />
        </div>
        <div>
         <button type="submit">Simpan Data</button>
        </div>
        </section>
      </form>
  </body>
</html>
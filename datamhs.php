<?php
  include('koneksi.php');
  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Data Mahasiswa</title>
    <style type="text/css">
      * {
        font-family: "Courier New";
      }
      h1 {
        text-transform: uppercase;
        color: #3CB371;
      }
    table {
      border: solid 2px #66CDAA;
      border-collapse: collapse;
      border-spacing: 0;
      width: 70%;
      margin: 10px auto 10px auto;
    }
    table thead th {
        background-color: #3CB371;
        border: solid 1px #66CDAA;
        color: #F5FFFA;
        padding: 10px;
        text-align: left;
        text-decoration: none;
        text-align: center;
    }
    table tbody td {
        border: solid 1px #66CDAA;
        color: #333;
        padding: 10px;
    }
    a {
          background-color: #3CB371;
          color: #fff;
          padding: 10px;
          text-decoration: none;
          font-size: 12px;
    }
    </style>
  </head>
  <body>
    <center><h1>Data Mahasiswa</h1><center>
    
    <br/>
    <table>
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIM</th>
          <th>E-Mail</th>
          <th>Jurusan</th>
          <th>Gambar</th>
          <th colspan="2">Pengaturan</th>
        </tr>
    </thead>
    <tbody>
      <?php
      $query = "SELECT * FROM tb_mahasiswa ORDER BY NIM ASC";
      $result = mysqli_query($koneksi, $query);
      if(!$result){
        die ("Query Error: ".mysqli_errno($koneksi).
           " - ".mysqli_error($koneksi));
      }

      $no = 1;
      while($row = mysqli_fetch_assoc($result))
      {
      ?>
       <tr>
          <td><?php echo $no; ?></td>
          <td><?php echo $row['nama']; ?></td>
          <td><?php echo $row['nim']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['jurusan']; ?></td>
          <td style="text-align: center;"><img src="gambar/<?php echo $row['gambar']; ?>" style="width: 200px;" ></td>
          <td><a href="edit_data.php?nim=<?php echo $row['nim']; ?>">Edit</a> </td> 
          <td><a href="proses_hapus.php?nim=<?php echo $row['nim']; ?>" onclick="return confirm('Anda yakin akan menghapus data ini?')">Hapus</a></td>
      </tr> 
      <?php
        $no++;
      }
      ?>
      </table>
      <center><a href="tambah_data.php">+ &nbsp; Tambah Data</a><center>
    </tbody>
  </body>
</html>
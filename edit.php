<?php
3. $nim=$_GET['nim'];
4. //membuat sql tampil data
5. $sqldata="SELECT * FROM mahasiswa WHERE nim='$nim'";
6. //ambil koneksi data
7. require_once "KoneksiDB.php";
8. //proses sql
9. $query=mysqli_query($koneksi,$sqlupdate);
10. //mengubah data ke array asosiatif, tidak menggunakan perulangan karena
datanya hanya 1.
11. $data=mysqli_fetch_assoc($query);
12. //selanjutnya tampilkan pada field dibawah.
13. ?>
14. <h2>Update Data Mahasiswa</h2>
15. <!-- tag form -->
16. <form action="Update.php" method="POST">
17. <label>Nomor Induk Mahasiswa :</label>
18. <input type="text" name="nim" value="<?=$data['nim']?>"
placeholder="Nomor Induk Mahasiswa" required>
19. <br>
20. <label>Nama Mahasiswa :</label>
21. <input type="text" name="nama" id="nama" value="<?=$data['name']?>"
placeholder="Nama Lengkap" required>
22. <br>
23. <label for="">Alamat :</label>
24. <input type="text" name="alamat" id="alamat"
value="<?=$data['address']?>" placeholder="Alamat Lengkap" required>
25. <br>
26. <label for="">Program Studi :</label>
27. <select name="prodi" id="prodi">
28. <option value="<?=$data['prodi']?>"
selected><?=$data['prodi']?></option>
29. <option value="Sistem Informasi">Sistem Informasi</option>
30. <option value="Sistem Komputer">Sistem Komputer</option>
31. <option value="Teknik Informatika">Teknik Infomatika</option>
32. </select>
33. <br>
34. <label for="">Umur :</label>
35. <input type="number" name="umur" id="umur" value="<?=$data['age']?>"
required>
36. <br>
37. <button type="submit" name="kir
<h2>Sistem Informasi Pengajuan Skripsi dengan Codeigniter</h2>

<p align= "justify">Pengajuan judul skripsi merupakan tahap awal dalam proses pembuatan skripsi, di Perguruan Tinggi ini proses pengajuan judul skripsi masih dilakukan secara manual. Pengajuan judul skripsi masih menggunakan form kertas dan antara satu pihak dengan pihak lain yang terlibat dalam proses ini harus bertatap muka secara langsung, sehingga membutuhkan waktu untuk bisa menyelesaikan tahap pertama ini. Diharapkan dengan dibuatnya Aplikasi Pengajuan Skripsi ini, dapat mempercepat proses tersebut.

Secara keseluruhan Aplikasi Pengajuan Skripsi ini memiliki 4 aktor, yaitu mahasiswa, dosen, tim Rumpun Mata Kuliah (RMK), dan kaprodi. Berikut adalah fitur-fitur yang tersedia pada ke empat aktor tersebut:

<h3>Mahasiswa</h3>
1. Mengajukan Proposal Tugas Akhir
  
![image](https://user-images.githubusercontent.com/32997439/196482258-d97f6568-4263-4073-8194-c4aae8416add.png)<p align="center"><sup>Mahasiswa melakukan pengajuan proposal Tugas Akhir</sup></p>

2. Melihat Status Pengajuan Proposal

![image](https://user-images.githubusercontent.com/32997439/196483707-f1bbacc2-9c0b-4292-850d-1049ec6a7bbd.png)
<p align="center"><sup>Status proposal masih ditinjau oleh TIM RMK</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196483930-1679de69-fe1d-4175-a017-c1d1a0fec4cb.png)
<p align="center"><sup>Status proposal ditolak oleh Tim RMK, sehingga mahasiswa harus melakukan upload ulang proposal</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196484135-e8a38428-9ce2-425c-bf9a-76579ed6e29b.png)
<p align="center"><sup>Status proposal di perlukan Revisi, dan mahasiswa dapat melakukan perbaikan proposal</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196484230-5669fd15-986f-42c1-8aa1-42d87ca5d1b0.png)
<p align="center"><sup>Status proposal sudah disetujui oleh Tim RMK dan sedang menunggu keputusan Kaprodi untuk menentukan dosen pembimbing 2</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196484307-d7cc45d8-858b-4894-a44d-342731a310af.png)
<p align="center"><sup>Kaprodi sudah menetukan dosen pembimbing 2, sehingga mahasiswa sudah bisa melakukan pengajuan Sidang Tugas Akhir.</sup></p>

3. Melakukan Pengajuan Sidang Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196487258-a64671df-0009-45c9-86fa-15ee03044c2c.png)
<p align="center"><sup>Mahasiswa dapat melakukan pengajuan sidang Tugas Akhir ketika proposal sudah disetujui. Untuk mengajukan sidang Tugas Akhir diperlukan bukti bimbingan berupa foto dan buku Tugas Akhir dalam bentuk pdf</sup></p>

4. Melihat Status Pengajuan Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196487387-23a37038-0bb8-449c-8438-b7020c077316.png)
<p align="center"><sup>Ketika sudah melakukan pengajuan, mahasiswa harus menunggu peninjauan dari kaprodi untuk penentuan dosen penguji dan tanggal sidang</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196487499-446ab3e4-bd00-4217-9c61-c066e633afee.png)
<p align="center"><sup>Status pengajuan sidang akan berubah seperti gambar diatas ketika kaprodi sudah menentukan tanggal sidang dan dosen pembimbing</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196487595-342243e1-d87b-4d69-8143-962a13e6f266.png)
<p align="center"><sup>Setelah proses sidang selesai, kaprodi dapat memasukkan nilai akhir mahasiswa tersebut. Dan status pengajuan sidang akan berubah seperti gambar diatas.</sup></p>

5. Fitur Lain

![image](https://user-images.githubusercontent.com/32997439/196487914-24b16770-5a96-4f0d-bbdb-deefcf4049a6.png)
<p align="center"><sup>Dashboard Mahasiswa</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196488036-079ec161-8100-4024-bad8-5132758fcf86.png)
<p align="center"><sup> Edit Profil Mahasiswa</sup></p>

<h3>Tim Rumpun Mata Kuliah (RMK)</h3>
1. Melihat Daftar Pengajuan Proposal

![image](https://user-images.githubusercontent.com/32997439/196488541-5d863412-344d-457a-87b8-74c4f7f65ea5.png)
<p align="center"><sup>Tim RMK dapat melihat semua list proposal yang sudah diajukan</sup></p>

2. Melihat Detil dan Melakukan Persetujuan Proposal

![image](https://user-images.githubusercontent.com/32997439/196488855-b75b25de-73f9-4a4e-ac55-33df1a476839.png)
<p align="center"><sup>Tim RMK dapat melihat detil dari pengajuan proposal Tugas Akhir mahasiswa dan dapat mengunduh file proposal tersebut. Tim RMK dapat melakukan persetujuan, revisi, maupun menolak proposal tugas akhir yang sudah diajukan mahasiswa.</sup></p>

3. Fitur Lainnya

![image](https://user-images.githubusercontent.com/32997439/196488991-3781275e-5d55-492a-bc3f-66f690596ec5.png)
<p align="center"><sup>Dashboard Tim RMK</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196489092-79e67998-4d11-4bff-8169-8e144a39cb10.png)
<p align="center"><sup>Edit Profil Tim RMK</sup></p>

<h3>Kaprodi</h3>
1. Melihat Daftar Pengajuan Proposal Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196490455-cbea9341-4c58-4513-a0f4-e4d2753fde29.png)
<p align="center"><sup>Kaprodi dapat melihat semua daftar proposal tugas akhir yang sudah diajukan</sup></p>

2. Melihat Detil Proposal Tugas Akhir & Menentukan Dosen Pembimbing 2

![image](https://user-images.githubusercontent.com/32997439/196490598-ced39823-ee87-4b75-bf02-1d9047281bbf.png)
<p align="center"><sup>Ketika melihat detil proposal tugas akhir mahasiswa, kaprodi dapat menentukan dosen pembimbing 2 untuk mahasiswa tersebut.</sup></p>

3. Melihat Daftar Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196490695-4a5a4ff6-1765-492f-8d81-46d1fe17c3a7.png)
<p align="center"><sup>Kaprodi dapat melihat daftar semua Tugas Akhir yang sudah diajukan mahasiswa.</sup></p>

4. Melihat Detil Tugas Akhir & Menentukan Jadwal dan Dosen Penguji Sidang Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196490765-3e5ea44d-148f-4b83-aed6-563532cf5adc.png)
<p align="center"><sup>Ketika melihat detil pengajuan sidang Tugas Akhir, kaprodi dapat menentukan tanggal dan dosen penguji untuk mahasiswa tersebut.</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196490865-0157a701-917e-43b7-96a1-14e37467cbcb.png)
<p align="center"><sup>Kaprodi juga dapat mengunduh file bukti bimbingan beserta soft file buku Tugas Akhir mahasiswa tersebut</sup></p>

5. Melakukan Input Nilai 

![image](https://user-images.githubusercontent.com/32997439/196491050-394a550d-08c9-43be-856b-193b4695726f.png)
<p align="center"><sup>Ketika pengajuan sidang Tugas Akhir sudah disetujui, maka akan muncul daftar pengajuan yang harus dilakukan input nilai</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196491109-2600b956-46b2-46fa-9516-0bb71d069ec4.png)

6. Fitur Lainnya

![image](https://user-images.githubusercontent.com/32997439/196491139-50a493c1-f1d1-4a35-bce2-1df24c5bbd31.png)
<p align="center"><sup>Dashboard Kaprodi</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196491198-5fefa2ec-3e2f-4b39-aef5-4ecb1558e8ec.png)
<p align="center"><sup>Edit Profil Kaprodi</sup></p>


<h3>Dosen</h3>
1. Melihat Daftar Mahasiswa Bimbingan

![image](https://user-images.githubusercontent.com/32997439/196491262-cf9506c9-ff52-469c-b015-908bb1b14ea0.png)
<p align="center"><sup>Dosen dapat melihat semua daftar mahasiswa bimbingan Tugas Akhirnya</sup></p>

2. Melihat Detil Proposal Tugas Akhir

![image](https://user-images.githubusercontent.com/32997439/196491345-a41cedbe-034f-476f-abb3-647bdc56f010.png)
<p align="center"><sup>Dosen dapat melihat detil proposal dari mahasiswa bimbingannya dan dapat mengunduh file tersebut.</sup></p>

3. Fitur Lainnya
  
![image](https://user-images.githubusercontent.com/32997439/196491415-d0962084-daf5-4a55-876e-68ac0098b28a.png)
<p align="center"><sup>Dashboard Dosen</sup></p>

![image](https://user-images.githubusercontent.com/32997439/196491553-c6efa14c-4732-40be-adef-4239f21ce694.png)
<p align="center"><sup>Edit Profil Dosen</sup></p>
</p>

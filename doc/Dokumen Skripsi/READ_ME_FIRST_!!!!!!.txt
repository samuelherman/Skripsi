
Template Tugas Akhir/Skripsi FTIS 

versi terbaru : v1.1.1 (25-02-2013)
terdiri dari : main.tex versi 1.1, data.tex versi 1.1 dan dosen.tex versi 1.1

Silahkan (berjuang untuk) menggunakan template skripsi/tugas akhir FTIS yang dibuat oleh lionov.
Pertanyaan terkait template dapat diajukan melalui email ke lionov@unpar.ac.id/lionov@gmail.com atau datang langsung ke ruang 9110.
PERTANYAAN TERKAIT LATEX DAPAT DIAJUKAN KEPADA PEMBIMBING MASING-MASING ATAU MENCARI TAHU SENDIRI JAWABANNYA MELALUI INTERNET.

Perhatian !! :
- Skripsi yang tertulis di tempalte ini adalah CONTOH, sekali lagi : HANYA CONTOH !!!!!, jadi jangan mengikuti cara penulisan atau
  cara penempatan lampiran (mis: B untuk source code program). Tanyakan kepada pembimbing masing-masing
- File main.tex SANGAT dianjurkan untuk TIDAK DIUBAH, kecuali anda tahu persis apa yang anda lakukan.
  File tersebut adalah file tex utama yang harus anda compile menggunakan pdflatex, agar menghasilkan dokumen pdf yang sesuai.
  Isi dari file main.tex adalah : 
  - perintah-perintah khusus yg digunakan di template ini
  - berisi seluruh halaman depan dari dokumen skripsi: sampul, lembar pengesahan, lembar pernyataan, abstrak, abstract, 
  lembar persembahan, kata pengantar, daftar isi, daftar gambar dan daftar tabel. 
   
Cara menggunakan :
0. Perhatikan instruksi yang ada di file main.tex, data.tex dan dosen.tex. Instruksi2 tersebut ada di awal file
1. Masukkan data-data yang dibutuhkan ke dalam file data.tex. Keterangan untuk setiap data ada di dalam file tersebut.
2. Tuliskan isi dari setiap bab di dalam file bab (bab1.tex, bab2.tex, dst) yang telah disediakan di dalam direktori "Bab".
   Jangan melakukan perubahan pada nama file tersebut dan biarkan bab yang tidak dipakai.
3. Jika ada file gambar (jpg, bmp, pdf, dll) dapat disimpan di direktori "Gambar"
4. Tuliskan isi dari lampiran di dalam file lampiran (lampA.tex, lampB.tex, dst) yang telah disediakan di dalam direktori "Lampiran"
5. File pdf dapat dihasilkan dengan melakukan kompilasi (menggunakan pdflatex) pada FILE UTAMA: main.tex

CATATAN versi 1.1.1:
Perbaikan data dosen dan keterangan dosen di dosen.tex

CATATAN versi 1.1:
Halaman terakhir pada bab jika tidak ada isinya dan terletak di sebelah kiri, dikosongkan header-nya (usul dari Ibu Erwinna dan Ibu Ivonne)
Data dosen dipisahkan ke file dosen.tex sehingga jika dilakukan perubahan pada data dosen, mahasiswa tidak perlu mengganti file data.tex

CATATAN versi 1.0:
Perubahan yang cukup signifikan adalah ditambahkannya halaman dengan judul bahasa inggris, 
jadi di dokumen final, di halaman bagian dalam terdapat 2 buah halaman judul, dalam bahasa indonesia dan dalam bahasa inggris.
Untuk menggunakan versi 1.0, yang harus anda lakukan adalah mengubah isi direktori Bab, Gambar dan Lampiran dengan yang sudah anda buat
dan mengisikan kembali data-data di file data.tex dengan data yang sudah anda isikan sebelumnya di file data.tex yang lama
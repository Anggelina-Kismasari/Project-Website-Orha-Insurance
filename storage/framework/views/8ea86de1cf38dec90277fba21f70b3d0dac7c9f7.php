<!DOCTYPE html>
<html>
   <head>
      <title></title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet"> 
      <style>
         /* Tab content - closed */
         .tab-content {
         max-height: 0;
         -webkit-transition: max-height .50s;
         -o-transition: max-height .50s;
         transition: max-height .50s;
         }
         /* :checked - resize to full height */
         .tab input:checked ~ .tab-content {
         max-height: 100vh;
         }
         /* Label formatting when open */
         .tab input:checked + label{
         /*@apply  text-xl p-5 border-l-2 border-indigo-500 bg-gray-100 text-indigo*/
         font-size: 1.25rem; /*.text-xl*/
         padding: 1.25rem; /*.p-5*/
         border-left-width: 2px; /*.border-l-2*/
         border-color: #6574cd; /*.border-indigo*/
         background-color: #f8fafc; /*.bg-gray-100 */
         color: #6574cd; /*.text-indigo*/
         }
         /* Icon */
         .tab label::after {
         float:right;
         right: 0;
         top: 0;
         display: block;
         width: 1.5em;
         height: 1.5em;
         line-height: 1.5;
         font-size: 1.25rem;
         text-align: center;
         -webkit-transition: all .50s;
         -o-transition: all .50s;
         transition: all .50s;
         }
         /* Icon formatting - closed */
         .tab input[type=checkbox] + label::after {
         content: "+";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         .tab input[type=radio] + label::after {
         content: "\25BE";
         font-weight:bold; /*.font-bold*/
         border-width: 1px; /*.border*/
         border-radius: 9999px; /*.rounded-full */
         border-color: #b8c2cc; /*.border-grey*/
         }
         /* Icon formatting - open */
         .tab input[type=checkbox]:checked + label::after {
         transform: rotate(315deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
         .tab input[type=radio]:checked + label::after {
         transform: rotateX(180deg);
         background-color: #6574cd; /*.bg-indigo*/
         color: #f8fafc; /*.text-grey-lightest*/
         }
      </style>
   </head>
   <body class="font-sans container">
      <div class="w-full md:w-3/5 mx-auto p-8">
         <p>Seputar <strong>BPJS Kesehatan</strong></p>
         <div class="shadow-md">
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-one" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-one">Apakah yang dimaksud dengan BPJS Kesehatan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">BPJS Kesehatan adalah badan hukum yang dibentuk untuk menyelenggarakan program Jaminan Kesehatan Nasional-Kartu Indonesia Sehat (JKN-KIS) yang merupakan jaminan berupa perlindungan kesehatan agar peserta memperoleh manfaat pemeliharaan kesehatan dan perlindungan dalam memenuhi kebutuhan dasar kesehatan yang diberikan kepada setiap orang yang telah membayar iuran atau iurannya dibayarkan oleh Pemerintah.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-two" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-two">Apakah yang dimaksud dengan Iuran Jaminan Kesehatan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Iuran Jaminan Kesehatan adalah sejumlah uang yang dibayarkan secara teratur oleh Peserta, Pemberi Kerja dan/atau Pemerintah untuk program Jaminan Kesehatan.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-three" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-three">Apa yang dimaksud dengan Pelayanan Kesehatan Tingkat Pertama?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Yaitu pelayanan kesehatan perorangan yang bersifat non spesialistik (primer) meliputi pelayanan rawat jalan dan rawat inap.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-four" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-four">Apa yang dimaksud dengan Rawat Jalan Tingkat Pertama?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Yaitu pelayanan kesehatan perorangan yang bersifat non spesialistik yang dilaksanakan pada fasilitas kesehatan tingkat pertama untuk keperluan observasi, diagnosis, pengobatan, dan/atau pelayanan kesehatan lainnya.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-five" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-five">Apa yang dimaksud dengan Rawat Inap Tingkat Pertama?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Yaitu pelayanan kesehatan perorangan yang bersifat non spesialistik dan dilaksanakan pada fasilitas kesehatan tingkat pertama untuk keperluan observasi, perawatan, diagnosis, pengobatan, dan/atau pelayanan medis lainnya, dimana peserta dan/atau anggota keluarganya dirawat inap paling singkat 1 (satu) hari.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-eight" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-eight">Apa yang dimaksud fasilitas kesehatan rujukan tingkat lanjutan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Fasilitas Kesehatan Rujukan Tingkat Lanjutan yang selanjutnya disingkat FKRTL adalah fasilitas kesehatan yang melakukan pelayanan kesehatan perorangan yang bersifat spesialistik atau sub spesialistik yang meliputi rawat jalan tingkat lanjutan, rawat inap tingkat lanjutan dan rawat inap di ruang perawatan khusus.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-nine" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-nine">Apa yang dimaksud dengan Close Payment System?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Close Payment System atau sistem pembayaran tertutup adalah mekanisme pembayaran iuran Peserta Pekerja Penerima Upah Badan Usaha (PPU BU) BPJS Kesehatan, yang memastikan transaksi pembayaran iuran hanya dapat dilakukan jika besaran iuran yang dibayarkan sama dengan tagihan atau kelipatannya.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-twelve" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-twelve">Apa Kewajiban Pemberi Kerja?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">1.	Mendaftarkan diri dan pekerjanya sebagai peserta JKN-KIS kepada BPJS Kesehatan.
                                <br>2.	Menghitung dan memungut iuran yang menjadi kewajiban pekerjanya melalui pemotongan gaji/upah pekerja.
                                <br>3.	Membayar dan menyetorkan iuran yang menjadi tanggung jawabnya kepada BPJS Kesehatan secara rutin setiap bulan sebelum tanggal 10 (sepuluh).
                                <br>4.	Memberikan data mengenai diri, pekerja dan anggota keluarganya secara lengkap dan benar meliputi:
                                <br>a.	data pekerja berikut anggota keluarganya yang didaftarkan sesuai </p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-thirteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-thirteen">Bagaimana cara pendaftaran Peserta Pekerja Penerima Upah?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Pekerja Penerima Upah di daftarkan oleh perusahaan atau badan atau instansi tempat dia bekerja..</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-fourteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-fourteen">Bagaimana Jika Kartu Peserta Hilang?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Peserta mengunjungi kantor BPJS Kesehatan/Mobile Customer Service (MCS)/Mall pelayanan publik dengan ketentuan:
                                <br>1.	Menunjukkan KTP atau Kartu Keluarga yang berlaku. 
                                <br>2.	Surat pernyataan kehilangan yang ditanda tangani oleh peserta ber materai Rp6.000,00 (enam ribu rupiah) atau surat keterangan kehilangan dari Kepolisian. 
                                <br>3.	Pengurusan kartu peserta hilang dapat dilakukan oleh keluarga yang namanya tercantum dalam Kartu Keluarga.
                                <br>4.	Jika dalam satu Kartu Keluarga peserta memiliki keterbatasan fi.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-fifteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-fifteen">Berapa Besaran Denda Layanan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Besaran Pengenaan Denda Layanan yaitu:
                                <br>-5% (lima persen) dari perkiraan biaya paket Indonesian Case Based Groups berdasarkan diagnosa dan prosedur awal untuk setiap bulan tertunggak dengan ketentuan:
                                <br>- Jumlah bulan menunggak paling banyak 12 (dua belas) bulan; dan
                                <br>-Besar denda paling tinggi Rp30.000.000,00 (tiga puluh juta rupiah).</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-sixteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-sixteen">Bagaimana Pelayanan di luar wilayah domisili?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Sesuai Pepres 82 Tahun 2018 untuk Pelayanan di luar wilayah domisili Peserta datang ke FKTP tempat Peserta terdaftar maupun FKTP lain diluar tempat peserta terdaftar serta menunjukkan kartu identitas peserta JKN-KIS/KIS Digital dengan status aktif dan/atau identitas lain yang diperlukan (KTP, SIM, KK).  Saat Bapak/Ibu sedang berada diluar daerah (dengan jarak tempuh yang tidak memungkinkan untuk menuju ke Faskes tingkat 1 terdaftar, maka dapat mengakses pelayanan kesehatan pada faskes tingkat 1 bekerjasama dengan BPJS Kesehatan terdekat maksimal untuk 3x kunjungan dalam waktu paling lama 1 bulan di FKTP yang sama.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-seventeen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-seventeen">Bagaimana Jika Peserta Menginginkan Kenaikan Kelas Perawatan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">I.	Peserta PBI dan Peserta yang didaftarkan oleh Pemerintah Daerah gugur haknya apabila memilih kelas yang lebih tinggi dari haknya.
                           <br>II.	Peserta Bukan PBI, dapat meningkatkan haknya maksimal 1 tingkat lebih tinggi dengan membayar sendiri seluruh selisih antara biaya yang dijamin oleh BPJS Kesehatan dengan biaya yang harus dibayar akibat peningkatan kelas perawatan, dengan ketentuan sebagai berikut:
                           <br>a.	Peserta mengikuti prosedur sesuai ketentuan yang berlaku.
                           <br>b.	Peserta membayar tambahan biaya, dengan perhitungan sebagai berikut:
                           <br>1)	Untuk peningkatan kelas pelayanan rawat inap dari kelas perawatan III ke kelas II, dan dari kelas perawatan II ke kelas I, membayar selisih biaya antara Tarif INA-CBG pada kelas rawat inap lebih tinggi yang dipilih dengan Tarif INA-CBG pada kelas rawat inap yang sesuai dengan hak Peserta.
                           <br>2)	Untuk peningkatan kelas pelayanan rawat inap di atas kelas perawatan I, membayar selisih biaya paling banyak sebesar 75% (tujuh puluh lima perseratus) dari Tarif INA-CBG kelas perawatan I Jika hak kelas rawat peserta kelas I, perhitungan tambahan biaya maksimal : 75% x Tarif INA-CBG kelas I.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-eighteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-eighteen">Bagaimana tata cara pendaftaran Pekerja Penerima Upah, khususnya non Penyelenggara Negara seperti?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Tahapan pendaftaran Badan Usaha melalui website BPJS Kesehatan / Portal Bersama BPJS / Aplikasi Edabu Mobile : 
                  <br>•	Badan Usaha mengakses www.bpjs-kesehatan.go.id, www.bpjs.go.id  atau Aplikasi Edabu Mobile yan bisa diunduh melalui Google Playstore / Apps Store 
                  <br>•	BPJS Kesehatan mengirim link aktivasi ke email Badan Usaha 
                  <br>•	Setelah Badan Usaha aktivasi kepesertaan, BPJS Kesehatan mengirim nomor Virtual Account, Username, dan Password aplikasi Edabu ke email Badan Usaha 
                  <br>•	Badan Usaha mendaftarkan Pekerja dan anggota keluarga di Aplikasi Edabu 
                  <br>•	Badan Usaha mendapat tagihan iuran setelah melakukan approval pendaftaran di Edabu 
                  <br>•	Status kepesertaan Aktif setelah BU membayar iuran 
                  <br>•	Identitas Peserta berupa KIS Digital bisa diunduh di Aplikasi Mobile Jkn
                  <br>Tahapan pendaftaran Badan Usaha melalui Online Single Submission: 
                  <br>•	Badan Usaha mengakses www.oss.go.id lalu klik link aktivasi yang dikirim oleh BPJS Kesehatan ke email Badan Usaha 
                  <br>•	BPJS Kesehatan mengirimkan Virtual Account, User, dan Password Aplikasi Edabu  
                  <br>•	BPJS Kesehata mengirim bukti kepesertaan Badan Usaha ke OSS dan Badan Usaha 
                  <br>•	Badan Usaha mendaftarkan Pekerja dan anggota keluarga di Aplikasi Edabu 
                  <br>•	Tagihan iuran pertama terbit sejak Badan Usaa approval pendaftaran di Aplikasi Edabu 
                  <br>•	Badan Usaha membayar iuran JKN
                  <br>•	Apabila iuran sudah diterima BPJS Kesehatan, maka Badan Usaa diberikan email informasi kepesertaan 
                  <br>•	Kepesertaan JKN Pekerja dan Anggota keluarga aktif. BPJS Kesehatan mengirimkan status status Badan Usaha ke OSS dan Badan Usaha 
                  <br>•	Identitas Peserta berupa KIS Digital bisa diunduh di Aplikasi Mobile JKN.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-nineteen" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-nineteen">Bagaimana Cara Daftar Menjadi Peserta Melalui Mobile JKN?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">1. Pilih menu  DAFTAR 
                  <br>2. Pilih Pendaftaran Peserta Baru
                  <br>3. Baca dan pahami dengan seksama syarat dan ketentuan pendaftaran, kemudian centang tanda “Saya Setuju” dan klik “Selanjutnya”.
                  <br>4. Masukan Nomor Induk Kependudukan (NIK) dan kode Captcha lalu klik “Cari”.
                  <br>5. Data Bapak/Ibu akan muncul sesuai dengan yang terdaftar dalam Dukcapil, kemudian masukkan data, yaitu:
                  <br>a. Alamat Domisili/Surat-Menyurat
                  <br>b. Fasilitas Kesehatan Tingkat Pertama (FKTP) yang terdekat sesuai dengan domisili;
                  <br>c. Kelas Rawa.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twenty" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twenty">Bagaimana jika terdapat ketidaksesuaian tagihan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Apabila terdapat selisih atau perbedaan iuran, Bpk/Ibu dapat melaporkan kekantor BPJS Kesehatan terdekat, dengan membawa serta diantaranya :
                  <br>1.	Peserta meninggal : Peserta melengkapi surat keterangan kematian dan wajib membayar tunggakan sampai dengan bulan peserta meninggal. 
                  <br>2.	peralihan segmen ke Pekerja Penerima Upah (PPU) : Peserta membawa serta Surat Keputusan pengangkatan sebagai PPU dan kartu keluarga. 
                  <br>3.	Data ganda : Peserta membawa serta identitas (KK/KTP) dan kartu Indonesia Sehat. 
                  <br>4.	Pindah kewarganegaraan : Peserta melengkapi dokumen penetapan pindah kewarganegaraan (dibuktikan dengan surat penetapan pindah kewarganegaraan dari instansi berwenang).
                  <br>5.	nominal iuran peserta muncul lebih dari satu kali pada satu periode bulan tagihan : Peserta membawa serta identitas (KK/KTP) dan kartu Indonesia Sehat. 
                  <br>6.	Bayi Baru Lahir : Perhitungan tagihan iuran atas bayi baru lahir dihitung sejak bulan bayi dilahirkan dengan tagihan maksimal 24 bulan dengan membawa surat keterangan kelahiran, kartu keluarga, persyaratan autodebet (Buku Rekening dan KTP Pemilik Rekening).</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentyone" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentyone">Bagaimana Ketentuan Mengenai Penjaminan 6 Bulan Bagi Pekerja yang terkena PHK?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">a.	Manfaat Pelayanan yang diterima Peserta yaitu di Ruang Perawatan Kelas 3 
                  <br>b.	Peserta tidak dapat meningkatkan perawatan yang lebih tinggi dari haknya termasuk rawat jalan
                  <br>c.	Pemberi Kerja maupun Pekerja tetap berkewajiban membayar iuran jaminan kesehatan sampai dengan adanya putusan yang berkekuatan hukum tetap atas sengketa PHK yang diajukan melalui lembaga penyelesaian perselisihan hubungan industrial
                  <br>d.	Peserta PHK wajib melaporkan pengaktifan kembali status kepesertaan sebagai Peserta PHK melalui Kantor Cabang setiap bulan sampai dengan Peserta kembali bekerja atau paling lama 6 bulan sejak terjadinya PHK.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentytwo" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentytwo">Cara Mendapatkan Pelayanan Ambulan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Pelayanan Ambulan merupakan pelayanan transportasi pasien rujukan dengan kondisi tertentu antar fasilitas kesehatan untuk menjaga kestabilan kondisi dan keselamatan pasien yang meliputi pelayanan ambulan darat dan ambulan air untuk rujukan pada:
                  <br>a.	antar fasilitas kesehatan tingkat pertama;
                  <br>b.	dari fasilitas kesehatan tingkat pertama ke fasilitas kesehatan rujukan tingkat lanjut;
                  <br>c.	antar fasilitas kesehatan rujukan tingkat lanjutan
                  <br>Adapun prosedur pelayanan ambulan sebagai berikut:
                  <br>a.	Pasien yang mendapatkan pelayanan ambulan adalah pasien yang memerlukan evakuasi ke fasilitas kesehatan lain sesuai indikasi medis dan ketentuan penjaminan ambulan.
                  <br>b.	Pelayanan ambulan dijamin bila rujukan dilakukan pada fasilitas kesehatan yang bekerja sama dengan BPJS Kesehatan atau pada kasus gawat darurat dari fasilitas kesehatan yang tidak bekerja sama ke fasilitas kesehatan yang bekerja sama dengan BPJS Kesehatan.
                  <br>c.	Fasilitas kesehatan yang memiliki fasilitas ambulan dapat langsung memberikan pelayanan ambulan bagi pasien.
                  <br>d.	Fasilitas kesehatan yang tidak memiliki fasilitas ambulan, maka Fasilitas kesehatan berkoordinasi dengan penyedia ambulan.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentythree" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentythree">Cara Membayar Iuran?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Pembayaran iuran bagi peserta dapat dilakukan dengan tahapan sebagai berikut:
                  <br>I.	Peserta dan calon peserta PBPU Kelas I dan II wajib menggunakan fasilitas pembayaran auto debit (bank/non bank).
                  <br>II.	Peserta melakukan registrasi autodebet melalui :
                  <br>a.	Kantor BPJS Kesehatan dengan mengisi form autodebit yang tersedia dengan melengkapi persyaratan  pendaftaran berupa Fotocopy Kartu Keluarga/KTP dan Buku Rekening
                  <br>b.	Kanal Online seperti
                  <br>•	Mobile JKN
                  <br>•	Website BPJS Kesehatan
                  <br>•	Kanal Bank
                  <br>•	Aplikasi E-Commerce
                  <br>•	USSD
                  <br>III.	Iuran pertama peserta akan otomatis terdebit pada periode tanggal 5 atau tanggal 20 setiap bulannya
                  <br>IV.	Untuk kelancaran proses pendaftaran Autodebit pada Bank
                  <br>Pastikan Nomor Telepon yang digunakan benar atau sesuai dengan Nomoor Telepon yang digunakan saat pembukaan rekening di Bank untuk menerima Pin OTP dan pastikan memiliki saldo pulsa..</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentyfour" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentyfour">Cara Melakukan Perubahan Data Kependudukan?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Perubahan data kependudukan pada identitas peserta JKN-KIS yang meliputi data NIK, Nama, Tanggal Lahir dan Jenis Kelamin. Peserta melaporkan data kependudukan melalui kanal layanan yang disediakan oleh BPJS Kesehatan, dengan persyaratan:
                  <br>a.	Kartu Keluarga dan KTP
                  <br>b.	Kartu Identitas Peserta JKN-KIS.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentyfive" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentyfive">Cara Melakukan Perubahan Tambah Peserta Dan Anggota Keluarga?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Perubahan penambahan peserta dan anggota keluarga mengikuti mekanisme pendaftaran peserta baru sesuai dengan jenis kepesertaan, dengan syarat sebagai berikut:
                  <br>1.	Kartu Keluarga
                  <br>2.	Buku rekening tabungan BRI, Mandiri, BNI, BTN, dan BCA (dapat menggunakan rekening tabungan Kepala Keluarga/anggota keluarga dalam Kartu Keluarga/ penanggung).
                  <br>3.	Formulir Autodebit pembayaran iuran BPJS Kesehatan bermaterai Rp.10.000,00 (Sepuluh Ribu Rupiah).</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentysix" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentysix">Dimana saja tempat pendaftaran Peserta Pekerja Penerima Upah?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">a.	Website BPJS Kesehatan www.bpjs-kesehatan.go.id 
                  <br>b.	Portal bersama BPJS www.bpjs.go.id 
                  <br>c.	ONLINE SINGLE SUBMISSION (OSS)
                  <br>d.	Aplikasi Edabu Mobile yang bisa diunduh melalui Google Playstore dan Apps Store 
                  <br>e.	Kantor Cabang/Kab/Kota.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentyseven" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentyseven">Dokumen Pendukung yang Dibutuhkan Dalam Mengajukan Penjaminan 6 Bulan Bagi Pekerja yang terkena PHK?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">a.	Dokumen data Peserta dan anggota keluarga PHK berupa nama, NIK, tanggal lahir, nomor identitas Peserta JKN, Alamat, No HP & Email
                  <br>b.	Dokumen pembuktian PHK, meliputi:
                  <br>1)	Putusan/akta pengadilan hubungan industrial bagi PHK yang sudah ada putusan pengadilan hubungan industrial;
                  <br>2)	Akta Notaris bagi PHK karena penggabungan perusahaan;
                  <br>3)	Putusan kepaillitan dari Pengadilan bagi PHK karena perusahaan pailit atau mengalami kerugian; atau
                  <br>4)	Surat Keterangan Dokter bagi PHK karena Pekerja mengalami sakit.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentyeight" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentyeight">Siapakah yang dimaksud dengan Peserta?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">Peserta adalah Semua  penduduk Indonesia, termasuk orang asing yang telah bekerja paling singkat 6 (enam) bulan di Indonesia dan telah membayar iuran.</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Twentynine" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Twentynine">Syarat Pendaftaran Autodebet?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">I.	Bank mitra kerjasama (BNI/BCA/MANDIRI/BRI/BTN/BANK JATENG/BANK NAGARI selain jenis syariah dan tabunganku) dan dapat melalui Kantor BPJS Kesehatan dengan persyaratan sebagaimana terlampir :
                  <br>1.	FC Buku Rekening Tabungan 
                  <br>2.	FC KK dan FC KTP peserta 
                  <br>3.	FC KK dan FC  KTP pemilik rekening
                  <br>4.	Materai Rp. 10.000,- 1 lembar
                  <br>5.	Mengisi formulir autodebet yang ditanda tangani pemilik rekening
                  <br>II.	Online (Bank/Non Perbankan) melalui Aplikasi Mobile JKN, Aplikasi Mitra BPJS Kesehatan dan USSD :
                  <br>1.	Aplikasi Mobile JKN (BRI/MANDIRI/BTN/BCA/Finpay/Doku/I-Saku/Visa Master)
                  <br>2.	Aplikasi i-saku
                  <br>3.	Aplikasi Tokopedia
                  <br>4.	Aplikasi Gojek
                  <br>5.	Aplikasi DANA
                  <br>6.	Via USSD
                  <br>7.	Website BPJS Kesehatan (MANDIRI/BCA/Visa Master).</p>
               </div>
            </div>
            <div class="tab w-full overflow-hidden border-t">
               <input class="absolute opacity-0" id="tab-single-Thirty" type="radio" name="tabs2">
               <label class="block p-5 leading-normal cursor-pointer" for="tab-single-Thirty">Syarat dan Cara Daftar Bayi Baru Lahir?</label>
               <div class="tab-content overflow-hidden border-l-2 bg-gray-100 border-indigo-500 leading-normal">
                  <p class="p-5">1. Asli Kartu JKN-KIS Ibu Kandung
                  <br>2. Asli/Fotocopy Surat keterangan lahir dari Dokter atau Bidan Puskesmas/Klinik/Rumah Sakit.
                  <br>3. Asli/Fotocopy Kartu Keluarga orang tua.
                  <br>4. Jika peserta belum melakukan autodebet tabungan dilengkapi dengan:
                     <br>a)Fotocopy buku rekening tabungan BNI/ BRI, Mandiri, BNI, BTN, BCA, Bank Jateng dan Bank Panin, dapat menggunakan rekening tabungan Kepala Keluarga/Anggota Keluarga dalam Kartu Keluarga/Penanggung
                     <br>b)Formulir autodebet pembayaran iuran BPJS Kesehatan bermaterai Rp6.000,00 (Enam ribu rupiah).
                  <br>5. Melakukan perubahan data bayi selambat- lambatnya 3 (tiga) bulan setelah kelahiran yang meliputi nama, tanggal lahir, jenis kelamin, dan NIK.
                  <br>6. Pendaftaran dilakukan melalui Rumah Sakit, Mobile Customer Service (MCS), Mall Pelayanan Publik dan Kantor Cabang dan Kantor Kabupaten/Kota.</p>
               </div>
            </div>
         </div>
      </div>
   </body>

   <script>
      /* Optional Javascript to close the radio button version by clicking it again */
      var myRadios = document.getElementsByName('tabs2');
      var setCheck;
      var x = 0;
      for(x = 0; x < myRadios.length; x++){
          myRadios[x].onclick = function(){
              if(setCheck != this){
                   setCheck = this;
              }else{
                  this.checked = false;
                  setCheck = null;
          }
          };
      }
   </script>
</html><?php /**PATH C:\xampp\htdocs\OrhaInsurance\resources\views/user/faq.blade.php ENDPATH**/ ?>
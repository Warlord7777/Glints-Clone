@push('style')
    <link href="{{asset('css/faq.css')}}" rel="stylesheet">
@endpush
@extends('layouts.mainPerusahaan')
@section('title', 'FAQ - Glints For Employers')

@section('content')
<div class="row mb-5" style="margin-top: 7%;">
    <div class="col-12">
        <div class="text-center fs-1" style="color: #017eb7;">
            Pertanyaan Yang Sering Diajukan
        </div>
    </div>
</div>
<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 col-md-4 col-sm-6 mt-5 mt-md-0">
                    <a class="faq-button" href="#pertanyaanUmum">
                        Pertanyaan Umum
                            </a>
                    </div>
                    <div class="col-lg-3 col-12 col-md-4 col-sm-6 mt-5 mt-md-0">
                            <a class="faq-button" href="#manajemenTalenta">
                                Manajemen Talenta
                            </a>
                    </div>
                    <div class="col-lg-3 col-12 col-md-4 col-sm-6 mt-5 mt-md-0">

                            <a class="faq-button" href="#rekrutTim">
                                Rekrut Tim Remote
                            </a>
                    </div>
                    <div class="col-lg-3 col-12 col-md-4 col-sm-6 mt-5 mt-lg-0">
                            <a class="faq-button" href="#strukturBiaya">
                                Struktur Biaya
                            </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5" style="background-color: #f6f6f6;">
        <div class="col-12">
            <div class="container">
                <div class="row fs-4 my-3">
                    <div class="col-12" id="pertanyaanUmum" style="color:#017eb7;">
                        Pertanyaan Umum  
                    </div>
                </div>
                <div class="row mb-5" style="background-color: white">
                    <div class="col-12 d-flex justify-content-between py-3 px-4" style="background-color: white;">
                        <span class="fs-4">
                            Mengapa merekrut bersama Glints?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Layanan <i>headhunting</i> konvensional umumnya bersifat lambat dan menggunakan proses manual untuk melakukan sourcing dan screening kandidat.
                            <br><br>
                            Dengan Glints, Anda akan merasakan pengalaman dari kolaborasi akses <i>talent pool</i> regional, bersama rekruter ahli yang didukung teknologi A.I. Sehingga menghasilkan rekomendasi kandidat yang akurat dan tepat bagi perusahaan Anda, hanya dalam 14 hari. 
                        </div>
                    </div>
                </div>
                <div class="row fs-4 mb-3 mt-5" id="manajemenTalenta">
                    <div class="col-12" id="pertanyaanUmum" style="color:#017eb7;">
                        Manajemen Talenta
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah saya harus mengajukan izin kerja untuk talenta saya yang dikelola bersama Glints?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Tidak, Anda tidak memerlukannya.
                            <br>
                            Glints akan menangani kontrak kerja dan semua peraturan yang terkait untuk talenta Anda yang dikelola bersama kami. 
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Berapa jangka waktu minimal kontrak kerja?
                        </span>
                        <img src ="{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Jangka waktu kontrak kerja minimal 1 tahun.
                            <br>
                            Masa percobaan minimal 3 bulan.
                            <br>
                            Jangka waktu pemberitahuan minimal adalah 1 bulan. 
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apa saja ketentuan ketenagakerjaan yang berlaku?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Cuti tahunan minimal 14 hari.
                            <br>
                            Masa percobaan minimal 3 bulan.
                            <br>
                            Jangka waktu pemberitahuan minimal 1 bulan.
                            <br><br>
                            Glints Talent Manager Anda akan bertanggung jawab untuk mengelola tanggal cuti bakat, masa percobaan, dan pemutusan hubungan kerja/offboarding.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Siapakah penyedia perjanjian kontrak kerja?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Glints akan menyediakan perjanjian kontrak kerja sebagaimana kami akan menjadi Employer on Record (EOR).
                            <br>
                            Namun, kami juga akan mencerminkan kontrak kerja yang Anda gunakan untuk karyawan Anda sendiri.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Berapa lama masa berlaku kontrak antara Glints dan Klien?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            The Glints Term of Business akan berlaku selama 1 tahun dan selanjutnya dapat diperpanjang setiap tahun.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Bagaimana jika nanti saya ingin memindahkan talenta yang dikelola oleh Glint ke entitas kami?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Anda dapat memindahkan ke entitas Anda dengan memberikan pemberitahuan dua bulan sebelumnya kepada kami.
                            <br><br>
                            Ini dilakukan untuk memberi kami waktu untuk mengeluarkan karyawan dari sistem penggajian kami dan sistem hukum terkait.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah talenta akan mengikuti hari libur klien?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Anda dapat memilih preferensi Anda.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Siapa yang mengelola pekerjaan dan kinerja talenta?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Anda akan menjadi pengelolanya.
                            <br><br>
                            Glints akan memberikan pengawasan dan komunitas Manajemen Talenta lainnya untuk keterlibatan, dukungan rekan kerja, dan motivasi.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah ada fasilitas tambahan untuk startup yang baru berkembang?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Kami memahami bahwa startup yang berada di tahap awal tengah bersaing ketat untuk mendapatkan talenta yang tepat. Glints hadir bertujuan untuk mendukung Anda dengan talenta dan keterbatasan sumber daya Anda.
                            <br><br>
                            Penawaran Akselerator Perekrutan Permulaan kami memungkinkan Anda menikmati diskon 100% untuk biaya perekrutan (senilai SGD7.000) untuk perekrutan bakat jarak jauh pertama Anda dengan bundel <b>Glints Recruitment</b> dan <b>Manajemen Talenta</b> kami. Penawaran ini hanya berlaku untuk pelanggan pertama, dan tersedia untuk semua startup yang didukung modal ventura dan didanai pra-seri C.
                        </div>
                    </div>
                </div>
                <div class="row fs-4 mb-3 mt-5" id="manajemenTalenta">
                    <div class="col-12" id="rekrutTim" style="color:#017eb7;">
                        Rekrut Tim Remote
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Mengapa Anda perlu merekrut talenta remote? Mengapa harus dengan Glints?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Talent pool lokal mungkin memiliki ketersediaan yang terbatas untuk kandidat dengan keterampilan tertentu.
                            <br><br>
                            Kini Anda dapat merekrut talenta secara regional, tidak hanya terbatas secara lokal. Hal ini memberikan peluang untuk memperluas talent pool Anda secara eksponensial dan meningkatkan kesuksesan Anda dalam membangun tim yang efektif dengan cepat.
                            <br><br>
                            Alih-alih terlalu banyak meluangkan waktu untuk lowongan pekerjaan dan agen perekrutan di banyak negara, Glints dapat menjadi mitra tunggal Anda untuk talenta regional.
                            <br><br>
                            Ini menghemat waktu dan biaya Anda, dan memungkinkan Anda membangun tim yang efektif dengan cepat.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Mengapa memilih merekrut tim remote?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Perekrutan talenta remote memungkinkan Anda selangkah lebih dekat dengan talent pool regional berkualitas dengan cepat dan terjangkau. Talent pool regional kami, yang terdiri dari lebih dari 3 juta kandidat siap wawancara di Asia Tenggara dan Taiwan, dilengkapi dengan keterampilan teknologi dan digital yang dibutuhkan untuk memenuhi posisi paling penting di perusahaan Anda.
                            <br><br>
                            Temukan talenta tepat yang Anda butuhkan di Asia Tenggara dan Taiwan akan lebih cepat dan efisien dengan Glints. Solusi rekrutmen dan manajemen talenta end-to-end kami memungkinkan Anda membangun tim remote secara praktis, mengatur entitas bisnis lokal, penyewaan ruang kantor, upaya administratif, dan banyak lagi.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Dari mana Glints melakukan sourcing kandidat?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Talenta kami berasal dari Singapura, Malaysia, Indonesia, Vietnam, Taiwan, dan Filipina
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah merekrut tim remote dengan Glints berisiko?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Tidak ada biaya di muka untuk menggunakan layanan kami atau memulai proses pencarian & peninjauan kandidat.
                            <br><br>
                            Tidak ada kewajiban untuk melanjutkan sewa kecuali Anda merasa cocok.
                            <br><br>
                            Jaminan 90 hari juga ditawarkan pada saat perekrutan, jika ada kebutuhan untuk mengganti talenta yang direkrut.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Bagaimana jika saya mengalami ketidakcocokan dengan talenta remote setelah proses rekrutmen selesai? Apakah ada garansi?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Segera setelah kandidat bergabung, jaminan 90 hari kami akan berlaku. Selama 90 hari pertama, jika Anda menemukan bahwa karyawan tersebut tidak cocok atau sebaliknya, kami akan memberikan penggantian secara gratis, dalam waktu 60 hari.
                            <br><br>
                            Masa garansi akan berlanjut setelah penggantian telah diberlakukan. Jika kami gagal menemukan pengganti Anda dalam waktu 60 hari, kami akan memberi Anda pengembalian uang 50% dari biaya perekrutan.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apa perbedaan dari perekrutan talenta remote dan outsourcing?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Perekrutan talenta remote: Talenta yang Anda pekerjakan adalah bagian dari tim internal Anda, tetapi berlokasi di negara yang berbeda. Mereka berada di bawah manajemen Anda, bekerja penuh waktu dan hanya untuk Anda sampai kontrak mereka dengan Anda berakhir. Anda bertanggung jawab atas kemampuan, pertumbuhan, dan kemajuan karir mereka seperti karyawan internal Anda.
                            <br><br>
                            Outsourcing: Talenta atau tim yang Anda pekerjakan bukan bagian dari tim internal Anda, tetapi sebagai penyedia layanan pihak ketiga yang terlibat untuk mengoperasikan serangkaian tugas untuk Anda. Mereka mungkin berada di lokasi yang sama atau berbeda dari Anda. Mereka tidak diwajibkan untuk bekerja penuh waktu untuk Anda. Anda juga tidak memiliki kendali atau tanggung jawab atas kemampuan, pertumbuhan karier, dan kemajuan mereka.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah talenta akan bekerja sebagai karyawan full-time?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Ya. Mereka bekerja secara eksklusif untuk Anda. Mereka tidak bekerja untuk perusahaan lain pada waktu yang sama.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Siapa pengelola tim remote?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Mirip dengan tim Anda saat ini, Anda akan mengelolanya secara langsung. Kami dapat memberikan pengawasan, ruang kerja, dan juga komunitas talenta remote lainnya untuk dukungan rekan kerja.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apa peraturan tentang membangun tim remote di Singapura, Malaysia, Indonesia, Vietnam, Taiwan dan/atau Filipina?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Kami menyadari bahwa tidak semua perusahaan memiliki entitas di Singapura, Malaysia, Indonesia, Vietnam, Taiwan, dan/atau Filipina karena membutuhkan banyak waktu, tenaga, dan biaya investasi bagi perusahaan asing untuk membuatnya.
                            <br><br>
                            Talenta remote Anda akan dipekerjakan di bawah entitas bisnis legal lokal Glints di negara tempat dia berada. Kontrak kerja mereka yang mencakup klausul perlindungan NDA dan IP akan disediakan oleh Glints.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah kita harus menyediakan talenta remote biaya akomodasi dan transportasi?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Tidak, Anda tidak perlu melakukannya. Satu-satunya waktu Anda harus memberikan ini adalah ketika mereka mengunjungi negara Anda untuk bekerja.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Bagaimana jika saya ingin mereka pindah ke negara saya di masa depan?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Anda dapat memindahkan mereka ke negara Anda dengan memberikan izin kerja untuk mereka. Tidak akan ada biaya tambahan dari Glints.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Bagaimana jika saya ingin merekrut talenta asing untuk ditempatkan di negara saya?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Kami akan dengan senang hati membantu Anda dalam merekrut talenta lokal di lokasi tempat kami mengoperasikan layanan rekrutmen lokal, yaitu Singapura, Malaysia, Indonesia, Vietnam, Taiwan, dan Filipina.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Akankah talenta remote mengikuti hari cuti, liburan, atau tunjangan karyawan kami?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Sebagai perusahaan mereka, itu adalah keputusan Anda pada hari cuti, hari libur, dan tunjangan karyawan untuk talenta remote. Misalnya, karyawan Glints di Batam mengikuti hari libur Singapura, tetapi beberapa klien kami juga mengizinkan talenta remote untuk mengikuti hari libur nasional lokal Indonesia sehingga mereka dapat menghabiskan waktu bersama keluarga.
                            <br><br>
                            Glints Talent Manager Anda bertanggung jawab untuk melacak dan melaporkan rencana cuti karyawan jarak jauh Anda.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah Glints menyediakan peralatan, wifi, alat yang dapat meningkatkan operasi kerja remote dari talenta remote?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Glints menyediakan layanan penyewaan laptop dan juga membantu perusahaan dalam proses pembelian dan pengiriman peralatan dan perangkat ke talenta remote mereka.
                            <br><br>
                            Perusahaan dapat mengajukan permintaan tersebut kepada Account Manager khusus mereka untuk mendapatkan bantuan.
                            <br><br>
                            Terdapat juga pilihan untuk meminta talenta menggunakan laptop mereka sendiri, atau pemberi kerja dapat memberikan spesifikasi yang tepat untuk mereka.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah talenta remote 'dipekerjakan' di bawah Glints' dan dianggap sebagai karyawan Glints karena kontrak kerja mereka diberikan oleh Glints dan bukan dari perusahaan saya?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Saat talenta remote dipekerjakan secara legal di bawah Glints, mereka diberikan surat penugasan bersama dengan kontrak kerja mereka yang menyatakan dan mendefinisikan tanggung jawab dan aktivitas kerja mereka terhadap perusahaan Anda selama seluruh periode kontrak kerja berlaku.
                        </div>
                    </div>
                </div>
                <div class="row fs-4 mb-3 mt-5">
                    <div class="col-12" id="strukturBiaya" style="color:#017eb7;">
                        Struktur Biaya 
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Bagaimana sistem pembayaran yang berlaku?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Invoice akan dikirimkan kepada Anda pada hari pertama kandidat bergabung dengan perusahaan Anda, dan harus dibayar dalam waktu 15 hari kalender.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah terdapat garansi? Bagaimana dengan pengembalian uang?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Klien hanya membayar untuk perekrutan yang berhasil, dan kami menawarkan jaminan penggantian gratis 90 hari.
                            <br><br>
                            Selama 90 hari pertama kandidat bergabung, jika Anda menemukan karyawan tersebut tidak cocok atau jika karyawan tersebut mengundurkan diri dari posisi tersebut, kami akan memberikan 1 kandidat pengganti dengan spesifikasi yang sama secara gratis dalam waktu 60 hari.
                            <br><br>
                            Jika kami gagal menemukan pengganti Anda dalam waktu 60 hari, kami akan mengembalikan Anda 50% dari Biaya Perekrutan.
                            <br><br>
                            Jika talenta pengganti memerintahkan jumlah gaji yang berbeda, Klien atau Glints akan membayar/mengembalikan selisih Biaya Perekrutan.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apakah tersedia paket cicilan?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Paket cicilan saat ini belum tersedia.
                        </div>
                    </div>
                </div>
                <div class="row mb-3" style="background-color: white;">
                    <div class="col-12 d-flex justify-content-between py-3 px-4">
                        <span class="fs-4">
                            Apa yang dimaksud Glints Credit?
                        </span>
                        <img src = "{{asset('img/arrow.svg')}}" alt="arrow" class="img-fluid me-3 arrow">
                    </div>
                    <div class="col-12 d-none">
                        <div class="px-4 pb-4 pt-2 text-drop">
                            Glints Credit adalah metode pembayaran alternatif yang dapat Anda gunakan untuk seluruh layanan Glints for Employers, seperti biaya merekrut untuk layanan rekrutmen maupun biaya bulanan untuk layanan Manajemen Talenta.
                            <br><br>
                            Glints Credit merupakan layanan kredit untuk pembayaran di muka dan memotong pembayaran layanan, saat Anda telah memiliki tagihan untuk layanan yang Anda gunakan.
                            <br><br>
                            Mode pembayaran ini sangat ideal untuk perusahaan yang memiliki banyak peran untuk diisi karena memberi fasilitas seperti jaminan yang lebih lama untuk talenta yang direkrut dan diskon untuk biaya perekrutan.
                            <br><br>
                            <b>Beberapa kelebihan dari Glints Credit:</b>
                            <br>
                            Biaya rekrut lebih rendah dengan hanya 13.5% dari gaji tahunan talenta.
                            <br>
                            Garansi penggantian kandidat gratis dan lebih panjang, hingga 160 hari.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="{{asset('js/faq.js')}}"></script>
@endpush


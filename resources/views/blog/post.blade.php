@extends('layouts.blog')

@push('style')
    <link rel="stylesheet" href="{{asset('css/stylep1.css')}}">
@endpush

@section('content')
       <div id="article">
        <div class="post-container">
            <div class="breadcrumb">
                Kategori: &emsp;<a href="/blog/kategori/{{$post->topic}}" rel="category tag">{{$post->topic}}</a>
            </div>
            <h1>{{$post->blog_title}}</h1>
            <div class="last-update">
                Diperbarui {{$post->updated_at->format('d M Y')}}
                <span class="reading-time">Dibaca {{ceil(str_word_count($post->content)/250)}} menit</span>
            </div>
            <div class="profile">
                <div class="frame">
                    <a href="/blog/writer/{{$post->Admin->User->id}}">
                        <img
                            src="{{asset('storage/'.$post->Admin->profile_picture)}}"
                            class="entered lazyloaded" width="80" height="80">"
                    </a>
                </div>
                <a href="/blog/writer/{{$post->Admin->User->id}}">
                    <div class="description">
                        <b>{{$post->Admin->User->first_name}} {{$post->Admin->User->last_name}}</b>
                        {{-- <i>Someone who enjoys writing. Graduate from English Education major in UPI.</i> --}}
                    </div>
                </a>
            </div>
            <hr>
            {{-- <div class="content">
                <p>Ketika mencari kerja, kamu akan menemukan beberapa istilah yang umum digunakan rekruter dalam halaman
                    lowongan kerjanya.</p>
                <p>Tujuannya bukan cuma untuk menjelaskan apa <em>job desc</em>, tapi harus kamu pahami untuk memastikan
                    apakah pekerjaan tersebut cocok bagimu.</p>
                <p>Nah, di artikel ini Glints akan memberikan beberapa istilah yang dipakai rekruter selama proses
                    rekrutmen, mengutip dari Indeed dan Recruiter.</p>
                <p>Simak artikelnya berikut ini, ya.</p>
                <h3>
                    1.
                    <em>Hiring manager</em>
                </h3>
                <p>Istilah ini bisa jadi sering kamu lihat di lowongan pekerjaan. <em><a href="#" target="_blank">Hiring
                            manager</a></em> bertanggung jawab untuk mewawancara dan mengevaluasi kandidat.</p>
                <p>Sehingga, ada baiknya bagimu untuk mencari tahu nama <em>hiring manager</em> ketika melamar kerja.
                </p>
                <p>Dengan begitu, kamu bisa tahu siapa yang harus dikontak ketika mau melakukan <em>follow up</em>
                    terhadap lamaran kerjamu</p>
                <div style="width: 100%; background: f3f3f3; padding: 16px;">
                    <b>Baca juga</b>
                    <a href="#" target="_blank">Post Graduation Blues: Arti, Penyebab, dan Cara Menghadapinya</a>
                </div>
                <h3>
                    2.
                    <em>Gelar atau degree</em>
                </h3>
                <p>Istilah lain yang umum digunakan oleh rekruter adalah gelar atau <em>degree.</em> Banyak pekerjaan
                    yang mengharuskan kandidat untuk memiliki gelar tertentu sebagai syarat bekerja.</p>
                <p>Ketika melihat deskripsi pekerjaan, kamu bisa melihat gelar atau <em>degree </em>supaya mencari tahu
                    jenis pendidikan yang dibutuhkan oleh <em>hiring manager</em> untuk posisi terkait.</p>
                <h3>
                    3.
                    <em> Kompensasi atau compensation</em>
                </h3>
                <p>Istilah ini mengacu pada gaji, asuransi, jumlah cuti yang didapatkan, dan <em>benefit</em> lainnya.
                </p>
                <p>Lowongan pekerjaan biasanya memasukkan informasi seputar kompensasi untuk menarik kandidat pada
                    posisi yang ditawarkan.</p>
                <p>Tak hanya itu, informasi ini juga dapat memberi tahu pencari kerja tentang ekspektasi
                    <em>benefit</em> yang bisa mereka dapatkan.
                </p>
                <h3>
                    4.
                    <em>Retention</em>
                </h3>
                <p>Istilah ini mengacu pada kemampuan perusahaan untuk mencari kandidat, merekrut, dan
                    mempertahankannya.</p>
                <p>Rekruter memakai istilah ini untuk menunjukkan pencari kerja bahwa para pekerja di perusahaan
                    tersebut senang dan betah bekerja di sana.</p>
                <h3>
                    5.
                    <em>Passionate</em>
                </h3>
                <p>Jika kamu melihat kata <em>passionate</em> di lowongan kerja, hal itu menunjukkan bahwa perusahaan
                    mencari seseorang yang antusias dengan posisi tersebut beserta tanggung jawabnya.</p>
                <p>Karena, seseorang yang antusias dengan pekerjaannya akan memberi performa yang lebih baik di
                    perannya. Tentu, hasil pekerjaannya pun akan menjadi lebih positif.</p>
                <h3>
                    6.
                    <em>Hands-on</em>
                </h3>
                <p><em>Hands-on</em> adalah istilah yang digunakan rekruter untuk memberi tahu bahwa suatu posisi
                    mengharuskanmu terlibat secara langsung dengan orang, objek, atau tempat tertentu.</p>
                <p>Seorang <em>hiring manager</em> menggunakan istilah ini untuk memberi tahu bahwa posisi ini
                    mengharuskanmu terlibat secara langsung supaya bisa sukses.</p>
                <p>Istilah ini juga dapat membantu para pencari kerja membentuk ekspektasi terhadap pekerjaan yang ingin
                    dilamarnya.</p>
                <h3>
                    7.
                    <em>Company culture atau budaya perusahaan</em>
                </h3>
                <p>Istilah ini mengacu pada nilai, moral, dan standar yang ditentukan perusahaan untuk pekerjanya.</p>
                <p><em>Hiring manager</em> biasanya mencantumkan informasi tentang budaya perusahaan untuk menarik
                    kandidat yang ingin bekerja di lingkungan, atmosfer, atau kultur kerja tertentu.</p>
                <h3>
                    8.
                    <em>Motivated atau termotivasi</em>
                </h3>
                <p><em>Hiring manager</em> lebih menyukai kandidat yang terdorong untuk mengembangkan kariernya dan
                    belajar sebanyak mungkin.</p>
                <p>Lowongan pekerjaan biasanya mencantumkan kata motivated atau termotivasi untuk menarik kandidat yang
                    memiliki keinginan untuk;</p>
                <ul>
                    <li>menghadapi dan melewati tantangan</li>
                    <li>terus meningkatkan kualitas pekerjaannya</li>
                    <li>berkembang secara profesional di bidangnya</li>
                </ul>
                <h3>
                    9.
                    <em>Outsourcing</em>
                </h3>
                <p>Istilah lainnya yang umum digunakan rekruter adalah outsourcing. Hal ini mengacu pada bagaimana
                    perusahaan merekrut seseorang dari luar untuk mengisi posisi tertentu.</p>
                <p>Hiring manager bisa saja menggunakan istilah ini untuk menginformasikan pencari kerja dari mana dan
                    bagaimana mereka biasanya mencari kandidat ideal</p>
                <h3>
                    10.
                    <em>Fit</em>
                </h3>
                <p>Istilah ini mengacu pada kemampuan kandidat untuk bisa berfungsi dengan baik di posisinya dan
                    bertindak sebagai anggota tim di perusahaan.</p>
                <p>Hiring manager biasanya mencantumkan istilah ini supaya kandidat dapat menentukan apakah mereka bisa
                    cocok di perusahaan tersebut dan memberi nilai serta keahliannya di sana.</p>
                <div style="width: 100%; background: f3f3f3; padding: 16px;">
                    <b>Baca juga</b>
                    <a href="#" target="_blank">9 Tantangan yang Dihadapi Fresh Graduate Saat Cai Kerja</a>
                </div>
                <h3>
                    11.
                    <em>Phone interview</em>
                </h3>
                <p>Perusahaan sering menggunakan phone interview untuk melakukan follow up ke kandidat yang menjanjikan.
                </p>
                <p>Dalam lowongan pekerjaan, istilah ini juga digunakan untuk memberi tahu kandidat bahwa wawancara
                    melalui telepon dapat menjadi salah satu opsi.</p>
                <p>Nah, Glints sudah menyiapkan contoh-contoh pertanyaan phone interview yang bisa kamu pelajari dan
                    kuasai.</p>
                <p>Yuk, baca selengkapnya dengan tap tombol di bawah ini!</p>
                <p style="text-align:center;">
                    <a class="maxbutton-24 maxbutton maxbutton-ditraktir-gadget-sama-glints" href="#"
                        target="_blank"><span class="mb-text">BACA ARTIKELNYA</span></a>
                </p>
                <h3>
                    12.
                    <em>Sertifikasi profesional</em>
                </h3>
                <p>Sertifikat profesional juga menjadi istilah lain yang umum digunakan oleh rekruter.</p>
                <p>Rekruter akan mencantumkan istilah ini untuk menginformasikan kandidat bahwa memiliki sebuah
                    sertifikasi profesional menjadi salah satu syarat supaya bisa diterima di posisi tersebut.</p>
                <p>Tak hanya itu, kandidat yang memiliki sertifikasi profesional pun akan lebih mudah untuk mencari
                    pekerjaan dengan adanya istilah ini di lowongan pekerjaan.</p>
                <h3>
                    13.
                    <em>Qualified</em>
                </h3>
                <p>Hiring manager akan menggunakan qualified untuk bisa mendapatkan lamaran kerja dari kandidat yang
                    telah memenuhi syarat dalam deskripsi pekerjaan.</p>
                <p>Jika kamu melihat istilah ini di deskripsi pekerjaan, pastikan kamu telah memenuhi persyaratan yang
                    tercantum sebelum melamarnya.</p>
                <h3>
                    14.
                    <em>Performance management atau manajemen kinerja</em>
                </h3>
                <p>Istilah yang satu ini digunakan rekruter untuk mengacu pada kegiatan penilaian kinerja dari setiap
                    pekerja.</p>
                <p> Dalam lowongan pekerjaan, hiring manager dapat mencantumkan istilah ini untuk menginformasikan
                    kandidat adanya kegiatan ini ketika mereka mendapatkan posisi tersebut.</p>
                <h3>
                    15.
                    <em>Thinking outside of the box</em>
                </h3>
                <p>Banyak perusahaan menyukai kandidat yang inovatif dan kreatif.</p>
                <p>Sehingga, perusahaan dan rekruter akan menggunakan istilah ini untuk mengindikasikan bahwa mereka
                    mencari seseorang yang visioner serta tingkat kreatif tinggi.</p>
                <h3>
                    16.
                    <em>Work-life balance</em>
                </h3>
                <p>Istilah lainnya yang umum digunakan rekruter adalah work-life balance. Rekruter menggunakan istilah
                    ini untuk menunjukkan bahwa mereka menghargai waktu personal pekerjanya.</p>
                <p>Istilah ini juga dapat menunjukkan bahwa pekerjaan tersebut memberimu waktu untuk mengejar hobi dan
                    menghabiskan waktu bersama keluarga.</p>
                <h3>
                    17.
                    <em>University recruiting</em>
                </h3>
                <p>Terkadang, perusahaan menargetkan profesional muda dan fresh graduate dalam proses rekrutmennya.</p>
                <p>Nah, jika kamu melihat istilah ini dalam lowongan pekerjaan, hal ini berarti bahwa perusahaan akan
                    cenderung lebih menerima lamaran kerja para fresh graduate.</p>
                <h3>
                    18.
                    <em>Vidio interview</em>
                </h3>
                <p>Video interview juga menjadi salah satu istilah yang umum digunakan oleh rekruter.</p>
                <p>Hal ini berarti bahwa rekruter akan melakukan proses wawancara kerja menggunakan layanan
                    telekonferensi jika menganggapmu cocok untuk di posisi yang kamu lamar.</p>
                <p>Tak hanya itu, istilah ini juga dapat menunjukkan bahwa mereka memanfaatkan kemajuan teknologi dalam
                    pendekatan bisnisnya serta memiliki opsi bekerja secara remote.</p>
                <h3>
                    19.
                    <em>Artificial intelligence</em>
                </h3>
                <p>Kamu juga bisa melihat istilah ini dalam lowongan pekerjaan.</p>
                <p>Istilah ini digunakan untuk menjelaskan bahwa perusahaannya telah atau akan menggunakan AI dalam
                    waktu dekat.</p>
                <p>Tak hanya itu, istilah ini juga dicantumkan untuk memberi tahu pelamar kerja bahwa kandidat ideal
                    perusahaan adalah seseorang yang memiliki pengalaman bekerja dengan AI.</p>
                <h3>
                    20.
                    <em>Sourcing</em>
                </h3>
                <p>Istilah ini mengacu pada dari mana perusahaan menemukan kandidatnya. Hiring manager dapat menggunakan
                    istilah ini untuk;</p>
                <ul>
                    <li>mengindikasikan platform apa yang paling banyak digunakan pelamar kerja di posisi tersebut</li>
                    <li>menjelaskan tanggung jawab dari posisi terkait</li>
                    <li>menanyakan bagaimana kandidat menemukan lowongan pekerjaan tersebut</li>
                </ul>
                <div style="width: 100%; background: f3f3f3; padding: 16px;">
                    <b>Baca juga</b>
                    <a href="#" target="_blank">Checklist Pertimbangan Meminta Surat Rekomendasi</a>
                </div>
                <p>Itu adalah beberapa istilah yang umum digunakan oleh rekruter. Intinya, mengetahui berbagai istilah
                    ini dapat membantumu menentukan apakah suatu lowongan cocok bagimu atau tidak.</p>
                <p>Selain memahami istilah yang sering dipakai rekruter, kamu bisa mendapatkan lebih banyak informasi
                    soal melamar kerja dari Glints.</p>
                <p>Mulai dari tren rekrutmen di 2023, cara menghadapi ragam tantangan mencari kerja, hingga cara
                    follow-up hasil interview.</p>
                <p>Yuk, cek selengkapnya dengan klik di sini dan baca artikelnya secara gratis!</p>
                <h3 style="margin-bottom: -16px;">Sumber</h3>
                <ul class="dxsources">
                    <li class="dxsources-item">
                        <a id="dxs-1" class="dxsources-link" href="#" target="_blank">
                            <strong class="dxsources-name">20 Recruiting Buzzwords (And What They Mean)</strong>
                        </a>
                    </li>
                    <li class="dxsources-item">
                        <a id="dxs-2" class="dxsources-link" href="#" target="_blank">
                            <strong class="dxsources-name">Recruiter Top 10: HR and Recruiting Buzzwords That Actually
                                Matter</strong>
                        </a>
                    </li>
                </ul>
            </div> --}}
            <div class="content">
                {!!$post->content!!}
            </div>
            {{-- <div class="rmp-widgets-container rmp-wp-plugin rmp-main-container js-rmp-widgets-container js-rmp-widgets-container--104173 "
            data-post-id="104173">
            <div class="rmp-rating-widget js-rmp-rating-widget">
                <div class="col-12 d-flex">
                    <div class="col-6 border"></div>
                    <div class="col-6 rate">
                        <p class="rmp-heading rmp-heading--title"> Seberapa bermanfaat artikel ini? </p>
                        <p class="rmp-heading rmp-heading--subtitle"> Klik salah satu bintang untuk menilai.
                        </p>
                        
                            <input type="radio" id="star5" name="rate" value="5" />
                            <label for="star5" title="text">5 stars</label>
                            <input type="radio" id="star4" name="rate" value="4" />
                            <label for="star4" title="text">4 stars</label>
                            <input type="radio" id="star3" name="rate" value="3" />
                            <label for="star3" title="text">3 stars</label>
                            <input type="radio" id="star2" name="rate" value="2" />
                            <label for="star2" title="text">2 stars</label>
                            <input type="radio" id="star1" name="rate" value="1" />
                            <label for="star1" title="text">1 star</label>
                       
                    </div>
                </div>



                <div class="comment" style="margin-top: 100px;">
                    <!-- You can start editing here. -->

                    <!-- If comments are open, but there are no comments. -->
                    <div id="respond" class="comment-respond">
                        <h3 id="reply-title" class="comment-reply-title">Leave a Reply</h3>
                        <form action="https://glints.com/id/lowongan/wp-comments-post.php" method="post"
                            id="commentform" class="comment-form">
                            <p class="comment-notes"><span id="email-notes">Your email address will not be
                                    published.</span> <span class="required-field-message">Required fields
                                    are marked <span class="required">*</span></span></p>
                            <p class="comment-form-comment"><label for="comment">Comment <span
                                        class="required">*</span></label> <textarea id="comment" name="comment"
                                    cols="45" rows="8" maxlength="65525" required="required"></textarea></p>
                            <p class="comment-form-author"><label for="author">Name</label> <input id="author"
                                    name="author" type="text" value="" size="30" maxlength="245"
                                    autocomplete="name"></p>
                            <p class="comment-form-email"><label for="email">Email</label> <input id="email"
                                    name="email" type="text" value="" size="30" maxlength="100"
                                    aria-describedby="email-notes" autocomplete="email"></p>
                            <p class="comment-form-url"><label for="url">Website</label> <input id="url"
                                    name="url" type="text" value="" size="30" maxlength="200"
                                    autocomplete="url"></p>
                            <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent"
                                    name="wp-comment-cookies-consent" type="checkbox" value="yes"> <label
                                    for="wp-comment-cookies-consent">Save my name, email, and website in
                                    this browser for the next time I comment.</label></p>
                            <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit"
                                    value="Post Comment"> <input type="hidden" name="comment_post_ID"
                                    value="87219" id="comment_post_ID">
                                <input type="hidden" name="comment_parent" id="comment_parent" value="0">
                            </p>
                            <p style="display: none;"><input type="hidden" id="akismet_comment_nonce"
                                    name="akismet_comment_nonce" value="60a7bba4cb"></p>
                            <p style="display: none !important;"><label>Δ<textarea name="ak_hp_textarea"
                                        cols="45" rows="8" maxlength="100"></textarea></label><input
                                    type="hidden" id="ak_js_1" name="ak_js" value="1684254670222">
                                <script>document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());</script>
                            </p>
                        </form>
                    </div><!-- #respond -->
                </div>
            </div> --}}
        </div>
    </div>
@endsection
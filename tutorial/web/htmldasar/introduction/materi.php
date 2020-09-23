<h1>
    Mengenal HTML dan Cara Membuat Dokumen HTML
</h1>
<hr>
<p>
    Selamat datang di situs <b>Koder Nusantara</b> dan selamat belajar. Pada artikel kali ini merupakan 
    artikel pertama dari seri tutorial HTML dasar yang sudah saya rangkum dalam 14 artikel yang dimana 
    artikel terakhir atau artikel ke 14 merupakan contoh kasus, yaitu kita akan membuat sebuah halaman web 
    sederhana hanya dengan HTML dan memiliki susunan atau pola atau layout yang sesuai dengan web pada umumnya.
</p>
<p>
    Berikut beberapa hal yang akan kita bahas pada artikel ini:
</p>
<ul>
    <li>Pengertian HTML</li>
    <li>Sejarah HTML</li>
    <li>Persiapan Software Pendukung</li>
    <li>Membuat Dokumen HTML</li>
    <li>Struktur Dasar HTML</li>
</ul>
<br>
<h3>Pengertian HTML</h3>
<p>Dari situs <b>www.w3schools.com</b> ada beberapa definisi dari HTML:</p>
<ul>
    <li>HTML merupakan singkatan dari Hypertext Markup Language</li>
    <li>HTML merupakan bahasa standar yang digunakan untuk membuat halaman web</li>
    <li>HTML menggambarkan struktur halaman web yang berisi kumpulan elemen yang memberitahu browser bagaimana konten harus ditampilkan</li>
</ul>
<p>Selain definisi dari situs <b>www.w3schools.com</b> saya juga mendapatkan definisi dari <b>wikipedia</b> yaitu: 
bahasa markup/markah standar untuk dokumen yang dirancang untuk ditampilkan di peramban internet.</p>
<p>Dari dua definisi diatas bisa kita simpulkan bahwa HTML tidak termasuk kategori bahasa pemrograman, karena bahasa pemrograman biasanya 
    memiliki variabel dan tipe data yang bisa digunakan untuk memecahkan suatu masalah, namun HTML hanya berisi kumpulan tag yang terdiri dari elemen dan atribut 
    yang digunakan untuk memberitahu browser bagaimana konten akan ditampilkan dan disajika ke user.
</p>
<p>HTML tidak bekerja sendirian, dalam prakteknya HTML hanya digunakan untuk menampilkan konten dan membuat struktur, dibantu dengan CSS yang digunakan untuk memberikan 
    style ke konten web nya agar lebih menarik dan juga dengan bantuan javascript agar halaman web lebih interaktif, serta bahasa pemrograman lainnya jika diperlukan. Namun pada 
    tutorial seri ini kita hanya akan fokus untuk belajar HTML sampai kita bisa membuat sebuah struktur web sendiri.
</p>
<br>
<h3>Sejarah HTML</h3>
<p>
Pada tahun 1980 seorang ahli fisika, Tim Berners-Lee, dan juga seorang kontraktor di CERN 
(Organisasi Eropa untuk Riset Nuklir) mengusulkan dan menyusun ENQUIRE, sebuah sistem untuk 
ilmuwan CERN dalam membagi dokumen. Sembilan tahun kemudian, Berners-Lee mengusulkan adanya 
sistem markah berbasis internet. Berners-Lee menspesifikasikan HTML dan menulis jaringan 
beserta perangkat lunaknya di akhir 1990. Pada tahun yang sama, Berners-Lee dan Robert Cailliau, 
insinyur sistem data CERN berkolaborasi dalam sebuah permintaan untuk pendanaan, namun tidak diterima 
secara resmi oleh CERN. Di catatan pribadinya sejak 1990 dia mendaftar "beberapa dari banyak daerah yang 
menggunakan hypertext" dan pertama-tama menempatkan sebuah ensiklopedia.
</p>
<center>
<img src="timbernerslee.jpg" class="img-responsive img-thumbnail">
<figcaption>Foto Tim Berners Lee</figcaption>
</center>
<p>
Penjelasan pertama yang dibagi untuk umum dari HTML adalah sebuah dokumen yang disebut "Tanda HTML", 
pertama kali disebutkan di Internet oleh Tim Berners-Lee pada akhir 1991. Tanda ini menggambarkan 18 elemen awal 
mula, versi sederhana dari HTML. Kecuali untuk tag hyperlink, yang sangat dipengaruhi oleh SGMLguid, in-house 
Standard Generalized Markup Language (SGML) berbasis format dokumen di CERN. Sebelas elemen ini masih ada di 
HTML 4.
</p>
<p>
HTML adalah bahasa markah yang digunakan peramban untuk menafsirkan dan menulis teks, gambar dan bahan lainnya ke 
dalam halaman web secara visual maupun suara. Karakteristik dasar untuk setiap item dari markah HTML didefinisikan 
di dalam peramban, dan karakteristik ini dapat diubah atau ditingkatkan dengan menggunakan tambahan halaman web 
desainer CSS. Banyak elemen teks ditemukan di laporan teknis ISO pada tahun 1988 TR 9537 Teknik untuk menggunakan 
SGML, yang pada gilirannya meliputi fitur bahasa format teks awal seperti yang digunakan oleh komandan RUNOFF 
dikembangkan pada awal 1960-an untuk sistem operasi: perintah-perintah format ini berasal dari perintah yang 
digunakan oleh pengetik untuk memformat dokumen CTSS secara manual. Namun, konsep SGML dari markah umum didasarkan 
pada unsur-unsur daripada hanya efek cetak, dengan pemisahan struktur dan markah juga; HTML telah semakin bergerak 
ke arah ini dengan CSS.
</p>
<p>
Sumber: <b>wikipedia</b>.
</p>
<br>
<h3>Persiapan Software Pendukung</h3>
<p>
Untuk mulai belajar HTML ada 2 software yang perlu kita siapkan:
</p>
<ul>
    <li>Web Browser</li>
    <li>Teks Editor</li>
</ul>
<p>
Jika mendengar kata web browser pasti sudah tidak asing lagi, karena setiap komputer pasti memiliki web browser untuk browsing di internet 
ataupun untuk membuka situs <b>Koder Nusantara</b>, ada banyak web browser yang bisa digunakan seperti Chrome, Firefox, Opera, dll.
</p>
<p>
Dalam seri tutorial ini saya akan menggunakan Chrome, namun jika teman-teman tidak menggunakan Chrome juga tidak masalah, gunakan saja yang sering kalian gunakan.
</p>
<p>
Selanjutnya kita persiapkan sebuah teks editor, ada banyak juga jenis dari teks editor, dan salah satu yang mungkin familiar adalah Notepad yang merupakan teks editor 
bawaan dari sistem operasi windows. Namun tidak saya sarankan kalian menggunakan Notepad karena akan sulit atau memakan waktu jika digunakan untuk membuat program. Maka 
dari itu alternatifnya kita gunakan teks editor yang sering digunakan programmer yang biasa disebut Kode Editor, ada banyak jenis Kode Editor diantaranya: Visual Studio Code, 
Sublime Text, Atom, Notepad++, dll.
</p>
<p>
Yang akan saya gunakan pada seri tutorial ini adalah Visual Studio Code. Saya menggunakan Visual Studio Code juga tidak memiliki alasan tersendiri, hanya saja saya nyaman menggunakannya :v.
</p>
<p>
Jika teman-teman ingin menggunakan Visual Studio Code juga, silahkan langsung download di situs resminya <b>code.visualstudio.com/download</b> lalu download sesuai sistem operasi yang digunakan.
</p>
<center>
<img src="visualstudiodownload.png" class="img-responsive img-thumbnail">
<figcaption>Halaman : <a href="https://code.visualstudio.com/download">code.visualstudio.com/download</a></figcaption>
</center>
<p>
Jika sudah didownload, langsung saja di instal atau dipasang seperti installasi aplikasi pada umumnya. 
</p>
<br>
<h3>Membuat Dokumen HTML</h3>
<p>
Untuk membuat sebuah dokumen HTML, sebenarnya caranya cukup sedehana, yaitu kita tinggal menyimpan file dengan ekstensi <b>.html</b>, bagi yang belum tau ekstensi adalah 
format file, seperti .jpg .png .mp4 namun ekstensi .html digunakan untuk membuat dokumen HTML. Untuk memberi ekstensi tinggak kalian selipkan dibelakang nama dokumennya. Contoh 
nanti kita akan memubuat file HTML dengan nama <b>belajarhtml.html</b>
</p>
<p>
Sekarang mari kita mulai membuat dokumen HTML dengan membuka teks editor
</p>
<center>
<img src="tutor1.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Setelah teks editor terbuka, kita buat file baru dengan cara <b>File > New File</b> atau bisa menggunakan tombol keyboard <b>CTRL + N</b> 
lalu akan muncul sebuah file dengan nama <b>Untitled-1</b> biasanya
</p>
<center>
<img src="tutor2.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Selanjutnya isi file tersebut dengan teks terserah kalian. Contohnya disini saya isi "Hello World". Ini hanya sebagai contoh, jadi tidak saya wajibkan
</p>
<center>
<img src="tutor3.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Jika sudah simpan file tersebut dengan cara <b>File > Save</b> atau dengan tombol keyboard <b>CTRL + S</b>
</p>
<center>
<img src="tutor4.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Lalu simpan dengan nama <b>belajarhtml.html</b> dan lokasi penyimpannya terserah kalian, pastikan lokasinya tidak lupa
</p>
<center>
<img src="tutor5.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Lalu cari dimana kalian menyimpan file tadi dan buka menggunakan web browser
</p>
<center>
<img src="tutor6.png" class="img-responsive img-thumbnail gambar">
</center>
<br>
<h3>Struktur Dasar HTML</h3>
<p>
Struktur dasar HTML merupakan rangkaian sintaks HTML yang kalian butuhkan untuk membentuk sebuah halaman HTML atau halaman web. Berikut struktur dasar 
HTML yang kita gunakan
</p>
<div style="background-color: #1e1e1e; color: #d4d4d4; font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; overflow: scroll; padding: 10px; white-space: pre;"><div><span style="color: grey;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span>&nbsp;<span style="color: #9cdcfe;">html</span><span style="color: grey;">&gt;</span></div><div><span style="color: grey;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: grey;">&gt;</span>Belajar&nbsp;HTML<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">h1</span><span style="color: grey;">&gt;</span>Hello&nbsp;World<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">h1</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: grey;">&gt;</span></div><div><span style="color: grey;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: grey;">&gt;</span></div></div>
<p>
Masukan struktur diatas ke teks editor dan coba lihat hasilnya di browser
</p>
<center>
<img src="tutor7.png" class="img-responsive img-thumbnail gambar">
</center>
<p>
Berikut penjelasan masing-masing bagiannya:
</p>
<p>
<b>&lt;!DOCTYPE html&gt;</b> digunakan untuk menandakan bahwa menandai bahwa kita menggunakan HTML5
<br>
<b>&lt;html&gt;</b> merupakan&nbsp; sintaks pembuka html yang memiliki tag penutup diakhir code yaitu <b>&lt;/html&gt;</b>
<br>
<b>&lt;head&gt;</b> sintaks bagian head yang memiliki penutup <b>&lt;/head&gt;</b> biasanya sintaks ini berisi bagian yang tidak menjadi konten web, seperti judul tab, memasukan css atau javascript dan lainnya.
<br>
<b>&lt;title&gt;</b> memiliki sintaks penutup <b>&lt;/title&gt;</b> yang digunakan untuk membuat judul tab halaman, pada contoh ini kita membuat judul tabnya menjadi Belajar HTML
<br>
<b>&lt;body&gt;</b> memiliki sintaks penutup <b>&lt;/body&gt;</b> merupakan sintaks yang berisi konten yang ditampilkan dihalaman, Pada contoh ini kita menampilkan teks Hello World yang menggunakan sintaks <b>&lt;h1&gt; ... &lt;/h1&gt;</b> yang merupakan sintaks untuk membuat heading, heading akan saya bahas pada artikel lainnya
<br><br>
Dan juga disini sintak ada yang memiliki penutup dan ada yang tidak memiliki penutup, hal ini akan saya bahas pada materi berikutnya
</p>
<br>
<br>
<p>
Mungkin itu saja sedikit penjelasan awal dari HTML, pada artikel ini kita sudah belajar untuk membuat dokumen HTML dan Struktur HTML, 
Selanjutnya kita akan belajar <a href="../element">Mengenal Elemen dan Atribut HTML</a>.
</p>
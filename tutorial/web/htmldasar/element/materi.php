<h1>
    Mengenal Element dan Atribut dalam HTML
</h1>
<hr>
<p>
Selamat datang lagi di situs <b>Koder Nusantara</b>, setelah belajar tentang perkenalan dari HTML dan membuat dokumen serta 
struktur dasar dari HTML pada artikel sebelumnya, kalian pasti sudah melihat beberapa element yang digunakan dalam 
struktur tersebut. Nah pada artikel kali ini kita akan membahas apa itu element dan juga saya tambah pembahasan tentang atribut 
dalam HTML. Jadi tanpa banyak basa-basi, berikut pembahasannya.
</p>
<br>
<h3>Apa Itu Element ?</h3>
<p>
Dalam HTML, satu buah element didefinisikan berupa tag pembuka, konten, dan tag penutup seperti pada contoh 
ilustrasi dibawah ini:
</p>
<img src="1.png" class="img-responsive img-thumbnail gambar">
<p>
Ilustrasi diatas, merupakan bentuk dari pembuatan element dalam HTML, contoh prakteknya seperti berikut ini:
</p>
<img src="2.png" class="img-responsive img-thumbnail gambar">
<p>
Contoh diatas merupakan elemen <b>h1</b> atau element untuk membuat heading, apa itu heading akan saya bahas di artikel berikutnya. 
Namun perlu dipahami bahwa tidak semua elemen berupa memiliki tag pembuka dan tag penutup, ada juga element yang 
hanya berisi satu tag. contohnya tag <b>&#60;br&#62;</b> yang merupakan tag untuk membuat baris baru, atau <b>&#60;hr&#62;</b> yang 
merupakan tag untuk membuat garis horizontal. Dan masih banyak lagi tag tanpa penutup lainnya yang tidak bisa saya bahas 
satu persatu karena terlalu panjang. Lebih lengkapnya kalian cari saja sendiri di internet pasti banyak yang membahasnya.
</p>
<p>
Element HTML bisa atau bahkan selalu bersifat nested atau bercabang-cabang, seperti contoh struktur HTML berikut
</p>
<div style="background-color: #1e1e1e; color: #d4d4d4; font-family: Consolas, &quot;Courier New&quot;, monospace; font-size: 14px; line-height: 19px; overflow: scroll; padding: 10px; white-space: pre;"><div><span style="color: grey;">&lt;!</span><span style="color: #569cd6;">DOCTYPE</span>&nbsp;<span style="color: #9cdcfe;">html</span><span style="color: grey;">&gt;</span></div><div><span style="color: grey;">&lt;</span><span style="color: #569cd6;">html</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">head</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">title</span><span style="color: grey;">&gt;</span>Belajar&nbsp;HTML<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">title</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">head</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">body</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;</span><span style="color: #569cd6;">h1</span><span style="color: grey;">&gt;</span>Hello&nbsp;World<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">h1</span><span style="color: grey;">&gt;</span></div><div>&nbsp;&nbsp;&nbsp;&nbsp;<span style="color: grey;">&lt;/</span><span style="color: #569cd6;">body</span><span style="color: grey;">&gt;</span></div><div><span style="color: grey;">&lt;/</span><span style="color: #569cd6;">html</span><span style="color: grey;">&gt;</span></div></div>
<br>
<p>
Pada contoh struktur diatas, elemen <b>html</b> berisi elemen <b>head</b> dan <b>body</b>, dan elemen <b>head</b> berisi 
elemen <b>title</b>, dan elemen <b>body</b> berisi elemen <b>h1</b>. Hal itu selalu dilakukan sampai membentuk halaman web yang 
kompleks.
</p>
<p>
HTML5 membuat tag HTML jadi tidak case-sensitif, bagi yang tidak tau jadi <b>case-sensitif</b> merupakan sifat yang membedakan 
antara huruf besar dan huruf kecil, contohnya "BAMBANG" akan dianggap berbeda dengan "bambang" karena huruf besar dan huruf kecil 
walaupun kedua kata itu bacanya sama.
</p>
<p>
Jadi dengan kata lain dalam HTML5 <b>&#60;p&#62;</b> akan sama dengan <b>&#60;P&#62;</b>. Walaupun begitu, pada prakteknya, kita lebih sering tetap menggunakan huruf kecil untuk mendefinisikan elemen.
</p>
<br>
<h3>Apa Itu Atribut ?</h3>
<p>Selesai membahas tentang elemen, sekarang kita akan mulai membahas tentang atribut. <strong>Atribut</strong> biasanya menyimpan informasi dari elemen tersebut, yang berupa sumber link, id, class, dll.</p>
<p>
Dalam prakteknya, atrbut biasanya dipasang untuk mendampingi elemen, seperti contoh ilustrasi berikut
</p>
<img src="3.png" class="img-responsive img-thumbnail gambar">
<p>
Atribut akan dipasang jika dibutuhkan, contoh salah satu element yang membutuhkan atribut adalah 
element <b>img</b> atau element untuk input gambar, nanti elemen ini akan kita bahas pada materi yang lainnya, sekarang 
perhatkan contoh berikut
</p>
<img src="4.png" class="img-responsive img-thumbnail gambar">
<p>
Pada contoh diatas, kita membutuhkan satu atribut yaitu <b>src</b> yang merupakan atribut untuk memberikan informasi sumber gambar 
yang ditampilkan atau lokasi gambar yang ingin ditampilkan, bisa berupa link gambar secara online <b>(Absolute URL)</b> atau lokasi 
posisi gambar dalam sebuah file web yang kita gunakan <b>(Relative URL)</b>.
</p>
<p>
Sekedar informasi <b>img</b> juga termasuk ke dalam tag tanpa penutup, jadi tidak usah bingung kok pada contoh diatas tidak saya beri penutup
</p>
<p>
Selain itu, dalam satu element, bisa diisi dengan labih dari satu atribut, tergantung kebutuhan pengembangan web tersebut
</p>
<img src="5.png" class="img-responsive img-thumbnail gambar">
<p>
Pada contoh diatas saya tambah satu atribut lagi yaitu <b>width</b> yang berfungsi untuk menentukan lebar konten, atau jika 
dalam element <b>img</b> jadi untuk menentukan lebar gambar.
</p>
<p>
Mungkin itu saja materi tentang Element dan Atribut dalam HTML, semoga kalian paham, jika belum paham bisa dibaca ulang. Selanjutnya kita 
akan belajar tentang <a href="../komentar">Membuat Komentar di Dalam Code HTML</a>, apa maksudnya silahkan belajar di artikel berikutnya.
</p>
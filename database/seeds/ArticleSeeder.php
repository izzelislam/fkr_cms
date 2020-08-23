<?php

use Illuminate\Database\Seeder;
use App\Model\Article;
use Illuminate\Support\Str;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::truncate();

        Article::create(
        	[
        		'user_id'=>1,
        		'category_id'=>1,
        		'title'=>'HUT Kemerdekaan ke-75 dan Upaya Merawat Pancasila sebagai Ideologi Bangsa',
        		'content'=>'KOMPAS.com – Sudah 75 tahun lamanya Bung Karno dan Bung Hatta memproklamasikan kemerdekaan bangsa Indonesia. Tentu tak hanya kedua tokoh ini yang punya peran penting dalam meraih kemerdekaan bangsa, tetapi juga perjuangan tanpa henti dari para pahlawan dan pendiri bangsa lain. Selain itu, proklamasi kemerdekaan Indonesia juga bukan merupakan peristiwa yang terjadi secara tiba-tiba. Ada suatu proses panjang kemerdekaan yang salah satu prosesnya adalah penentuan dasar negara untuk mengawal Indonesia pasca merdeka. Wakil Ketua MPR RI Achmad Basarah mengatakan, pada momentum itulah para pendiri bangsa melakukan pertemuan di sidang Badan Penyelidik Usaha-usaha Persiapan Kemerdekaan Indonesia (BPUPKI) untuk menentukan dasar negara',
        		'image_file'=>'',
        		'slug'=>Str::slug('HUT Kemerdekaan ke-75 dan Upaya Merawat Pancasila sebagai Ideologi Bangsa'),
        	]
        );
		
		Article::create(
			[
				'user_id'=>2,
				'category_id'=>2,
				'title'=>'Hasil Evaluasi Pertandingan Uji Coba Perdana Arema FC Sport ',
				'content'=>'MALANG, KOMPAS.com - Setelah dua pekan menjalani latihan rutin, Arema FC menggelar pertandingan uji coba pertama melawan Arema U-20 di Stadion Kanjuruhan, Kabupaten Malang, Sabtu (15/8/2020) pagi. Perbedaan kualitas dan pengalaman membuat Dendi Santoso dan kawan-kawan menang mudah. Akan tetapi, asisten pelatih Charis Yulianto menegaskan hasil pertandingan bukan tujuan dari uji coba. "Yang pasti bukan hasil pertandingannya. Saya cukup puas anak-anak sudah bekerja keras meskipun hanya sebatas uji coba," kata asisten pelatih berusia 42 tahun kepada Kompas.com. Baca juga: Arema FC Upayakan Kembalinya Dua Legiun Asing Laga ini menjadi uji coba pertama Arema FC setelah kompetisi diliburkan sejak bulan Maret lalu. Charis Yulianto mengatakan ada beberapa catatan bagi pemain, khususnya lini belakang yang sempat kedodoran saat mendapatkan serangan tim lawan. "Ada yang harus kami perbaiki kedepannya, terutama organisasi lini belakang, karena masih ada celah yang bisa dimanfaatkan lawan," ucap pria asal Blitar itu. Nilai plusnya, Charis Yulianto, melihat hasil latihan dua pekan terakhir mulai menunjukkan Arema FC sudah berada di jalur yang benar. Fisik menjadi perhatian pertama karena menjadi pondasi untuk bisa melanjutkan latihan ke tahap selanjutnya. Baca juga: Tidak Ada Degradasi, Arema FC Pasang Kriteria Khusus untuk Calon Pelatih Baru "Tetapi, yang terpenting selama dua pekan ini progresnya cukup bagus, khususnya menyangkut kondisi fisik pemain, karena saat ini kami masih fokus dengan hal tersebut," tutur pelatih yang pernah menjadi kapten Arema FC itu. Pada pertandingan uji coba tersebut, Arema FC berhasil mencetak lima gol yang masing-masing dilesakkan Dedik Setiawan, Dendi Santoso, Syaiful Indra, Elias Alderete, dan pemain muda Titan Agung. Semua pemain yang aktif menjalani latihan mendapatkan kesempatan bermain, kecuali Feby Eka Putra yang izin karena keperluan keluarga.',
				'image_file'=>'',
				'slug'=>'Hasil Evaluasi Pertandingan Uji Coba Perdana Arema FC Sport ',
			]
		);

		Article::create(
			[
				'user_id'=>3,
				'category_id'=>1,
				'title'=>'Resep Sambal Goreng Ati dan Kentang, Lauk Nasi Kuning Tumpeng Kemerdekaan',
				'content'=>'KOMPAS.com - Sambal goreng hati sering dijadikan lauk untuk makan tumpeng. Cara membuanya sambal goreng hati ini tak sulit dan awet disimpan lama. Namun sebelumnya kamu memerlukan hati ayam atau sapi, kemudian kentang, santan cabai dan bumbu-bumbu lainnya. Baca juga: Resep Sambal Goreng Krecek Yogyakarta, Olahan Kerupuk Kulit Sapi Dalam buku "Terampil Membuat Aneka Tumpeng" (2020) oleh Sufi S.yahyono, DapoerLezat4, penerbit PT Gramedia Pustaka Utama, memaparkan cara membuat sambal goreng hati dan kentang. Resep Sambal Goreng Hati dan Kentang Bahan utama: 750 gram hati sapi (kalau doyan hati ayam bisa ganti) 500 gram kentang, kupas bersih 3 buah cabai merah besar, buang bijinya, iris tipis serong 3 lembar daun salam 3 cm lengkuas, memarkan 500 ml santan dari 1/2 butir kelapa parut Minyak goreng secukupnya Bumbu halus: 5 butir bawang merah 3 siung bawang putih 4 buah cabai keriting 1 sdt gula pasir 1 sdt garam halus, atau sesuai selera Cara memasak sambal goreng hati dan kentang: 1. Kukus matang hati sapi, kemudian potong dadu kecil-kecil dan sisihkan. Baca juga: Sejarah Sambal Tumpang, Makanan dari Tempe Busuk yang Ada Sejak 1814 2. Potong kentang bentuk dadu kecil, goreng hingga matang dan cukup kering, tiriskan jika sudah sisinkan terlebih dahulu. 3. Panaskan 2 sendok makan minyak goreng, tumis cabai merah besar yang sudah diiris sebelumnya. Tumis hingga cukup layu, kemudian angkat. 4. Tambahkan 3 sendok makan minyak goreng dalam wajan bekas menumis cabai merah. Tumis bumbu halus, daun salam, dan lengkuas hingga harum. 5. Masukkan hati sapi, aduk rata. Tuangkan santan, masak sambil diaduk perlahan hingga santan mengental dan hampir habis. Baca juga: Resep Tumpeng Nasi Kuning, Hidangan untuk Rayakan 17 Agustus 6. Masukkan kentang goreng, masak sambil diaduk hingga tercampur rata dan bumbu meresap. Angkat, pindahkan ke piring saji',
				'image_file'=>'',
				'slug'=>'Resep Sambal Goreng Ati dan Kentang, Lauk Nasi Kuning Tumpeng Kemerdekaan',
			]
		);

		Article::create(
			[
				'user_id'=>3,
				'category_id'=>4,
				'title'=>'Tips Aman Naik Motor Saat Hujan, Waspada Jalan Berlubang',
				'content'=>'JAKARTA, KOMPAS.com - Berkendara menggunakan sepeda motor saat hujan turun harus ekstra hati-hati. Selain kondisi jalanan menjadi lebih licin , juga karena adanya ancaman lain yang bisa mengganggu perjalanan, seperti adanya jalan berlubang. Dalam kondisi hujan dan jalanan tergenang, keberadaan jalan berlubang memang sulit dideteksi oleh pengendara. Apalagi, jika kondisi penerangan jalan di sekitar sangat minim. Genangan air biasanya akan menutup jalan yang berlubang sehingga seolah jalanan tidak rusak atau tidak berlubang. Jika tidak berhati-hati, pengendara kendaraan roda dua bisa terperosok dan mengalami kecelakaan. Baca juga: Saat Musim Hujan, Pengguna Motor Jangan Lakukan 4 Hal Ini Training Director Jakarta Defensive Driving Consulting ( JDDC) Jusri Pulubuhu mengatakan, berkendara dalam kondisi hujan berbeda dengan kondisi terang. Pohon pisang ditanam warga di Jalan Slamet Riyadi yang berlubang akibat kebocoran saluran pipa air tepatnya di kawasan Kleco, Solo, Jawa Tengah, Senin (25/11/2019). Lihat Foto Pohon pisang ditanam warga di Jalan Slamet Riyadi yang berlubang akibat kebocoran saluran pipa air tepatnya di kawasan Kleco, Solo, Jawa Tengah, Senin (25/11/2019).(KOMPAS.com/LABIB ZAMANI) “Saat cuaca terang pengendara hanya perlu memperhatikan 4 sisi keamanan yaitu depan, belakang, kanan, dan juga sisi kiri,” ujarnya kepada Kompas.com beberapa waktu lalu. Tetapi, Jusri menambahkan, ketika berkendara di musim hujan pengendara harus menambah dua sisi lagi, yakni sisi bawah dan sisi atas. “Sisi bawah itu adalah lubang di jalan sedangkan sisi atas adalah pohon, baliho atau konstruksi bangunan,” ucapnya. Baca juga: Mulai Musim Hujan, Pengguna Motor Jangan Asal Berteduh Jusri mengatakan, kewaspadaan pengemudi saat berkendara dalam kondisi hujan harus ditingkatkan. Hal ini karena tidak sedikit kejadian kecelakaan yang terjadi saat hujan salah satunya disebabkan karena adanya lubang di jalanan. Seorang pengendara juga bisa memperhatikan indikator dari depannya',
				'image_file'=>'',
				'slug'=>'Tips Aman Naik Motor Saat Hujan, Waspada Jalan Berlubang',
			]
		);

		Article::create(
			[
				'user_id'=>1,
				'category_id'=>3,
				'title'=>'Mitos atau Fakta, Oli Sintesis Tak Cocok untuk Mobil Lawas?',
				'content'=>'AKARTA, KOMPAS.com - Perkembangan teknologi pada mesin kendaraan bermotor, baik mobil maupun motor, membuat sedikit perubahan terhadap pola dan metode perawatannya. Prihal pergantian pelumas atau oli misalkan, pemilik harus menyesuaikan kembali spesifikasinya dalam upaya mendapatkan hasil optimal. Oleh sebab itu, timbul anggapan bahwa menggunakan oli yang berspesifikasi tinggi khususnya sintesis terhadap mobil tahun tua alias jadul punya manfaat tersendiri. Namun di lain sisi filter oli bisa cepat kotor, benarkah demikian? Baca juga: Mitos atau Fakta, Ganti-ganti Merek Oli Bisa Merusak Mesin? Ilustrasi ganti oli atau pelumas mesin mobil Lihat Foto Ilustrasi ganti oli atau pelumas mesin mobil(http://www.jupitergaragesheffield.co.uk) Dihubungi Kompas.com, Executive Coordinator Technical Service Division PT Astra Daihatsu Motor (ADM) Bambang Supriyadi mengatakan bahwa, pelumas sintesis tidak cocok untuk semua mobil. "Untuk mobil produksi lama, karena ukuran kerapatan antara seher dan rumahnya tidak begitu rapat dibandingkan mobil terkini, pelumas yang cocok biasanya yang berbahan mineral. Kalau dipaksakan, biasanya terjadi loss," kata dia. Hal serupa juga dikatakan pemilik bengkel mobil Star Racing Kebon Jeruk, Widodo. Menurut dia, pemakaian oli mineral pada mobil tua mampu menempel di dinding mesin dibandingkan oli sintesis. Mekanik sedang mengganti oli Lihat Foto Mekanik sedang mengganti oli(Agung Kurniawan) "Oli sintetik yang bening dan non-sulfur, karena sifatnya membersihkan mesin, itu justru akan membuat mineral itu luntur. Nanti pengaruh ke mesin," ujar Widodo. Adapun dampak yang dihasilkan beragam, mulai dari performa mesin yang kurang optimal dan kerusakan bagian lainnya. Jadi sebaiknya gunakan oli sesuai dengan spesifikasi mesin, jangan dipaksakan.',
				'image_file'=>'',
				'slug'=>'Mitos atau Fakta, Oli Sintesis Tak Cocok untuk Mobil Lawas?',
			]
		);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            //DAPUR
          [
            "cate_id" => '1',
            "nama" => "Pisau Buah",
            "slug" => "Pisau-Buah",
            "small_description" => "Pisau Stainless Steel",
            "description" => "Pisau Stainless Steel yang Anti Karat dan Tajam",
            "original_price" => 8000,
            "selling_price" => 10000,
            "image" => "pisau buah.jpg",
            "qty" => 14,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "pisau buah",
            "meta_keyword" => "pisau,buah,stainless steel,stainless,steel",
            "meta_description" => "macam-macam pisau,pisau tajam,pisau stainless steel",
            ],
            [
            "cate_id" => '1',
            "nama" => "Kompor Rinnai",
            "slug" => "Kompor-Rinnai",
            "small_description" => "Rinnai Kompor Gas 2 Tungku",
            "description" => "RI302S dikenal api super hemat karena pemakaian gas lebih hemat 20% daripada yang lain. ",
            "original_price" => 315000,
            "selling_price" => 285000,
            "image" => "kompor rinnai.jpg",
            "qty" => 9,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "kompor rinnai",
            "meta_keyword" => "kompor, kompor gas, rinnai, stainless steel",
            "meta_description" => "macam macam kompor merek rinnai",
            ],


          //ELEKTRONIK
            [
            "cate_id" => '2',
            "nama" => "Philips Air Purifier 1000",
            "slug" => "Philips-Air-Purifier-1000",
            "small_description" => "Philips Air Purifier, 1000 Series, NanoProtect HEPA S3 filter",
            "description" => "Pemurnian unggul yang bisa digunakan di ruangan dengan luas maksimal 63 m2 Vitashield IPS dengan desain aerodinamis dan Filter NanoProtect Pro memiliki laju pemberian udara bersih yang ditingkatkan hingga 270 m3/jam. Sistem ini dapat menghilangkan partikel ultra-kecil hingga 0,02um secara efektif Selain itu, sistem ini menyaring gas berbahaya seperti formaldehida dan TVOC.",
            "original_price" => 3500000,
            "selling_price" => 2189000,
            "image" => "philips air purifer.jpg",
            "qty" => 7,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Philips Air Purifier 1000",
            "meta_keyword" => "philips, air purifier, purifier, pendingin ruangan",
            "meta_description" => "macam macam alat elektronik pendingin ruangan",
            ],
            [
            "cate_id" => '2',
            "nama" => "Toshiba LED TV",
            "slug" => "Toshiba-LED-TV",
            "small_description" => "HD Smart Android 32inch - 32V35KP ",
            "description" => "Blockbuster performance guaranteed. Hadirkan bioskop di rumah. FILMMAKER MODE dan HDR menghadirkan pengalaman menonton lebih imersif. Hubungkan dengan platform streaming favorit Anda untuk mengakses konten yang disukai.",
            "original_price" => 10403000,
            "selling_price" => 9800000,
            "image" => "Toshiba LED TV.jpg",
            "qty" => 17,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Toshiba LED TV",
            "meta_keyword" => "TV, Thosiba, TV thosiba, TV Box",
            "meta_description" => "macam-macam TV merek Toshiba",
            ],


          //FASHION
            [
            "cate_id" => '3',
            "nama" => "Mukena Zianisa Border",
            "slug" => "Mukena-Zianisa-Border",
            "small_description" => "Mukena Zianisa Border Hadiza Series Allsize - Blue",
            "description" => "Dengan ukuran plus size dan bahan teradem yang membuat Bunda lebih khusyuk ketika beribadah, Padupadan warna yang cantik serta tekstur kainnya yang lembut dan dingin membuat bunda nyaman dalam beribadah",
            "original_price" => 269000,
            "selling_price" => 144000,
            "image" => "Mukena Zianisa Border.jpg",
            "qty" => 21,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Mukena Zianisa Border",
            "meta_keyword" => "mukena, alat sholat",
            "meta_description" => "macam-macam mukena untuk sholat",
            ],
            [
            "cate_id" => '3',
            "nama" => "Hodie Sweater",
            "slug" => "Hodie-Sweater",
            "small_description" => "HOODIE POLOS WANITA/SWEATER POLOS PRIA JAKET",
            "description" => "Hoodie bahan katun FLECEE Bahannya lembut Bahan adem, Nyaman dipakai, jahitan rapi, tidak mudah luntur ",
            "original_price" => 58000,
            "selling_price" => 67500,
            "image" => "Hodie Sweater.jpg",
            "qty" => 32,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Hodie Sweater",
            "meta_keyword" => "hodie, hodie polos, sweater, jaket, jaket wanita, jaket pria",
            "meta_description" => "macam-macam hodie dan sweater",
            ],


          //BUKU
            [
            "cate_id" => '4',
            "nama" => "Buku The Intelligent Investor ",
            "slug" => "Buku-The-Intelligent-Investor ",
            "small_description" => "Buku The Intelligent Investor (Edisi Revisi) . Benjamin Graham HC",
            "description" => "Buku ini menggambarkan dengan sangat brilian kerangka emosional dan alat-alat analisis penting penentu sukses finansial seorang investor. ",
            "original_price" => 195000,
            "selling_price" => 165700,
            "image" => "Buku The Intelligent Investor.jpg",
            "qty" => 4,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "",
            "meta_keyword" => "",
            "meta_description" => "",
            ],
            [
            "cate_id" => '4',
            "nama" => "Detektif Conan VS Men Of The Black Organization",
            "slug" => "Detektif-Conan-VS-Men-Of-The-Black-Organization",
            "small_description" => "Detektif Conan VS Men Of The Black Organization vol.2",
            "description" => "Penyusunan kembali mata-mata CIA, Rena Mizunashi, ke organisasi hitam berhasil walau harus ditukar dengan kematian agen penyelidik FBI, Shuichi Akai!",
            "original_price" => 53000,
            "selling_price" => 45000,
            "image" => "Detektif Conan.jpg",
            "qty" => 25,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Detektif Conan",
            "meta_keyword" => "kartun, detektif conan",
            "meta_description" => "macam-macam buku komik dan kartun",
            ],


          //DEKORASI
            [
            "cate_id" => '5',
            "nama" => "Luxury Wall Decoration 3D",
            "slug" => "Luxury-Wall-Decoration-3D",
            "small_description" => "Luxury Wall Decoration 3D / Hiasan Dinding Daun Ginkgo Emas - A",
            "description" => "Material : Luxury Metal Iron Gold Size : 110cm x 55cm",
            "original_price" => 1600000,
            "selling_price" => 1452000,
            "image" => "Luxury Wall.jpg",
            "qty" => 9,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Luxury Wall Decoration 3D",
            "meta_keyword" => "dekorasi, hiasan, dekorasi tembok, hiasan dinding",
            "meta_description" => "macam macam dekorasi tembok rumah",
            ],
            [
            "cate_id" => '5',
            "nama" => "Rak Dinding Besi Dekorasi",
            "slug" => "Rak-Dinding-Besi-Dekorasi",
            "small_description" => "Rak Dinding Besi Dekorasi Bentuk Hexagonal Minimalis Modern Vintage",
            "description" => "memiliki fitur unggulan yaitu : 3 Titik Ambalan Utama, 2 Lubang Paku permanen, Cat Anti Karat, Pengaman Ambalan 10 Titik, Besi SNI Kualitas Tinggi",
            "original_price" => 80000,
            "selling_price" => 59999,
            "image" => "Rak Dinding Besi.jpg",
            "qty" => 6,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Rak Dinding Besi Dekorasi",
            "meta_keyword" => "dekorasi, rak, rak dinding, hiasan, dekorasi tembok, hiasan dinding",
            "meta_description" => "macam macam dekorasi tembok atau dinding rumah",
            ],


          //HOBI
            [
            "cate_id" => '6',
            "nama" => "Gitar Akustik Mandalika",
            "slug" => "Gitar-Akustik-Mandalika",
            "small_description" => "Gitar akustik Mandalika DL-02 Original",
            "description" => "Gitar Akustik Mandalika Premium Brand Original From Indonesia, Body Jumbo NEXCt Cutaway, suara yang dihasilkan beda banget dari Gitar sekelasnya, barang buatan INDONESIA with wooden pickguard",
            "original_price" => 550000,
            "selling_price" => 450000,
            "image" => "Gitar Akustik.jpg",
            "qty" => 21,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Gitar Akustik",
            "meta_keyword" => "Gitar, Akustik, Musik, Alat music",
            "meta_description" => "Kebutuhan hobi alat musik",
            ],
            [
            "cate_id" => '6',
            "nama" => "Gundam Transformers",
            "slug" => "Gundam-Transformers",
            "small_description" => "Gundam Transformers HGBD R09 SELTSAM 58305",
            "description" => "A deformed aircraft with special armaments such as a huge telescopic right arm, a large lance, and a shield launcher with a barrel",
            "original_price" => 288000,
            "selling_price" => 259000,
            "image" => "Gundam Transformers.jpg",
            "qty" => 8,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Gundam Transformers",
            "meta_keyword" => "gundam, transformers, rakit gundam",
            "meta_description" => "macam-macam mainan gundam",
            ],


          //GAMING
            [
            "cate_id" => '7',
            "nama" => "Mouse Gaming AULA S20",
            "slug" => "Mouse-Gaming-AULA-S20",
            "small_description" => "Mouse Gaming AULA S20 2400DPI RGB Driver Macro Software",
            "description" => "Bahan mirip kulit Rol karet Empat gigi DPI Tombol samping LOGO glow Plating flank Pergantian cepat dan sensitif",
            "original_price" => 110000,
            "selling_price" => 72500,
            "image" => "Mouse Gaming.jpg",
            "qty" => 44,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Mouse Gaming AULA S20",
            "meta_keyword" => "mouse, gaming, mouse gaming",
            "meta_description" => "macam-macam perlengkapan gaming",
            ],
            [
            "cate_id" => '7',
            "nama" => "Keybord Mouse Converter Controller Set",
            "slug" => "Keybord-Mouse-Converter-Controller-Set",
            "small_description" => "Game HP Mobile Phone Gaming Keybord Mouse Converter Controller Set",
            "description" => "PUBG Call of Duty Mobile Controller with Keyboard and Mouse.",
            "original_price" => 700000,
            "selling_price" => 650000,
            "image" => "Converter Mobile.jpg",
            "qty" => 4,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Keybord Mouse Converter Controller Set",
            "meta_keyword" => "Gaming mobile, converter mobile, converter keybord, converter mouse",
            "meta_description" => "macam-macam perlengkapan gaming",
            ],


          //HANDPHONE
            [
            "cate_id" => '8',
            "nama" => "XIAOMI 12 PRO 12/256",
            "slug" => "XIAOMI-2-PRO-12/256",
            "small_description" => "Xiaomi 12 Pro 12/256 Blue",
            "description" => "XIAOMI 12 PRO RAM 12GB ROM 256GB GARANSI RESMI 15 BULAN XIAOMI INDONESIA",
            "original_price" => 13100000,
            "selling_price" => 12999999,
            "image" => "Xioami.jpg",
            "qty" => 20,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Xiaomi 12 Pro 12/256 Blue",
            "meta_keyword" => "Xioami, smartphone, xioami 12 pro, handphone",
            "meta_description" => "macam-macam handphone berbagai merek",
            ],
            [
            "cate_id" => '8',
            "nama" => "Samsung Galay Z Fold 3 5G",
            "slug" => "Samsung-Galay-Z-Fold-3-5G",
            "small_description" => "Samsung Galay Z Fold 3 5G 16/512GB",
            "description" => "Samsung Galay Z Fold 3 5G 16/512GB 256GB Fold3 Garansi Resmi SEIN - 256GB INTER, Silver",
            "original_price" => 19450000,
            "selling_price" => 19350000,
            "image" => "Samsung.jpg",
            "qty" => 23,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Samsung Galay Z Fold 3 5G",
            "meta_keyword" => "samsung, smartphone, z fold, handphone",
            "meta_description" => "macam-macam smartphone berbagai merek",
            ],



          //KECANTIKAN
            [
            "cate_id" => '9',
            "nama" => "MS GLOW MEN Paket Maskulin",
            "slug" => "MS-GLOW-MEN-Paket-Maskulin",
            "small_description" => "MS GLOW MEN Paket Maskulin, FacialWash, Serum, BrightCream",
            "description" => "Energizer Facial Wash Membersihkan pori secara menyeluruh dan mencegah penyebab komedo dan jerawat",
            "original_price" => 350000,
            "selling_price" => 280000,
            "image" => "msglow.jpg",
            "qty" => 45,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "MS Glow Men Paket Maskulin",
            "meta_keyword" => "Ms Glow, Alat Kecantikan, Kecantikan, Skincare, Facial Wash",
            "meta_description" => "macam-macam kebutuhan perawatan wajah",
            ],
            [
            "cate_id" => '9',
            "nama" => "Whitening Day Cream Ms Glow",
            "slug" => "Whitening-Day-Cream-Ms-Glow",
            "small_description" => "Whitening Day Cream Ms Glow 100g",
            "description" => "Day cream ms glow dengan tekstur foundation super lembut bisa cover noda dan pori muka melindungi kulit dari paparan sinar matahari lansung efek glowing",
            "original_price" => 62000,
            "selling_price" => 55000,
            "image" => "msglow2.jpg",
            "qty" => 49,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Whitening Day Cream Ms Glow",
            "meta_keyword" => "Ms Glow, Alat Kecantikan, Kecantikan, Skincare, Facial Wash, Whitening Cream",
            "meta_description" => "macam-macam kebutuhan kecantikan",
            ],

        //KESEHATAN
          [
            "cate_id" => '10',
            "nama" => "Masker Softies Duckshape",
            "slug" => "Masker-Softies-Duckshape",
            "small_description" => "Masker Softies Duckshape Mask Surgical 30s",
            "description" => "Softies Duckshape Mask Surgical didesign khusus, sehingga tidak menyentuh mulut saat digunakan dan mengikuti bentuk wajah, meltblown dengan high VFE, PFE & BFE (99% filtrasi virus, partikel & bakteri), 3 lapis filter yang berfungsi untuk melindungi dari percikan air & nano partikel.",
            "original_price" => 75000,
            "selling_price" => 56100,
            "image" => "Masker Duckshape.jpg",
            "qty" => 97,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Masker Softies Duckshape",
            "meta_keyword" => "masker, kesehatan, masker duckshape",
            "meta_description" => "macam-macam kebutuhan kesehatan",
            ],
            [
            "cate_id" => '10',
            "nama" => "Vitalife Vitamin C",
            "slug" => "Vitalife-Vitamin-C",
            "small_description" => "Vitalife Vitamin C 30 Kapsul",
            "description" => "Vitalife C-500 mg merupakan suplemen mengandung Vitamin C untuk menjaga daya tahan tubuh",
            "original_price" => 39900,
            "selling_price" => 34440,
            "image" => "Vitalife Vitamin C.jpg",
            "qty" => 11,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Vitalife Vitamin C",
            "meta_keyword" => "vitamin, suplemen tubuh, vitamin c, daya tahan tubuh",
            "meta_description" => "macam-macam kebutuhan penunjang kesehatan",
            ],


          //KOMPUTER DAN LAPTOP
            [
            "cate_id" => '11',
            "nama" => "HP Victus 15-fa0011TX i5-12500H",
            "slug" => "HP-Victus-15-fa0011TX-i5-12500H",
            "small_description" => "HP Victus 15-fa0011TX i5-12500H RTX3050 512GB SSD 8GB Win11+OHS",
            "description" => "Windows 11 HomeIntel® Core™ i5-12500H (up to 4.5 GHz with Intel® Turbo Boost Technology, 18 MB L3 cache, 12 cores, 16 threads)",
            "original_price" => 16999000,
            "selling_price" => 14999000,
            "image" => "HP Victus.jpg",
            "qty" => 15,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "HP Victus 15-fa0011TX i5-12500H",
            "meta_keyword" => "laptop, merek hp, laptop HP",
            "meta_description" => "macam-macam laptop berbagai merek",
            ],
            [
            "cate_id" => '11',
            "nama" => "PC Gaming Dan Editing",
            "slug" => "PC-Gaming-Dan-Editing",
            "small_description" => "PC GAMING DAN EDITING CORE i5 FULL SET | SSD 120gb - GT 730",
            "description" => "Sudah Terintal Windows 10 Pro Activated, Aplikasi Dan Game",
            "original_price" => 5550000,
            "selling_price" => 5285000,
            "image" => "PC Gaming.jpg",
            "qty" => 7,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "PC Gaming Dan Editing",
            "meta_keyword" => "gaming, editing, PC, komputer, komputer rakitan, PC rakit",
            "meta_description" => "macam-macam komputer atau PC untuk berbagai kebutuhan",
            ],


          //LOGAM MULIA
            [
            "cate_id" => '12',
            "nama" => "Emas Antam 10 Gram",
            "slug" => "Emas-Antam-10-Gram",
            "small_description" => "Logam Mulia (Lm), Emas Batangan Antam 10 Gram",
            "description" => "Setiap Logam Mulia Yang Kami Jual Di Jamin Asli ( Bergaransi ) 100%, Kadar 999.9, Emas Murni Antam 24 Karat",
            "original_price" => 9975000,
            "selling_price" => 9645000,
            "image" => "Emas Antam.jpg",
            "qty" => 24,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Emas Antam 10 Gram",
            "meta_keyword" => "emas, logam mulia, perhiasan",
            "meta_description" => "macam-macam logam mulia",
            ],
            [
            "cate_id" => '12',
            "nama" => "Perak Asli Srh 100g",
            "slug" => "Perak-Asli-Srh-100g",
            "small_description" => "Perak Asli Srh 100g Silver SERTIFIKAT 100 G Logam Mulia",
            "description" => "Perak Batangan cocok untuk investasi selain emas batangan",
            "original_price" => 2400000,
            "selling_price" => 2300000,
            "image" => "Perak.jpg",
            "qty" => 27,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Perak Asli Srh 100g",
            "meta_keyword" => "perak, perhiasan, logam mulia",
            "meta_description" => "macam-macam logam mulia",
            ],


          //ALAT TULIS KANTOR
            [
            "cate_id" => '14',
            "nama" => "Pentonic BRT Pulpen",
            "slug" => "Pentonic-BRT-Pulpen",
            "small_description" => "Pentonic BRT Pulpen Sekolah Kantor Hitam Biru Merah Pen Alat Tulis",
            "description" => "Harga per 1 pcs Masukan variasi yang diinginkan tidak melalui chat! Tidak terima komplain warna. Pesanan dikirim sesuai variasi yang dipilih.",
            "original_price" => 6500,
            "selling_price" => 4999,
            "image" => "Pentonic.jpg",
            "qty" => 113,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Pentonic-BRT-Pulpen",
            "meta_keyword" => "bulpoint, pulpen, alat tulis",
            "meta_description" => "macam-macam alat tulis",
            ],
            [
            "cate_id" => '14',
            "nama" => "Pensil Faber Castell",
            "slug" => "Pensil Faber Castell",
            "small_description" => "Pensil Faber Castell 2B B 3B 4B 5B 6B 7B 8B HB H F 2H 3H 4H 5H 6H",
            "description" => "Terdiri dari Berbagai ketebalan : 6H, 5H, 4H, 3H, 2H, H, F, B, 2B, 3B, 4B, 5B, 6B, 7B, 8B",
            "original_price" => 4700,
            "selling_price" => 3700,
            "image" => "Pensil.jpg",
            "qty" => 119,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Pensil Faber Castell",
            "meta_keyword" => "pensil, alat tulis, faber castel",
            "meta_description" => "macam-macam alat tulis",
            ],


          //OLAHRAGA
            [
            "cate_id" => '15',
            "nama" => "Treadmill Listrik MultiFungsi",
            "slug" => "Treadmill-Listrik-MultiFungsi",
            "small_description" => "Treadmill Listrik MultiFungsi Twen T500MT Black - T500MT",
            "description" => "Feature: Twister 3 fungsi, hand pulse, massager, folding, USB MP3, Audio input, safety key, simple lubrication system.",
            "original_price" => 3200000,
            "selling_price" => 3099000,
            "image" => "Treadmill.jpg",
            "qty" => 77,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Treadmill Listrik MultiFungsi",
            "meta_keyword" => "alat olahraga, lari, treadmill",
            "meta_description" => "macam macam alat olahraga",
            ],
            [
            "cate_id" => '15',
            "nama" => "SVARGA Resistance Band",
            "slug" => "SVARGA Resistance Band",
            "small_description" => "SVARGA Resistance Band / Resistance Tubes 11 in 1 | 5 Strength Levels - POUCH",
            "description" => "Alat training teringan dan terlengkap dengan lebih dari 50 variasi latihan dan banyak pilihan beban.",
            "original_price" => 22500,
            "selling_price" => 20000,
            "image" => "SVARGA Resistance Band.jpg",
            "qty" => 18,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "SVARGA Resistance Band",
            "meta_keyword" => "svarga, resistance band, alat olahraga",
            "meta_description" => "macam-macam alat olahraga",
            ],


          //OTOMOTIF
            [
            "cate_id" => '16',
            "nama" => "SEAMETAL Sealing Strip Rubber",
            "slug" => "SEAMETAL Sealing Strip Rubber",
            "small_description" => "SEAMETAL Sealing Strip Rubber Pintu Bagasi Mobil Otomotif Double Layer",
            "description" => "proteksi dobel terhadap kebisingan, air, dan panas! Cocok digunakan di pintu, bagasi, dan kap mesin.",
            "original_price" => 15500,
            "selling_price" => 15000,
            "image" => "Sealing.jpg",
            "qty" => 54,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "SEAMETAL Sealing Strip Rubber",
            "meta_keyword" => "sealing mobil, rubber sealing, alat otomotif, perlengkapan otomotif",
            "meta_description" => "macam-macam perlengkapan otomotif",
            ],
            [
            "cate_id" => '16',
            "nama" => "Clavis Hook Offroud",
            "slug" => "Clavis-Hook-Offroud",
            "small_description" => "Clavis Hook Offroud",
            "description" => "ukuran 1/2 barang sesuai iklan redy stok",
            "original_price" => 255000,
            "selling_price" => 250000,
            "image" => "Clavis Hook Offroud.jpg",
            "qty" => 7,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Clavis Hook Offroud",
            "meta_keyword" => "clavis hoot, offroad, otomotif, alat hook",
            "meta_description" => "macam macam alat otomotif",
            ],


          //PERAWATAN HEWAN
            [
            "cate_id" => '17',
            "nama" => "Pet Pedicure",
            "slug" => "Pet-Pedicure",
            "small_description" => "Pet Pedicure / Perawatan Kuku Hewan Peliharaan",
            "description" => "Pelihara kuku anjing kesayangan anda dengan pet pedicure, alat ini aman & tidak menimbulkan rasa sakit pada anjing Anda.",
            "original_price" => 23400,
            "selling_price" => 22000,
            "image" => "Pet Pedicure.jpg",
            "qty" => 16,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Pet Pedicure",
            "meta_keyword" => "pedicure, kuku, anjing, perawatan hewan",
            "meta_description" => "macam-macam kebutuhan perawatan hewan",
            ],
            [
            "cate_id" => '17',
            "nama" => "Pet Dental Finger",
            "slug" => "Pet-Dental-Finger",
            "small_description" => "Pet Dental Finger Wipes Perawatan Sikat Gigi Hewan",
            "description" => "Pet Dental Care Finger Wipes ini merupakan tissue untuk membersihkan gigi anabul anda supaya tetap terjaga kebersihannya.",
            "original_price" => 46500,
            "selling_price" => 40000,
            "image" => "Pet Dental.jpg",
            "qty" => 22,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Pet Dental Finger",
            "meta_keyword" => "pet dental, anjing, gigi anjing, perawatan hewan",
            "meta_description" => "macam-macam kebutuhan perawatan hewan",
            ],


          //PERAWATAN TUBUH
            [
            "cate_id" => '18',
            "nama" => "Scraping Face",
            "slug" => "Scraping-Face",
            "small_description" => "Scraping face massage tool alat pemijat perawatan wajah & tubuh",
            "description" => "Electric scraping facial & body massager",
            "original_price" => 270500,
            "selling_price" => 262500,
            "image" => "Scraping Face.jpg",
            "qty" => 4,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Scraping Face",
            "meta_keyword" => "scraping wajah, alat scraping, perawatan tubuh, perawatan wajah",
            "meta_description" => "macam-macam alat perawatan tubuh",
            ],
            [
            "cate_id" => '18',
            "nama" => "Healthy Care FISH OIL 1000mg",
            "slug" => "Healthy-Care-FISH-OIL-1000mg",
            "small_description" => "Healthy Care FISH OIL 1000mg OMEGA 3 Isi 400 Kapsul Lunak",
            "description" => "Healthy Care Fish Oil 1000mg Omega-3 (tidak berbau) menggunakan minyak ikan yang diekstrak sehingga menghasilkan sumber alami asam lemak Omega-3",
            "original_price" => 400000,
            "selling_price" => 390000,
            "image" => "Healthy Care.jpg",
            "qty" => 87,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Healthy Care FISH OIL 1000mg",
            "meta_keyword" => "kulit, kesehatan, wajah, tubuh",
            "meta_description" => "macam-macam alat perawatan tubuh",
            ],


          //PERLENGKAPAN PESTA
            [
            "cate_id" => '19',
            "nama" => "Balon Foil Kuda Unicorn",
            "slug" => "Balon Foil Kuda Unicorn",
            "small_description" => "Balon Foil Kuda Unicorn Jumbo 3D",
            "description" => "Di HAPPY TIME menyediakan berbagai macam perlengkapan pesta dengan banyak variasi yang menarik, sangat cocok untuk memeriahkan pesta kalian nih.",
            "original_price" => 10000,
            "selling_price" => 9800,
            "image" => "Unicorn.jpg",
            "qty" => 230,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Balon Foil Kuda Unicorn",
            "meta_keyword" => "pesta, balon, unicorn, alat pesta",
            "meta_description" => "macam-macam perlengkapan pesta",
            ],
            [
            "cate_id" => '19',
            "nama" => "Scented Candle",
            "slug" => "Scented-Candle",
            "small_description" => "Scented Candle Lilin Aromaterapi Aroma Wangi Dekorasi Pesta Smokeless - lavender",
            "description" => "Lilin ini terbuat dari bahan khusus yang dapat menghasilkan aroma-aroma segar dan tidak menimbulkan asap",
            "original_price" => 11000,
            "selling_price" => 9900,
            "image" => "Scented Candle.jpg",
            "qty" => 207,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Scented Candle",
            "meta_keyword" => "lilin, candle, lilin pesta, lilin aroma terapi",
            "meta_description" => "macam-macam perlengkapan pesta",
            ],


          //PERTUKANGAN
            [
            "cate_id" => '20',
            "nama" => "Cutting Disc",
            "slug" => "Cutting-Disc",
            "small_description" => "Cutting Disc Alat Pertukangan Pengukir/Pembentuk/Pemotong Kayu untuk",
            "description" => "This shaping disc can cut wood, plastic products, polyurethane products, rubber products, carbon fiber products, ice sculptures, aluminum materials, etc.",
            "original_price" => 151000,
            "selling_price" => 150300,
            "image" => "Cutting Disc.jpg",
            "qty" => 64,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Cutting Disc",
            "meta_keyword" => "cutting disc, alat pemotong, alat tukang",
            "meta_description" => "macam-macam perlengkapan tukang",
            ],
            [
            "cate_id" => '20',
            "nama" => "Mesin Serut Kayu",
            "slug" => "Mesin-Serut-Kayu",
            "small_description" => "Mesin Serut Kayu Elektrik/Electric Wood Planer Machine Orion WP-1900B",
            "description" => "Produk Orion WP-1900B telah lolos sertifikasi K3L dgn nomor sertifikasi K3L: 20-L-005788",
            "original_price" => 449000,
            "selling_price" => 319000,
            "image" => "Mesin Serut Kayu.jpg",
            "qty" => 55,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Mesin Serut Kayu",
            "meta_keyword" => "mesin serut, alat tukang",
            "meta_description" => "macam-macam perlengkapan tukang",
            ],


          //RUMAH TANGGA
            [
            "cate_id" => '21',
            "nama" => "Vacuum Cleaner Portable",
            "slug" => "Vacuum-Cleaner-Portable",
            "small_description" => "Vacuum Cleaner Portable Alat Penyedot Debu Serbaguna Mobil Vakum",
            "description" => "Bersih tanpa batas, dapat digunakan di rumah dan di dalam mobil",
            "original_price" => 86000,
            "selling_price" => 76000,
            "image" => "Vacuum.jpg",
            "qty" => 66,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Vacuum Cleaner Portable",
            "meta_keyword" => "vacum, vacum cleaner, pembersih lantai",
            "meta_description" => "macam-macam perlengkapan rumah tangga",
            ],
            [
            "cate_id" => '21',
            "nama" => "Kleaner Tornado Mop",
            "slug" => "Kleaner-Tornado-Mop",
            "small_description" => "Kleaner Tornado Mop / Spin Mop",
            "description" => "Kleaner Spin Mop hadir dengan design praktis sehingga mengepel jadi lebih cepat, efisien, dan mudah.",
            "original_price" => 279000,
            "selling_price" => 249000,
            "image" => "Kleaner Tornado Mop.jpg",
            "qty" => 110,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Kleaner Tornado Mop",
            "meta_keyword" => "alat pel lantai, pembersih lantai",
            "meta_description" => "macam-macam perlengkapan rumah tangga",
            ],


          //TOUR TRAVEL
            [
            "cate_id" => '22',
            "nama" => "Tas Sepeda Motor Touring",
            "slug" => "Tas-Sepeda-Motor-Touring",
            "small_description" => "Tas Sepeda Motor Touring travelling Side Saddle Bag - Hitam",
            "description" => "Tas ini memudahkan Anda untuk membawa berbagai macam barang seperti gadget, power bank, sparepart motor, hingga helm saat mengendarai motor.",
            "original_price" => 400000,
            "selling_price" => 388500,
            "image" => "Tas Sepeda Motor Touring.jpg",
            "qty" => 98,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Tas Sepeda Motor Touring",
            "meta_keyword" => "tas, tas sepeda motor, tas touring",
            "meta_description" => "macam-macam perlengkapan touring",
            ],
            [
            "cate_id" => '22',
            "nama" => "Thailand Phuket Paradise",
            "slug" => "Thailand-Phuket-Paradise",
            "small_description" => "Thailand Phuket Paradise Tour 4D3N",
            "description" => "Jakarta Phuket PP - Bagasi kabin 7kg
            Transportasi menggunakan Mini Van / Bus
            Makan 4x
            Hotel bintang 3 selama 3 malam
            Tiket masuk wisata
            Tour guide bahasa indonesia/Bahasa inggris
            Airport transfer service",
            "original_price" => 1300000,
            "selling_price" => 1200000,
            "image" => "Thailand Phuket Paradise.jpg",
            "qty" => 10,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Thailand Phuket Paradise",
            "meta_keyword" => "traveling, liburan",
            "meta_description" => "macam-macam paket wisata traveling",
            ],


          //WEDDING
            [
            "cate_id" => '23',
            "nama" => "Japanese Hampers Wedding",
            "slug" => "Japanese-Hampers-Wedding",
            "small_description" => "Japanese Hampers Wedding Gift Bowl Set | Kado Nikah | Hampers Gift Set - 2 Bowl Model D",
            "description" => "Adalah Mangkuk keramik mewah dengan desain yang unik memberikan keindahan , bermotif bunga Sakura yang melambangkan keindahan dan harapan dengan _Hand Painting Design",
            "original_price" => 110000,
            "selling_price" => 108700,
            "image" => "Japanese Hampers Wedding.jpg",
            "qty" => 20,
            "tax" => 500,
            "status" => 1,
            "trending" => 1,
            "meta_title" => "Japanese Hampers Wedding",
            "meta_keyword" => "wedding, hadiah wedding, hampers wedding",
            "meta_description" => "macam-macam aksesoris wedding",
            ],
            [
            "cate_id" => '23',
            "nama" => "Dekorasi Lamaran Standing Flower",
            "slug" => "Dekorasi-Lamaran-Standing-Flower",
            "small_description" => "Dekorasi Lamaran Standing Flower Wedding Mermaid Centerpiece 90Cm - WHITE",
            "description" => "Dekorasi Lamaran Standing Flower Wedding Mermaid Centerpiece - Height 90Cm",
            "original_price" => 400000,
            "selling_price" => 315000,
            "image" => "Standing Flower.jpg",
            "qty" => 32,
            "tax" => 500,
            "status" => 1,
            "trending" => 0,
            "meta_title" => "Dekorasi Lamaran Standing Flower",
            "meta_keyword" => "standing lampu, lampu wedding, perlengkapan wedding, aksesoris wedding",
            "meta_description" => "macam-macam aksesoris wedding",
            ],

        ];
        foreach ($products as $key => $value) {
            DB::table('products')->insert([
                'cate_id' => $value['cate_id'],
                'nama' => $value['nama'],
                'slug' => $value['slug'],
                'small_description' => $value['small_description'],
                'description' => $value['description'],
                'original_price' => $value['original_price'],
                'selling_price' => $value['selling_price'],
                'image' => $value['image'],
                'qty' => $value['qty'],
                'tax' => $value['tax'],
                'status' => $value['status'],
                'trending' => $value['trending'],
                'meta_title' => $value['meta_title'],
                'meta_description' => $value['meta_description'],
                'meta_keyword' => $value['meta_keyword'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}

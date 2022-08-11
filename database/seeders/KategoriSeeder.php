<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $kategori = [
            [
        		"nama" => 'Dapur',
        		"slug" => "dapur",
        		"description" => "alat kebutuhan dapur",
        		"status" => 1,
                "popular" => 1,
                "image" => "dapur.jpg",
                "meta_title" => "dapur",
                "meta_descrip" => "kebutuhan dapur,alat dapur,memasak",
                "meta_keyword" => "elektronik dapur, aksesoris dapur, peralatan dapur, penyimpan makanan",
        	],
        	[
        		"nama" => 'Elektronik',
        		"slug" => 'elektronik',
        		"description" => "macam macam alat elektronik",
        		"status" => 1,
                "popular" => 1,
                "image" => "elektronik.jpg",
                "meta_title" => "elektronik",
                "meta_descrip" => "kebutuhan elektronik, alat kelistrikan, kabel, media",
                "meta_keyword" => "media player, vaporizer, alat elektronik, elektronik dapur,handphone,komputer,laptop,tablet,kamera ",
        	],
        	[
        		"nama" => 'Fashion',
        		"slug" => 'fashion',
        		"description" => "macam macam kebutuhan fashion",
        		"status" => 1,
                "popular" => 1,
                "image" => "fashion.jpg",
                "meta_title" => "fashion",
                "meta_descrip" => "kebutuhan fashion,pakaian,baju,celana",
                "meta_keyword" => "aksesoris,baju,pakaian,celana,pakaian dalam,bra",
            ],
            [
        		"nama" => 'Buku',
        		"slug" => 'buku',
        		"description" => "macam macam kebutuhan buku untuk belajar dan hiburan",
        		"status" => 1,
                "popular" => 0,
                "image" => "buku.jpg",
                "meta_title" => "buku",
                "meta_descrip" => "kebutuhan baca buku,buku belajar,buku hiburan,kitab",
                "meta_keyword" => "kitab,buku,kertas,hiburan,hobi,novel,komik,pendidikan",
        	],
            [
        		"nama" => 'Dekorasi',
        		"slug" => 'dekorasi',
        		"description" => "macam macam alat hias",
        		"status" => 1,
                "popular" => 1,
                "image" => "dekorasi.jpg",
                "meta_title" => "dekorasi",
                "meta_descrip" => "kebutuhan hias,alat hias,hiasan rumah,dekorasi dinding,dekorasi taman,dekorasi kamar",
                "meta_keyword" => "dekorasi,hiasan,wallpaper,action figure,patung,cat,sticker",
        	],
            [
        		"nama" => 'Hobi',
        		"slug" => 'hobi',
        		"description" => "alat kebutuhan hobi",
        		"status" => 1,
                "popular" => 1,
                "image" => "hobi.jpg",
                "meta_title" => "hobi",
                "meta_descrip" => "kebutuhan hobi,alat hobi,macam alat hobi",
                "meta_keyword" => "hobi,komputer,bola,raket,sepatu,alat musik,figure,olahraga,boneka,kartu",
        	],
            [
        		"nama" => 'Gaming',
        		"slug" => 'gaming',
        		"description" => "alat kebutuhan gaming",
        		"status" => 1,
                "popular" => 1,
                "image" => "gaming.jpg",
                "meta_title" => "gaming",
                "meta_descrip" => "macam alat gaming, kebutuhan gaming,controller,playstation,komputer",
                "meta_keyword" => "game,gaming,controller,playstation,xbox,nintendo,kaset game,console,aksesoris game",
        	],
            [
        		"nama" => 'Handphone',
        		"slug" => 'handphone',
        		"description" => "macam macam alat komunikasi",
        		"status" => 1,
                "popular" => 1,
                "image" => "handphone.jpg",
                "meta_title" => "handphone",
                "meta_descrip" => "berbagai macam handphone,alat komunikasi",
                "meta_keyword" => "handphone,case,casing,charger,xiaomi,realme,nokia,iphone,samsung,huawei,kamera,tablet,aksesoris handphone,hp",
        	],
            [
        		"nama" => 'Kecantikan',
        		"slug" => 'kecantikan',
        		"description" => "macam macam obat dan alat kecantikan",
        		"status" => 1,
                "popular" => 1,
                "image" => "kecantikan.jpg",
                "meta_title" => "kecantikan",
                "meta_descrip" => "macam macam alat kecantikan,make up, skincare",
                "meta_keyword" => "kecantikan,make up,skincare,vitamin,aksesoris,hobi",
        	],
            [
        		"nama" => 'Kesehatan',
        		"slug" => 'kesehatan',
        		"description" => "macam macam obat dan alat kesehatan",
        		"status" => 1,
                "popular" => 1,
                "image" => "kesehatan.jpg",
                "meta_title" => "kesehatan",
                "meta_descrip" => "kebutuhan kesehatan,alat kesehatan,obat obatan",
                "meta_keyword" => "obat,kesehatan,alat medis",
        	],
            [
        		"nama" => 'Komputer dan Laptop',
        		"slug" => 'komputer',
        		"description" => "macam macam komputer dan laptop",
        		"status" => 1,
                "popular" => 1,
                "image" => "komputer dan laptop.jpg",
                "meta_title" => "komputer dan laptop",
                "meta_descrip" => "macam macam alat komputer dan laptop",
                "meta_keyword" => "komputer,laptop,ram,ssd,hardisk,intel,amd,keyboard,monitor,mouse,software",
        	],
            [
        		"nama" => 'Logam Mulia',
        		"slug" => 'logam-mulia',
        		"description" => "macam macam logam mulia",
        		"status" => 1,
                "popular" => 0,
                "image" => "logam mulia.jpg",
                "meta_title" => "logam mulia",
                "meta_descrip" => "macam macam logam mulia, perhiasan logam mulia",
                "meta_keyword" => "logam mulia,emas,ruby,silver,tiara,berlian,perhiasan,investasi",
        	],

            [
        		"nama" => 'Makanan dan Minuman',
        		"slug" => 'makanan-dan-minuman',
        		"description" => "macam macam makanan dan minuman",
        		"status" => 1,
                "popular" => 0,
                "image" => "makanan dan minuman.jpg",
                "meta_title" => "makanan dan minuman",
                "meta_descrip" => "berbagai minuman dan makanan, kebutuhan memasak",
                "meta_keyword" => "frozen food, bahan kue, mie, susu, tepung, daging, seafood, sayur, telur",
        	],
            [
        		"nama" => 'Alat Tulis Kantor',
        		"slug" => 'alat-tulis-kantor',
        		"description" => "berbagai macam peralatan kantor",
        		"status" => 1,
                "popular" => 0,
                "image" => "alat tulis kantor.jpg",
                "meta_title" => "alat tulis kantor",
                "meta_descrip" => "kebutuhan kantor, alat kantor, perlengkapan kantor",
                "meta_keyword" => "alat tulis, buku tulis, kertas, pensil, bulpoint",
        	],
            [
        		"nama" => 'Olahraga',
        		"slug" => 'olahraga',
        		"description" => "perlengkapan berolahraga",
        		"status" => 1,
                "popular" => 0,
                "image" => "olahraga.jpg",
                "meta_title" => "olahraga",
                "meta_descrip" => "aksesoris olahraga, alat olahraga",
                "meta_keyword" => "sepatu, badminton, basket, sepakbola, golf, tenis",
        	],
            [
        		"nama" => 'Otomotif',
        		"slug" => 'otomotif',
        		"description" => "Otomotif Kendaraan Motor dan Mobil",
        		"status" => 1,
                "popular" => 0,
                "image" => "otomotif.jpg",
                "meta_title" => "otomotif",
                "meta_descrip" => "berbagai alat otomotif, aksesoris kendaraan",
                "meta_keyword" => "aksesoris mobil, aksesoris motor, ban motor, ban mobil, sparepart, velg, interior mobil, eksterior mobil",
        	],
            [
        		"nama" => 'Perawatan Hewan',
        		"slug" => 'perawatan-hewan',
        		"description" => "Berbagai Macam kebutuhan Perawatan Hewan",
        		"status" => 1,
                "popular" => 0,
                "image" => "perawatan hewan.jpg",
                "meta_title" => "perawatan hewan",
                "meta_descrip" => "kebutuhan perawatan hewan",
                "meta_keyword" => "groming hewan, makanan ikan, makanan kucing, makanan anjing, tempat makan, vitamin",
        	],
            [
        		"nama" => 'Perawatan Tubuh',
        		"slug" => 'perawatan-tubuh',
        		"description" => "berbagai macam kebutuhan perawatan tubuh",
        		"status" => 1,
                "popular" => 0,
                "image" => "perawatan tubuh.jpg",
                "meta_title" => "perawatan tubuh",
                "meta_descrip" => "kebutuhan perawatan tubuh",
                "meta_keyword" => "skincare, parfum,alat kecantikan, perlengkapan mandi",
        	],
            [
        		"nama" => 'Perlengkapan Pesta',
        		"slug" => 'perlengakapan-pesta',
        		"description" => "Macam macam alat kebutuhan pesta",
        		"status" => 1,
                "popular" => 0,
                "image" => "pesta.jpg",
                "meta_title" => "perlengkapan pesta",
                "meta_descrip" => "kebutuhan pesta,alat pesta,dekorasi pesta",
                "meta_keyword" => "balon, peralatan pesta, bunga, dekorasi, hadiah",
        	],
            [
        		"nama" => 'Pertukangan',
        		"slug" => 'pertukangan',
        		"description" => "macam macam kebutuhan tukang",
        		"status" => 1,
                "popular" => 0,
                "image" => "pertukangan.jpg",
                "meta_title" => "pertukangan",
                "meta_descrip" => "kebutuhan tukang, peralatan tukang",
                "meta_keyword" => "material bangunan, alat keselamatan, palu, semen, helm proyek, alat angkut",
        	],
            [
        		"nama" => 'Peralatan Rumah Tangga',
        		"slug" => 'peralatan-rumah-tangga',
        		"description" => "Perlengkapan Rumah Tangga",
        		"status" => 1,
                "popular" => 0,
                "image" => "peralatan rumah tangga.jpg",
                "meta_title" => "peralatan rumah tangga",
                "meta_descrip" => "kebutuhan perlengkapan rumah tangga",
                "meta_keyword" => "aksesoris rumah, furniture, kursi, gorden, kasur, alat kebersihan",
        	],
            [
        		"nama" => 'Tour Travel',
        		"slug" => 'tour-travel',
        		"description" => "Berbagai macam kebutuhan Tour Travel",
        		"status" => 1,
                "popular" => 0,
                "image" => "tour travel.jpg",
                "meta_title" => "tour travel",
                "meta_descrip" => "kebutuhan tour travel, alat tour",
                "meta_keyword" => "tas tour, tas ransel, kacamata tour, sunday bag",
        	],
            [
        		"nama" => 'Wedding',
        		"slug" => 'wedding',
        		"description" => "Perlengkapan Pesta Pernikahan",
        		"status" => 1,
                "popular" => 0,
                "image" => "wedding.jpg",
                "meta_title" => "wedding",
                "meta_descrip" => "kebutuhan pesta, alat pesta",
                "meta_keyword" => "alat pesta, dekorasi pesta, Dekorasi Modern, Dekorasi Tradisional, Lampu Dekorasi",
        	],

        ];
        foreach ($kategori as $key => $value) {
            DB::table('kategori')->insert([
                'nama' => $value['nama'],
                'slug' => $value['slug'],
                'description' => $value['description'],
                'status' => $value['status'],
                'popular' => $value['popular'],
                'image' => $value['image'],
                'meta_title' => $value['meta_title'],
                'meta_descrip' => $value['meta_descrip'],
                'meta_keyword' => $value['meta_keyword'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]);
        }
    }
}

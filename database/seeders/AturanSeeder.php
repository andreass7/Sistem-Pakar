<?php

namespace Database\Seeders;

use App\Models\aturan;
use App\Models\gejala;
use App\Models\penyakit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AturanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('penyakit')->insert([
            ['kode' => 'P01', 'nama' => 'Kekurangan Nutrisi', 'deskripsi' => 'Penyakit akibat kurang nutrisi pada tanaman'],
            ['kode' => 'P02', 'nama' => 'Penyiraman Berlebihan', 'deskripsi' => 'Penyakit akibat penyiraman air berlebihan'],
            ['kode' => 'P03', 'nama' => 'Infeksi Jamur', 'deskripsi' => 'Penyakit akibat terinfeksi oleh jamur'],
            ['kode' => 'P04', 'nama' => 'Kekeringan', 'deskripsi' => 'Penyakit akibat kekeringan'],
            ['kode' => 'P05', 'nama' => 'Akar Busuk', 'deskripsi' => 'Penyakit akibat akar busuk'],
            ['kode' => 'P06', 'nama' => 'Infeksi Hama', 'deskripsi' => 'Penyakit akibat Infeksi Hama'],
            ['kode' => 'P07', 'nama' => 'Virus Daun Keriting', 'deskripsi' => 'Penyakit akibat virus daun keriting'],
        ]);
        DB::table('gejala')->insert([
            ['kode' => 'G001', 'nama' => 'Apakah Ada Daun Menguning Pada Tanaman Bonsai?'],
            ['kode' => 'G002', 'nama' => 'Apakah Ada Daun Layu Pada Tanaman Bonsai?'],
            ['kode' => 'G003', 'nama' => 'Apakah Ada Bintik Hitam Pada Daun Pada Tanaman Bonsai?'],
            ['kode' => 'G004', 'nama' => 'Apakah Ada Batang Kering Pada Tanaman Bonsai?'],
            ['kode' => 'G005', 'nama' => 'Apakah Ada Akar Membusuk Pada Tanaman Bonsai?'],
            ['kode' => 'G006', 'nama' => 'Apakah Ada Daun Berlubang Pada Tanaman Bonsai?'],
            ['kode' => 'G007', 'nama' => 'Apakah Ada Tunas Baru Tidak Tumbuh Pada Tanaman Bonsai?'],
            ['kode' => 'G008', 'nama' => 'Apakah Ada Serangga Kecil Pada Daun Tanaman Bonsai?'],
            ['kode' => 'G009', 'nama' => 'Apakah Ada Akar Berbau Busuk Pada Tanaman Bonsai?'],
        ]);
        DB::table('aturan')->insert([
            // Rule 1: Kekurangan Nutrisi (P01)
            ['penyakit_id' => 1, 'gejala_id' => 1, 'cf_rule' => 0.4, 'solusi' => 'Untuk mengatasi kekurangan nutrisi pada bonsai, gunakan pupuk NPK seimbang secara rutin sesuai dosis yang dianjurkan. Pastikan penyiraman dilakukan secukupnya agar nutrisi terserap optimal oleh tanaman tanpa membuat media tanam terlalu basah. Selain itu, ganti media tanam setiap 2-3 tahun untuk menjaga kesuburan dan menyediakan nutrisi baru. Jika diperlukan, gunakan pupuk cair dan semprotkan langsung pada daun untuk mempercepat pemulihan tanaman.'], // G001
            ['penyakit_id' => 1, 'gejala_id' => 7, 'cf_rule' => 0.4, 'solusi' => 'Untuk mengatasi kekurangan nutrisi pada bonsai, gunakan pupuk NPK seimbang secara rutin sesuai dosis yang dianjurkan. Pastikan penyiraman dilakukan secukupnya agar nutrisi terserap optimal oleh tanaman tanpa membuat media tanam terlalu basah. Selain itu, ganti media tanam setiap 2-3 tahun untuk menjaga kesuburan dan menyediakan nutrisi baru. Jika diperlukan, gunakan pupuk cair dan semprotkan langsung pada daun untuk mempercepat pemulihan tanaman.'], // G007

            // Rule 2: Penyiraman Berlebihan (P02)
            ['penyakit_id' => 2, 'gejala_id' => 1, 'cf_rule' => 0.6, 'solusi' => 'Untuk mengatasi penyiraman berlebihan pada bonsai, segera kurangi frekuensi penyiraman dan pastikan media tanam memiliki drainase yang baik agar kelebihan air bisa keluar dengan cepat.'], // G001
            ['penyakit_id' => 2, 'gejala_id' => 2, 'cf_rule' => 0.6, 'solusi' => 'Untuk mengatasi penyiraman berlebihan pada bonsai, segera kurangi frekuensi penyiraman dan pastikan media tanam memiliki drainase yang baik agar kelebihan air bisa keluar dengan cepat.'], // G002
            ['penyakit_id' => 2, 'gejala_id' => 6, 'cf_rule' => 0.6, 'solusi' => 'Untuk mengatasi penyiraman berlebihan pada bonsai, segera kurangi frekuensi penyiraman dan pastikan media tanam memiliki drainase yang baik agar kelebihan air bisa keluar dengan cepat.'], // G006

            // Rule 3: Penyiraman Berlebihan (P03)
            ['penyakit_id' => 3, 'gejala_id' => 2, 'cf_rule' => 0.3, 'solusi' => 'Untuk mengatasi infeksi jamur pada bonsai, pangkas bagian yang terinfeksi dan buang jauh. Semprotkan fungisida sesuai aturan dan pastikan bonsai mendapat sirkulasi udara serta cahaya yang baik. Kurangi penyiraman dan hindari membasahi daun. Jika infeksi parah, ganti media tanam dan pot. Jaga kebersihan area sekitar untuk mencegah jamur muncul kembali.'],
            ['penyakit_id' => 3, 'gejala_id' => 3, 'cf_rule' => 0.3, 'solusi' => 'Untuk mengatasi infeksi jamur pada bonsai, pangkas bagian yang terinfeksi dan buang jauh. Semprotkan fungisida sesuai aturan dan pastikan bonsai mendapat sirkulasi udara serta cahaya yang baik. Kurangi penyiraman dan hindari membasahi daun. Jika infeksi parah, ganti media tanam dan pot. Jaga kebersihan area sekitar untuk mencegah jamur muncul kembali.'],

            // Rule 4: Penyiraman Berlebihan (P04)
            ['penyakit_id' => 4, 'gejala_id' => 2, 'cf_rule' => 0.5, 'solusi' => 'Untuk mengatasi kekeringan pada bonsai, segera siram tanaman secara perlahan hingga air meresap ke seluruh media tanam. Rendam pot dalam air selama beberapa menit jika media tanam sangat kering. Pindahkan bonsai ke tempat teduh sementara untuk mengurangi stres. Pastikan penyiraman dilakukan secara rutin sesuai kebutuhan, terutama saat cuaca panas. Gunakan mulsa atau lumut di atas media tanam untuk menjaga kelembapan lebih lama.'],
            ['penyakit_id' => 4, 'gejala_id' => 4, 'cf_rule' => 0.5, 'solusi' => 'Untuk mengatasi kekeringan pada bonsai, segera siram tanaman secara perlahan hingga air meresap ke seluruh media tanam. Rendam pot dalam air selama beberapa menit jika media tanam sangat kering. Pindahkan bonsai ke tempat teduh sementara untuk mengurangi stres. Pastikan penyiraman dilakukan secara rutin sesuai kebutuhan, terutama saat cuaca panas. Gunakan mulsa atau lumut di atas media tanam untuk menjaga kelembapan lebih lama.'],

            // Rule 5: Penyiraman Berlebihan (P07)
            ['penyakit_id' => 5, 'gejala_id' => 5, 'cf_rule' => 0.8, 'solusi' => 'Untuk mengatasi akar busuk pada bonsai, potong akar yang busuk, ganti media tanam dengan yang memiliki drainase baik, dan rendam akar yang sehat dalam larutan fungisida. Kurangi penyiraman dan pastikan tanaman mendapatkan sirkulasi udara serta sinar matahari yang cukup.'],
            ['penyakit_id' => 5, 'gejala_id' => 7, 'cf_rule' => 0.8, 'solusi' => 'Untuk mengatasi akar busuk pada bonsai, potong akar yang busuk, ganti media tanam dengan yang memiliki drainase baik, dan rendam akar yang sehat dalam larutan fungisida. Kurangi penyiraman dan pastikan tanaman mendapatkan sirkulasi udara serta sinar matahari yang cukup.'],
            ['penyakit_id' => 5, 'gejala_id' => 9, 'cf_rule' => 0.8, 'solusi' => 'Untuk mengatasi akar busuk pada bonsai, potong akar yang busuk, ganti media tanam dengan yang memiliki drainase baik, dan rendam akar yang sehat dalam larutan fungisida. Kurangi penyiraman dan pastikan tanaman mendapatkan sirkulasi udara serta sinar matahari yang cukup.'],

            // Rule 6: Penyiraman Berlebihan (P06)
            ['penyakit_id' => 6, 'gejala_id' => 3, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi infeksi hama pada bonsai, gunakan insektisida alami seperti sabun insektisida atau minyak neem. Bersihkan daun dan batang dengan kain lembab atau sikat halus. Pastikan bonsai memiliki sirkulasi udara yang baik dan lakukan pemeriksaan rutin.'],
            ['penyakit_id' => 6, 'gejala_id' => 4, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi infeksi hama pada bonsai, gunakan insektisida alami seperti sabun insektisida atau minyak neem. Bersihkan daun dan batang dengan kain lembab atau sikat halus. Pastikan bonsai memiliki sirkulasi udara yang baik dan lakukan pemeriksaan rutin.'],
            ['penyakit_id' => 6, 'gejala_id' => 5, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi infeksi hama pada bonsai, gunakan insektisida alami seperti sabun insektisida atau minyak neem. Bersihkan daun dan batang dengan kain lembab atau sikat halus. Pastikan bonsai memiliki sirkulasi udara yang baik dan lakukan pemeriksaan rutin.'],
            ['penyakit_id' => 6, 'gejala_id' => 6, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi infeksi hama pada bonsai, gunakan insektisida alami seperti sabun insektisida atau minyak neem. Bersihkan daun dan batang dengan kain lembab atau sikat halus. Pastikan bonsai memiliki sirkulasi udara yang baik dan lakukan pemeriksaan rutin.'],
            ['penyakit_id' => 6, 'gejala_id' => 8, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi infeksi hama pada bonsai, gunakan insektisida alami seperti sabun insektisida atau minyak neem. Bersihkan daun dan batang dengan kain lembab atau sikat halus. Pastikan bonsai memiliki sirkulasi udara yang baik dan lakukan pemeriksaan rutin.'],

            // Rule 7: Penyiraman Berlebihan (P06)
            ['penyakit_id' => 7, 'gejala_id' => 8, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi virus daun kekeringan pada bonsai, buang daun yang terinfeksi, pisahkan tanaman yang terinfeksi, dan pastikan sinar matahari serta sirkulasi udara cukup. Hindari penyiraman berlebihan dan jaga kelembapan media tanam.'],
            ['penyakit_id' => 7, 'gejala_id' => 9, 'cf_rule' => 0.1, 'solusi' => 'Untuk mengatasi virus daun kekeringan pada bonsai, buang daun yang terinfeksi, pisahkan tanaman yang terinfeksi, dan pastikan sinar matahari serta sirkulasi udara cukup. Hindari penyiraman berlebihan dan jaga kelembapan media tanam.'],
        ]);
    }
}

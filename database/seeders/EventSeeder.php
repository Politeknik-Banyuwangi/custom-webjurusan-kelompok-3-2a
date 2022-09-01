<?php

namespace Database\Seeders;

use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            [
                'user_id' => 1,
                'title' => 'SNPN 2022',
                'thumbnail' => 'test.jpg',
                'summary' => 'Seleksi Nasional Masuk Politeknik Negeri (SNMPN) 2022, merupakan jalur undangan masuk jenjang Diploma 3',
                'content' => '
<p>Seleksi Nasional Masuk Politeknik Negeri (SNMPN) 2022, merupakan jalur undangan masuk jenjang Diploma 3.</p>



<p>Daftar Program Studi yang dapat dipilih di Politeknik Negeri Banyuwangi:</p>



<ol><li>D3 Teknik Sipil</li><li>D3 Teknik Mesin</li><li>D3 Teknik Informatika</li></ol>



<p>Prosedur dan tata cara pendaftaran dapat diaksek melalui: <a href="http://snmpn.politeknik.or.id" target="_blank" rel="noreferrer noopener">snmpn.politeknik.or.id</a></p>



<p>The State Polytechnic Entrance National Selection (SNMPN) is an invitation to enter the Diploma 3 level.</p>



<p>List of Study Programs that can be chosen at the Banyuwangi State Polytechnic:</p>



<ol><li>D3 Civil Engineering</li><li>D3 Mechanical Engineering</li><li>D3 Informatics Engineering</li></ol>



<p><br>Registration procedures can be accessed via: snmpn.politeknik.or.id</p>',
                'date_start' => '2022-09-12',
                'date_end' => '2022-10-12',
                'slug' => 'snmpn-2022',
                'attachment' => 'file.pdf',
                'is_publish' => true,
                'published_at' => Carbon::now(),
                'publisher_id' => 1,
            ]
        ]);
    }
}

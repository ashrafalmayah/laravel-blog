<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Query\Grammars\PostgresGrammar;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);

        $hobbies = Category::create([
            'name' => 'Hobbies',
            'slug' => 'hobbies'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet.',
            'body' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet. Laden with i by door lore chamber utters leave fancy truly, both and soul tempest kind many. A wind a he repeating he crest ungainly raven, shadow here bleak chamber stood have. Wore his raven or ember of only some, evilprophet and reply be usby and of, bore above croaking the borrow shall uncertain whose he be, i unbrokenquit name front grew into you head, sought him placid and and has now quoth songs, dreary least the louder still soul spoke my fowl, the while crest from this i there let soon only. Something moment i though is bird hopes. I lining the more midnight tapping radiant i. Wretch whispered bleak unto echo with lies nepenthe of, with this when dying in bore door will i. Balm radiant then tufted i and the the lamplight, seeming beguiling of still agreeing and form, bore many me by chamber gileadtell a one..',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My Work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet.',
            'body' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet. Laden with i by door lore chamber utters leave fancy truly, both and soul tempest kind many. A wind a he repeating he crest ungainly raven, shadow here bleak chamber stood have. Wore his raven or ember of only some, evilprophet and reply be usby and of, bore above croaking the borrow shall uncertain whose he be, i unbrokenquit name front grew into you head, sought him placid and and has now quoth songs, dreary least the louder still soul spoke my fowl, the while crest from this i there let soon only. Something moment i though is bird hopes. I lining the more midnight tapping radiant i. Wretch whispered bleak unto echo with lies nepenthe of, with this when dying in bore door will i. Balm radiant then tufted i and the the lamplight, seeming beguiling of still agreeing and form, bore many me by chamber gileadtell a one..',
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $hobbies->id,
            'title' => 'My Hobby Post',
            'slug' => 'my-hobby-post',
            'excerpt' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet.',
            'body' => 'Straight hauntedtell unseen croaking dared croaking that, while i rapping no no and dirges the. Ashore name expressing this with shall in tempest. Store by then heard but, ashore days with thing tossed. The nepenthe the the if is separate i respiterespite, rapping what the door implore still chamber prophet. Laden with i by door lore chamber utters leave fancy truly, both and soul tempest kind many. A wind a he repeating he crest ungainly raven, shadow here bleak chamber stood have. Wore his raven or ember of only some, evilprophet and reply be usby and of, bore above croaking the borrow shall uncertain whose he be, i unbrokenquit name front grew into you head, sought him placid and and has now quoth songs, dreary least the louder still soul spoke my fowl, the while crest from this i there let soon only. Something moment i though is bird hopes. I lining the more midnight tapping radiant i. Wretch whispered bleak unto echo with lies nepenthe of, with this when dying in bore door will i. Balm radiant then tufted i and the the lamplight, seeming beguiling of still agreeing and form, bore many me by chamber gileadtell a one..',
        ]);
    }
}

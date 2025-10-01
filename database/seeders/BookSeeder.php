<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Books;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Books::create([
            'title' => 'Dế Mèn Phiêu Lưu Ký',
            'author' => 'Tô Hoài',
            'publisher' => 'NXB Kim Đồng',
            'published_year' => 1941,
            'price' => 45000,
            'quantity' => 100,
            'description' => 'Tác phẩm kinh điển của văn học thiếu nhi Việt Nam.',
        ]);

        Books::create([
            'title' => 'Lão Hạc',
            'author' => 'Nam Cao',
            'publisher' => 'NXB Văn Học',
            'published_year' => 1943,
            'price' => 30000,
            'quantity' => 80,
            'description' => 'Truyện ngắn xúc động về số phận người nông dân.',
        ]);

        Books::create([
            'title' => 'Harry Potter và Hòn Đá Phù Thủy',
            'author' => 'J.K. Rowling',
            'publisher' => 'NXB Trẻ',
            'published_year' => 1997,
            'price' => 120000,
            'quantity' => 50,
            'description' => 'Tập 1 trong series Harry Potter nổi tiếng thế giới.',
        ]);

        Books::create([
            'title' => 'Harry Potter và ....',
            'author' => 'J.K. Rowling',
            'publisher' => 'NXB Trẻ',
            'published_year' => 2025,
            'price' => 250000,
            'quantity' => 25,
            'description' => 'Tập 2 trong series Harry Potter nổi tiếng thế giới.',
        ]);
    }
}

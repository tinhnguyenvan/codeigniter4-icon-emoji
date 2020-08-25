<?php namespace App\Controllers;

class Emoji extends BaseController
{
	public function index()
	{
	    $data  = [
	        'file_name' => ROOTPATH.'public/emoji/emoji.txt',
            'keyword' => 'icon facebook, mat cuoi facebook, fbook, facebook emoticon, smile facebook, facebook symbols, bieu tuong facebook, emoji, viet status facebook',
            'description' => 'Tổng hợp full bộ icon facebook đầy đủ nhất, mới nhất với nhiều trạng thái khác nhau, công cụ viết status facebook kèm icon tiện lợi nhất chỉ cần click vào biểu tượng cảm xúc facebook và chọn nhiều icon facebook khác nhau',
            'title' => '👋 Icon emoji, Full trọn bộ 4000 icon facebook mới nhất - 😃 Biểu tượng cảm xúc fb 💁👌🎍😍'
        ];

		return view('emoji/index', $data);
	}
}

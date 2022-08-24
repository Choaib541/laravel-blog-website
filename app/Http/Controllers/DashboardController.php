<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Guest;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{

    public function  __invoke()
    {

        $data = DB::select("select count(id) as count , MONTH(created_at) as month from posts GROUP BY MONTH(created_at) ORDER BY month");
        $data = json_decode(json_encode($data), true);
        $posts_per_month = $this->fetch_data($data);

        $data = DB::select("select count(id) as count , MONTH(created_at) as month from guests GROUP BY MONTH(created_at)");
        $data = json_decode(json_encode($data), true);
        $guests_per_month = $this->fetch_data($data);

        $posts = Post::latest()->take(6)->get();
        $posts_count = Post::count();
        $guests_count = Guest::count();
        $users_count = User::count();
        $category_count = Category::count();

        return view("dashboard.index", [
            "lastest_posts" => $posts,
            "posts_per_month" =>  $posts_per_month,
            "guests_per_month" => $guests_per_month,
            "posts_count" => $posts_count,
            "guests_count" => $guests_count,
            "users_count" => $users_count,
            "category_count" => $category_count,
        ]);
    }


    public function fetch_data($data)
    {
        $body = [];
        $result = [];

        foreach ($data as $element) {
            $body[$element["month"]] = $element["count"];
        }

        for ($i = 1; $i <= min(array_keys($body)); $i++) {
            $result[$i] = 0;
        }

        foreach ($body as $key => $value) {
            $result[$key] = $value;
        }

        for ($i = max(array_keys($body)) + 1; $i <=  12; $i++) {
            $result[$i] = 0;
        }


        return $result;
    }
}

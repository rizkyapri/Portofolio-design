<?php

namespace App\Providers;

use Firefly\FilamentBlog\Models\Category;
use Firefly\FilamentBlog\Models\Comment;
use Firefly\FilamentBlog\Models\NewsLetter;
use Firefly\FilamentBlog\Models\Post;
use Firefly\FilamentBlog\Models\SeoDetail;
use Firefly\FilamentBlog\Models\Setting;
use Firefly\FilamentBlog\Models\ShareSnippet;
use Firefly\FilamentBlog\Models\Tag;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Category::class => \App\Policies\CategoryPolicy::class,
        Post::class => \App\Policies\PostPolicy::class,
        Tag::class => \App\Policies\TagPolicy::class,
        SeoDetail::class => \App\Policies\SeoDetailPolicy::class,
        Comment::class => \App\Policies\CommentPolicy::class,
        NewsLetter::class => \App\Policies\NewsLetterPolicy::class,
        ShareSnippet::class => \App\Policies\ShareSnippetPolicy::class,
        Setting::class => \App\Policies\SettingPolicy::class,
        // Tambahkan lainnya sesuai kebutuhanmu
    ];

    public function boot(): void
    {
        $this->registerPolicies();
    }
}

<?php

namespace FriendsOfBotble\Comment\Database\Seeders;

use Botble\Base\Supports\BaseSeeder;
use Botble\Blog\Models\Post;
use Carbon\Carbon;
use FriendsOfBotble\Comment\Enums\CommentStatus;
use FriendsOfBotble\Comment\Models\Comment;
use Illuminate\Support\Str;

class CommentSeeder extends BaseSeeder
{
    public function run(): void
    {
        Comment::query()->truncate();

        if (! is_plugin_active('blog')) {
            return;
        }

        $posts = Post::query()->select('id')->get();

        if ($posts->isEmpty()) {
            return;
        }

        $commenters = $this->getCommenters();

        foreach ($this->getData() as $index => $comment) {
            $post = $posts->random();
            $commenter = $commenters[$index % count($commenters)];

            Comment::query()->create([
                ...$comment,
                'reference_type' => Post::class,
                'reference_id' => $post->id,
                'reference_url' => route('public.single', Str::slug($post->name)),
                'name' => $commenter['name'],
                'email' => $commenter['email'],
                'website' => 'https://friendsofbotble.com',
                'ip_address' => '192.168.1.' . (($index % 254) + 1),
                'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36',
                'status' => CommentStatus::APPROVED,
                'created_at' => Carbon::now()->subDays(rand(1, 30)),
            ]);
        }
    }

    protected function getCommenters(): array
    {
        return [
            ['name' => 'John Smith', 'email' => 'john.smith@example.com'],
            ['name' => 'Emily Johnson', 'email' => 'emily.johnson@example.com'],
            ['name' => 'Michael Brown', 'email' => 'michael.brown@example.com'],
            ['name' => 'Sarah Davis', 'email' => 'sarah.davis@example.com'],
            ['name' => 'James Wilson', 'email' => 'james.wilson@example.com'],
            ['name' => 'Jennifer Taylor', 'email' => 'jennifer.taylor@example.com'],
            ['name' => 'David Anderson', 'email' => 'david.anderson@example.com'],
            ['name' => 'Lisa Martinez', 'email' => 'lisa.martinez@example.com'],
            ['name' => 'Robert Garcia', 'email' => 'robert.garcia@example.com'],
            ['name' => 'Jessica Rodriguez', 'email' => 'jessica.rodriguez@example.com'],
        ];
    }

    protected function getData(): array
    {
        return array_map(function ($item) {
            return ['content' => $item];
        }, [
            'This is really helpful, thank you!',
            'I found this article to be quite informative.',
            'Wow, I never knew about this before!',
            'Great job on explaining such a complex topic.',
            'I have a question about the third paragraph.',
            'This article changed my perspective entirely.',
            'I appreciate the effort you put into this.',
            'This is exactly what I was looking for, thank you!',
            'I disagree with some points mentioned here, though.',
            'Could you provide more examples to illustrate your point?',
            'I wish there were more articles like this out there.',
            "I'm bookmarking this for future reference.",
            "I've shared this with my friends, they loved it!",
            'This article is a must-read for everyone interested in the topic.',
            'Thank you for shedding light on this important issue.',
            "I've been searching for information on this topic, glad I found this article.",
            "I'm blown away by the insights shared in this article.",
            'This article tackles a complex topic with clarity.',
            "I'm going to reflect on the ideas presented in this article.",
            "The author's passion for the subject shines through in this article.",
            'This article challenged my preconceptions in a thought-provoking way.',
            "I've added this article to my reading list, it's worth revisiting.",
            'This article offers practical advice that I can apply in real life.',
            "I'm going to recommend this article to my study group.",
            'The examples provided really helped me understand the concept better.',
            'I resonate with the ideas presented here.',
            'This article made me think critically about the topic.',
            "I'll definitely come back to this article for reference.",
            "I've shared this on social media, it's too good not to share.",
            'This article presents a balanced view on a controversial topic.',
            "I'm glad I stumbled upon this article, it's a gem.",
            "I've been struggling with this, your article helped a lot.",
            "I've learned something new today, thanks to this article.",
            'Kudos to the author for a well-researched piece.',
            "I'm impressed by the depth of knowledge demonstrated here.",
            'This article challenged my assumptions in a good way.',
            "I've shared this with my colleagues, it's worth discussing.",
            'The information presented here is very valuable.',
            'You have a talent for explaining complex topics clearly.',
            "I'm inspired to learn more about this after reading your article.",
            'This article deserves wider recognition.',
            "I'm grateful for the insights shared in this piece.",
            'The author presents a balanced view on a controversial topic.',
            "I'm glad I stumbled upon this article, it's",
            "I've been searching for information on this topic, glad I found this article. It's incredibly insightful and provides a comprehensive overview of the subject matter. I appreciate the effort put into researching and writing this piece. It's truly eye-opening and has given me a new perspective. Thank you for sharing your knowledge with us!",
            "This article is a masterpiece! It dives deep into the topic and offers valuable insights that are both thought-provoking and enlightening. The author's expertise is evident throughout, making it a compelling read from start to finish. I'll definitely be coming back to this for reference in the future.",
            "I'm amazed by the depth of analysis in this article. It covers a wide range of aspects related to the topic, providing a comprehensive understanding. The clarity of explanation is commendable, making complex concepts easy to grasp. This article has enriched my understanding and sparked further curiosity. Kudos to the author!",
        ]);
    }
}

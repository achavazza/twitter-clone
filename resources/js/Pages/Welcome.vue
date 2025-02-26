<script setup>
import { Head, Link } from '@inertiajs/vue3';
import TwitterLayout from '@/Layouts/TwitterLayout.vue';
import Tweet from '@/Components/Tweet.vue';

</script>

<template>
    <Head title="Welcome" />
    <TwitterLayout>
        <div class="text-white">
            <div class="flex">
                <Tweet :tweet="{
                    name: 'John Doe',
                    handle: '@jode',
                    image: 'https://randomuser.me/api/portraits/men/40.jpg',
                    tweet: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
                    file: '/videos/daisies.mp4',
                    is_video: true,
                    comments: '35',
                    retweets: '54',
                    likes: '88',
                    analytics: '1.2K',
                }" />
            </div>
            <div class="border-b border-b-gray mt-2"></div>
        </div>
    </TwitterLayout>
</template>

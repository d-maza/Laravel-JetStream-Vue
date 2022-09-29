<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import Welcome from "@/Components/Welcome.vue";
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-cyan-800 leading-tight">
                Presentación
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <Welcome />
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div class="text-center text-xl">
                    <p class="text-center text-orange-900 text-3xl mb-2">
                        Laravel 9 JetStream Vue
                    </p>
                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/videoseries?list=PLB5SYDBi8M3FBx5Ff-1fGug4iHMDiq5uo"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div>
                    <p class="text-center text-cyan-900 text-3xl mb-2">
                        Laravel 9
                    </p>

                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/rQZmhqah0PQ"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div>
                    <p class="text-center text-blue-700 text-3xl mb-2">
                        MySQL PHP
                    </p>

                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/I75CUdSJifw"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div>
                    <p class="text-center text-red-700 text-3xl mb-2">
                        MongoDB
                    </p>

                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/nlOWsnO-d7Q"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div>
                    <p class="text-center text-yellow-700 text-3xl mb-2">
                        Power Shell
                    </p>

                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/videoseries?list=PLn98b7UTDjb1h5_LCHXyeJR8nrPeTaSBM"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 sm:px-24 border-b border-gray-200">
                <div>
                    <p class="text-center text-neutral-700 text-3xl mb-2">
                        NodeJS
                    </p>

                    <div class="lg:max-w-7xl px-40">
                        <iframe
                            width="660"
                            height="415"
                            src="https://www.youtube.com/embed/videoseries?list=PLPl81lqbj-4IEnmCXEJeEXPepr8gWtsl6"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
